<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rushabh_winner extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }

	public function index()
	{
		$data['canonical'] = '.';
		//$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'Rushabh Winner | Rushabh Honda | Two Wheeler Dealers In Nashik';
		$data['pgKeywords'] = 'Honda bike dealer in Mumbai, Honda bike dealers in Mumbai, Honda bike dealers in Mumbai Naka,Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik. Honda bike dealers in Mumbai Naka, authorised Honda bike, Honda bike showroom Indira Nagar, Honda bike showroom in  Muambai Naka,Indira Nagar, Meri Mhasrul, Cidco Nashik, Honda Bike, Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealer in Mumbai Naka, Indira Nagar, Meri Mhasrul, Uttam Nagar Cidco, Nashik, Honda bike dealers in Nashik';
		$data['pgDesc'] = 'Contact Rushbah Honda easily online or call at 8888877649. Also, checkout newest Honda Two-wheeler easily online and book your favorite model today!';
		
		$this->load->view('rushabh-winner',$data);
	}

	public function winner()
	{
		$booking_id = $this->input->post('booking_id');
		$user_data = $this->db->query("SELECT booking.*, offer_item.* FROM booking INNER JOIN offer_item ON booking.offer_item_id = offer_item.offer_item_id where booking_id='$booking_id'")->result();
		$item = '';
		foreach($user_data as $row){
			$item = $row->item;
		}
		if($item){
			$data['msg'] = $item;
		}else{
			$data['msg'] = "empty";
		}
		echo json_encode($data);
	}
}
