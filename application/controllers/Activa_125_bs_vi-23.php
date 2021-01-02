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
	    $data['canonical'] = '';
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Activa 125 BS-VI | Rushabh Honda';
		$data['pgKeywords'] = 'Honda activa125 scooter, New Activa125, Honda Scooter, Rushabh Honda Nashik';
		$data['pgDesc'] = 'Honda has lunched new Scooter Activa 125cc HET BS-VI engine with more good specification, Stylish colors and mileage.';
		$this->load->view('header',$data);
		$this->load->view('activa-125-bs-vi',$data);
		$this->load->view('footer');
	}
}
