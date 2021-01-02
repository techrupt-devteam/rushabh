<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_whatsapp_message extends CI_Controller {

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
		$data['title'] = 'Rushabh Honda | Two Wheeler Honda Showroom In Nashik';
		$data['pgKeywords'] = 'new X Blade bike, First-in-class Robo-Face LED headlamps Bike, Nashik';
		$data['pgDesc'] = 'XBlade bike is available in Nashik';
		$this->load->view('header',$data);
		$this->load->view('send_whatsapp_message',$data);
		$this->load->view('footer');
	}
}
