<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_e_brochure extends CI_Controller {

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
		$data['title'] = 'Download E Brochure | Rushabh Honda';
		$data['pgKeywords'] = 'Download All type of Honda Bike, Scooter Brochure, Rushabh Honda, Nashik';
		$data['pgDesc'] = 'Download All type of Honda Bike, Scooter Brochure';
		$this->load->view('header',$data);
		$this->load->view('download-e-brochure',$data);
		$this->load->view('footer');
	}
}
