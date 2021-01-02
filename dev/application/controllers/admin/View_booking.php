<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_booking extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username')){
			$data['username'] = $this->session->userdata('username');
			$data['title'] = 'Rushabh Honda | Two Wheeler';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar',$data);
			$this->load->view('admin/view_booking',$data);
			$this->load->view('admin/footer');
		}else{
			$data['title'] = 'Rushabh Honda | Two Wheeler';
			$this->load->view('admin/secure',$data);
		}
		
		
		
	}
}
