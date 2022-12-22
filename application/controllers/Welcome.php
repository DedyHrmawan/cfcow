<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	// admin 
	public function UbahPassword()
	{
		if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		};
		$data = array(
			'title' => 'Ubah Password - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/VUbahPassword', $data);
	}

	//depan
	public function Login()
	{		
        if (isset($_SESSION['logged_in']) == TRUE) {
			redirect('home');
		};
		$data = array(
			'title' => 'Login - Sistem Pakar Sapi'
		);
		$this->template->depan('depan/VLogin', $data);
	}

	// bantuan 
	public function Bantuan()
	{		
		$data = array(
			'title' => 'Bantuan - Sistem Pakar Sapi'
		);
		$this->template->depan('depan/VBantuan', $data);
	}

	public function Tentang()
	{		
		$data = array(
			'title' => 'Tentang - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/VTentang', $data);
	}

	public function About()
	{		
		$data = array(
			'title' => 'Tentang - Sistem Pakar Sapi'
		);
		$this->template->depan('depan/VAbout', $data);
	}

	public function RegistPengguna()
	{		
		$data = array(
			'title' => 'Daftar Pengguna - Sistem Pakar Sapi'
		);
		$this->template->depan('depan/VDaftarUser', $data);
	}

	public function Blank()
	{		
		$data = array(
			'title' => 'Sistem Pakar Sapi'
		);
		$this->template->depan('depan/VBlank', $data);
	}

	//admin
	public function Pengguna()
	{		
		$data = array(
			'title' => 'Daftar Pengguna - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/VUser', $data);
	}
	
}
