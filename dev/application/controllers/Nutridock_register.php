<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH."views/razorpay/Razorpay.php";

include APPPATH."views/razorpay/libs/Requests-1.7.0/library/Requests.php";
//C:\xampp\htdocs\rushabh\application\views\razorpay\libs\Requests-1.7.0\library
include APPPATH."views/razorpay/src/Api.php";

 use Razorpay\Requests;
 use Razorpay\Api\Api;
 //use Razorpay\Api\Request;


class Nutridock_register extends CI_Controller {

  function __construct(){
        parent::__construct();
    $this->load->model('common','',TRUE);
    $this->load->helper('functions_helper');
    }


  public function index()
  {
    //$this->load->view('header',$data);
    $this->load->view('nutridock-register');
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
        $data_in['amount']=150;
        $data_in['status']='Unpaid';
        $data_in['token_no']= "Web_" . rand(1000,99);
        //print_r($data_in['token_no']); die;
        
        
        $this->common->insertRecord('webinar', $data_in);
        $id_value = $this->db->insert_id();
        
        $user1_id = $this->session->set_userdata('idname',$id_value);
        //$data['status'] = $this->db->query("SELECT * FROM webinar WHERE id='$id'")->row();
        if($user1_id){
           // $_SESSION['id']  = $this->session->set_userdata($id_value);
           //echo json_encode($id_value);
             echo 1;
        }else{
            echo 0;
        }
        
    }


  public function capture_payment()
    {
        $razorpay_payment_id = $this->input->post('razorpay_payment_id');

        //$token_id = $this->input->post('token_id');
        $token_id =  $this->session->userdata['idname'];
        $webinar = $this->db->query("SELECT * FROM webinar WHERE id='$token_id'")->row();

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
          
        $update = $this->db->query("update webinar set payment_status='Paid',status='Paid', webinar_date='".date('Y-m-d h:i:s')."', transaction_id='".$razorpay_payment_id."' where id=$token_id");
            $to = $webinar->email;
            $to_mobile = $webinar->mobile; 
            //$zoom_link = "https://us04web.zoom.us/postattendee?id=1";
            
            
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
            <title>Nutridock</title>
            </head>
            
            <body>
            <table width="900px" border="0" cellspacing="0" cellpadding="10" style="margin:0 auto; font-family:Arial, Helvetica, sans-serif; font-size:12px">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr>
                <td><img src="https://rushabh2w.com/assets/landing/images/reciept_logo.png" style="height: 72px;" /></td>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
             <!--  <tr>
                <td align="center" style="font-size:14px; text-transform:uppercase; font-weight:bold; padding:5px 0">Nutridock</td>
              </tr> -->
              <tr>
                <td align="center" style="font-size:20px; text-transform:uppercase; font-weight:bold; padding:5px 0; text-align: right;">Nutridock</td>
              </tr>
              <!-- <tr>
                <td align="center" style="padding:5px 0"><strong>India</strong></td>
              </tr> -->
             <!--  <tr>
                <td align="center" style="padding:5px 0">+91 9130090666</td>
              </tr> -->
             <!--  <tr>
                <td align="center">
                marketing@nutridock.com
                </td>
              </tr> -->
                </table>
            </td>
               
              </tr>
            </table>
            </td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-bottom:1px solid #000; border-top:1px solid #000">
                  <tr>
                    <td>Phone No. +91 9130090666</td>
                    <td style="text-align: right;">Email:marketing@nutridock.com</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="70%"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                     <!--  <tr>
                        <td>Receipt No.</td>
                        <td>#00'.$webinar->id.'</td>
                      </tr> -->
                      <tr>
                        <td>Recived with thanks from</td>
                        <td>Nutridock</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>'.$webinar->city.'</td>
                      </tr>
                      <tr>
                        <td>Amount</td>
                        <td>150</td>
                      </tr>
                      <tr>
                        <td>Amount In words</td>
                        <td>One thousand </td>
                      </tr>
                      <tr>
                        <td>By Cash</td>
                        <td>Online</td>
                      </tr>
                      <tr>
                        <td>Narration</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>On Account of</td>
                        <td>'.$webinar->name.'</td>
                      </tr>
                      
                    </table></td>
                    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <td>Receipt Date</td>
                        <td>'.date('d/m/Y h:i:s A').'</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center">Customer Signature</td>
                      </tr>
                    </table></td>
                    <td valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <td>&nbsp;</td>
                        </tr>
                      <tr>
                        <td align="center">Account Signature</td>
                        </tr>
                    </table></td>
                    <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
                      <tr>
                        <td align="center">For Nutridock Team</td>
                      </tr>
                      <tr>
                        <td height="60" align="center">&nbsp;</td>
                      </tr>
                      <tr>
                        <td align="center">authorized by</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            </body>
            </html>';

            mail($to, $subject, $message, $headers);

            $message2='<html>';
            $message2.='<body aria-readonly="false" style="cursor: auto;"><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Dear Admin,</strong></span></span><br />
            <br />';
            $message2.='<span style="font-size:12px"><strong><span style="font-family:arial,helvetica,sans-serif">You have received a new registration. Customer details are as follows:</span></strong></span><br />
            &nbsp;';
            $message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:500px;background-color:#D3D3D3">
                <tbody>';
                $message2.='<table border="0" cellpadding="2" cellspacing="2" style="width:400px;background-color:#D3D3D3" align="center">
                <tbody><tr><td>';
                    $message2.='<tr>
                        <td colspan="2><span style="color:#000000"><center><span style="font-size:14px"><strong><span>Customer Details</span></strong></span></span></center></td>
                    </tr>';
                     $message2.='<tr>
                        <td style="width: 153px;">&nbsp;</td>
                        <td style="width: 234px;">&nbsp;</td>
                    </tr>';
                    $message2.='<tr>
                        <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Customer Name :</span></strong></span></span></td>
                        <td style="width: 234px;"><span style="color:#000000"><span>'.$webinar->name.'</span></span></td>
                    </tr>';
                    $message2.='<tr>
                        <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Contact No :</span></strong></span></span></td>
                        <td style="width: 234px;"><span style="color:#000000"><span>'.$webinar->mobile.'</span></span></td>
                    </tr>';
                    $message2.='<tr>
                        <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Email ID :</span></strong></span></span></td>
                        <td style="width: 234px;"><span style="color:#000000"><span>'.$to.'</span></span></td>
                    </tr>';
                    
                    $message2.='<tr>
                        <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>City :</span></strong></span></span></td>
                        <td style="width: 234px;"><span style="color:#000000"><span>'.$webinar->city.'</span></span></td>
                    </tr>';
                    $message2.='<tr>
                        <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Age :</span></strong></span></span></td>
                        <td style="width: 234px;"><span style="color:#000000"><span>'.$webinar->age.'</span></span></td>
                    </tr>';
                    $message2.='<tr>
                        <td style="width: 153px;"><span style="color:#000000"><span style="font-size:14px"><strong><span>Amount:</span></strong></span></span></td>
                        <td style="width: 234px;"><span style="color:#000000"><span>'.$webinar->amount.'/-</span></span></td>
                    </tr>';
                     
                    $message2.='<tr>
                        <td style="width: 153px;">&nbsp;</td>
                        <td style="width: 234px;">&nbsp;</td>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    </tr>
                </tbody>
            </table><br />';
            $message2.='<span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Thanks </strong></span></span></body>
            </html>';
            $this->common->SmsMobileNutridockRegistration($token_id, $to_mobile);
            mail ('it@techrupt.in',"Nutridock Webinar - New registration received",$message2,$headers);
            
             //mail ('pagarelaxmi@gmail.com',"Nutridock Webinar - New registration received",$message2,$headers);
            
           // Session::flash('payment_success', 'Congratulations !!!!!! You have registered successfully.');
           
                return redirect('https://rushabh2w.com/nutridock_success/index/'.$token_id);
           
           
            
            
            //return redirect()->back();
        }
        else
        {
             $update = $this->db->query("update webinar set payment_status='Initiated',status='Initiated', webinar_date='".date('Y-m-d h:i:s')."', transaction_id='".$razorpay_payment_id."' where id=$token_id");
             return redirect('https://rushabh2w.com/nutridock_failed');
          //exit();
        }


       }
       else
        {
            $update = $this->db->query("update webinar set payment_status='Initiated',status='Initiated', webinar_date='".date('Y-m-d h:i:s')."', transaction_id='".$razorpay_payment_id."' where id=$token_id");
          return redirect('https://rushabh2w.com/nutridock_failed');
          exit();
        }
    
    }

  
}
