<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');        
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
}
