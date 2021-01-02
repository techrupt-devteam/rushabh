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
		$url = 'https://rushabh2w.com/grazia_125';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'grazia-125'; 
		}
		
		
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Honda Grazia price in nashik | Rushabh Honda | Two Wheeler ';
		$data['pgKeywords'] = '';
		$data['pgDesc'] = 'Honda Grazia available in Nashik exclusively at Rushabh Honda at unbelievable price! View more to check out wide range of Honda two-wheeler models easily! ';
		$this->load->view('header',$data);
		$this->load->view('grazia_125',$data);
		$this->load->view('footer');
	}
}
