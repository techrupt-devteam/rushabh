<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['sp-125'] = 'sp_125';
$route['shine-disc-bsvi'] = 'shine_disc_bsvi';
$route['cb-unicorn'] = 'cb_unicorn';
$route['cd-110-dream'] = 'cd_110_dream';
$route['hornet2-0'] = 'hornet2_0';
$route['x-blade'] = 'x_blade';
$route['dio-BS-VI'] = 'dio_BS_VI';
$route['activa-6g'] = 'activa_6g';
$route['activa-125-bs-vi'] = 'activa_125_bs_vi';
$route['grazia-125'] = 'grazia_125';
$route['our-workshop-locations'] = 'our_workshop_locations';
$route['book-your-service'] = 'book_your_service';
$route['online-booking'] = 'online_booking';
$route['contact-us'] = 'contact_us';
$route['download-e-brochure'] = 'download_e_brochure';
$route['honda-shield'] = 'honda_shield';
$route['honda-genuine-engine-oil'] = 'honda_genuine_engine_oil';
$route['genuine-parts'] = 'genuine_parts';
$route['book-an-appointment'] = 'book_an_appointment';
$route['thank-you'] = 'thank_you';


$route['bikes-scooters-details/index/(:any)'] = 'bikes_scooters_details/index/$1';

$route['cd_110_dream'] = 'home';
$route['activa_6g'] = 'home';
$route['book_your_service'] = 'home';
$route['activa_125_bs_vi'] = 'home';
$route['sp_125'] = 'home';
$route['shine_disc_bsvi'] = 'home';
$route['dio_BS_VI'] = 'home';
$route['download_e_brochure'] = 'home';
$route['cb_unicorn'] = 'home';
$route['online_booking'] = 'home';
$route['dio_BS_VI'] = 'home';
$route['bikes-scooters-details/(:any)'] = 'bikes_scooters_details/index/$1';
$route['admin/manage_specification/(:any)'] = 'admin/manage_specification/index/$1';
$route['admin/manage_specification_details/(:any)'] = 'admin/manage_specification_details/index/$1';
$route['admin/manage_available_colour/(:any)'] = 'admin/manage_available_colour/index/$1';
//$route['payment/(:any)/(:any)'] = "payment/get_curl_handle/$1/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
