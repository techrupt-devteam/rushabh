<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

			redirect('thank-you');		
		}
		
		$data['canonical'] = current_url(); 
		
		$data['slider'] = $this->common->getAllRow('slider',' ORDER BY sort ASC');
		//print_r($data['slider']); die;
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Two Wheeler Honda Showroom In Nashik | Rushabh Honda';
		$data['pgKeywords'] = 'Honda Showroom In Nashik | Nashik Honda Showroom';
		$data['pgDesc'] = 'Exclusive Honda Showroom In Nashik. Rushabh Honda offers you the best Two-wheeler models at great prices! Browse the inventory today.';
		$this->load->view('header',$data);
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
	
}
