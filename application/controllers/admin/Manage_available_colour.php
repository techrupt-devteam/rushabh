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
		$id = $this->uri->segment(3);
		//print_r($id); die;
		$data['page_title']="Manage Specification";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		

		
		$data['available_colour_data'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='".$id."' order by id asc");
		
		

		if($this->input->post('submit'))
		{
			$bike_scooter_id = $this->input->post('id');
			
			$specifications = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$bike_scooter_id[0]."'");

			/*$list = $this->input->post('list');*/
			$details = $this->input->post('details');
			$bikesid = $this->input->post('bikesid');
			$type = $this->input->post('type');
			//print_r($type); die;
			$count = count($bike_scooter_id);

			for($i=0; $i<$count; $i++){
				
				$data = array(
		           'id' => $bikesid[$i], 
		           /*'list' => $list[$i],*/
		           'details' => $details[$i],
		           'type' => $type[$i]
		        );
		    $this->db->where('id',$bikesid[$i])->update('specifications',$data);
			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/manage_bikes_scooters";
					</script>';
				
			}		
		}

	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_available_colour',$data);
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
   
   
   
	
				
			
	
	
	
