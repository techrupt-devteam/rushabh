<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Honda_genuine_engine_oil extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
	    /*Subscription*/
		if($this->input->post('subscription_submit'))
		{
			$data_in['email'] = $this->input->post('email');
			$this->load->library('email');
				$config = array (
				'protocol' => 'mail',
				'mailpath' => '/usr/s; die;bin/sendmail', 
				'mailtype' => 'html',
				'charset'  => 'utf-8',
				'priority' => '1'
			);
			$this->email->initialize($config);
			$this->email->from('it@rushabh2w.com', 'rushabh');
			$this->email->to($data_in['email']);
			$this->email->subject('Subscriber');
			$message=$this->load->view('send_mail_subscribe',$data_in,TRUE);
			$this->email->message($message);
			$this->email->send();

			$this->load->library('email');
				$config = array (
				'protocol' => 'mail',
				'mailpath' => '/usr/s; die;bin/sendmail', 
				'mailtype' => 'html',
				'charset'  => 'utf-8',
				'priority' => '1'
			);
			$this->email->initialize($config);
			$this->email->from('it@rushabh2w.com');

			$list = array('it@rushabh2w.com');//it@rushabh2w.com
			$this->email->to($list);
			$this->email->subject('Subscriber');
			$message1=$this->load->view('send_mail_subscribe_admin',$data_in,TRUE);
			$this->email->message($message1);
			$this->email->send();

			redirect('thank_you');		
		}
		/*Subscription close*/
		
		$current_url = current_url();
		$url = 'https://rushabh2w.com/honda_genuine_engine_oil';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'honda-genuine-engine-oil'; 
		}
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Honda Genuine Engine Oil | Rushabh Honda | Nashik';
		$data['pgKeywords'] = 'Honda Genuine Engine Oil, Rushabh Honda';
		$data['pgDesc'] = 'Available Honda Genuine Oil at Rushabh Honda. Checkout newest Honda Two-wheeler easily online and book your favorite model today. Click for more info!';
		$this->load->view('header',$data);
		$this->load->view('honda-genuine-engine-oil',$data);
		$this->load->view('footer');
	}
}
