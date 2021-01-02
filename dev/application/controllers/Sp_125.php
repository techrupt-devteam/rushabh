<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sp_125 extends CI_Controller {

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
		$data['title'] = 'Shine sp 125 price in Nashik | Honda Shine | Rushabh Honda';
		$data['pgKeywords'] = 'Shine sp 125 price in Nashik | Honda Shine sp 125';
		$data['pgDesc'] = 'Honda Shine sp 125 available in Nashik at low price. Checkout the most premium two-wheeler models at Rushabh Honda at best prices now.';

		//$data['sp125_details'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" and name="SP 125" ORDER BY id DESC');
		$data['sp125_details'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" and name="SP 125" ORDER BY id DESC');

		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Engine' order by id asc");
		$data['transmission'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Transmission' order by id asc");
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='1' AND type='Electricals' order by id asc");

		$data['colour'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='1' order by id asc");

		$this->load->view('header',$data);
		$this->load->view('sp-125',$data);
		$this->load->view('footer');
	}
}
