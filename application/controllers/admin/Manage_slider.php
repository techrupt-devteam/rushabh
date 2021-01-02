<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_slider extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('book_appointment_model','book_appointment');
		$this->original_path = realpath(APPPATH.'../assets/admin/post_image');

		$this->resized_path1 = realpath(APPPATH.'../assets/admin/resized1');

		$this->resized_path2 = realpath(APPPATH.'../assets/admin/resized2');

		$this->resized_path3 = realpath(APPPATH.'../assets/admin/resized3');

		//$this->product_list_path = realpath(APPPATH.'../media/product_list');
    }
    
    
    public function view_slider()
	{
		$data['message']="";
		$data['page_title']="View Slider";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$data['slider_list'] = $this->common->getAllRow('slider',' ORDER BY id DESC');
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_slider',$data);
		$this->load->view('admin/footer');
	}
    
	public function add_slider()
	{
		$data['message']="";
		$data['page_title']="Book appointment";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		
		if($this->input->post('submit'))
		{
			$data_in['title'] = $this->input->post('title');
			$data_in['sort'] = $this->input->post('sort');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');				

			$this->common->insertRecord('slider', $data_in);					
			$slider_id = $this->db->insert_id();

			if (!empty($_FILES['image']['name'])) {
		        $this->load->library('image_lib');
				$config['upload_path'] = $this->original_path;
				$config['allowed_types'] = '*';
				$config['width'] = 172;
                $config['height'] = 122;
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
					$this->db->where('id',$slider_id);
					$this->db->update('slider',$data_to_store); 
	            }
		    }

		    	
			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_slider/view_slider";
				</script>';
		}


	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/add_slider',$data);
		$this->load->view('admin/footer');
	}
	
   
    public function edit()
	{
		$data['page_title']="Manage User";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$id = $this->uri->segment(4);
		$data['slider_data'] = $this->common->getOneRow('slider',"WHERE id='".$id."'");

		if($this->input->post('submit'))
		{
			$data_in['title']=$this->input->post('title');
			$data_in['sort']=$this->input->post('sort');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');				

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
					$this->db->update('slider',$data_to_store); 
	            }
		    }

		    $this->common->updateRecord('slider',$data_in,"id = ". $id);
			print '<script>alert("Record updated successfully");
					window.location.href = "'.base_url().'admin/manage_slider/view_slider";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/edit_slider',$data);
		$this->load->view('admin/footer');
	}

	function delete()
	{ 
		$id = $this->uri->segment(4);		
		$this->db->where('id', $id);
		$this->db->delete('slider');
		print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/manage_slider/view_slider";
					</script>';
	}
   
}
   
   
   
	
				
			
	
	
	
