<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class secure extends CI_Controller {

        function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		
    }
	public function index()
	{
	    
		$this->load->model('common');
		$data['message']="";
		$data['page_title']="Login";
		if($this->input->post()){			
			$objRS=$this->common->getOneRow('users',"where email='".$this->input->post('email')."' and password='".$this->input->post('password')."'");
			//print_r($objRS);die;
			if($objRS!='' && ($_POST["email"]!='' || $_POST["password"]!='') ){
				//$arr = array('apple_adminusr'=>$objRS['id'],'adminusr'=>$objRS['name'],'userType'=>$objRS['user_type']);				
				$arr = array('apple_adminusr'=>$objRS['id'],'name'=>$objRS['first_name'],'email'=>$objRS['email'],'image'=>$objRS['image'],'location'=>$objRS['location'],'roles'=>$objRS['roles']);				
				$this->session->set_userdata($arr);
				redirect('admin/secure/home');
			}else{
				$data['message']="<font color='red'>Invalid Username / Password <br> Please try again.</font>";
			}
		}
		$this->load->view('admin/secure',$data);
	}
	
	function home(){
		$data['active']='main';
		$data['page_title']="Dashboard";

		$data['booking_list'] = $this->common->getAllRow('booking',' ORDER BY id DESC');
		//print_r(count($data['booking_list'])); die;
		$data['book_appointment_list'] = $this->common->getAllRow('book_appointment',' ORDER BY id DESC');
		$data['book_your_service_list'] = $this->common->getAllRow('book_your_service',' ORDER BY id DESC');
		$data['enquiry_list'] = $this->common->getAllRow('enquiry',' ORDER BY id DESC');
		$data['finance_list'] = $this->common->getAllRow('finance',' ORDER BY id DESC');
		$data['insurance_list'] = $this->common->getAllRow('insurance',' ORDER BY id DESC');
		$data['offers_list'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['contact_us_list'] = $this->common->getAllRow('contact_us',' ORDER BY id DESC');
		$data['users_list'] = $this->common->getAllRow('users',' ORDER BY id DESC');
		$data['inbond_calls_list'] = $this->common->getAllRow('inbond_calls',' ORDER BY id DESC');

		if($this->session->userdata('apple_adminusr')){	
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar',$data);
			$this->load->view('admin/index',$data);
			$this->load->view('admin/footer');
		}else{
			redirect('admin/secure');
			}
	}
	
	function logoff(){
		$this->session->unset_userdata('apple_adminusr');
		$this->session->unset_userdata('adminusr');
		$this->session->unset_userdata('userType');
		$this->session->sess_destroy();
		redirect('admin/secure');
	}
	
function change_password(){
		 $data['msg'] ='';
		 $data['page_title']="Change Password";
		if($this->input->post('submit')){
			$data_in['password']	= 	$this->input->post('password');
			$this->common->updateRecord('admin',$data_in,"admin_id = ". $this->session->userdata('apple_adminusr'));				
			print '<script>alert("Password Updated Successfully");
					window.location.href = "'.base_url().'admin/secure/home";
					</script>';
			}		
			$this->load->view('admin/change_password',$data);			
	}
	
	
}