<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grazia_125 extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Rushabh Honda | Two Wheeler Honda Showroom In Nashik';
		$data['pgKeywords'] = '';
		$data['pgDesc'] = '';
		$this->load->view('header',$data);
		$this->load->view('grazia_125',$data);
		$this->load->view('footer');
	}
}
