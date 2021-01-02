<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('contact_us_model','contact_us');
    }
    
	public function index()
	{
		$data['page_title']="Contact us";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$data['contact_us_list'] = $this->common->getAllRec('*','contact_us','order by id desc');
		/*if($this->session->userdata('apple_adminusr')==1){
			$data['contact_us_list'] = $this->common->getAllRec('*','contact_us','order by id desc');	
		}else{
			$location = $this->session->userdata('location');
			$data['contact_us_list'] = $this->common->getAllRec('*','contact_us','where location="'.$location.'" order by id desc');	
		}*/
		
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/contact_us',$data);
		$this->load->view('admin/footer');
	}
	
    function export(){
		 $data['msg']=""; 
		 $data['contact_us_list'] = $this->common->getAllRow('contact_us','order BY id DESC');
		$this->load->view('admin/contact_us_export',$data);
	}
   
   
   public function savedata()
	{
		$message = '';
		$data_in['id']=$this->input->post('id');
		$data_in['status']=$this->input->post('status');
		
		//$this->common->insertRecord('booking', $data_in);	
		$this->common->updateRecord('contact_us',$data_in,"id = ". $data_in['id']);

		$message = ['success','Status updated successfully'];
		echo json_encode($message);
	}
}
   
   
   
	
				
			
	
	
	
