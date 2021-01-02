<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amc extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('captcha');
		$this->load->helper('string');
    }


	public function index()
	{
		/*$this->load->library('antispam');
		
		$config = array(
		    'word'          => random_string('alnum', 5),
			'img_path'      => 'captcha_images/',
			'img_url'       => base_url().'captcha_images/',
			'img_width'     => '300',
			'img_height'    => 50,			
			'word_length'   => 10,
			'font_size'     => 24,
			'img_id'        => 'Imageid',
            'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
			'bg_color'      => '#FFFFFF',
			'line_color'	=> '#6666DD',
			'char_color'    => '#000'
  
		);
		
		$captcha = $this->antispam->get_antispam_image($config);
		
		
		$this->session->unset_userdata('captchaCode');

		$this->session->set_userdata('captchaCode',$captcha['word']);
		
		 $data['captchaImg'] = $captcha['image'];*/

		if($this->input->post('submit'))
		{
			$to_mobile = $this->input->post('phone_no');

			$data_in['name']=$this->input->post('full_name');
			$data_in['email']=$this->input->post('email');
			$data_in['phone_no']=$this->input->post('phone_no');
			$data_in['location']=$this->input->post('location');
			$data_in['vehicle_no']=$this->input->post('vehicle_no');
			$data_in['message']=$this->input->post('s_message');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');

			$this->common->insertRecord('amc', $data_in);	
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
				$this->email->subject('Rushubh IT Support');
				$message=$this->load->view('send_mail_amc',$data_in,TRUE);
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

				$list = array('it@sevagroup.co.in');
				//$list = array('pagarelaxmi@gmail.com');
				$this->email->to($list);
				
				$this->email->subject('New Enquiry Received');
				$message1=$this->load->view('send_mail_amc_admin',$data_in,TRUE);
				$this->email->message($message1);
				$this->email->send();
				$this->common->WhatsAppMsgAmc($id, $to_mobile);

				redirect('thank_you');
			}
			
		}


		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'AMC | Honda Bike Loan| Rushabh Honda | Two Wheeler In Nashik';
		$data['pgKeywords'] = 'Honda Bike Finance in Nashik. We offer the Cheapest Honda Bike Finance services. Get Honda Car Loan in Bike at Cheapest Interest Rate from Rushabh Honda.';
		$data['pgDesc'] = 'Rushabh Honda offers you Honda Two Wheeler AMC, Loan, Finance and more . Also, checkout newest Two-wheeler easily online and book your favorite model today!';
		$this->load->view('header',$data);
		$this->load->view('amc',$data);
		$this->load->view('footer');
	}



}
