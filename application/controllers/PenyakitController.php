<?php
class PenyakitController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		};
        $this->load->model('Penyakit');
        $this->load->library(array('upload', 'image_lib'));
    }

    public function Penyakit()
	{
        $list = $this->Penyakit->getAll();
		$data = array(
			'title' => 'Penyakit - Sistem Pakar Sapi',
            'list' => $list
		);
		$this->template->admin('admin/VPenyakit', $data);
	}

    public function store()
    {
        $param = $_POST;

        $store['nama_penyakit'] = $param['nama_penyakit'];
        $store['det_penyakit']  = $param['det_penyakit'];
        $store['srn_penyakit']  = $param['srn_penyakit'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['gambar'] = $banner;
        };
        $this->Penyakit->insert($store);
        redirect('penyakit');
    }    

    public function ajxGet(){
        $data['filter'] = 'kode_penyakit = '.$_POST['kode_penyakit'];
        echo json_encode($this->Penyakit->get($data));
    }

    public function edit(){
        $param = $_POST;

        $store['nama_penyakit'] = $param['nama_penyakit'];
        $store['det_penyakit']  = $param['det_penyakit'];
        $store['srn_penyakit']  = $param['srn_penyakit'];
        $store['kode_penyakit'] = $param['kode_penyakit'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['gambar']    =$banner;
        };

        $this->Penyakit->update($store);

        redirect('penyakit');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Penyakit->delete($dataDelete);
        redirect('penyakit');
    }

    function upload_image(){
        $config['upload_path'] = './uploads/penyakit/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
 
        $this->upload->initialize($config);
        if(!empty($_FILES['file']['name'])){
 
            if ($this->upload->do_upload('file')){
                $gbr = $this->upload->data();

                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./uploads/penyakit/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= true;
                // $config['quality']= '100%';
                // $config['width']= 600;
                // $config['height']= 400;
                $config['new_image']= './uploads/penyakit/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];

                return base_url('uploads/penyakit/'.$gambar);
            }                      
        }else{
            return base_url('uploads/penyakit/default.jpg');
        }         
    }
}
