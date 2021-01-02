<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class X_blade extends CI_Controller {

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
		$data['title'] = 'Honda X blade price in Nashik | Rushabh Honda | Two Wheeler';
		$data['pgKeywords'] = 'X blade price in Nashik | Honda X blade';
		$data['pgDesc'] = 'Honda X blade available in Nashik at most reasonable price only at Rushabh Honda. Checkout the newest Hobda models available. View now!';
		
		$data['xblade_details'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" and name="X-Blade" ORDER BY id DESC');

		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='5' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='5' AND type='Engine' order by id asc");
		$data['transmission'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='5' AND type='Transmission' order by id asc");
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='5' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='5' AND type='Electricals' order by id asc");

		$data['colour'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='5' order by id asc");
		
		
		$this->load->view('header',$data);
		$this->load->view('x-blade',$data);
		$this->load->view('footer');
	}
}
