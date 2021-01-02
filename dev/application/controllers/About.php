<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

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
		$data['title'] = 'About Us | Rushabh Honda | Two Wheeler Dealers In Nashik';
		$data['pgKeywords'] = 'Honda Showroom In Nashik | Nashik Honda Showroom';
		$data['pgDesc'] = 'Rushabh Honda is Honda Two wheeler Dealer with its workshop locations at Mumbai Naka, Uttam Nagar, Mhasrul, Ambad and Indira Nagar. Book now!';
		$this->load->view('header',$data);
		$this->load->view('about',$data);
		$this->load->view('footer');
	}
}
