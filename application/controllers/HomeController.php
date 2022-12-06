<?php
class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		};
        $this->load->model('Home');
    }

    public function Home()
	{        
        $gejala         = $this->Home->getGejala();
        $penyakit       = $this->Home->getPenyakit();
        $pengetahuan    = $this->Home->getPengetahuan();
        $admin          = $this->Home->getAdmin();
		$data = array(
			'title' => 'Home - Sistem Pakar Sapi',
            'gejala' => $gejala,
            'penyakit' => $penyakit,
            'pengetahuan' => $pengetahuan,
            'admin' => $admin
		);
		$this->template->admin('admin/VBeranda', $data); 
	}

}
