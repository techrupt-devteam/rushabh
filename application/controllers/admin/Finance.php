<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('finance_model','finance');
    }
    
	public function index()
	{
		$data['page_title']="Finance";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		if($this->session->userdata('apple_adminusr')==1){

			$data['finance_list'] = $this->common->getAllRec('*','finance','order by id desc');
			
		}else{
			$location = $this->session->userdata('location');
			$data['finance_list'] = $this->common->getAllRec('*','finance','where location="'.$location.'" order by id desc');
		}
		

	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/finance',$data);
		$this->load->view('admin/footer');
	}
	
    function export(){
		$data['finance_list'] = $this->common->getAllRow('finance','order BY id DESC');
		$this->load->view('admin/finance_export',$data);
	}
   
   
}
   
   
   
	
				
			
	
	
	
