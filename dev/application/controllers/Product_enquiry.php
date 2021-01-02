<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_enquiry extends CI_Controller {

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
			//$data_in['remarks']=$this->input->post('Remarks');
			$data_in['location']=$this->input->post('location');
			$data_in['address']=$this->input->post('address');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');


			$this->common->insertRecord('contact_us', $data_in);
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

				//it@rushabh2w.com,  it@sevagroup.co.in, finance@rushabh2w.com, prajakta.hoh@gmail.com
				//$header1 = "From:  pagarelaxmi@gmail.com\r\n";//it@rushabh2w.com
				$this->email->to($data_in['email']);
				$this->email->subject('RUSHABH HONDA - Your Request has been received');
				$message=$this->load->view('send_mail',$data_in,TRUE);
				$this->email->message($message);
				$this->email->send();
				//mail ($data_in['email'],"RUSHABH HONDA - Your Request has been received",$message,$header1);


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

				$this->email->subject('RUSHABH HONDA - New Enquiry received');
				$message2=$this->load->view('send_mail_admin',$data_in,TRUE);
				$this->email->message($message2);
				$this->email->send();
				/*$header = "From: it@rushabh2w.com \r\n".
							"CC: radhikapmalik@gmail.com". "\r\n" .
							"CC: it@sevagroup.co.in". "\r\n" .
							"CC: smsales@rushabh2w.com". "\r\n" .
							"CC: bm@rushabh2w.com". "\r\n" .
							"CC: prajakta.hoh@gmail.com". "\r\n" .
						    'X-Mailer: PHP/' . phpversion();*/
				redirect('thank_you');
			}
			redirect('thank_you');
		}

		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'Product Enquiry | Rushabh Honda';
		$data['pgKeywords'] = 'Product Enquiry of Rushabh Honda Nashik';
		$data['pgDesc'] = 'Product Enquiry of Rushabh Honda Nashik';
		$this->load->view('header',$data);
		$this->load->view('feedback',$data);
		$this->load->view('footer');
	}
}
