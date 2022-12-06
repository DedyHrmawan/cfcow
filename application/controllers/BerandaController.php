<?php
class BerandaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		if (isset($_SESSION['logged_in']) == TRUE) {
			redirect('home');
		};
        $this->load->model('Home');
    }

    public function Beranda()
	{        
        $gejala         = $this->Home->getGejala();
        $penyakit       = $this->Home->getPenyakit();
        $pengetahuan    = $this->Home->getPengetahuan();
        $admin          = $this->Home->getAdmin();
		$data = array(
			'title' => 'Beranda - Sistem Pakar Sapi',
            'gejala' => $gejala,
            'penyakit' => $penyakit,
            'pengetahuan' => $pengetahuan,
            'admin' => $admin
		);
		$this->template->depan('depan/VBeranda', $data);
	}

}
