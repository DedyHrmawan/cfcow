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
	public function Beranda()
	{
		$data = array(
			'title' => 'Beranda - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/VBeranda', $data);
	}

	public function Admin()
	{
		$data = array(
			'title' => 'Admin - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/VAdminPakar', $data);
	}

	public function Penyakit()
	{
		$data = array(
			'title' => 'Penyakit - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/VPenyakit', $data);
	}

	public function Gejala()
	{
		$data = array(
			'title' => 'Gejala - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/VGejala', $data);
	}

	public function Pengetahuan()
	{
		$data = array(
			'title' => 'Pengetahuan - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/pengetahuan/VPengetahuan', $data);
	}

	public function Tambah_Pengetahuan()
	{
		$data = array(
			'title' => 'Tambah Pengetahuan - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/pengetahuan/VTambahPengetahuan', $data);
	}
	
	public function Edit_Pengetahuan()
	{
		$data = array(
			'title' => 'Edit Pengetahuan - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/pengetahuan/VEditPengetahuan', $data);
	}

	public function PostKeterangan()
	{
		$data = array(
			'title' => 'Post Keterangan - Sistem Pakar Sapi'
		);
		$this->template->admin('admin/VPostKeterangan', $data);
	}
}
