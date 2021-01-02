<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Honda_genuine_engine_oil extends CI_Controller {

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
		$data['title'] = 'Honda Genuine Engine Oil | Rushabh Honda | Nashik';
		$data['pgKeywords'] = 'Honda Genuine Engine Oil, Rushabh Honda';
		$data['pgDesc'] = 'Available Honda Genuine Oil at Rushabh Honda. Checkout newest Honda Two-wheeler easily online and book your favorite model today. Click for more info!';
		$this->load->view('header',$data);
		$this->load->view('honda-genuine-engine-oil',$data);
		$this->load->view('footer');
	}
}
