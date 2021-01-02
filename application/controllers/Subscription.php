<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
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
		//redirect('thank-you');		
	}
	
	
}
