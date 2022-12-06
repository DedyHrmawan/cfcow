<?php
class PengetahuanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		};
        $this->load->model('Pengetahuan');
    }

    public function Pengetahuan()
	{
        $list = $this->Pengetahuan->getAll();
		$data = array(
			'title' => 'Pengetahuan - Sistem Pakar Sapi',
            'list' => $list
		);
		$this->template->admin('admin/pengetahuan/VPengetahuan', $data);
	}

	public function Tambah_Pengetahuan()
	{
        $penyakit = $this->Pengetahuan->getPenyakit();
        $gejala = $this->Pengetahuan->getGejala();

		$data = array(
			'title' => 'Tambah Pengetahuan - Sistem Pakar Sapi',
            'penyakit' => $penyakit,
            'gejala' => $gejala
		);
		$this->template->admin('admin/pengetahuan/VTambahPengetahuan', $data);
	}
	
	public function Edit_Pengetahuan($param)
	{        
        $penyakit = $this->Pengetahuan->getPenyakit();
        $gejala = $this->Pengetahuan->getGejala();
        
        $data['filter'] = 'kode_pengetahuan = '.$param;
        $pengetahuan = $this->Pengetahuan->get($data);

		$data = array(
			'title' => 'Edit Pengetahuan - Sistem Pakar Sapi',
            'penyakit' => $penyakit,
            'gejala' => $gejala,
            'pengetahuan' => $pengetahuan
		);
		$this->template->admin('admin/pengetahuan/VEditPengetahuan', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Pengetahuan->insert($param);
        redirect('pengetahuan');
    }    

    public function ajxGet(){
        $data['filter'] = 'kode_pengetahuan = '.$_POST['kode_pengetahuan'];
        echo json_encode($this->Pengetahuan->get($data));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Pengetahuan->update($dataEdit);

        redirect('pengetahuan');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Pengetahuan->delete($dataDelete);
        redirect('pengetahuan');
    }
}
