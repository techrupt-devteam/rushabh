<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
		if($this->input->post('submit'))
		{
			$to_mobile = $this->input->post('phone_no');
			$data_in['conditions']=$this->input->post('conditions');

			if($data_in['conditions']=='on'){
				$data_in['name']=$this->input->post('full_name');
				$data_in['email']=$this->input->post('email');
				$data_in['phone_no']=$this->input->post('phone_no');
				$data_in['city']=$this->input->post('city');
				$data_in['annual_income']=$this->input->post('annual_income');
				$data_in['purchase_time']=$this->input->post('purchase_time');
				$data_in['message']=$this->input->post('s_message');
				$data_in['conditions'] = 'On';
				$data_in['location']=$this->input->post('location');
				
				$data_in['created_at']	= 	date('Y-m-d H:i:s');

				$this->common->insertRecord('finance', $data_in);
				$id = $this->db->insert_id();

				if($id)
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
					$this->email->subject('Rushubh IT Support');
					$message=$this->load->view('send_mail_finance',$data_in,TRUE);
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

					$list = array('it@sevagroup.co.in','finance@rushabh2w.com');
					//$list = array('pagarelaxmi@gmail.com');
					$this->email->to($list);
					$this->email->subject('Enquiry for Finance');
					$message1=$this->load->view('send_mail_finance_admin',$data_in,TRUE);
					$this->email->message($message1);
					$this->email->send();
					
					$this->common->WhatsAppMsgFinance($id, $to_mobile);

					redirect('thank-you');
				}

			}else{
				print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'finance";
					</script>';	
					return false;
			}
			redirect('thank-you');
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

        $data['canonical'] = 'finance'; 
        
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Finance | Rushabh Honda | Two Wheeler In Nashik';
		$data['pgKeywords'] = 'Honda Bike Finance in Nashik. We offer the Cheapest Honda Bike Finance services. Get Honda Car Loan in Bike at Cheapest Interest Rate from Rushabh Honda.';
		$data['pgDesc'] = 'Rushabh Honda offers you Honda Two Wheeler Finance. Also, checkout newest Honda Two-wheeler easily online and book your favorite model today. Click for more! ';
		$this->load->view('header',$data);
		$this->load->view('finance',$data);
		$this->load->view('footer');
	}
}
