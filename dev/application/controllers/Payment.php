<?php

defined('BASEPATH') OR exit('No direct script access allowed');


include APPPATH."views/razorpay/Razorpay.php";

include APPPATH."views/razorpay/libs/Requests-1.7.0/library/Requests.php";
//C:\xampp\htdocs\rushabh\application\views\razorpay\libs\Requests-1.7.0\library
include APPPATH."views/razorpay/src/Api.php";

 use Razorpay\Requests;
 use Razorpay\Api\Api;
 //use Razorpay\Api\Request;


class Payment extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('common','',TRUE);
     $this->load->library('curl');
    $this->load->helper('functions_helper');
    }


  public function index()
  { 
    $data['id'] = $this->uri->segment(3);
    //print_r(base64_decode($data['id'])); die;
    $data['booking'] = $this->db->query("SELECT * FROM booking where id='".base64_decode($this->uri->segment(3))."'")->result();


    
    //print_r($data['booking']); die;
    $data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
    //$data['product'] = $this->db->query("SELECT * FROM product GROUP BY car")->result();
    
    $data['product'] = $this->db->query("SELECT car, ANY_VALUE(color) as color, MAX(on_road_price) as on_road_price FROM product GROUP BY car")->result();

    $data['title'] = 'Online Booking | Seva Nashik';
    $data['pgKeywords'] = '';
    $data['pgDesc'] = '';
    $this->load->view('header',$data);
    $this->load->view('payment',$data);
    $this->load->view('footer');
  }

  // initialized cURL Request
    private function get_curl_handle($payment_id, $amount)  {
      
        $url = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
        $key_id = 'rzp_live_qW1poYrCW3uQa9';
        //test key_id = rzp_test_hqnjkaxFJyZfE6
        //live key_id = rzp_live_IZMQ4kxcwLhCKH HOH
        

        $key_secret = 'JvZheGKSrCC9aeBkWaN9SV6O';
        //test key_secret = 8VzYUuvJc7r1qPXHudDQmkaE
        //live key_secret = aIRBD9hnISfVEJYsbjDSVuFr HOH
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

      // callback method
    public function callback() { 

        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('token_id'))) {

            $razorpay_payment_id = $this->input->post('razorpay_payment_id');

            $token_id = $this->input->post('token_id');
            

             $booking = $this->db->query("SELECT * FROM booking WHERE id='$token_id'")->row();
        
             //$amount_ = $booking->amount;
            $currency_code = 'INR';
            $amount = $booking->amount;
            $success = false;
            
            $error = '';
            try {  
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);
                $result = curl_exec($ch);

                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                /*if ($result === false) {
                    echo"5"; die;
                    $success = false;
                    $error = 'Curl error: '.curl_error($ch);
                } else {
                    echo"9"; die;
                    $response_array = json_decode($result, true);
                        if ($http_status === 200 and isset($response_array['error']) === false) {
                            $success = true;
                        } else {
                            $success = false;
                            if (!empty($response_array['error']['code'])) {
                                $error = $response_array['error']['code'].':'.$response_array['error']['description'];
                            } else {
                                $error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
                            }
                        }
                }*/
                //close connection
                
            } 
            catch (Exception $e) {
                
                $success = false;
                $error = 'OPENCART_ERROR:Request to Razorpay Failed';
            }
             //print_r($result); die;
            if ($result) {
             $date = date('d-m-Y h:i:s A');
            
            //\DB::table('booking')->where(['id'=>$token_id])->update(['status'=>'Paid','booking_date'=>date('d/m/Y h:i:s A'),'transaction_id'=>$request->input('razorpay_payment_id')]);
             //booking_date=$date, transaction_id=$razorpay_payment_id
            $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."' where id=$token_id ");

           

            $to = $booking->email;
           // $from = $booking->email;
            $to_mobile = $booking->mobile;
            
            $subject = 'RUSHABH HONDA Booking Receipt';
            $headers = "From: it@rushabh2w.com\r\n";//
            $headers .= "Reply-To: it@rushabh2w.com\r\n";// it@rushabh2w.com
            $headers .= "CC: it@sevagroup.co.in\r\n";
            $headers .= "CC: finance@rushabh2w.com\r\n";
            //$headers .= "CC: pagarelaxmi@gmail.com\r\n";
           
            
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
</head>

<body>
<table width="900px" border="0" cellspacing="0" cellpadding="10" style="margin:0 auto; font-family:Arial, Helvetica, sans-serif; font-size:12px">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><img src="https://rushabh2w.com/assets/images/logo.png" /></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" style="font-size:14px; text-transform:uppercase; font-weight:bold; padding:5px 0">Receipt</td>
  </tr>
  <tr>
    <td align="center" style="font-size:20px; text-transform:uppercase; font-weight:bold; padding:5px 0">Rushabh Motors PVT. LTD.</td>
  </tr>
  <tr>
    <td align="center" style="padding:5px 0"><strong>Authorised Dealer for Honda</strong></td>
  </tr>
  <tr>
    <td align="center" style="padding:5px 0">Plot No. 14 Mumbai Naka Mumbai Agra Road</td>
  </tr>
  <tr>
    <td align="center">
    Nasik-422001 (Maharashtra) 
    </td>
  </tr>
    </table>
</td>
    <td align="center"><img src="https://rushabh2w.com/assets/images/Honda-Logo.png" /></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="5" style="border-bottom:1px solid #000; border-top:1px solid #000">
      <tr>
        <td>Phone No. (0253) 2508000-6643444</td>
        <td>Email:rushabh_tw@redifmail.com</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="70%"><table width="100%" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td>Receipt No.</td>
            <td>#00'.$booking->id.'</td>
          </tr>
          <tr>
            <td>Recived with thanks from</td>
            <td>Rushabh</td>
          </tr>
          <tr>
            <td>Address</td>
            <td>'.$booking->address.'</td>
          </tr>
          <tr>
            <td>Amount</td>
            <td>'.$booking->amount.'</td>
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
            <td>'.$booking->name.'</td>
          </tr>
          <tr>
            <td>Model</td>
            <td>'.$booking->varient.'</td>
          </tr>
          <tr>
            <td>Color</td>
            <td>'.$booking->color.'</td>
          </tr>
        </table></td>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td>Receipt Date</td>
            <td>'.date('d-m-Y h:i:s A').'</td>
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
            <td align="center">For Rushabh Motors PVT.LTD</td>
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
</html>
';
$this->common->SmsMobileOnlineBooking($token_id, $to_mobile);
//$this->common->SmsWhatsAppOnlineBooking($token_id, $to_mobile);
 mail($to, $subject, $message, $headers);




 header("Location: https://rushabh2w.com/payment/success");
            exit();

            } else {
                header("Location: https://rushabh2w.com/payment/failed");
                exit();
            }
            curl_close($ch);
        } else {
                echo 'An error occured. Contact site administrator, please!';
        }
    }

  public function success()
  {
    $data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
    $data['title'] = 'Payment | Seva Nashik';
    $data['pgKeywords'] = '';
    $data['pgDesc'] = '';
    $this->load->view('header',$data);
    $this->load->view('success',$data);
    $this->load->view('footer');
  }

  public function failed()
  {
    $data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
    $data['title'] = 'Payment | Seva Nashik';
    $data['pgKeywords'] = '';
    $data['pgDesc'] = '';
    $this->load->view('header',$data);
    $this->load->view('failed',$data);
    $this->load->view('footer');
  }


}
