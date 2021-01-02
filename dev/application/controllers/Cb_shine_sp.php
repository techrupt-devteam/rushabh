<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cb_shine_sp extends CI_Controller {

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
		$data['title'] = 'CB Shine SP 125 | Rushabh Honda';
		$data['pgKeywords'] = 'Honda CB Shine, Bike';
		$data['pgDesc'] = 'Honda has lunched new super stylish bike CB Shine SP with more powerful engine, good specification and mileage. Nashik';
		$this->load->view('header',$data);
		$this->load->view('cb-shine-sp',$data);
		$this->load->view('footer');
	}
}
