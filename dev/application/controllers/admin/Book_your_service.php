<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book_your_service extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('Book_your_service_model','service_model');
		$this->load->library("pagination");
    }
    
	public function index($rowno=0)
	{

		$data['page_title']="Book your service";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}

		if($this->session->userdata('apple_adminusr')==1 && $this->session->userdata('apple_adminusr')==5){
		
			//$data['book_your_service_list'] = $this->common->getAllRec('*','book_your_service','order by DATE(booking_date) DESC');
			
			// Search text
		    $search_text = "";
		    if($this->input->post('submit_search') != NULL ){
		      $search_text = $this->input->post('search');
		      $this->session->set_userdata(array("search"=>$search_text));
		    }else{
		      if($this->session->userdata('search') != NULL){
		        $search_text = $this->session->userdata('search');
		      }
		    }

		    // Row per page
		    $rowperpage = 10;

		    // Row position
		    if($rowno != 0){
		      $rowno = ($rowno-1) * $rowperpage;
		    }
		 
		    // All records count
		    $allcount = $this->service_model->getrecordCount($search_text);

		    // Get records
		    $users_record = $this->service_model->getData($rowno,$rowperpage,$search_text);
		 
		    // Pagination Configuration
		    $config['base_url'] = base_url().'admin/book_your_service/index';
		    $config['use_page_numbers'] = TRUE;
		    $config['total_rows'] = $allcount;
		    $config['per_page'] = $rowperpage;

		    // Initialize
		    $this->pagination->initialize($config);
		 
		    $data['pagination'] = $this->pagination->create_links();
		    $data['book_your_service_list'] = $users_record;
		    $data['row'] = $rowno;
		    $data['search'] = $search_text;
		    //print_r($data['book_your_service_list']); die;
		    // Load view
		}else{
			//$location = $this->session->userdata('location');
			
			
			
		$search_text = "";
		    if($this->input->post('submit_search') != NULL ){
		      $search_text = $this->input->post('search');
		      $this->session->set_userdata(array("search"=>$search_text));
		    }else{
		      if($this->session->userdata('search') != NULL){
		        $search_text = $this->session->userdata('search');
		      }
		    }

		    // Row per page
		    $rowperpage = 10;

		    // Row position
		    if($rowno != 0){
		      $rowno = ($rowno-1) * $rowperpage;
		    }
		 
		    // All records count
		    $allcount = $this->service_model->getrecordCountLocation($search_text);

		    // Get records
		    $users_record = $this->service_model->getDataLocation($rowno,$rowperpage,$search_text);
		 	
		    // Pagination Configuration
		    $config['base_url'] = base_url().'admin/book_your_service/index';
		    $config['use_page_numbers'] = TRUE;
		    $config['total_rows'] = $allcount;
		    $config['per_page'] = $rowperpage;

		    // Initialize
		    $this->pagination->initialize($config);
		 
		    $data['pagination'] = $this->pagination->create_links();
		    $data['book_your_service_list'] = $users_record;
		    $data['row'] = $rowno;
		    $data['search'] = $search_text;
			
			//$data['book_your_service_list'] = $this->common->getAllRec('*','book_your_service','where location="'.$location.'" order by DATE(booking_date) DESC');
		}

		
		if($this->input->post('submit'))
		{
			//echo"1"; die;
			$id=$this->input->post('service_id');

			$data_in['reported_date']=$this->input->post('reported_date');

			$this->common->updateRecord('book_your_service',$data_in,"id = ". $id);

			print '<script>alert("Record updated successfully");
					window.location.href = "'.base_url().'admin/book_your_service";
					</script>';
		}
		
		//$data['book_your_service_list'] = $this->common->getAllRec('*','book_your_service','order by DATE(booking_date) DESC');
		
	    $this->load->view('admin/header_service',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/book_your_service',$data);
		$this->load->view('admin/footer');
	}
	
    function export(){
		$data['book_your_service_list'] = $this->common->getAllRow('book_your_service','order BY id DESC');
		$this->load->view('admin/book_your_service_export',$data);
	}

	public function savedata()
	{
		$message = '';
		$data_in['id']=$this->input->post('id');
		$data_in['status']=$this->input->post('status');
		//$data_in['reported_date']=$this->input->post('reported_date');
		
		if($data_in['status']=='Reported'){
			$data_in['reported_date']=$this->input->post('reported_date');
			$this->common->updateRecord('book_your_service',$data_in,"id = ". $data_in['id']);
		}else{
			$data_in['reported_date']='';
			$this->common->updateRecord('book_your_service',$data_in,"id = ". $data_in['id']);
		}
		

		$message = ['success','Status updated successfully'];
		//print_r($message); die;
		echo json_encode($message);
	}

	function WhatsServiceReportedGoogleReview(){

		$id = $this->input->post('id');
		//print_r($id); die;

		$service_data = $this->common->getOneRow('book_your_service',"WHERE id='".$id."'");

		$mobile = $service_data['mobile'];
		//$mobile = "8149678010";
		$param['Message'] = "Dear ".$service_data['name'].","."\r\n"."Thanks for choosing Rushabh Honda. To help us improve please give us your valuable reviews. "."\r\n\r\n"."https://bit.ly/ReviewRushabh2w"."\r\n\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";
		
		$arr1=json_encode(array(
			"phone"=>'91'.$mobile,
			"body"=>$param['Message']
		));

		/**/
		$url1 = "https://eu14.chat-api.com/instance155295/message?token=e1lhshb7e3o1nbwf";
		/*$url2 = "https://eu14.chat-api.com/instance155295/sendLocation?token=e1lhshb7e3o1nbwf";*/
	
		$ch1=curl_init();
		curl_setopt($ch1,CURLOPT_URL,$url1);
		curl_setopt($ch1,CURLOPT_POST,true);
		curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch1,CURLOPT_POSTFIELDS,$arr1);
		curl_setopt($ch1,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr1)
		));
		$result1=curl_exec($ch1);
		curl_close($ch1);
		//echo $result;
		$result1;
	}

	public function view_booking_service()
	{
		$id = $this->uri->segment(4);/*base64_decode*/
		$data['page_title']="Book your service";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$data['booking_service'] = $this->common->getAllRow('book_your_service','where id='.$id.' ORDER BY id DESC');
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_booking_service',$data);
		$this->load->view('admin/footer');
	}
	
}
   
   
   
	
				
			
	
	
	
