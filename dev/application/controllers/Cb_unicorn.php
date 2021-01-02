<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cb_unicorn extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }
    
	public function index()
	{
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = ' Honda CB Unicorn price in Nashik | Rushabh Honda ';
		$data['pgKeywords'] = 'Honda CB Unicorn, Bike, CB Uncorn Price, Features of CB Unicorn.';
		$data['pgDesc'] = 'Checkout Honda CB Unicorn price in Nashik exclusively at Rushabh Honda. Browse the inventory with best models available. Book now!';
		
		$data['cbunicorn_details'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" and name="New Unicorn BS-VI" ORDER BY id DESC');

		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='3' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='3' AND type='Engine' order by id asc");
		$data['transmission'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='3' AND type='Transmission' order by id asc");
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='3' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='3' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='3' AND type='Electricals' order by id asc");

		$data['colour'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='3' order by id asc");
		$this->load->view('header',$data);
		$this->load->view('cb-unicorn',$data);
		$this->load->view('footer');
	}
}
