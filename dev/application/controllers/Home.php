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

		if($this->input->post('submit'))
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


		$data['slider'] = $this->common->getAllRow('slider',' ORDER BY id ASC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		
		$data['bikes_scooters'] = $this->common->getAllRow('bikes_scooters','ORDER BY RAND() limit 3');
		$data['all_hot_deals'] = $this->common->getAllRow('bikes_scooters','ORDER BY RAND() limit 6');

		$data['bikes_hot_deals'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY RAND() limit 6');
		$data['scooters_hot_deals'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY RAND() limit 6');
		
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['title'] = 'Two Wheeler Honda Showroom In Nashik | Rushabh Honda';
		$data['pgKeywords'] = 'Honda Showroom In Nashik | Nashik Honda Showroom';
		$data['pgDesc'] = 'Exclusive Honda Showroom In Nashik. Rushabh Honda offers you the best Two-wheeler models at great prices! Browse the inventory today.';
		$this->load->view('header',$data);
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
	
// 	function index()
//   {
//     $this->load->library('curl');
//     echo $this->curl->simple_get('http://example.com');
//   }
}
