<?php
class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		};
        $this->load->model('Pengguna');
    }

    public function Pengguna()
	{		
        $list = $this->Pengguna->getAll();
		$data = array(
			'title' => 'Daftar Pengguna - Sistem Pakar Sapi',
            'list' => $list
		);
		$this->template->admin('admin/VUser', $data);
	}

    public function store()
    {
        $param = $_POST;
        $param['password'] = md5($param['password']);

        $this->Pengguna->insert($param);
        redirect('pengguna');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_user = '.$_POST['id_user'];
        echo json_encode($this->Pengguna->get($data));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Pengguna->update($dataEdit);

        redirect('pengguna');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Pengguna->delete($dataDelete);
        redirect('pengguna');
    }
}
