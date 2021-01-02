<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dio_BS_VI extends CI_Controller {

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
		$data['title'] = 'Honda DIO BS-VI price in Nashik | Rushabh Honda ';
		$data['pgKeywords'] = 'dio price in nashik | honda dio | DIO BS-VI';
		$data['pgDesc'] = 'Rushabh Honda offers Honda Dio at best price in Nashik. Browse inventory with different Honda two-wheeler models and get your favorite model today!';
		
		$data['diobsvi_details'] = $this->common->getAllRow('bikes_scooters','where type="Scooters" and name="DIO BS VI" ORDER BY id DESC');

		$data['body_dimensions'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='8' AND type='Body Dimensions' order by id asc");
		$data['engine'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='8' AND type='Engine' order by id asc");
		$data['transmission'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='8' AND type='Transmission' order by id asc");
		$data['tyres_brakes'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='8' AND type='Tyres & brakes' order by id asc");
		$data['frame_suspension'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='8' AND type='Frame & Suspension' order by id asc");
		$data['electricals'] = $this->common->getAllRow('specifications',"WHERE bike_scooter_id='8' AND type='Electricals' order by id asc");

		$data['colour'] = $this->common->getAllRow('available_colour',"WHERE bike_scooter_id='8' order by id asc");
		$this->load->view('header',$data);
		$this->load->view('dio-BS-VI',$data);
		$this->load->view('footer');
	}
}
