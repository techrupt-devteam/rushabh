<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thank_you extends CI_Controller {

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
		$data['title'] = 'Thank you | Rushabh Honda';
		$data['pgKeywords'] = 'Honda Insurance, Nashik';
		$data['pgDesc'] = 'Thank you for contact Us';
		$this->load->view('header',$data);
		$this->load->view('thank-you',$data);
		$this->load->view('footer');
	}
}
