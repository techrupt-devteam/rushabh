<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cd_110_dream extends CI_Controller {

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
		$url = 'https://rushabh2w.com/cd_110_dream';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'cd-110-dream'; 
		}
		
		
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Honda CD dream 110 price in Nashik | Rushabh Honda';
		$data['pgKeywords'] = 'Honda CD110 Dream, Bike';
		$data['pgDesc'] = 'Review Honda CD Dream 110 price in Nashik easily on Rushabh Honda. Look for best Honda models with specifications mentioned. View more!';
		$this->load->view('header',$data);
		$this->load->view('cd-110-dream',$data);
		$this->load->view('footer');
	}
}
