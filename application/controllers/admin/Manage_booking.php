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
		$query = $this->db->select('booking.*,offer_item.*,booking.status as delivery_status')->from('booking')->join('offer_item', 'booking.offer_item_id = offer_item.offer_item_id','left')->get();
		$data['booking_list'] = $query->result_array();
		
		$data['offer_item_list'] = $this->common->getAllRow('offer_item',' ORDER BY offer_item_id ASC');

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
		$this->common->updateRecord('booking',$data_in,"id = ". $data_in['id']);
		$message = ['success','Status updated successfully'];
		echo json_encode($message);
	}

	public function saveofferdata()
	{
		$message = '';
		$data_in['id'] = $this->input->post('id');
		$data_in['offer_status'] = $this->input->post('offer_status');
		$offer_id = $this->input->post('offer_id');

		if($data_in['offer_status'] == 'Delivered'){
			$offer_data = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
        	foreach($offer_data as $row){
          	$delivery_qty_value = $row->delivery_qty;
          	$allocated_offer_qty_value = $row->allocated_offer_qty;
        	}
        	$value['delivery_qty'] = $delivery_qty_value + 1;	
        	$this->common->updateRecord('offer_item',$value,"offer_item_id = ". $offer_id);
		}elseif($data_in['offer_status'] == 'Non Delivered'){
			$offer_data = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
        	foreach($offer_data as $row){
          	$delivery_qty_value = $row->delivery_qty;
          	$allocated_offer_qty_value = $row->allocated_offer_qty;
        	}
        	$value['delivery_qty'] = $delivery_qty_value - 1;	
        	$this->common->updateRecord('offer_item',$value,"offer_item_id = ". $offer_id);
		}

		$this->common->updateRecord('booking',$data_in,"id = ". $data_in['id']);
		$message = ['success','Offer status updated successfully'];
		echo json_encode($message);
	}

	public function export_offer()
	{
		$query = $this->db->select('booking.*,offer_item.*')->from('booking')->join('offer_item', 'booking.offer_item_id = offer_item.offer_item_id')->where('offer_item.offer_item_id <>','0')->get();
		$data['booking_list'] = $query->result_array();
		$this->load->view('admin/booking_offer_export',$data);
	}
}
   
   
   
	
				
			
	
	
	
