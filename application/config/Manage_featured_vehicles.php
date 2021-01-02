<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_featured_vehicles extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('featured_vehicles_model','featured_vehicles');
		$this->original_path = realpath(APPPATH.'../assets/admin/post_image/featured_vehicles');
    }
    
	public function index()
	{
		$data['page_title']="Book appointment";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$data['featured_vehicles_list'] = $this->common->getAllRow('featured_vehicles',' ORDER BY id ASC');
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/manage_featured_vehicles',$data);
		$this->load->view('admin/footer');
	}
	
   
 	public function add()
	{
	$data['page_title']="Featured VehicleF";
	if(!$this->session->userdata('apple_adminusr')){	
	  redirect("admin/secure");
	}
	
	if($this->input->post('submit'))
	{
		$data_in['title'] = $this->input->post('title');
		$data_in['page_link'] = $this->input->post('page_link');
		$data_in['description'] = $this->input->post('description');
		$data_in['created_at']	= 	date('Y-m-d H:i:s');				

		$this->common->insertRecord('featured_vehicles', $data_in);					
		$id = $this->db->insert_id();

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
				$this->db->update('featured_vehicles',$data_to_store); 
            }
	    }
		print '<script>alert("Record added successfully");
				window.location.href = "'.base_url().'admin/manage_featured_vehicles";
				</script>';
	}
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar',$data);                      
	$this->load->view('admin/add_featured_vehicles',$data);
	$this->load->view('admin/footer');
	}



	public function edit()
	{
		$data['page_title']="Book appointment";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$id = $this->uri->segment(4);
		$data['featured_vehicles'] = $this->common->getOneRow('featured_vehicles',"WHERE id='".$id."'");

		if($this->input->post('submit'))
		{
			$data_in['type'] = $this->input->post('type');
			$data_in['name'] = $this->input->post('name');
			$data_in['price'] = $this->input->post('price');
			$data_in['description'] = $this->input->post('description');
			$data_in['meta_title'] = $this->input->post('meta_title');
			$data_in['meta_description'] = $this->input->post('meta_description');
			$data_in['image_title'] = $this->input->post('image_title');
			$data_in['image_description'] = $this->input->post('image_description');
			$data_in['updated_at']	= 	date('Y-m-d H:i:s');				

			$this->common->updateRecord('featured_vehicles',$data_in,"id = ". $id);

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
					$this->db->update('featured_vehicles',$data_to_store); 
	            }
		    }
			print '<script>alert("Record updated successfully");
					window.location.href = "'.base_url().'admin/manage_featured_vehicles";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/edit_featured_vehicles',$data);
		$this->load->view('admin/footer');
	}


	function delete()
	{ 
		$id = $this->uri->segment(4);		
		$this->db->where('id', $id);
		$this->db->delete('featured_vehicles');
		print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/manage_featured_vehicles";
					</script>';
	}


	


	public function getBikeScooters()
	{
		
		$type = $this->input->post('type');
		
		$data = $this->common->getAllRow('pages',"WHERE type='".$type."'");
		//print_r($data); die;

		echo json_encode($data);

	}
   
}
   
   
   
	
				
			
	
	
	
