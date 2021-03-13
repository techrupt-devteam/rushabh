<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offers extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('offers_model','offers');
		$this->original_path = realpath(APPPATH.'../assets/admin/post_image');
    }
    
	public function index()
	{
		$data['message']="";
		$data['page_title']="Book appointment";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$this->common->authorizeNew($this->session->userdata('apple_adminusr'));
		
		$ci =& get_instance();
		$cntr = $ci->router->class; 
		$data['offers_list'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		
		$data['message']="";
		    $this->load->view('admin/header',$data);
		    $this->load->view('admin/sidebar',$data);                      
			$this->load->view('admin/offers',$data);
			$this->load->view('admin/footer');
	}
	
	public function add_offers()
	{
		$data['message']="";
		$data['page_title']=" Add Offers";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		if($this->input->post('submit'))
		{
			$data_in['title'] = $this->input->post('title');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');				

			$this->common->insertRecord('offers', $data_in);					
			$slider_id = $this->db->insert_id();

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

					$this->db->where('id',$slider_id);
					$this->db->update('offers',$data_to_store); 
	            }
		    }
			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/offers";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/add_offers',$data);
		$this->load->view('admin/footer');
	}

  	public function delete()
	{ 
		$id 	=	$this->uri->segment(4);		
		$this->db->where('id', $id);
		$this->db->delete('offers');
		print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/offers";
					</script>';
	}

	public function view()
	{
		$data['message']="";
		$data['page_title']="Book appointment";
		
		$id = $this->uri->segment(4);
		$data['offer_item_data'] = $this->common->getAllRow('offer_item','where offer_id=9');
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}

		$this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_offers',$data);
		$this->load->view('admin/footer');
	}
}
   
   
   
	
				
			
	
	
	
