<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Honda_shield extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
		if($this->input->post('submit'))
		{
			$to_mobile = $this->input->post('mobileno');

			$data_in['modelid']=$this->input->post('modelid');
			$data_in['scheme']=$this->input->post('scheme');
			/*$data_in['branch']=$this->input->post('branch');*/
			$data_in['name']=$this->input->post('name');
			$data_in['email']=$this->input->post('email');
			$data_in['mobileno']=$this->input->post('mobileno');
			$data_in['location']=$this->input->post('location');
			$data_in['description']=$this->input->post('description');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');

			$this->common->insertRecord('enquiry', $data_in);
		
			$id = $this->db->insert_id();
			{
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
					$this->email->subject('RUSHABH HONDA - Your Request has been received');
					
					$message=$this->load->view('send_mail_hondasheild',$data_in,TRUE);
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
					$list = array('bm@rushabh2w.com');
					//$list = array('pagarelaxmi@gmail.com');

					//$list = array('pagarelaxmi@gmail.com');
					$this->email->to($list);

					$this->email->subject('RUSHABH HONDA - New Enquiry received');
					$message2=$this->load->view('send_mail_hondasheild_admin',$data_in,TRUE);
					$this->email->message($message2);
					$this->email->send();

					//$this->common->WhatsAppMsgHondaShield($id, $to_mobile);
					redirect('thank-you');
			}
		}
        
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

			redirect('thank-you');		
		}
		/*Subscription close*/
        
        $current_url = current_url();
		$url = 'https://rushabh2w.com/honda_shield';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'honda-shield'; 
		}
		
		
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Honda Shield | Rushabh Honda | Two Wheeler In Nashik';
		$data['pgKeywords'] = 'Honda Shield';
		$data['pgDesc'] = 'Honda Shield available at Rushabh Honda in Nashik. Get prominent Two-wheeler models at reasonable prices. View Inventory today!';
		$this->load->view('header',$data);
		$this->load->view('honda-shield',$data);
		$this->load->view('footer');
	}
}
