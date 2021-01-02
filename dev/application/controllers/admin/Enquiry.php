<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enquiry extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('enquiry_model','enquiry');
    }
    
	public function index()
	{
		$data['page_title']="Enquiry";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		//$data['enquiry_list'] = $this->common->getAllRow('enquiry',' ORDER BY id DESC');

		if($this->session->userdata('apple_adminusr')==1){
			$data['enquiry_list'] = $this->common->getAllRec('*','enquiry','order by id desc');	
		}else{
			$location = $this->session->userdata('location');
			$data['enquiry_list'] = $this->common->getAllRec('*','enquiry','where location="'.$location.'"');
		}
		
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/enquiry',$data);
		$this->load->view('admin/footer');
	}
	
    function export(){
		$data['enquiry_list'] = $this->common->getAllRow('enquiry','order BY id DESC');
		$this->load->view('admin/enquiry_export',$data);
	}
   
  
   
}
   
   
   
	
				
			
	
	
	
