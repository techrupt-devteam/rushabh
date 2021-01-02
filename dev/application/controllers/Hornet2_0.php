<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hornet2_0 extends CI_Controller {

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
		$data['title'] = 'Hornet bike price in nashik | Rushabh Honda';
		$data['pgKeywords'] = 'Hornet bike price in nashik | Rushabh Honda';
		$data['pgDesc'] = 'Available Honda Hornet 2.0 at reasonable price exclusively at Rushabh Honda, Nashik. Check features, images, price and more. Click for more info!';
		
		$data['hotnet2_details'] = $this->common->getAllRow('bikes_scooters','where type="Bikes" and name="HONDA HORNET 2.0" ORDER BY id DESC');
    
		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='7' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='7' AND type='Engine' order by id asc");
		$data['transmission'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='7' AND type='Transmission' order by id asc");
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='7' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='7' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='7' AND type='Electricals' order by id asc");

		$data['colour'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='7' order by id asc");
		
		$this->load->view('header',$data);
		$this->load->view('hornet2-0',$data);
		$this->load->view('footer');
	}
}
