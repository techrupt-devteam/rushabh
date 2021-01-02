<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grazia_125 extends CI_Controller {

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
		$data['title'] = 'Honda Grazia price in nashik | Rushabh Honda | Two Wheeler ';
		$data['pgKeywords'] = '';
		$data['pgDesc'] = 'Honda Grazia available in Nashik exclusively at Rushabh Honda at unbelievable price! View more to check out wide range of Honda two-wheeler models easily! ';
		$this->load->view('header',$data);
		$this->load->view('grazia_125',$data);
		$this->load->view('footer');
	}
}
