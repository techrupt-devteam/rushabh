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
	    
	    $current_url = current_url();
		$url = 'https://rushabh2w.com/thank_you';
		if($url == $current_url){
		    redirect('page-not-found');
		}else {
		    $data['canonical'] = 'thank-you'; 
		}
		
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Thank you | Rushabh Honda';
		$data['pgKeywords'] = 'Honda Insurance, Nashik';
		$data['pgDesc'] = 'Thank you for contact Us';
		$this->load->view('header',$data);
		$this->load->view('thank-you',$data);
		$this->load->view('footer');
	}
}
