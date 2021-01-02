<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{

		if($this->input->post('submit'))
		{
		
			$data_in['name']=$this->input->post('name');
			$data_in['email']=$this->input->post('email_id');
			$data_in['mobile']=$this->input->post('mobile');
			$data_in['address']=$this->input->post('address');
			$data_in['message']=$this->input->post('message');
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
				$this->email->to($data_in['email']);
				$this->email->subject('RUSHABH HONDA - Your Request has been received');
				$message=$this->load->view('send_mail_contactus',$data_in,TRUE);
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

				$list = array('bm@rushabh2w.com','it@sevagroup.co.in','smsales@rushabh2w.com');
				//$list = array('pagarelaxmi@gmail.com');
				$this->email->to($list);

				$this->email->subject('RUSHABH HONDA - New Enquiry received');
				$message=$this->load->view('send_mail_contactus_admin',$data_in,TRUE);
				$this->email->message($message);
				$this->email->send();
			
				redirect('thank_you');
			}
			redirect('thank_you');
		}



		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'Contact Us | Rushabh Honda | Two Wheeler Dealers In Nashik';
		$data['pgKeywords'] = 'Honda bike dealer in Mumbai, Honda bike dealers in Mumbai, Honda bike dealers in Mumbai Naka,Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik. Honda bike dealers in Mumbai Naka, authorised Honda bike, Honda bike showroom Indira Nagar, Honda bike showroom in  Muambai Naka,Indira Nagar, Meri Mhasrul, Cidco Nashik, Honda Bike, Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealer in Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealers in Nashik';
		$data['pgDesc'] = 'Contact Rushbah Honda easily online or call at 8888877649. Also, checkout newest Honda Two-wheeler easily online and book your favorite model today!';
		$this->load->view('header',$data);
		$this->load->view('contact-us',$data);
		$this->load->view('footer');
	}
}
