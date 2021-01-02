<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book_appointment extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('book_appointment_model','book_appointment');
    }
    
	public function index()
	{
		$data['page_title']="Book appointment";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		if($this->session->userdata('apple_adminusr')==1){
			$data['book_appointment_list'] = $this->common->getAllRec('*','book_appointment','order by id desc');
		}else{
			$location = $this->session->userdata('location');
			$data['book_appointment_list'] = $this->common->getAllRec('*','book_appointment','where location="'.$location.'" order by id desc');
		}

	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/book_appointment',$data);
		$this->load->view('admin/footer');
	}
	
    function export(){
		$data['book_appointment_list'] = $this->common->getAllRow('book_appointment','order BY id DESC');
		$this->load->view('admin/book_appointment_export',$data);
	}
   
   public function savedata()
	{
		$data_in['id']=$this->input->post('id');
		$data_in['status']=$this->input->post('status');
		$this->common->updateRecord('book_appointment',$data_in,"id = ". $data_in['id']);

		$message = ['success','Status updated successfully'];
		echo json_encode($message);
	}
   
}
   
   
   
	
				
			
	
	
	
