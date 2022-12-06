<?php
class KeteranganController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('/');
		};
        $this->load->model('Keterangan');
        $this->load->library(array('upload', 'image_lib'));
    }

    public function PostKeterangan()
	{        
        $list = $this->Keterangan->getAll();
		$data = array(
			'title' => 'Post Keterangan - Sistem Pakar Sapi',
            'list' => $list
		);
		$this->template->admin('admin/VPostKeterangan', $data);
	}

    public function store()
    {
        $param = $_POST;
        
        $store['nama_post'] = $param['post_nama'];
        $store['det_post']  = $param['post_det'];
        $store['srn_post']  = $param['post_srn'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['gambar'] = $banner;
        };
        $this->Keterangan->insert($store);
        redirect('postketerangan');
    }    

    public function ajxGet(){
        $data['filter'] = 'kode_post = '.$_POST['kode_post'];
        echo json_encode($this->Keterangan->get($data));
    }

    public function edit(){
        $param = $_POST;

        $store['nama_post'] = $param['post_nama'];
        $store['det_post']  = $param['post_det'];
        $store['srn_post']  = $param['post_srn'];
        $store['kode_post'] = $param['kode_post'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['gambar']    =$banner;
        };

        $this->Keterangan->update($store);

        redirect('postketerangan');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Keterangan->delete($dataDelete);
        redirect('postketerangan');
    }

    function upload_image(){
        $config['upload_path'] = './uploads/post/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
 
        $this->upload->initialize($config);
        if(!empty($_FILES['file']['name'])){
 
            if ($this->upload->do_upload('file')){
                $gbr = $this->upload->data();

                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./uploads/post/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= true;
                // $config['quality']= '100%';
                // $config['width']= 600;
                // $config['height']= 400;
                $config['new_image']= './uploads/post/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];

                return base_url('uploads/post/'.$gambar);
            }                      
        }else{
            return base_url('uploads/post/default.jpg');
        }         
    }
}
