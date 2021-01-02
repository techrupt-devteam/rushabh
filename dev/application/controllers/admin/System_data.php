<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class System_data extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->original_path = realpath(APPPATH.'../assets/admin/post_image');
		$this->load->model('inbond_calls_model','inbond_calls');
    }
    

	public function index()
	{

		$data['page_title']="System Data";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$data['system_data_list'] = $this->common->getAllRow('system_data',' ORDER BY id DESC');

	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/system_data',$data);
		$this->load->view('admin/footer');
	}

	
	public function add()
	{
		$data['page_title']="System Data";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		if($this->input->post('submit'))
		{
			$mobile = $this->input->post('mobile');
			$mobile_data = $this->db->query("SELECT * FROM system_data WHERE mobile='$mobile'")->result();
			
			if(count($mobile_data) > 0){
				print '<script>alert("Mobile number already exits");
				window.location.href = "'.base_url().'admin/system_data";
					</script>';
					return false;
			}


			$data_in['name'] = $this->input->post('name');
			$data_in['enquiry_no'] = $this->input->post('enquiry_no');
			$data_in['location'] = $this->input->post('location');

			$data_in['enquiry_date'] = $this->input->post('enquiry_date');
			$data_in['mobile'] = $this->input->post('mobile');
			$data_in['source'] = $this->input->post('source');

			$data_in['model'] = $this->input->post('model');
			$data_in['city'] = 'Nashik';
			$data_in['contact_to'] = $this->input->post('contact_to');
			$data_in['follow_up_date'] = $this->input->post('follow_up_date');
			$data_in['remarks'] = $this->input->post('remarks');

			$data_in['created_at']	= 	date('Y-m-d H:i:s');				

			$this->common->insertRecord('system_data', $data_in);					
			//$inbond_id = $this->db->insert_id();
		
			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/system_data";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/add_system_data',$data);
		$this->load->view('admin/footer');
	}

	public function view_info()
	{
		$data['page_title']="Inbond calls";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$id = $this->uri->segment(4);

		$data['inbond_calls_list'] = $this->common->getAllRow('inbond_calls_mhasrul','where inbond_id="'.$id.'" ORDER BY id DESC');
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_infomh',$data);
		$this->load->view('admin/footer');
	}


	public function edit()
	{
		$data['page_title']="Inbond Calls";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$id = $this->uri->segment(4);
		$data['system_data'] = $this->common->getOneRow('system_data',"WHERE id='".$id."'");

		if($this->input->post('submit'))
		{
			$data_in['name'] = $this->input->post('name');
			//$data_in['enquiry_no'] = $this->input->post('enquiry_no');
			$data_in['location'] = $this->input->post('location');

			$data_in['enquiry_date'] = $this->input->post('enquiry_date');
			$data_in['mobile'] = $this->input->post('mobile');
			$data_in['source'] = $this->input->post('source');

			$data_in['model'] = $this->input->post('model');
			$data_in['city'] = 'Nashik';
			$data_in['contact_to'] = $this->input->post('contact_to');
			$data_in['follow_up_date'] = $this->input->post('follow_up_date');
			$data_in['remarks'] = $this->input->post('remarks');

			$data_in['updated_at']	= 	date('Y-m-d H:i:s');			

			$this->common->updateRecord('system_data',$data_in,"id = ". $id);

			
			print '<script>alert("Record updated successfully");
					window.location.href = "'.base_url().'admin/system_data";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/edit_system_data',$data);
		$this->load->view('admin/footer');
	}
	

    function export(){
		$data['book_appointment_list'] = $this->common->getAllRow('book_appointment','order BY id DESC');
		$this->load->view('admin/book_appointment_export',$data);
	}
  

	function delete()
	{ 
		$id 	=	$this->uri->segment(4);		
		$this->db->where('id', $id);
		$this->db->delete('system_data');
		print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/system_data";
					</script>';
	}

	public function mobileValidation()
	{
		$mobile = $this->input->post('mobile');
	  	//$sql = "SELECT * FROM system_data WHERE mobile='$mobile'";

	  	$sql = $this->db->query("SELECT * FROM system_data WHERE mobile='$mobile'")->result();

	  	if (count($sql) > 0) {

	  	  echo "taken";	
	  	}else{
	  	  echo 'not_taken';
	  	}
	}

	public function savedata()
	{
		$data_in['id']=$this->input->post('id');
		$data_in['status']=$this->input->post('status');
		
		//$this->common->insertRecord('booking', $data_in);	
		$this->common->updateRecord('system_data',$data_in,"id = ". $data_in['id']);

		$message = ['success','Status updated successfully'];
		echo json_encode($message);
	}
   
}
   
   
   
	
				
			
	
	
	
