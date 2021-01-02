<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{

		if($this->input->post('submit'))
		{
			$data_in['name']=$this->input->post('Name');
			$data_in['mobile']=$this->input->post('MobileNo');
			$data_in['email']=$this->input->post('Email');
			$data_in['message']=$this->input->post('message');
			$data_in['location']=$this->input->post('location');
			$data_in['address']=$this->input->post('address');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');


			$this->common->insertRecord('feedback', $data_in);
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
				$this->email->subject('RUSHABH HONDA - Your Feedback has been received');
				$message=$this->load->view('send_feedback_mail',$data_in,TRUE);
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
				$list = array('it@sevagroup.co.in','smsales@rushabh2w.com','bm@rushabh2w.com');
				
				$this->email->to($list);

				$this->email->subject('RUSHABH HONDA - New Feedback received');
				$message2=$this->load->view('send_feedback_mail_admin',$data_in,TRUE);
				$this->email->message($message2);
				$this->email->send();

				redirect('thank_you');
			}
			redirect('thank_you');
		}

		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'Feedback | Rushabh Honda | Two Wheeler In Nashik';
		$data['pgKeywords'] = 'Product Enquiry of Rushabh Honda Nashik';
		$data['pgDesc'] = 'Rushabh Honda awaits for your valuable response. We strive for best services as a two-wheeler dealer in Nashik for years. We look forward for your feedback.';
		$this->load->view('header',$data);
		$this->load->view('feedback',$data);
		$this->load->view('footer');
	}
}
