<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dio_BS_VI extends CI_Controller {

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
		$url = 'https://rushabh2w.com/dio_BS_VI';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'dio-BS-VI'; 
		}
		
		
		
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Honda DIO BS-VI price in Nashik | Rushabh Honda ';
		$data['pgKeywords'] = 'dio price in nashik | honda dio | DIO BS-VI';
		$data['pgDesc'] = 'Rushabh Honda offers Honda Dio at best price in Nashik. Browse inventory with different Honda two-wheeler models and get your favorite model today!';
		$this->load->view('header',$data);
		$this->load->view('dio-BS-VI',$data);
		$this->load->view('footer');
	}
}
