<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_your_service extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{

		if($this->input->post('submit'))
		{
		    $vehical_no = $this->input->post('vehical_no');
			$booking_date	= 	$this->input->post('Date');

			$service_data = $this->common->getOneRow('book_your_service',"WHERE vehical_no='".$vehical_no."' && booking_date='".$booking_date."'");
			
			if($service_data){

				print '<script>alert("Service already added for this vehical");
					window.location.href = "'.base_url().'book-your-service";
					</script>';	
					return false;

			}
			
			
			$to_mobile = $this->input->post('mobile');

			$data_in['conditions']=$this->input->post('conditions');
			if($data_in['conditions']=='on'){

			$data_in['name']=$this->input->post('Name');
			$data_in['mobile']=$this->input->post('mobile');
			$data_in['email']=$this->input->post('Email');
			$data_in['address']=$this->input->post('Address');
			$data_in['location']=$this->input->post('location');
			$data_in['service']=$this->input->post('service');
			$data_in['vehical_no']=$this->input->post('vehical_no');
			$data_in['booking_date']=$this->input->post('Date');
			$data_in['remarks']=$this->input->post('Remarks');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');

			$this->common->insertRecord('book_your_service', $data_in);
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
					$message=$this->load->view('send_mail_bookservice',$data_in,TRUE);
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

					$list = array('it@sevagroup.co.in', 'gmservice@rushabh2w.com', 'smservice@rushabh2w.com');
					//$list = array('pagarelaxmi@gmail.com');
					$this->email->to($list);
					$this->email->subject('RUSHABH HONDA - New Enquiry received');
					$message2=$this->load->view('send_mail_bookservice_admin',$data_in,TRUE);
					$this->email->message($message2);
					$this->email->send();
					$header = $data_in['email'];


					$this->common->SmsMobileBookingService($id, $to_mobile);
					$this->common->SmsWhatsAppBookService($id, $to_mobile);

					
					redirect('thank-you');
				}
			
			}
			else{
				print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'book-your-service";
					</script>';	
					return false;
			}
			redirect('thank_you');
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

			redirect('thank_you');		
		}
		/*Subscription close*/
		
		
		$current_url = current_url();
		$url = 'https://rushabh2w.com/book_your_service';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'book-your-service'; 
		}
		
		$data['canonical'] = '';
		
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');

		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['title'] = 'Book Honda Two Wheeler In Nashik | Rushabh Honda';
		$data['pgKeywords'] = 'Honda bike dealer in Nasik, Honda bike dealers in Nasik, Honda bike dealers in Mumbai Naka,Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik. Honda bike dealers in Mumbai Naka, authorised Honda bike, Honda bike showroom Indira Nagar, Honda bike showroom in  Muambai Naka,Indira Nagar, Meri Mhasrul, Cidco Nashik, Honda Bike, Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealer in Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealers in Nashik';
		$data['pgDesc'] = 'Rushabh Honda is best two wheeler Service Center in Nashik. Available with pickup and drop option. Door step service offered. Book service online easily.';
		$this->load->view('header',$data);
		$this->load->view('book-your-service',$data);
		$this->load->view('footer');
	}

	/*function demo_test()
	{
		$data = $_POST['data1'];
		
        $result = $this->db->query("SELECT * from book_your_service where booking_date='$data'")->result();

        if($result>50){
            echo "true";
        }else{
            echo "false";
        }

	}*/

}
