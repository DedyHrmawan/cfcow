<?php
class PendaftaranController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();    
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		}; 
        $this->load->model('User'); 
        $this->load->model('Admin');
    }
    
	public function Pendaftaran()
	{		
        $list = $this->User->getPendaftar();
		$data = array(
			'title' => 'List Pendaftaran - Sistem Pakar Sapi',
            'list' => $list
		);
		$this->template->admin('admin/VPendaftaran', $data);
	}

    public function terima()
    {
        $param = $_POST;
        $param['status'] = 2;

        $user = $this->User->getDaftar(['filter' => ['id_pendaftaran' => $param['id_pendaftaran']]]);
        $storeAdmin['username'] = $user[0]->username;
        $storeAdmin['password'] = $user[0]->password;
        $storeAdmin['nama_lengkap'] = $user[0]->nama_lengkap;

        $this->User->updateDaftar($param);
        $this->Admin->insert($storeAdmin);
        redirect('pendaftaran');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_pendaftaran = '.$_POST['id'];
        echo json_encode($this->User->getDaftar($data));
    }

    public function tolak(){
        $param = $_POST;
        $param['status'] = 3;

        $this->User->updateDaftar($param);
        redirect('pendaftaran');
    }

    public function hapus(){
        $dataDelete = $_POST;
        $this->User->deleteDaftar($dataDelete);
        redirect('pendaftaran');
    }
    
}
