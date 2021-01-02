<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

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
		$data['title'] = 'Honda Offers | Rushabh Honda | Two Wheeler Dealers In Nashik';
		$data['pgKeywords'] = 'Offers Avialable in Rushabh Honda Branches in Nashik';
		$data['pgDesc'] = 'Honda unbelievable offers available at Rushabh Honda. Available for limited time only! Checkout newest Two-wheeler easily online and book your choice today!';
		$this->load->view('header',$data);
		$this->load->view('offers',$data);
		$this->load->view('footer');
	}
}
