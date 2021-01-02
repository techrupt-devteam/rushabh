<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cd_110_dream extends CI_Controller {

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
		$data['title'] = 'Honda CD dream 110 price in Nashik | Rushabh Honda';
		$data['pgKeywords'] = 'Honda CD110 Dream, Bike';
		$data['pgDesc'] = 'Review Honda CD Dream 110 price in Nashik easily on Rushabh Honda. Look for best Honda models with specifications mentioned. View more!';
		
		$data['cd110_dream_details'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" and name="CD 110 Dream" ORDER BY id DESC');
    
		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='4' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='4' AND type='Engine' order by id asc");
		$data['transmission'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='4' AND type='Transmission' order by id asc");
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='4' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='4' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='4' AND type='Electricals' order by id asc");

		$data['colour'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='4' order by id asc");
		
		$this->load->view('header',$data);
		$this->load->view('cd-110-dream',$data);
		$this->load->view('footer');
	}
}
