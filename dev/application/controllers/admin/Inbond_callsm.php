<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbond_callsm extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->original_path = realpath(APPPATH.'../assets/admin/post_image/');
		$this->load->model('inbond_calls_model','inbond_calls');
		$this->load->library('excel');
    }
    
	

	public function index()
	{
		$data['page_title']="Inbond_calls";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$data['inbond_calls_list'] = $this->common->getAllRow('inbond_calls','where location="Mumbai Naka" ORDER BY id DESC');
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_m',$data);
		$this->load->view('admin/footer');
	}


	public function add_m()
	{
		$this->load->library('excel');
		$data['page_title']="Inbond Calls";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		if($this->input->post('submit'))
		{
			$data_in['title'] = $this->input->post('title');
			$data_in['location'] = 'Mumbai Naka';
			$data_in['created_at']	= 	date('Y-m-d H:i:s');				

			$this->common->insertRecord('inbond_calls', $data_in);					
			$inbond_id = $this->db->insert_id();

			if (!empty($_FILES['userfile']['name'])) {
		        $this->load->library('image_lib');
		        /*$path = ROOT_UPLOAD_IMPORT_PATH;
		        print_r($path); die;*/
				$config['upload_path'] = realpath(APPPATH.'../assets/admin/post_image/'.'/');
				$config['allowed_types'] = '*';//text/plain|text|csv|csv
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('userfile'))
				{
					$error = array('error' => $this->upload->display_errors());
					$data['flash_message'] = TRUE;
				}
				else
				{
					
					$data = array('userfile' => $this->upload->data());
					$this->image_lib->initialize($config);
					$data['flash_message'] = FALSE;
					$data_to_store['file'] = $data['userfile']['file_name'];
					//print_r($data_to_store['file']); die;
					$this->db->where('id',$inbond_id);
					$this->db->update('inbond_calls',$data_to_store);


					//https://www.webslesson.info/2018/04/how-to-import-excel-data-into-mysql-database-using-codeigniter.html

					//https://techarise.com/import-excel-file-mysql-codeigniter/

					//https://makitweb.com/how-to-import-data-in-mysql-with-codeigniter/

					//https://webprepration.com/import-excel-file-mysql-using-codeigniter/

					//$inputFileName = $this->original_path . $data_to_store['file'];
					
					//$this->load->library('excel');
					//$inputFileName = $_FILES['userfile']['name'];
					
					$inputFileName = $config['upload_path'] .'/'. $data_to_store['file'];

					try {
						
		                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		                	//print_r($inputFileType); die;
		                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
		                //print_r($objReader); die;
		                $objPHPExcel = $objReader->load($inputFileName);
		               
		            } catch (Exception $e) {
		            	
		                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
		                        . '": ' . $e->getMessage());
		            }
		           
		            $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);//null, true, true, true
		           
		            $arrayCount = count($allDataInSheet);

		            $flag = 0;
		            $createArray = array('Inbond id','Enquiry Date','DMS Enquiry Number','Customer Name','Phone No', 'Model','Source','Location/Channel','Status','Next Followup Date','Remark','Created date');//, 
		            $makeArray = array('Inbond id'=>'Inbond id','Enquiry Date' => 'Enquiry Date','DMS Enquiry Number' => 'DMS Enquiry Number','Customer Name' => 'Customer Name','Phone No' => 'Phone No','Model'=>'Model','Source' => 'Source','Location/Channel' => 'Location/Channel','Status' => 'Status', 'Next Followup Date' => 'Next Followup Date','Remark' => 'Remark','Created date'=>'Created date');//, 

		            $SheetDataKey = array();
		            foreach ($allDataInSheet as $dataInSheet) {

		                foreach ($dataInSheet as $key => $value) {
		                	 
		                    if (in_array(trim($value), $createArray)) {

		                        $value = preg_replace('/\s+/', ' ', $value);
		                        $SheetDataKey[trim($value)] = $key;

		                    } else {
		                        
		                    }
		                }
		            }
		          

	                for ($i = 2; $i <= $arrayCount; $i++) {

	                    $inbond_id = $inbond_id;
	                    $created_date = date('Y-m-d H:i:s');
	                    $enquiry_date = $SheetDataKey['Enquiry Date'];
	                    $enquiry_no = $SheetDataKey['DMS Enquiry Number'];
	                    $name = $SheetDataKey['Customer Name'];
	                    $mobile = $SheetDataKey['Phone No'];
	                    $model = $SheetDataKey['Model'];
	                    $source = $SheetDataKey['Source'];
	                    $city = $SheetDataKey['Location/Channel'];
	                    $status = $SheetDataKey['Status'];
	                    $follow_up_date = $SheetDataKey['Next Followup Date'];
	                    $remark = $SheetDataKey['Remark'];


	                    $inbond_id = $inbond_id;
	                    $created_date = $created_date;
	                    $enquiry_date = filter_var(trim($allDataInSheet[$i][$enquiry_date]), FILTER_SANITIZE_STRING);
	                    $enquiry_no = filter_var(trim($allDataInSheet[$i][$enquiry_no]), FILTER_SANITIZE_EMAIL);
	                    $name = filter_var(trim($allDataInSheet[$i][$name]), FILTER_SANITIZE_STRING);
	                    $mobile = filter_var(trim($allDataInSheet[$i][$mobile]), FILTER_SANITIZE_STRING);

	                    $model = filter_var(trim($allDataInSheet[$i][$model]), FILTER_SANITIZE_STRING);
	                    $source = filter_var(trim($allDataInSheet[$i][$source]), FILTER_SANITIZE_STRING);
	                    $city = filter_var(trim($allDataInSheet[$i][$city]), FILTER_SANITIZE_STRING);
	                    $status = filter_var(trim($allDataInSheet[$i][$status]), FILTER_SANITIZE_STRING);
	                    $follow_up_date = filter_var(trim($allDataInSheet[$i][$follow_up_date]), FILTER_SANITIZE_STRING);
	                    $remark = filter_var(trim($allDataInSheet[$i][$remark]), FILTER_SANITIZE_STRING);
	                    
	                    $fetchData[] = array('inbond_id' => $inbond_id,'created_at' => $created_date,'enquiry_date' => $enquiry_date, 'enquiry_no' => $enquiry_no,'name' => $name,'mobile' => $mobile, 'model'=>$model,'source'=>$source, 'city'=>$city, 'status'=>$status, 'follow_up_date'=>$follow_up_date,'remarks'=>$remark);//
	                }              
	               // print_r($fetchData); die;
	                $data['inbound_data'] = $fetchData;
	                $this->inbond_calls->setBatchImport($fetchData);
	                $this->inbond_calls->insert_inboundData();
	            }
		    }

			print '<script>alert("Record added successfully");
					window.location.href = "'.base_url().'admin/inbond_callsm";
					</script>';
				
		}
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/add_m',$data);
		$this->load->view('admin/footer');
	}

	public function view_info()
	{
		$data['page_title']="Inbond_calls";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$id = $this->uri->segment(4);

		$data['inbond_calls_list'] = $this->common->getAllRow('inbond_calls_mumbai_naka','where inbond_id="'.$id.'" && name!=" " ');
		//print_r($data['inbond_calls_list']); die;
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_infom',$data);
		$this->load->view('admin/footer');
	}
	

    
 	function delete()
	{ 
		$id = $this->uri->segment(4);		
		$delete = $this->db->where('id', $id)->delete('inbond_calls');

		if($delete){
			$this->db->where('inbond_id', $id)->delete('inbond_calls_mumbai_naka');	

			print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/inbond_callsm";
					</script>';
		}
		
	}
   
}
   
   
   
	
				
			
	
	
	
