<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shine_disc_bsvi extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }
    
	public function index()
	{
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
		
		
		$data['canonical'] = ''; 
		
		//$data['canonical'] = 'cb-unicorn'; 
		$current_url = current_url();
		$url = 'https://rushabh2w.com/shine_disc_bsvi';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'shine-disc-bsvi'; 
		}
		
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Shine Disc Price in Nashik | Rushabh Honda | Two Wheeler ';
		$data['pgKeywords'] = 'Honda CB Shine, Bike, Nashik';
		$data['pgDesc'] = 'Honda Shine Disc available at best price in Nashik at Rushabh Honda. Get prominent Two-wheeler models at reasonable prices. View Inventory today!';
		$this->load->view('header',$data);
		$this->load->view('shine-disc-bsvi',$data);
		$this->load->view('footer');
	}
}
