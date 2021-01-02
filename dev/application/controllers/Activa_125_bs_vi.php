<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activa_125_bs_vi extends CI_Controller {

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
		$data['title'] = 'Honda Activa 125 price in Nashik | Rushabh Honda';
		$data['pgKeywords'] = 'Honda activa125 scooter, New Activa125, Honda Scooter, Rushabh Honda Nashik';
		$data['pgDesc'] = 'Available Honda Activa 125 at great prices only at Rushabh Honda. Book from a wide range of Honda Two-wheeler at most reasonable price in Nashik.';
		$this->load->view('header',$data);
		$this->load->view('activa-125-bs-vi',$data);
		$this->load->view('footer');
	}
}
