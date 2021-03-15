<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empty_page extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }
	public function index()
	{
	    //$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
	    $data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'Contact Us | Rushabh Honda | Two Wheeler Dealers In Nashik';
		$data['pgKeywords'] = 'Honda bike dealer in Mumbai, Honda bike dealers in Mumbai, Honda bike dealers in Mumbai Naka,Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik. Honda bike dealers in Mumbai Naka, authorised Honda bike, Honda bike showroom Indira Nagar, Honda bike showroom in  Muambai Naka,Indira Nagar, Meri Mhasrul, Cidco Nashik, Honda Bike, Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealer in Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealers in Nashik';
		$data['pgDesc'] = 'Contact Rushbah Honda easily online or call at 8888877649. Also, checkout newest Honda Two-wheeler easily online and book your favorite model today!';
		
		$current_url = current_url();
		$url = 'https://rushabh2w.com/cb_unicorn';
		if($url == $current_url){
		    redirect('page-not-found');
		}else {
		    $data['canonical'] = 'cb-unicorn'; 
		}
		
		
		$this->load->view('header',$data);
		$this->load->view('page-not-found',$data);
		$this->load->view('footer');
	}
}
