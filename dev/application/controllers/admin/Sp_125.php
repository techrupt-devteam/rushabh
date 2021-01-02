<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sp_125 extends CI_Controller {
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
		$data['page_title']="Book appointment";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$data['bikes_scooters_list'] = $this->common->getAllRow('bikes_scooters',' ORDER BY id ASC');
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/manage_bikes_scooters',$data);
		$this->load->view('admin/footer');
	}
	
   
  public function add()
	{
	$data['page_title']="Book appointment";
	if(!$this->session->userdata('apple_adminusr')){	
	  redirect("admin/secure");
	}
	
	if($this->input->post('submit'))
	{
		$data_in['type'] = $this->input->post('type');
		$data_in['name'] = $this->input->post('name');
		$data_in['description'] = $this->input->post('description');
		$data_in['created_at']	= 	date('Y-m-d H:i:s');				

		$this->common->insertRecord('bikes_scooters', $data_in);					
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
				$this->db->update('bikes_scooters',$data_to_store); 
            }
	    }
		print '<script>alert("Record added successfully");
				window.location.href = "'.base_url().'admin/manage_bikes_scooters";
				</script>';
	}
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar',$data);                      
	$this->load->view('admin/add_bikes_scooters',$data);
	$this->load->view('admin/footer');
	}



	public function edit()
	{
		$data['page_title']="Book appointment";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$id = $this->uri->segment(4);
		$data['bikes_scooters'] = $this->common->getOneRow('bikes_scooters',"WHERE id='".$id."'");

		if($this->input->post('submit'))
		{
			$data_in['type'] = $this->input->post('type');
			$data_in['name'] = $this->input->post('name');
			$data_in['description'] = $this->input->post('description');
			$data_in['updated_at']	= 	date('Y-m-d H:i:s');				

			$this->common->updateRecord('bikes_scooters',$data_in,"id = ". $id);

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
					$this->db->update('bikes_scooters',$data_to_store); 
	            }
		    }
			print '<script>alert("Record updated successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/edit_bikes_scooters',$data);
		$this->load->view('admin/footer');
	}


	function delete()
	{ 
		$id = $this->uri->segment(4);		
		$this->db->where('id', $id);
		$this->db->delete('bikes_scooters');
		print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
	}


	public function manage_specification()
	{

		$id = $this->uri->segment(4);
		
		$data['page_title']="Book appointment";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		

		$data['bikes_scooters'] = $this->common->getOneRow('bikes_scooters',"WHERE id='".$id."'");
		$data['specifications'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$id."' order by id asc");
		

		if($this->input->post('submit'))
		{
			$bike_scooter_id = $this->input->post('id');
			
			$specifications = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$bike_scooter_id[0]."'");
			/*$list = $this->input->post('list');*/
			$details = $this->input->post('details');
			$bikesid = $this->input->post('bikesid');
			
			$count = count($bike_scooter_id);

			for($i=0; $i<$count; $i++){
				
				$data = array(
		           'id' => $bikesid[$i], 
		           /*'list' => $list[$i],*/
		           'details' => $details[$i],
		           'details' => $details[$i]
		        );
		    $this->db->where('id',$bikesid[$i])->update('specifications',$data);
			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
				
			}		
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/manage_specification',$data);
		$this->load->view('admin/footer');
	}



	public function getBikeScooters()
	{
		
		$type = $this->input->post('type');
		
		$data = $this->common->getAllRow('pages',"WHERE type='".$type."'");
		//print_r($data); die;

		echo json_encode($data);

	}
   
}
   
   
   
	
				
			
	
	
	
