<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genuine_parts extends CI_Controller {

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
		$data['title'] = 'Honda Genuine Parts In Nashik | Rushabh Honda | Two Wheeler ';
		$data['pgKeywords'] = '';
		$data['pgDesc'] = 'Honda genuine parts exclusively available at Rushbah Honda. Get your Honda two-wheeler serviced. Save your time by booking your vehicle’s servicing online now.';
		$this->load->view('header',$data);
		$this->load->view('genuine-parts',$data);
		$this->load->view('footer');
	}
}
