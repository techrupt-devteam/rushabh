<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cb_hornet_160r extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }
    
	public function index()
	{
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'CB Hornet 160R | Rushabh Honda';
		$data['pgKeywords'] = 'CB Hornet 160R bike, stylish bike, Nashik';
		$data['pgDesc'] = 'Honda CB Hornet 160R is the 160cc bike launched by Honda.';
		$this->load->view('header',$data);
		$this->load->view('cb-hornet-160r',$data);
		$this->load->view('footer');
	}
}
