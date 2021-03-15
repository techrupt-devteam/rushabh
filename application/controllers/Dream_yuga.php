<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dream_yuga extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }
    
	public function index()
	{
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Dream Yuga | Rushabh Honda';
		$data['pgKeywords'] = 'Dream Yuga, Stylish Bike, Rushabh Honda';
		$data['pgDesc'] = 'Honda is presenting Dream Yuga new bike in India with more stylish and good mileage.';
		$this->load->view('header',$data);
		$this->load->view('dream-yuga',$data);
		$this->load->view('footer');
	}
}
