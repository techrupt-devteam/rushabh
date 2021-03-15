<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_an_appointment extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{

		if($this->input->post('submit'))
		{
			$data_in['name']=$this->input->post('full_name');
			$data_in['email']=$this->input->post('email');
			$data_in['mobile']=$this->input->post('phone_no');
			$data_in['location']=$this->input->post('location');
			$data_in['appoinment_date']=$this->input->post('date');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');	

			$this->common->insertRecord('book_appointment', $data_in);	
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
				$this->email->from('it@rushabh2w.com', 'rushabh');//it@rushabh2w.com
				$this->email->to($data_in['email']);
				$this->email->subject('RUSHABH HONDA - Your Request has been received');
				$message=$this->load->view('send_mail_bookappointment',$data_in,TRUE);
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
				$list = array('bm@rushabh2w.com', 'it@sevagroup.co.in');

				$this->email->to($list);
				$this->email->subject('RUSHABH HONDA - New Enquiry received');
				$message=$this->load->view('send_mail_bookappointment_admin',$data_in,TRUE);
				$this->email->message($message);
				$this->email->send();
			
				redirect('thank_you');
			}
			
		}

		$data['canonical'] = '';
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Bodyshop in Nashik | Honda Bike Loan - Rushabh Honda';
		$data['pgKeywords'] = 'Honda Bike Finance in Nashik. We offer the Cheapest Honda Bike Finance services. Get Honda Car Loan in Bike at Cheapest Interest Rate from Rushabh Honda.';
		$data['pgDesc'] = 'Honda Genuine Engine Oil';
		$this->load->view('header',$data);
		$this->load->view('book-an-appointment',$data);
		$this->load->view('footer');
	}
}
