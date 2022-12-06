<?php
class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		};
        $this->load->model('Admin');
    }

    public function Admin()
	{
        $list = $this->Admin->getAll();
		$data = array(
			'title' => 'Admin - Sistem Pakar Sapi',
            'list' => $list
		);
		$this->template->admin('admin/VAdminPakar', $data);
	}

    public function store()
    {
        $param = $_POST;
        $param['password'] = md5($param['password']);

        $this->Admin->insert($param);
        redirect('admin');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_admin = '.$_POST['id_admin'];
        echo json_encode($this->Admin->get($data));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Admin->update($dataEdit);

        redirect('admin');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Admin->delete($dataDelete);
        redirect('admin');
    }
}
