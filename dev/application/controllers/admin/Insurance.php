<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insurance  extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('book_appointment_model','book_appointment');
    }
    
	public function index()
	{
		$data['page_title']="Insurance";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}

		if($this->session->userdata('apple_adminusr')==1){
			$data['insurance_list'] = $this->common->getAllRec('*','insurance','order by id desc');	
		}else{
			$location = $this->session->userdata('location');
			$data['insurance_list'] = $this->common->getAllRec('*','insurance','where location="'.$location.'" order by id desc');	
		}
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/insurance',$data);
		$this->load->view('admin/footer');
	}
	
    function export(){
		$data['insurance_list'] = $this->common->getAllRow('insurance','order BY id DESC');
		$this->load->view('admin/insurance_export',$data);
	}
   
   
}
   
   
   
	
				
			
	
	
	
