<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nutridock_failed extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
		//$this->load->view('header',$data);
		$this->load->view('nutridock_failed');
		//$this->load->view('footer');
	}

  
}
