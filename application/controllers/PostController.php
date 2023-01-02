<?php
class PostController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE){
            $this->session->set_flashdata('error_login', 'Mohon login terlebih dahulu!');
            redirect('login');
        }
        $this->load->model('Keterangan');
    }

    public function Keterangan()
	{
        $list = $this->Keterangan->getAll();
		$data = array(
			'title' => 'Keterangan - Sistem Pakar Sapi',
            'list' => $list
		);
		$this->template->depan('depan/VKeterangan', $data);
	}

    public function ajxGet(){
        $data['filter'] = 'kode_post = '.$_POST['kode_post'];
        echo json_encode($this->Keterangan->get($data));
    }
}
