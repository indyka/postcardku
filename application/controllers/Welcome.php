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

}
