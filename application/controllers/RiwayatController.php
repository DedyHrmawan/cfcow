<?php
class RiwayatController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Riwayat');
    }

    public function Riwayat()
	{
        $riwayat = $this->Riwayat->getAll();
        $dataChart = $this->Riwayat->getChart();
		$data = array(
			'title' => 'Riwayat - Sistem Pakar Sapi',
            'riwayat' => $riwayat,
            'dataChart' => $dataChart,
		);
		$this->template->depan('depan/VRiwayat', $data);
	}
	public function DetailRiwayat($param)
	{
        $hasil = $this->Riwayat->get($param);

        foreach($hasil as $rhasil){
            $arpenyakit = unserialize($rhasil->penyakit);
            $argejala = unserialize($rhasil->gejala);
        };

        $np1 = 0;
        foreach ($arpenyakit as $key1 => $value1) {
            $np1++;
            $idpkt1[$np1] = $key1;
            $vlpkt1[$np1] = $value1;
        }
        
        $kondisi = $this->Riwayat->getKondisi();
        foreach($kondisi as $rkondisi){
            $arkondisitext[$rkondisi->id] = $rkondisi->kondisi;
        }

        $penyakit = $this->Riwayat->getPenyakit();
        foreach($penyakit as $rpkt){
            $arpkt[$rpkt['kode_penyakit']]  = $rpkt['nama_penyakit'];
        }

		$data = array(
			'title' => 'Detail Riwayat - Sistem Pakar Sapi',
            'argejala' => $argejala,
            'arpenyakit' => $arpenyakit,
            'arkondisitext' => $arkondisitext,
            'hasil' => $hasil,
            'arpkt' => $arpkt
		);
		$this->template->depan('depan/VDetailRiwayat', $data);
	}
}
