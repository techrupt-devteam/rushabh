<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username')){
			$data['username'] = $this->session->userdata('username');
			$data['title'] = 'Rushabh Honda | Two Wheeler';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar',$data);
			$this->load->view('admin/index',$data);
			$this->load->view('admin/footer');
		}else{
			$data['title'] = 'Rushabh Honda | Two Wheeler';
			$this->load->view('admin/secure',$data);
		}
		
		
		
	}
}
