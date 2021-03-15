<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
		if($this->input->post('submit'))
		{
			$data_in['name']='Testing';
			$data_in['email']='webdeveloper@techrupt.in';
			$data_in['mobile']='8149678010';
			$data_in['address']='nsk';
			$data_in['message']='ts';
				$config = [];
					/*$config = array (
					'protocol' => 'mail',
					'mailpath' => '/usr/s; die;bin/sendmail', 
					'mailtype' => 'html',
					'charset'  => 'utf-8',
					'priority' => '1'
				);*/
				
				$config = Array( 
    				 'protocol' => 'smtp', 
    				 'smtp_host' => 'ssl://smtp.googlemail.com', 
    				 'smtp_port' => 465, 
    				 'smtp_user' => 'techrupt.dev@gmail.com', 
    				 'smtp_pass' => 'devtech@2020', 
    				 'mailtype' => 'html',
    				 'charset'  => 'iso-8859-1',
    				 'wordwrap' => 'TRUE'
			    );
			    
			    /*$config['protocol']='smtp';
                $config['charset']='utf-8';
                $config['mailtype']='html';
                $config['wordwrap'] = TRUE;
                $config['smtp_host']='smtp.googlemail.com';
                $config['smtp_port']='465';
                $config['smtp_user']='techrupt.dev@gmail.com';
                $config['smtp_pass'] ='devtech@2020';*/

                $message='Hello world';
				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");
				
				$this->email->from('techrupt.dev@gmail.com', 'rushabh');//it@rushabh2w.com
				$this->email->to('webdeveloper@techrupt.in');
				$this->email->subject('RUSHABH HONDA - Your Request has been received');
				
				$this->email->message($message);
				
				if($this->email->send()){
				    echo "email sent"; die;
				}else{
				        echo "email not sent"; die;
				}
			
				redirect('thank-you');
			
		
		}



		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'Contact Us | Rushabh Honda | Two Wheeler Dealers In Nashik';
		$data['pgKeywords'] = 'Honda bike dealer in Mumbai, Honda bike dealers in Mumbai, Honda bike dealers in Mumbai Naka,Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik. Honda bike dealers in Mumbai Naka, authorised Honda bike, Honda bike showroom Indira Nagar, Honda bike showroom in  Muambai Naka,Indira Nagar, Meri Mhasrul, Cidco Nashik, Honda Bike, Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealer in Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealers in Nashik';
		$data['pgDesc'] = 'Contact Rushbah Honda easily online or call at 8888877649. Also, checkout newest Honda Two-wheeler easily online and book your favorite model today!';
		$this->load->view('header',$data);
		$this->load->view('contact',$data);
		$this->load->view('footer');
	}
	
	public function contact_store()
	{
		if($this->input->post('submit'))
		{
			$data_in['name']=$this->input->post('name');
			$data_in['email']=$this->input->post('email_id');
			$data_in['mobile']=$this->input->post('mobile');
			$data_in['address']=$this->input->post('address');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');

			
			$status = $this->common->insertRecord('contact', $data_in);
			//$id = $this->db->insert_id();

			if($status)
			{
				redirect('thank-you');
			}
			redirect('thank-you');
		}
	
	}

	 public function sendMail() {
	     
	     error_reporting(0);

$servername = "localhost";
$username = "rushabh_booking";
$password = "snjdB7=,-f7N";
$dbname = "rushabh_booking";

	// $to = $_POST['email']; 
	$to = 'webdeveloper@techrupt.in';
 
    $_POST['Name'] = 'Testing';
    $_POST['mobile'] = '8149678010';
    $_POST['Remarks'] = 'abc';
    
 	$header1 = "From: it@rushabh2w.com \r\n".
    'X-Mailer: PHP/' . phpversion();
    $header = "From: it@rushabh2w.com \r\n".
    'X-Mailer: PHP/' . phpversion();
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$contentmain = "Hello Dear";
	mail ($to,"RUSHABH HONDA - Your Request has been received",$contentmain,$header1);

$message2.='<span style="font-size:14px">
<span style="font-family:arial,helvetica,sans-serif">
<strong>Thanks & Regards </strong></span>
</span>
<br /><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Team Rushabh Honda, </strong>
</span>
</span><br />
<span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Nashik: 0253-6643444 </strong></span>
</span>';

	mail ('pagarelaxmi@gmail.com',"RUSHABH HONDA - New Enquiry received",$message2,$header);
	
	redirect('thank-you');
	
	     //redirect('send-mail-contactus1');
       /* $data = array('name'=>"Virat Gandhi");
    
        Mail::send('mail', $data, function($message) {
        $message->to('developer@techrupt.in', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
        $message->from('raj.marathe19@gmail.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";*/

    }
}
