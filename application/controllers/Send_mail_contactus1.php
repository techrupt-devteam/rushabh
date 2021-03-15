<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_mail_contactus1 extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
	   
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Thank you | Rushabh Honda';
		$data['pgKeywords'] = 'Honda Insurance, Nashik';
		$data['pgDesc'] = 'Thank you for contact Us';
		$this->load->view('header',$data);
		$this->load->view('send-mail-contactus1',$data);
		$this->load->view('footer');
	}
}
