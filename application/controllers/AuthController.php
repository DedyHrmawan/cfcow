<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');   
        $this->load->library(array('upload', 'image_lib'));  
    }

    public function auth()
    {
        $data = $_POST;
        $user = $this->User->get(['filter' => ['username' => $data['username']]]);
        $pass=md5($data['password']);
        if($user != null){
            if($pass == $user[0]->password){    
                $newdata = array(
                    'username'      => $user[0]->username,
                    'password'      => $user[0]->password,
                    'nama_lengkap'  => $user[0]->nama_lengkap,
                    'logged_in' => TRUE
                );   
                $this->session->set_userdata($newdata);                   
                redirect('home');
            }else{
                $this->session->set_flashdata('error_login', 'Username atau password salah!');  
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('error_login', 'User belum terdaftar!'); 
            redirect('login');
        }
    }    

    public function logout(){
        $this->session->sess_destroy();

        redirect('/');
    }

    public function ubahPassword(){
        $data = $_POST;
        
        $user = $this->User->get(['filter' => ['username' => $_SESSION['username']]]);
        $data['password_lama'] = md5($data['password_lama']);

        if($data['password_lama'] != $user[0]->password){
            $this->session->set_flashdata('error_password', 'Password lama anda salah!');    
            redirect('ubahpassword');
        }else if($data['password_baru1'] != $data['password_baru2']){
            $this->session->set_flashdata('error_password', 'Password baru anda tidak cocok!');   
            redirect('ubahpassword');
        }else{
            $ubah['username'] = $_SESSION['username'];
            $ubah['password'] = md5($data['password_baru2']);
            $this->User->update($ubah);
            $this->session->set_flashdata('success_password', 'Berhasil mengubah password!');  
            redirect('ubahpassword');
        }
    }

    public function Daftar()
	{		
		$data = array(
			'title' => 'Daftar - Sistem Pakar Sapi'
		);
		$this->template->depan('depan/VDaftar', $data);
	}

    public function store()
	{		
        $param = $_POST;

        $user = $this->User->get(['filter' => ['username' => $param['username']]]);
        $userDaftar = $this->User->getDaftar(['filter' => ['username' => $param['username']]]);
        if($user != NULL || $userDaftar != NULL){
            $this->session->set_flashdata('failed_register','Username telah digunakan!');
            redirect('daftar');
        }

        $store['username']      = $param['username'];
        $store['password']      = md5($param['password']);
        $store['nama_lengkap']  = $param['nama_lengkap'];
        $store['email']         = $param['email'];
        $store['telepon']       = $param['telepon'];
        $store['pesan']         = $param['pesan'];
        $store['status']        = 1;

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['dokumen'] = $banner;
        };
        $this->User->insert($store);
        $this->session->set_flashdata('success_register','Permohonan Berhasil Diajukan!');

        redirect('daftar');
	}

    function upload_image(){
        $config['upload_path'] = './assets/media/img/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
 
        $this->upload->initialize($config);
        if(!empty($_FILES['file']['name'])){
 
            if ($this->upload->do_upload('file')){
                $gbr = $this->upload->data();

                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/media/img/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= true;
                // $config['quality']= '100%';
                // $config['width']= 600;
                // $config['height']= 400;
                $config['new_image']= './assets/media/img/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];

                return base_url('assets/media/img/'.$gambar);
            }                      
        }else{
            return base_url('assets/media/img/default.jpg');
        }         
    }
}
