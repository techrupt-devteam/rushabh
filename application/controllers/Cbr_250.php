<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbr_250 extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }
    
	public function index()
	{
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'CBR 250R | Rushabh Honda';
		$data['pgKeywords'] = 'CBR250R sport bike, CBR150R Bike, Nashik';
		$data['pgDesc'] = 'The Honda CBR250R sport bike is available in India with 250cc engine.';
		$this->load->view('header',$data);
		$this->load->view('cbr-250',$data);
		$this->load->view('footer');
	}
}
