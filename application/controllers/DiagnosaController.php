<?php
class DiagnosaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gejala');
    }

	public function Diagnosa()
	{
        $gejala = $this->Gejala->GetAll();
        $kondisi = $this->Gejala->getKondisi();
		$data = array(
			'title' => 'Diagnosa - Sistem Pakar Sapi',
            'gejala' => $gejala,
            'kondisi' => $kondisi
		);
		$this->template->depan('depan/VDiagnosa', $data);
	}

    public function ajxGet(){
        $data['filter'] = 'kode_post = '.$_POST['kode_post'];
        echo json_encode($this->Keterangan->get($data));
    }

    public function hitung(){        
        $arbobot = array('0', '1', '0.8', '0.6', '0.4', '0.2', '0');
        $argejala = array();
  
        for ($i = 0; $i < count($_POST['kondisi']); $i++) {
            $arkondisi = explode("_", $_POST['kondisi'][$i]);
            if (strlen($_POST['kondisi'][$i]) > 1) {
                $argejala += array($arkondisi[0] => $arkondisi[1]);
            }
        }
  
        $rpenyakit = $this->Gejala->getPenyakit();
        $arpenyakit = array();
        
        foreach($rpenyakit as $item){
            $cftotal_temp = 0;
            $cf = 0;

            $this->db->select('*');
            $this->db->where('kode_penyakit', $item['kode_penyakit']);
            $rgejala = $this->db->get('basis_pengetahuan')->result_array();
            
            $cflama = 0;
            foreach($rgejala as $igejala){
                $arkondisi = explode("_", $_POST['kondisi'][0]);
                $gejala = $arkondisi[0];

                for ($i = 0; $i < count($_POST['kondisi']); $i++) {
                    $arkondisi = explode("_", $_POST['kondisi'][$i]);
                    $gejala = $arkondisi[0];
                    if ($igejala['kode_gejala'] == $gejala) {
                        $cf = ($igejala['mb'] - $igejala['md']) * $arbobot[$arkondisi[1]];
                        if (($cf >= 0) && ($cf * $cflama >= 0)) {
                            $cflama = $cflama + ($cf * (1 - $cflama));
                        }
                        if ($cf * $cflama < 0) {
                            $cflama = ($cflama + $cf) / (1 - Math . Min(Math . abs($cflama), Math . abs($cf)));
                        }
                        if (($cf < 0) && ($cf * $cflama >= 0)) {
                            $cflama = $cflama + ($cf * (1 + $cflama));
                        }
                    }
                }
            }
            if ($cflama > 0) {
                $arpenyakit += array($item['kode_penyakit'] => number_format($cflama, 4));
            }
        }

        arsort($arpenyakit);

        $inpgejala = serialize($argejala);
        $inppenyakit = serialize($arpenyakit);

        $np1 = 0;
        foreach ($arpenyakit as $key1 => $value1) {
            $np1++;
            $idpkt1[$np1] = $key1;
            $vlpkt1[$np1] = $value1;
        }

        $insertData = array(
            'gejala'  => $inpgejala,
            'penyakit'  => $inppenyakit,
            'hasil_id'  => $idpkt1[1],
            'hasil_nilai'  => $vlpkt1[1]
        );
        $this->db->insert('hasil', $insertData);
        $id = $this->db->insert_id();

        redirect('detailriwayat/'.$id);
    }
}
