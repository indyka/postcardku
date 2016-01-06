<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('welcome/conten');
		$this->load->view('footer');
	}

	public function uploadbg(){
		$this->load->view('header');
		$this->load->view('welcome/upload');
		$this->load->view('footer');
	}

	public function do_uploadbg(){
		$config = array(
			'upload_path' => base_url()."assets/uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "3000",
			'max_width' => "3000"
		);	

		$this->load->library('upload', $config);

		if($this->upload->do_upload()){
			$data = array('upload_data' => $this->upload->data());
			echo "horray";//$this->load->view('upload_success',$data);
		}

		else{
			$error = array('error' => $this->upload->display_errors());
			echo "jancok";//$this->load->view('file_view', $error);
		}
	}

}
