<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webinar extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('webinar_model','webinar');
    }
    
	public function index()
	{
		$data['page_title']="Webinar";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		$data['webinar_list'] = $this->common->getAllRow('webinar',' ORDER BY id DESC');
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/webinar',$data);
		$this->load->view('admin/footer');
	}
	
   /* function export(){
		$data['booking_list'] = $this->common->getAllRow('booking','order BY id DESC');
		$this->load->view('admin/webinar_export',$data);
	}*/
   	
   	public function view()
	{
		$id = base64_decode($this->uri->segment(4));
		$data['page_title']="Webianr email";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		$data['arr_data'] = $this->common->getAllRow('webinar','where payment_status="Paid" ORDER BY id DESC');
		
		$data['arr_pending_data'] = $this->common->getAllRow('webinar','where payment_status="Paid" ORDER BY id DESC');
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/webinar-email',$data);
		$this->load->view('admin/footer');
	}
	
	
	public function webinar_view()
	{
		$id = $this->uri->segment(4);
		//print_r($id); die;
		$data['page_title']="Webianr View";
		if(!$this->session->userdata('apple_adminusr')){	
		  redirect("admin/secure");
		}
		
		//$data['webinar_data'] = $this->common->getAllRow('webinar','where id=$id ORDER BY id DESC');
		$data['webinar_data'] = $this->common->getOneRow('webinar',"WHERE id='".$id."'");
		
		//print_r($data['webinar_data']); die;
		//$data['webinar_data'] = $this->common->getAllRow('webinar','where payment_status="Paid" ORDER BY id DESC');
		
	    $this->load->view('admin/header',$data);
	    $this->load->view('admin/sidebar',$data);                      
		$this->load->view('admin/webinar_view',$data);
		$this->load->view('admin/footer');
	}
	
	
	public function send_email()
	{
	
		$arr_data['zoom_link']		=	$this->input->post('zoom_link');	
		$arr_data['title']		=	$this->input->post('title');
		$name_data		=	$this->input->post('name');
	
		$email_multiple		=	$this->input->post('email_multiple');
        //$email_implode_value = 'laxmipagare99@gmail.com,webdeveloper@techrupt.in';
    
   	    $count_email_multiple = count($email_multiple);
   	    //print_r($count_email_multiple); die;
   	    
   	    for($i=0; $i<$count_email_multiple; $i++){
		//$email_implode_value = implode(",", $email_multiple);
		
      
        $to = $email_multiple[$i];
        
        $name = $name_data[$i];
		    
       $subject = "Your Nutrition Guide is inside!";
         $headers = "From: admin@nutridock.com\r\n";
        $headers .= "Reply-To: admin@nutridock.com\r\n";
        $headers .= "BCC: marketing@nutridock.com\r\n";
        $headers .= "BCC: it@sevagroup.co.in\r\n";
        $headers .= "BCC: urvashitikmani1310@gmail.com\r\n";
        $headers .= "BCC: geoshinsam@gmail.com\r\n";
        
        /*$headers = "From: webdeveloper@techrupt.in\r\n";
        $headers .= "Reply-To: webdeveloper@techrupt.in \r\n";
        $headers .= "CC: pagarelaxmi@gmail.com\r\n";
        $headers .= "BCC: laxmipagare1991@gmail.com\r\n"*/;

        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Your nutrition guide is inside!</title>
            </head>
            <body>
			   <span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">
			    <strong>Hi,'.$name.'</strong><br><br>
			    
			    We’re so excited to share the guide for <a href="https://nutridock.com/public/landing/pdf/Nutridock Guide.pdf">Creating Healthy Eating Habits </a> with you! <br><br>

Welcome to Nutridock. We’ve started with a passion to help people adopt a healthy lifestyle.<br><br>

Creating healthy eating habits is one of the most important skills you can give yourself for your overall wellbeing — especially if you want to feel your best in your daily life.<br><br>

But creating healthy eating habits that work for you 365 days a year can be challenging.<br><br>

Our philosophy is based on eating an abundance of whole foods that keep you satiated, supports digestion, keeps your focus sharp, and energy stabilized.<br><br>

It also includes practicing mindful eating that can help you tune into your body and create a more positive experience with food. <br><br>

And most importantly, we believe in giving you the skills you need in order to put those two things into practice in your daily life to make healthy eating easy and enjoyable. <br><br>

After you finish reading this guide, you’ll have a few steps you can practice to make your daily food choices a little easier, more mindful and more enjoyable. <br><br>

<b><a href="https://nutridock.com/public/landing/pdf/Nutridock Guide.pdf">Here’s the link to access the guide!</a></b><br>
Excited to be a part of your wellness journey! <br>
<br>
Team Nutridock.<br>

<a href="https://nutridock.com/public/landing/pdf/Nutridock Guide.pdf">Nutridock Guide</a>

			    
			    
			</body>
            </html>';
        mail($to, $subject, $message, $headers);
		
   	    }
		return redirect('/admin/webinar');
	}
	
	
	public function send_email_pending()
	{
		$arr_data['description'] =	$this->input->post('description');	
		$arr_data['title']		=	$this->input->post('title');	
	
		$email_multiple		=	$this->input->post('email_multiple');

		$email_implode_value = implode(",", $email_multiple);
		//print_r($email_implode_value); die;

		//$to = 'laxmipagare99@gmail.com,webdeveloper@techrupt.in';
        $to = $email_implode_value;
        
		if($to){
        $subject = $arr_data['title'];
        $headers = "From: admin@nutridock.com\r\n";//marketing@nutridock.com
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
            <title>Receipt</title>
            </head>
            <body>
			    <br><br> 
			 	'.$arr_data['description'].'
			    <br><br>Regards,  <br>Team NutriDock<br></span></span><br /><br />
			</body>
            </html>';
        mail($to, $subject, $message, $headers);
		}
		//Session::flash('error', 'Something went wrong.');
		return redirect('/admin/webinar');
	}
    
    
     function export(){
		$data['webinar_list'] = $this->common->getAllRow('webinar','order BY id DESC');
		$this->load->view('admin/webinar_export',$data);
	}
   
    public function delete()
	{
	    $id = $this->uri->segment(4);		
		$this->db->where('id', $id);
		$this->db->delete('webinar');
		print '<script>alert("Record deleted successfully");
					window.location.href = "'.base_url().'admin/webinar";
					</script>';
	}
   
    public function savedata()
	{
		$message = '';
		$data_in['id']=$this->input->post('id');
		$data_in['status']=$this->input->post('status');
		
		//$this->common->insertRecord('booking', $data_in);	
		$this->common->updateRecord('booking',$data_in,"id = ". $data_in['id']);

		$message = ['success','Status updated successfully'];
		echo json_encode($message);
	}
	
	
		
	/*public function send_email()
	{
	
		$arr_data['zoom_link']		=	$this->input->post('zoom_link');	
		$arr_data['title']		=	$this->input->post('title');	
	
		$email_multiple		=	$this->input->post('email_multiple');

		$email_implode_value = implode(",", $email_multiple);
		//print_r($email_implode_value); die;
        //print_r($email_implode_value); die;
		//$to = 'laxmipagare99@gmail.com,webdeveloper@techrupt.in';
        $to = $email_implode_value;
        
		if($to){
        $subject = $arr_data['title'];
        $headers = "From: admin@nutridock.com\r\n";//marketing@nutridock.com
        $headers .= "Reply-To: admin@nutridock.com\r\n";//it@sevagroup.co.in
        $headers .= "CC: marketing@nutridock.com\r\n";
        $headers .= "CC: it@sevagroup.co.in\r\n";
        $headers .= "CC: it@techrupt.in\r\n";
        
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Receipt</title>
            </head>
            <body>
			   <span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif">
			    <strong>Hi,</strong><br><br>
			    This is a <b>reminder</b> that the webinar on "Role of Nutrition on Mental Well Being" will
			    be held tomorrow. <br><br>

			    Date & Time: Sep 12, 2020 05:00 PM Mumbai, Kolkata, New Delhi <br><br>

			    <b>What you can expect in the webinar: </b><br>
			    1. How the lack of nutrition affects our mental health ?<br> 
			    2. Easy diets and daily habits. <br>
			    3. Nutritional intake and its domination over depression.<br>
			    4. The deafening claws of stress.<br>
			    5. Practical tips on how to overcome stress, & much more…<br><br>

			    <b>CLICK HERE TO JOIN </b><br><br>
			    '.$arr_data['zoom_link'].'<br>
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
			</body>
            </html>';

        mail($to, $subject, $message, $headers);
		}
		//Session::flash('error', 'Something went wrong.');
		return redirect('/admin/webinar');
	}*/
	
	
	public function send()
	{
		//echo"1"; die;
        //$to = 'laxmipagare99@gmail.com,webdeveloper@techrupt.in';
		$to = 'webdeveloper@techrupt.in';
        //$to = $email_implode_value;
        
		if($to){
        $subject = "Testing";
        $headers = "From: pagarelaxmi@gmail.com\r\n";//marketing@nutridock.com
        $headers .= "Reply-To: pagarelaxmi@gmail.com\r\n";
        //$headers .= "CC: it@sevagroup.co.in\r\n";
        $headers .= "BCC: laxmipagare99@gmail.com\r\n";
        /*$headers .= "CC: it@sevagroup.co.in\r\n";
        $headers .= "CC: it@techrupt.in\r\n";*/
    
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
       $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Receipt</title>
            </head>
            <body>
			    <br><br> 
			    Something
			    <br><br>Regards,  <br>Team NutriDock<br></span></span><br /><br />
			</body>
            </html>';
        mail($to, $subject, $message, $headers);
		}
		//Session::flash('error', 'Something went wrong.');
		return redirect('/admin/webinar');
	}
    
}