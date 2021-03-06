<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genuine_parts extends CI_Controller {

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
		$url = 'https://rushabh2w.com/genuine_parts';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'genuine-parts'; 
		}
		
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Honda Genuine Parts In Nashik | Rushabh Honda | Two Wheeler ';
		$data['pgKeywords'] = '';
		$data['pgDesc'] = 'Honda genuine parts exclusively available at Rushbah Honda. Get your Honda two-wheeler serviced. Save your time by booking your vehicle’s servicing online now.';
		$this->load->view('header',$data);
		$this->load->view('genuine-parts',$data);
		$this->load->view('footer');
	}
}
