<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activa_6g extends CI_Controller {

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
		$current_url = current_url();
		$url = 'https://rushabh2w.com/activa_6g';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'activa-6g'; 
		}
		
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Honda Activa 6g price in Nashik |  Rushabh Honda';
		$data['pgKeywords'] = 'Activa 6g price in nashik | honda activa 6g, Rushabh Honda Nashik';
		$data['pgDesc'] = 'Looking for Honda Activa 6g in Nashik? Here is Rushabh Honda with Hondas best two-wheeler model inventory. Browse today!';
		$this->load->view('header',$data);
		$this->load->view('activa-6g',$data);
		$this->load->view('footer');
	}
}
