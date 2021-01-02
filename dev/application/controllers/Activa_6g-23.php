<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activa_6g extends CI_Controller {

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
		$data['title'] = 'Activa 6G | Rushabh Honda';
		$data['pgKeywords'] = 'Honda Activa6G, two wheeler, New Activa6G, scooter, Rushabh Honda Nashik';
		$data['pgDesc'] = 'Honda has launched new Activa 6G with latest technological innovation. It is equipped with the new eSP technology along with incredible new features like the revolutionary silent start, telescopic suspension, double lid external fuel fill,12 inch front wheel and 10%^ more mileage.';
		$this->load->view('header',$data);
		$this->load->view('activa-6g',$data);
		$this->load->view('footer');
	}
}
