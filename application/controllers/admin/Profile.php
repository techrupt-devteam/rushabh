<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct(){
	    parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->original_path = realpath(APPPATH.'../assets/admin/post_image');
	}
		


	public function index()
	{
		$data['message']="";
		$data['page_title']="Change Password";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$id = $this->uri->segment(4);	

		$data['users_data'] = $this->common->getOneRow('users',"WHERE id='".$id."'");

		if($this->input->post('submit'))
		{
			$data_in['first_name']=$this->input->post('first_name');
			$data_in['last_name']=$this->input->post('last_name');
			$data_in['mobile_no']=$this->input->post('mobile_no');
			$data_in['email']=$this->input->post('email');

			$this->db->where('id',$id)->update('users',$data_in);

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



			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/secure/home";
					</script>';
		}
		
		$this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/profile',$data);
		$this->load->view('admin/footer');
}


}
