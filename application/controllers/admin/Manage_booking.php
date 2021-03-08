<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_booking extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('manage_booking_model','manage_booking');
    }
    
	public function index()
	{
		$data['page_title']="Manage Booking";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		//$data['booking_list'] = $this->common->getAllRow('booking',' ORDER BY id DESC');
		$query = $this->db->select('booking.*,offer_item.*')->from('booking')->join('offer_item', 'booking.offer_item_id = offer_item.offer_item_id','left')->get();
		$data['booking_list'] = $query->result_array();
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/manage_booking',$data);
		$this->load->view('admin/footer');
	}
	
    function export(){
		$data['booking_list'] = $this->common->getAllRow('booking','order BY id DESC');
		$this->load->view('admin/booking_export',$data);
	}
   	
   	public function view_booking()
	{
		$id = base64_decode($this->uri->segment(4));
		$data['page_title']="Manage Booking";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$data['booking'] = $this->common->getAllRow('booking','where id='.$id.' ORDER BY id DESC');
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/view_booking',$data);
		$this->load->view('admin/footer');
	}
   
    public function savedata()
	{
		$message = '';
		$data_in['id']=$this->input->post('id');
		$data_in['status']=$this->input->post('status');
		
		//$this->common->insertRecord('booking', $data_in);	
		$this->common->updateRecord('booking',$data_in,"id = ". $data_in['id']);

		$message = ['success','Status updated successfully'];
		echo json_encode($message);
	}

	public function export_offer()
	{
		$query = $this->db->select('booking.*,offer_item.*')->from('booking')->join('offer_item', 'booking.offer_item_id = offer_item.offer_item_id')->where('offer_item.offer_item_id <>','0')->get();
		$data['booking_list'] = $query->result_array();
		$this->load->view('admin/booking_offer_export',$data);
	}
}
   
   
   
	
				
			
	
	
	
