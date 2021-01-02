<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Change_password extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('change_password_model','change_password');
    }
    
	public function index()
	{

		$data['message']="";
		$data['page_title']="Change Password";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}

		if($this->input->post('submit'))
		{
			$id = $this->session->userdata('apple_adminusr');
			$old_pwd = $this->input->post('old_pwd');

			$data['users_data'] = $this->common->getOneRow('users',"WHERE id='".$id."' and password='".$old_pwd."'");

			if($data['users_data']){
				$new_pwd	= 	$this->input->post('new_pwd');
				$confirm_pwd	= 	$this->input->post('confirm_pwd');
				
				if($new_pwd == $confirm_pwd)
				{
					$data_in['password']	= 	$this->input->post('new_pwd');

					$this->common->updateRecord('users',$data_in,"id = ".$this->session->userdata('apple_adminusr'));	
					 print '<script>alert("Record updated successfully");
					window.location.href = "'.base_url().'admin/secure/home";
					</script>';				
				}else{
					$data['message'] = "Passwords are not match";
				}
			}else{

				$data['message'] = "Data not found";
			}
			
		}
		
		
		
		
		
		    $this->load->view('admin/header',$data);
		    $this->load->view('admin/sidebar',$data);                      
			$this->load->view('admin/change_password',$data);
			$this->load->view('admin/footer');
	}
	
    
   
   
}
   
   
   
	
				
			
	
	
	
