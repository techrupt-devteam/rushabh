<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('feedback_model','feedback');
    }
    
	public function index()
	{
		$data['page_title']="Feedback";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$this->common->authorizeNew($this->session->userdata('apple_adminusr'));
		
		$data['feedback_list'] = $this->common->getAllRow('feedback',' ORDER BY id DESC');
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/feedback',$data);
		$this->load->view('admin/footer');
	}
	
    function export(){
		 $data['msg']=""; 
		 $data['booking_list'] = $this->common->getAllRow('booking','order BY id DESC');
		$this->load->view('admin/booking_export',$data);
	}
   	
   	public function view_feedback()
	{
		$data['message']="";
		$id = $this->uri->segment(4);
		//print_r($id); die;
		$data['page_title']="Manage Feedback";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$this->common->authorizeNew($this->session->userdata('apple_adminusr'));
		
		
		$data['feedback'] = $this->common->getAllRow('feedback','where id='.$id.' ORDER BY id DESC');
		//print_r($data['booking_list']); die;
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_feedback',$data);
		$this->load->view('admin/footer');
	}
   
    public function savedata()
	{
		$message = '';
		$data_in['id']=$this->input->post('id');
		$data_in['status']=$this->input->post('status');
		
		//$this->common->insertRecord('booking', $data_in);	
		$this->common->updateRecord('booking',$data_in,"id = ". $data_in['id']);

		$message = ['success','Status updated successfully'];
		echo json_encode($message);
	}
}
   
   
   
	
				
			
	
	
	
