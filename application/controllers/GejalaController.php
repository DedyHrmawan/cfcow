<?php
class GejalaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		};
        $this->load->model('Gejala');
    }

    public function Gejala()
	{
        $list = $this->Gejala->getAll();
		$data = array(
			'title' => 'Gejala - Sistem Pakar Sapi',
            'list' => $list
		);
		$this->template->admin('admin/VGejala', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Gejala->insert($param);
        redirect('gejala');
    }    

    public function ajxGet(){
        $data['filter'] = 'kode_gejala = '.$_POST['kode_gejala'];
        echo json_encode($this->Gejala->get($data));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Gejala->update($dataEdit);

        redirect('gejala');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Gejala->delete($dataDelete);
        redirect('gejala');
    }
}
