<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH."views/razorpay/Razorpay.php";

include APPPATH."views/razorpay/libs/Requests-1.7.0/library/Requests.php";
//C:\xampp\htdocs\rushabh\application\views\razorpay\libs\Requests-1.7.0\library
include APPPATH."views/razorpay/src/Api.php";

 use Razorpay\Requests;
 use Razorpay\Api\Api;
 //use Razorpay\Api\Request;


class Nutridock_re extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }


	public function index()
	{
		//$this->load->view('header',$data);
		$this->load->view('nutridock-re');
		//$this->load->view('footer');
	}
	
	private function get_curl_handle($payment_id, $amount)  {
      
        $url = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        $key_id = 'rzp_live_qW1poYrCW3uQa9'; //rzp_live_qW1poYrCW3uQa9
        
        
        //test key_id = rzp_test_P1IkeYutI76ExB
        /*Seva key - rzp_live_qW1poYrCW3uQa9*/

        $key_secret = 'JvZheGKSrCC9aeBkWaN9SV6O';//JvZheGKSrCC9aeBkWaN9SV6O
        //test key_secret = zauEEmSFCAb27S45LwrPNpYe
        
        
        
        $fields_string = "amount=$amount";
        //cURL Request
        $ch = curl_init();
       
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        //curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__).'/ca-bundle.crt');
        //print_r( dirname(__FILE__).'/ca-bundle.crt'); die;
        return $ch;
    } 
    
    
    public function checkout()
	{
		$data_in['name']=$this->input->post('name');
        $data_in['email']=$this->input->post('email');
        $data_in['mobile']=$this->input->post('mobile');
        $data_in['age']=$this->input->post('age');
        $data_in['city']=$this->input->post('city');
        $data_in['created_at']= date('d-m-Y');
        $data_in['amount']=1;
        $data_in['status']='Unpaid';
        $data_in['token_no']= "Web_" . rand(1000,99);
        //print_r($data_in['token_no']); die;
        
        
        $this->common->insertRecord('webinar1', $data_in);
        $id_value = $this->db->insert_id();
        
        $user1_id = $this->session->set_userdata('idname',$id_value);
        
        if($id_value){
           echo json_encode($id_value);
             //echo 1;
        }else{
            echo 0;
        }
        
    }


	public function capture_payment()
    {
        $abc = $this->input->post('id_paid');
        print_r($abc); die;
        
        $razorpay_payment_id = $this->input->post('razorpay_payment_id');

        //$token_id = $this->input->post('token_id');
        $token_id =  $this->session->userdata['idname'];
        $webinar = $this->db->query("SELECT * FROM webinar1 WHERE id='$token_id'")->row();
        
       if($webinar)
       {
        $amt_value = $webinar->amount;
      $amount =  $amt_value*100;

        date_default_timezone_set("Asia/Kolkata");
         try {  
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);
                $result = curl_exec($ch);

                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                
            } 
            catch (Exception $e) {
                
                $success = false;
                $error = 'OPENCART_ERROR:Request to Razorpay Failed';
            }

             //print_r($result); die;
        if($result)
        {
        	
        $update = $this->db->query("update webinar1 set payment_status='Paid',status='Paid', webinar_date='".date('Y-m-d h:i:s')."', transaction_id='".$razorpay_payment_id."' where id=$token_id");
            $to = $webinar->email;

            return redirect('https://nutridock.com/success');
            //return redirect()->back();
        }
        else
        {
             $update = $this->db->query("update webinar1 set payment_status='Initiated',status='Initiated', webinar_date='".date('Y-m-d h:i:s')."', transaction_id='".$razorpay_payment_id."' where id=$token_id");
          return redirect('https://nutridock.com/failed');
          //exit();
        }


       }
       else
        {
            $update = $this->db->query("update webinar1 set payment_status='Initiated',status='Initiated', webinar_date='".date('Y-m-d h:i:s')."', transaction_id='".$razorpay_payment_id."' where id=$token_id");
          return redirect('https://nutridock.com/failed');
          exit();
        }
    
    }

  
}
