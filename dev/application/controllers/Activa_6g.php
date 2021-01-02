<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activa_6g extends CI_Controller {

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
		$data['title'] = 'Honda Activa 6g price in Nashik |  Rushabh Honda';
		$data['pgKeywords'] = 'Activa 6g price in nashik | honda activa 6g, Rushabh Honda Nashik';
		$data['pgDesc'] = 'Looking for Honda Activa 6g in Nashik? Here is Rushabh Honda with Hondas best two-wheeler model inventory. Browse today!';
		
		$data['activa6g_details'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" and name="Activa 6g" ORDER BY id DESC');

		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='9' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='9' AND type='Engine' order by id asc");
		$data['transmission'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='9' AND type='Transmission' order by id asc");
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='9' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='9' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='9' AND type='Electricals' order by id asc");

		$data['colour'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='9' order by id asc");
		
		$this->load->view('header',$data);
		$this->load->view('activa-6g',$data);
		$this->load->view('footer');
	}
}
