<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_available_colour extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('manage_bikes_scooters_model','manage_bikes_scooters');
		$this->original_path = realpath(APPPATH.'../assets/admin/post_image/bikes_scooters');
    }
    

	public function index()
	{

		$data['id'] = $this->uri->segment(3);
		//print_r($data['id']); die;
		$data['page_title']="Manage Specification";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$data['available_colour_data'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='".$data['id']."' order by id asc");
		
		if($this->input->post('submit'))
		{
			$data_in['bike_scooter_id'] = $this->input->post('id');
			$data_in['colour'] = $this->input->post('colour');
			$data_in['image_title'] = $this->input->post('image_title');
			$data_in['image_description'] = $this->input->post('image_description');
			$data_in['created_at'] = date('Y-m-d');
			
			$this->db->insert('available_colour',$data_in);
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
					$this->db->update('available_colour',$data_to_store); 
	            }
		    }
		    redirect('admin/manage_available_colour/'.$data_in['bike_scooter_id']);		
		}

		if($this->input->post('submit_edit'))
		{
			
			$data_up['bike_scooter_id'] = $this->input->post('id');
			$edit_id = $this->input->post('edit_id');
			$data_up['colour'] = $this->input->post('colour');
			$data_in['image_title'] = $this->input->post('image_title');
			$data_in['image_description'] = $this->input->post('image_description');
			$data_up['updated_at'] = date('Y-m-d');
			
			$this->db->where('id',$edit_id)->update('available_colour',$data_up);
			

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
					$this->db->where('id',$edit_id);
					$this->db->update('available_colour',$data_to_store); 
	            }
		    }

		   redirect('admin/manage_available_colour/'.$data_up['bike_scooter_id']);		
		}
		//print_r($data['id']); die;
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_available_colour',$data);
		$this->load->view('admin/footer');
	}



	public function delete()
	{
		$id = $this->uri->segment(5);
		$bike_scooter_id = $this->uri->segment(4);
		$this->db->where('id', $id);
		$this->db->delete('available_colour');
		print '<script>alert("Record deleted successfully");
		window.location.href = "'.base_url().'admin/manage_available_colour/'.$bike_scooter_id.'";
		</script>';
	}
   
}
   
   
   
	
				
			
	
	
	
