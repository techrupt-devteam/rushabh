<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bikes_scooters_details extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
		$id = $this->uri->segment(2);
		
		$data['bikes_data'] = $this->common->getAllRow('bikes_scooters','where id="'.$id.'" ORDER BY id ASC');
		$data['body_dimensions'] = $this->common->getAllRow('specifications','WHERE bike_scooter_id="'.$id.'" AND type="Body Dimensions" order by id asc');

		
		$data['engine'] = $this->common->getAllRow('specifications','WHERE bike_scooter_id="'.$id.'" AND type="Engine" order by id asc');
		$data['transmission'] = $this->common->getAllRow('specifications','WHERE bike_scooter_id="'.$id.'" AND type="Transmission" order by id asc');
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$id."' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$id."' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='".$id."' AND type='Electricals' order by id asc");
		$data['colour'] = $this->common->getAllRow('available_colour','WHERE bike_scooter_id="'.$id.'" order by id asc');


		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		$data['bikes'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" ORDER BY id ASC');
		$data['scooters'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" ORDER BY id ASC');
		$data['title'] = 'Bodyshop in Nashik | Honda Bike Loan - Rushabh Honda';
		$data['pgKeywords'] = 'Honda Bike Finance in Nashik. We offer the Cheapest Honda Bike Finance services. Get Honda Car Loan in Bike at Cheapest Interest Rate from Rushabh Honda.';
		
		$data['pgDesc'] = 'Honda Genuine Engine Oil';
		$this->load->view('header',$data);
		$this->load->view('bikes-scooters-details',$data);
		$this->load->view('footer');
	}
}
