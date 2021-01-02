<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shine_disc_bsvi extends CI_Controller {

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
		$data['title'] = 'Shine Disc Price in Nashik | Rushabh Honda | Two Wheeler ';
		$data['pgKeywords'] = 'Honda CB Shine, Bike, Nashik';
		$data['pgDesc'] = 'Honda Shine Disc available at best price in Nashik at Rushabh Honda. Get prominent Two-wheeler models at reasonable prices. View Inventory today!';
		
		$data['shine_bs_vi_details'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" and name="Shine BS VI" ORDER BY id DESC');

		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='2' AND type='Body Dimensions' order by id asc");
		
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='2' AND type='Engine' order by id asc");
		$data['transmission'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='2' AND type='Transmission' order by id asc");
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='2' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='2' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='2' AND type='Electricals' order by id asc");

		$data['colour'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='2' order by id asc");
		$this->load->view('header',$data);
		$this->load->view('shine-disc-bsvi',$data);
		$this->load->view('footer');
	}
}
