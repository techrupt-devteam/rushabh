<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbond_calls extends CI_Controller {
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
		$data['page_title']="Inbond_calls";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$data['inbond_calls_list'] = $this->common->getAllRow('inbond_calls',' ORDER BY id DESC');
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/inbond_calls',$data);
		$this->load->view('admin/footer');
	}

	public function add()
	{
		$data['page_title']="Inbond Calls";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		if($this->input->post('submit'))
		{
			$data_in['title'] = $this->input->post('title');
			$data_in['location'] = $this->input->post('location');
			$data_in['created_at']	= 	date('Y-m-d H:i:s');				

			$this->common->insertRecord('inbond_calls', $data_in);					
			$inbond_id = $this->db->insert_id();

			if (!empty($_FILES['file']['name'])) {
		        $this->load->library('image_lib');
				$config['upload_path'] = $this->original_path;
				$config['allowed_types'] = '*';
				$config['encrypt_name'] = TRUE;
				
				$this->load->library('upload', $config);
				$id = $this->db->insert_id();

				if ( ! $this->upload->do_upload('file'))
				{
					$error = array('error' => $this->upload->display_errors());
					$data['flash_message'] = TRUE;
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());					
					$this->image_lib->initialize($config);
					$data['flash_message'] = FALSE;
					$data_to_store['file'] = $data['upload_data']['file_name'];

					//print_r($data_to_store['file']); die;
					$this->db->where('id',$id);
					$this->db->update('inbond_calls',$data_to_store); 
	            }
		    }

		    /*Location Mumbai Naka*/
		    if($data_in['location']=='Mumbai Naka'){
		    if($inbond_id)
		    {
			    $filename=$_FILES["file"]["tmp_name"];
					if ($_FILES["file"]["size"] > 0) {
			        //$this->load->library('image_lib');
			        $file = fopen($filename, "r");

			        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
			        {
			            $sql = $this->db->query("INSERT into inbond_calls_mumbai_naka (inbond_id,name,enquiry_no) 
			               values ('".$inbond_id."','".$getData[0]."','".$getData[1]."')");
			           
			            if(!isset($sql))
			            {
			                echo "<script type=\"text/javascript\">
			                        alert(\"Invalid File:Please Upload CSV File.\");
			                        window.location = \"index.php\"
			                      </script>";       
			            }
			            else {
			                  
			            	print '<script>alert("CSV File has been successfully imported.");
							window.location.href = "'.base_url().'admin/inbond_calls";
							</script>';
			            }
			        }
					fclose($file); 
			    }
		    }
		}	

		 /*Location Uttam Nagar*/
		    else if($data_in['location']=='Uttam Nagar'){
		    if($inbond_id)
		    {
			    $filename=$_FILES["file"]["tmp_name"];
					if ($_FILES["file"]["size"] > 0) {
			        //$this->load->library('image_lib');
			        $file = fopen($filename, "r");

			        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
			        {
			            $sql = $this->db->query("INSERT into inbond_calls_uttam_nagar (inbond_id,name,enquiry_no) 
			               values ('".$inbond_id."','".$getData[0]."','".$getData[1]."')");
			           
			            if(!isset($sql))
			            {
			                echo "<script type=\"text/javascript\">
			                        alert(\"Invalid File:Please Upload CSV File.\");
			                        window.location = \"index.php\"
			                      </script>";       
			            }
			            else {
			                  
			            	print '<script>alert("CSV File has been successfully imported.");
							window.location.href = "'.base_url().'admin/inbond_calls";
							</script>';
			            }
			        }
					fclose($file); 
			    }
		    }
		}

			
						
			
			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/inbond_calls";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/add_inbond_calls',$data);
		$this->load->view('admin/footer');
	}

	public function edit()
	{
		$data['page_title']="Inbond Calls";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$id = $this->uri->segment(4);
		$data['inbond_data'] = $this->common->getOneRow('inbond_calls',"WHERE id='".$id."'");

		if($this->input->post('submit'))
		{
			$data_in['name']=$this->input->post('name');
			$data_in['enquiry_no']=$this->input->post('enquiry_no');
			$data_in['date']=$this->input->post('date');
			$data_in['mobile']=$this->input->post('mobile');
			$data_in['source']=$this->input->post('source');
			$data_in['model']=$this->input->post('model');

			$data_in['city']=$this->input->post('city');
			$data_in['contact_to']=$this->input->post('contact_to');
			$data_in['status']=$this->input->post('status');
			$data_in['follow_up_date']=$this->input->post('follow_up_date');
			$data_in['remarks']=$this->input->post('remarks');

			$data_in['updated_at']	= 	date('Y-m-d H:i:s');			

			$this->common->updateRecord('inbond_calls',$data_in,"id = ". $id);

			
			print '<script>alert("Record updated successfully");
					window.location.href = "'.base_url().'admin/inbond_calls";
					</script>';
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/edit_inbond_calls',$data);
		$this->load->view('admin/footer');
	}
	

    function export(){
		$data['book_appointment_list'] = $this->common->getAllRow('book_appointment','order BY id DESC');
		$this->load->view('admin/book_appointment_export',$data);
	}
   
 	function delete()
	{ 
		$id = $this->uri->segment(4);		
		$this->db->where('id', $id);
		$this->db->delete('inbond_calls');
		print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/Inbond_calls";
					</script>';
	}
   
}
   
   
   
	
				
			
	
	
	
