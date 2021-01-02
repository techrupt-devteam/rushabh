<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_specification_details extends CI_Controller {
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
	    
		$id = $this->uri->segment(3);
		//print_r($id); die;
		$data['page_title']="Manage Specification";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		

		$data['bikes_scooters'] = $this->common->getOneRow('bikes_scooters',"WHERE id='".$id."'");
		$data['body_dimensions'] = $this->common->getAllRow('specifications_demo',"WHERE bike_scooter_id='".$id."' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$id."' AND type='Engine' order by id asc");
		

	if($this->input->post('submit'))
	{
	    $bike_scooter_id = $this->input->post('id');
	    if($data['body_dimensions']){
	        //echo"1"; die;
		    $this->db->where('bike_scooter_id', $bike_scooter_id[0]);
			$this->db->where('type', 'Body Dimensions');
			$this->db->delete('specifications_demo');   
	    }
			
		
		$list = $this->input->post('list');
		//$specifications = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$bike_scooter_id[0]."'");

		$details = $this->input->post('details');
		//$bikesid = $this->input->post('bikesid');
		$type = $this->input->post('type');
		$description = $this->input->post('description');
		$image_title = $this->input->post('image_title');
		$image_description = $this->input->post('image_description');
		$count = count($bike_scooter_id);
        
        
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
				$data_image = array('upload_data' => $this->upload->data());
				$this->image_lib->initialize($config);
				$data_image['flash_message'] = FALSE;
				$data_to_store['image'] = $data_image['upload_data']['file_name'];

				for($i=0; $i<$count; $i++){
				$data = array(
		           //'id' => $bikesid[$i], 
		           'bike_scooter_id' => $bike_scooter_id[$i], 
		           'details' => $details[$i],
		           'type' => $type[$i],
		           'list' => $list[$i],
		           'image'=>$data_to_store['image'],
		           'image_title'=>$image_title,
		           'image_description'=>$image_description,
		           'description' => $description
		        );
		       
		    	//$this->db->where('id',$bikesid[$i])->update('specifications',$data);
		    	
		    	$this->common->insertRecord('specifications_demo',$data);
            }
	    }
		print '<script>alert("Record added successfully");
				window.location.href = "'.base_url().'admin/manage_bikes_scooters";
				</script>';
		}		
	}

		if($this->input->post('submit_engine'))
		{

			$bike_scooter_id = $this->input->post('bike_scooter_id');
			//print_r($bike_scooter_id); die;
			$engine_data = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$bike_scooter_id[0]."' AND type='Engine'");
			//print_r($engine_data); die;

			if($engine_data){
				$this->db->where('bike_scooter_id', $bike_scooter_id[0]);
				$this->db->where('type', 'Engine');
				$this->db->delete('specifications');
			}

			$list = $this->input->post('list');
			$details = $this->input->post('details');
			//$bikesid = $this->input->post('bikesid');
			$type = $this->input->post('type');
			
			$count = count($bike_scooter_id);
			//print_r($list); die;
			for($i=0; $i<$count; $i++){
				
				$data = array(
		           'bike_scooter_id' => $bike_scooter_id[$i], 
		           'list' => $list[$i],
		           'details' => $details[$i],
		           'type' => $type[$i]
		        );
		    //$this->db->where('id',$bikesid[$i])->update('specifications',$data);
			$this->db->insert('specifications',$data);

			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
				
			}		
		}

		if($this->input->post('submit_transmission'))
		{

			$bike_scooter_id = $this->input->post('bike_scooter_id');
			//print_r($bike_scooter_id); die;
			$transmission_data = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$bike_scooter_id[0]."' AND type='Transmission'");

			if($transmission_data){
				//echo"1"; die;
				$this->db->where('bike_scooter_id', $bike_scooter_id[0]);
				$this->db->where('type', 'Transmission');
				$this->db->delete('specifications');
			}
			$list = $this->input->post('list');
			$details = $this->input->post('details');
			//$bikesid = $this->input->post('bikesid');
			$type = $this->input->post('type');
			
			$count = count($bike_scooter_id);
			//print_r($list); die;
			for($i=0; $i<$count; $i++){
				
				$data = array(
		           'bike_scooter_id' => $bike_scooter_id[$i], 
		           'list' => $list[$i],
		           'details' => $details[$i],
		           'type' => $type[$i]
		        );
		    //$this->db->where('id',$bikesid[$i])->update('specifications',$data);
			$this->db->insert('specifications',$data);

			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
				
			}		
		}

		if($this->input->post('submit_tyres_brakes'))
		{

			$bike_scooter_id = $this->input->post('bike_scooter_id');
			//print_r($bike_scooter_id); die;
			//$specifications = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$bike_scooter_id[0]."'");
			$list = $this->input->post('list');
			$details = $this->input->post('details');
			//$bikesid = $this->input->post('bikesid');
			$type = $this->input->post('type');
			
			$count = count($bike_scooter_id);
			//print_r($list); die;
			for($i=0; $i<$count; $i++){
				
				$data = array(
		           'bike_scooter_id' => $bike_scooter_id[$i], 
		           'list' => $list[$i],
		           'details' => $details[$i],
		           'type' => $type[$i]
		        );
		    //$this->db->where('id',$bikesid[$i])->update('specifications',$data);
			$this->db->insert('specifications',$data);

			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
				
			}		
		}

		if($this->input->post('submit_frame_suspension'))
		{
			$bike_scooter_id = $this->input->post('bike_scooter_id');
			//print_r($bike_scooter_id); die;
			//$specifications = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$bike_scooter_id[0]."'");
			$list = $this->input->post('list');
			$details = $this->input->post('details');
			//$bikesid = $this->input->post('bikesid');
			$type = $this->input->post('type');
			
			$count = count($bike_scooter_id);
			//print_r($list); die;
			for($i=0; $i<$count; $i++){
				
				$data = array(
		           'bike_scooter_id' => $bike_scooter_id[$i], 
		           'list' => $list[$i],
		           'details' => $details[$i],
		           'type' => $type[$i]
		        );
		    //$this->db->where('id',$bikesid[$i])->update('specifications',$data);
			$this->db->insert('specifications',$data);

			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
				
			}		
		}

		if($this->input->post('submit_electricals'))
		{
			$bike_scooter_id = $this->input->post('bike_scooter_id');
			//print_r($bike_scooter_id); die;
			//$specifications = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$bike_scooter_id[0]."'");
			$list = $this->input->post('list');
			$details = $this->input->post('details');
			//$bikesid = $this->input->post('bikesid');
			$type = $this->input->post('type');
			
			$count = count($bike_scooter_id);
			//print_r($list); die;
			for($i=0; $i<$count; $i++){
				
				$data = array(
		           'bike_scooter_id' => $bike_scooter_id[$i], 
		           'list' => $list[$i],
		           'details' => $details[$i],
		           'type' => $type[$i]
		        );
		    //$this->db->where('id',$bikesid[$i])->update('specifications',$data);
			$this->db->insert('specifications',$data);

			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
				
			}		
		}


	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/manage_specification_details',$data);
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
   
   
   
	
				
			
	
	
	
