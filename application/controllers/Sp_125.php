<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sp_125 extends CI_Controller {

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
		$url = 'https://rushabh2w.com/sp_125';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'sp-125'; 
		}
		
		
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Shine sp 125 price in Nashik | Honda Shine | Rushabh Honda';
		$data['pgKeywords'] = 'Shine sp 125 price in Nashik | Honda Shine sp 125';
		$data['pgDesc'] = 'Honda Shine sp 125 available in Nashik at low price. Checkout the most premium two-wheeler models at Rushabh Honda at best prices now.';

		$data['sp125_details'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" and name="SP 125" ORDER BY id DESC');

		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Engine' order by id asc");

		$this->load->view('header',$data);
		$this->load->view('sp-125',$data);
		$this->load->view('footer');
	}
}
