<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_user extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('manage_user_model','user');
		$this->original_path = realpath(APPPATH.'../assets/admin/post_image');
    }
    
    public function index()
	{
		$data['page_title']="Manage User";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$data['users_list'] = $this->common->getAllRow('users','where roles!="Nutridock" ORDER BY id DESC');
		
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/manage_user',$data);
		$this->load->view('admin/footer');
	}


	public function add_user()
	{
		$data['page_title']="Manage User ";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$data['permission'] = $this->db->query("SELECT * FROM permission order by id asc")->result();
		if($this->input->post('submit'))
		{
			$email = $this->input->post('email');
			$users_data = $this->common->getOneRow('users',"WHERE email='".$email."'");
			if($users_data)
			{
				print '<script>alert("Email id already exits!!!");
					window.location.href = "'.base_url().'admin/manage_user";
					</script>';
			}else{

			$data_in['first_name']=$this->input->post('first_name');
			$data_in['last_name']=$this->input->post('last_name');
			$data_in['mobile_no']=$this->input->post('mobile_no');
			$data_in['location']=$this->input->post('location');
			$data_in['email']=$this->input->post('email');
			$data_in['password']=$this->input->post('password');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');

			//$role = array();
			//print_r($this->input->post('roles')); die;
			$role=implode(',',$this->input->post('roles'));
			//$role = $this->input->post('roles');
			//print_r($this->input->post('roles')); die;
			
			$data_in['roles'] = $role;

			//print_r($data_in['roles']); die;

			$this->common->insertRecord('users', $data_in);					
			$user_id = $this->db->insert_id();

			if (!empty($_FILES['image']['name'])) {
		        $this->load->library('image_lib');
				$config['upload_path'] = $this->original_path;
				$config['allowed_types'] = '*';
				$config['encrypt_name'] = TRUE;
				
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('image'))
				{
					$error = array('error' => $this->upload->display_errors());
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());					
					$this->image_lib->initialize($config);
					$data['flash_message'] = FALSE;
					$data_to_store['image'] = $data['upload_data']['file_name'];

					//print_r($data_to_store['image']); die;
					$this->db->where('id',$user_id);
					$this->db->update('users',$data_to_store); 
	            }
		    }
			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_user";
					</script>';

			}
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/add_user',$data);
		$this->load->view('admin/footer');
	}

	public function edit_user()
	{
		$data['page_title']="Manage User";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$id = $this->uri->segment(4);
		$data['users_data'] = $this->common->getOneRow('users',"WHERE id='".$id."'");

		if($this->input->post('submit'))
		{
			$data_in['email']=$this->input->post('email');
			$data_in['first_name']=$this->input->post('first_name');
			$data_in['last_name']=$this->input->post('last_name');
			$data_in['mobile_no']=$this->input->post('mobile_no');
			$data_in['email']=$this->input->post('email');
			$data_in['roles']=$this->input->post('roles');
			$data_in['location']=$this->input->post('location');
			$data_in['password']=$this->input->post('password');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');				

			$this->common->updateRecord('users',$data_in,"id = ". $id);

			if (!empty($_FILES['image']['name'])) {
		        $this->load->library('image_lib');
				$config['upload_path'] = $this->original_path;
				$config['allowed_types'] = '*';
				$config['encrypt_name'] = TRUE;
				
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('image'))
				{
					$error = array('error' => $this->upload->display_errors());
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());					
					$this->image_lib->initialize($config);
					$data['flash_message'] = FALSE;
					$data_to_store['image'] = $data['upload_data']['file_name'];

					//print_r($data_to_store['image']); die;
					$this->db->where('id',$id);
					$this->db->update('users',$data_to_store); 
	            }
		    }
			print '<script>alert("Record updated successfully");
					window.location.href = "'.base_url().'admin/manage_user";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/edit_user',$data);
		$this->load->view('admin/footer');
	}
	
   
	function delete()
	{ 
		$id = $this->uri->segment(4);		
		$this->db->where('id', $id);
		$this->db->delete('users');
		print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/manage_user";
					</script>';
	}
   
}
   
   
   
	
				
			
	
	
	
