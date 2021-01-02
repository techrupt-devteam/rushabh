<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nutridock_success extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index($id)
	{
	    //echo"1"; die;
	       /*
	       print_r($id); die;*/
	   $id = $this->uri->segment(3);
	   $webinar = $this->db->query("SELECT * FROM webinar WHERE id='$id'")->row();
	       $to = $webinar->email;
	       
	       $to_mobile = $webinar->mobile; 
	       
	   if($webinar)
       {
            $zoom_link = "https://zoom.us/j/99903943845?pwd=ZnEwNWkwUGhKK1ByQ3NHbVFQL2ZjUT09";
            
            $subject = 'Nutridock - Webinar';
            $headers = "From: admin@nutridock.com\r\n";//
            $headers .= "Reply-To: admin@nutridock.com\r\n";
            $headers .= "CC: it@techrupt.in\r\n";
            $headers .= "BCC: marketing@nutridock.com\r\n";
            $headers .= "BCC: it@sevagroup.co.in\r\n";
            $headers .= "BCC: urvashitikmani1310@gmail.com\r\n";
            $headers .= "BCC: geoshinsam@gmail.com\r\n";
            
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Nutridock - Webinar</title>
                </head>
                <span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">
                <strong>Hi '.$webinar->name.',</strong><br><br>
                Thank you for subscribing to this webinar. We are very pleased to have you on board. The webinar will get started at <b>5 pm on 19th September 2020.</b> <br><br>
                Well, we all agree that Good Food constitutes a Good Mood. Hence, we are here to educate you on how nutritious food can benefit your mood by supporting healthy communication in the brain, and reducing chronic inflammation. And ultimately, help you fight the daily stress. <br><br>

                <b>What you can expect in the webinar: </b><br>
                1. How the lack of nutrition affects our mental health ? <br> 
                2. Easy diets and daily habits.<br>
                3. Nutritional intake and its domination over depression.<br>
                4. The deafening claws of stress.<br>
                5. Practical tips on how to overcome stress, & much more…<br><br>

                <b>CLICK HERE TO JOIN </b><br><br>
                
                '.$zoom_link.';<br>
                
                Note: This link is unique to you and should not be shared with others in all proximity.<br><br> 
             
                You can join from a PC, Mac, iPad, iPhone or any other Android device, according to your convenience. <br><br>
             
                <b>Kindly remember a few things:</b><br>
                 1. Join 10-min in advance so that you do not miss on anything.<br> 
                 2. Use the chat feature, if you would like to ask any question.<br>
                 3. Close all the other tabs and set all your other devices aside, as we would like to have all of your attention for a better experience. <br><br>
             
                We hope you have a pleasant and knowledgeable experience with our experts following with 15-min live questions and answers round. <br><br>
             
                If you have any queries, kindly do not hesitate to reach out to us. <br><br>

                Thanks once again, and we cannot wait to see you at the webinar.<br><br> 
             
                
                <br><br>Regards,  <br>Team NutriDock<br></span></span><br /><br />
                            </html>';
            
            //$this->common->SmsMobileNutridockRegistration($id, $to_mobile);
            mail ('it@techrupt.in',"Nutridock Webinar - New registration received",$message,$headers);
            $this->common->SmsMobileNutridockRegistration2($id, $to_mobile);
       }
	    
	   
		$this->load->view('nutridock_success');
		//$this->load->view('footer');
	}

  
}
