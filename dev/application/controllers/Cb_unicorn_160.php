<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cb_unicorn_160 extends CI_Controller {

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
		$data['title'] = 'CB Unicorn160 | Rushabh Honda';
		$data['pgKeywords'] = 'Honda CB Unicorn 160 bike, Stylish bike, powerful bike.';
		$data['pgDesc'] = 'Honda CB Unicorn160 bike is available in Nashik with 160 cc power, matte grey finish & great style.';
		$this->load->view('header',$data);
		$this->load->view('cb-unicorn-160',$data);
		$this->load->view('footer');
	}
}
