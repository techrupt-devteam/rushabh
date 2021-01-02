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
			$data_in['branch']=$this->input->post('branch');
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
					//$header1 = "From: pagarelaxmi@gmail.com \r\n";//it@rushabh2w.com
					//mail($data_in['email'],'RUSHABH HONDA - Your Request has been received',$message,$header1);
					//mail ($to,"",$contentmain,$header1);

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

					$this->common->WhatsAppMsgHondaShield($id, $to_mobile);


					//$header = "MIME-Version: 1.0\r\n";
					//mail ('bm@rushabh2w.com',"RUSHABH HONDA - New Enquiry received",$message2,$header);
				
					redirect('thank_you');
			}
		}


		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'Honda Shield | Rushabh Honda | Two Wheeler In Nashik';
		$data['pgKeywords'] = 'Honda Shield';
		$data['pgDesc'] = 'Honda Shield available at Rushabh Honda in Nashik. Get prominent Two-wheeler models at reasonable prices. View Inventory today!';
		$this->load->view('header',$data);
		$this->load->view('honda-shield',$data);
		$this->load->view('footer');
	}
}
