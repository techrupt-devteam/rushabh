<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->library('autoload');
		//$this->load->model('Facebook_model','book_appointment');
    }
    
	public function index()
	{
		$data['page_title']="Facebook";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/facebook',$data);
		$this->load->view('admin/footer');
	}
	
   
}
   
   
   
	
				
			
	
	
	
