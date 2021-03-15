<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*include APPPATH."views/razorpay/Razorpay.php";
include APPPATH."views/razorpay/libs/Requests-1.7.0/library/Requests.php";
include APPPATH."views/razorpay/src/Api.php";*/
use Razorpay\Requests;
use Razorpay\Api\Api;
 
class Payment extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('common','',TRUE);
     $this->load->library('curl');
    $this->load->helper('functions_helper');
    }

  public function index()
  { 
    $data['canonical'] = ''; 
    $data['id'] = $this->uri->segment(3);
    $data['booking'] = $this->db->query("SELECT * FROM booking where id='".base64_decode($this->uri->segment(3))."'")->result();
    //$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
    $data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
    /*$data['product'] = $this->db->query("SELECT car, ANY_VALUE(color) as color, MAX(on_road_price) as on_road_price FROM product GROUP BY car")->result();*/
    $data['product'] = $this->db->query("SELECT * FROM product GROUP BY car")->result();

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
        
        $key_id = 'rzp_test_nf0j2zhJBIeTOQ';
        $key_secret = 'yUEUE55qkg4GBBkV3j4LtV6R';
        
        //rzp_live_p49wR8Fnx8hJBc
        //fe8OxfZmel2btdDHJnK7moTw
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
        return $ch;
    } 

    public function callback() { 
        if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('token_id'))) {
            $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $token_id = $this->input->post('token_id');
            $booking = $this->db->query("SELECT * FROM booking WHERE id='$token_id'")->row();
            $currency_code = 'INR';
            $amount = $booking->amount;
            $success = false;
            $vehicle = $booking->car;
            
            $error = '';
            try {  
                $ch = $this->get_curl_handle($razorpay_payment_id, $amount);
                $result = curl_exec($ch);

                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            } 
            catch (Exception $e) {
                $success = false;
                $error = 'OPENCART_ERROR:Request to Razorpay Failed';
            }
            if ($result) {
            $date = date('d-m-Y h:i:s A');
            //$update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."' where id=$token_id ");
            
            /*Offer Item Id Code Start*/
            //$query = $this->db->select('offer_item_id')->from('offer_item')->get();

            $query = $this->db->select('*')->from('offer_item')->where('status','Active')->get();
            $myarray = array();
            foreach($query->result_array() as $result){
              $myarray[] = $result['offer_item_id'];
            }

            $num = 1;
            if($vehicle == 'ACTIVA 125' || $vehicle == 'ACTIVA 6G' || $vehicle == 'DIO' || $vehicle == 'GRAZIA'){
              $final_arr = array_values(array_diff($myarray, array(7)));
            }else{
              $final_arr = array_values(array_diff($myarray, array(1)));
            }

            $offer_id_value = array_rand( $final_arr, $num );
            $offerid = $final_arr[$offer_id_value];
            //$offerid = 8;
            $to_mobile = $booking->mobile;
            /*Offer Item Id Code End*/
            $data['booking'] = $this->db->select('offer_item_id')->from('booking')->get();
            $booking_alldata = $data['booking']->result_array();
            $bookingarray = array();
            foreach($booking_alldata as $booking_result){
              $bookingarray[] = $booking_result['offer_item_id'];
            }

            $total_body_cover = 0;
            $array_value = [];
            $array_value = array_count_values($bookingarray);

            if (isset($array_value[$offerid]) && $array_value[$offerid] != '') { 
                 $total_body_cover = $array_value[$offerid];
            }else{
                 $total_body_cover = 0;
            }
            $id = $booking->id;

            if($id!=9 && $id!=10){

              if($offerid == 8 && $vehicle == 'ACTIVA 125'){
                //$myarray1 = array_diff($myarray, array('7'));
                $array_without_body_cover = array_diff($myarray, array('8'));
                $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                $offer_id = $array_without_body_cover[$offer_id_value2];
                

                if($offer_id == 5 ){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                if($total_body_cover != 2 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offer_id");
                }else{
                  $array_without_body_cover = array_diff($array_without_body_cover, array('5'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offer_id == 2){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 40 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offer_id");
                  
                }else{
                  $array_without_body_cover = array_diff($array_without_body_cover, array('2'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offer_id == 3){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 56 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offer_id");
                }else{
                  $array_without_body_cover = array_diff($array_without_body_cover, array('3'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offer_id == 4){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 35 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offer_id");
                  
                }else{
                  $array_without_body_cover = array_diff($array_without_body_cover, array('4'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offer_id == 6){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 20 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offer_id");
                  
                }else{
                  $array_without_body_cover = array_diff($array_without_body_cover, array('6'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offer_id == 7){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 20 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;

                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offer_id");
                  
                }else{
                  $array_without_body_cover = array_diff($array_without_body_cover, array('7'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offer_id == 9){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 35 && $quantity != 0){
                    
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offer_id");
                }else{
                  $array_without_body_cover = array_diff($array_without_body_cover, array('3'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offer_id == 10){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offer_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 65 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offer_id");
                }else{
                  $array_without_body_cover = array_diff($array_without_body_cover, array('4'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }
                

              }elseif($offerid == 8 && $vehicle != 'ACTIVA 125'){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 25 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                   $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                }else{
                  $array_without_body_cover = array_diff($myarray, array('8'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 5){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 2 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                }else{
                  $array_without_body_cover = array_diff($myarray, array('5'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 2){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 40 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                  
                }else{
                  $array_without_body_cover = array_diff($myarray, array('2'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 3){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 56 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                }else{
                  $array_without_body_cover = array_diff($myarray, array('3'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 4){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 35 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                  
                }else{
                  $array_without_body_cover = array_diff($myarray, array('4'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 6){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 20 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                  
                }else{
                  $array_without_body_cover = array_diff($myarray, array('6'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 7){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 20 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                  
                }else{
                  $array_without_body_cover = array_diff($myarray, array('7'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 8){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 25 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                   $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                }else{
                  $array_without_body_cover = array_diff($myarray, array('8'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 9){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 35 && $quantity != 0){
                    
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                }else{
                  $array_without_body_cover = array_diff($myarray, array('3'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }elseif($offerid == 10){
                $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$offerid)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
                }
                
                if($total_body_cover != 65 && $quantity != 0){
                  $total_qty = $quantity - 1;
                  $total_allocated_qty = $allocated_quantity + 1;
                  
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offerid."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                  $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$offerid");
                }else{
                  $array_without_body_cover = array_diff($myarray, array('4'));
                  $offer_id_value2 = array_rand( $array_without_body_cover, $num );
                  $offer_id2 = $array_without_body_cover[$offer_id_value2];
                  $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id2."', booking_id='".'100'.rand(1,999)."' where id=$token_id");
                }
              }
          
            }elseif($id==9 || $id==10){
              $off_id = 1;
              $data_a = $this->db->select('*')->from('offer_item')->where('offer_item_id',$off_id)->get()->result();
                foreach($data_a as $row){
                  $quantity = $row->qty;
                  $allocated_quantity = $row->allocated_offer_qty;
              }
            
              $total_qty = $quantity - 1;
              $total_allocated_qty = $allocated_quantity + 1;
              
              $update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$off_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id"); 
              if($total_allocated_qty == 2){
                $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."', status='Inactive' where offer_item_id=$off_id");     
              }else{
                $update_offer = $this->db->query("update offer_item set allocated_offer_qty='".$total_allocated_qty."' where offer_item_id=$off_id");  
              } 
            }



                /*$update = $this->db->query("update booking set payment_status='Paid', booking_date='".$date."', transaction_id='".$razorpay_payment_id."', offer_item_id='".$offer_id."', booking_id='".'100'.rand(1,999)."' where id=$token_id");*/





                
             



              


            
            
            $to = $booking->email;
            $subject = 'RUSHABH HONDA Booking Receipt';
            $headers = "From: it@rushabh2w.com\r\n";//
            $headers .= "Reply-To: it@rushabh2w.com\r\n";
            $headers .= "CC: it@sevagroup.co.in\r\n";
            $headers .= "CC: finance@rushabh2w.com\r\n";
            $headers .= "CC: digitalmarketing@techrupt.in\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            $message = '<div><span style="font-size:14px"><span style="font-family:arial,helvetica,sans-serif"><strong>Dear '.$booking->name.', </strong><br><br>Thank you for booking your vehicle at Rushabh Honda.<br>Your booking ID is '.$booking->booking_id.'<br>Please find enclosed the receipt for your reference.<br> Congrats! Here’s a gift for you  <Gift>. You can redeem it at the time of delivery. One of our team member shall get back to you shortly.<br><br>Team Rushubh Honda, <br>Nashik: 0253-664344<br><span style="font-family:arial,helvetica,sans-serif">Nashik: 0253-6643444 ></span></span></span></div>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <td>INR'.$booking->amount.'.</td>
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
 mail($to, $subject, $message, $headers);
 /*$this->common->SmsMobileOnlineBooking($token_id, $to_mobile);*/
 header("Location: http://localhost/rushabh/payment/success");
            exit();
            } else {
                header("Location: http://localhost/rushabh/payment/failed");
                exit();
            }
            curl_close($ch);
        } else {
                echo 'An error occured. Contact site administrator, please!';
        }
    }

  public function success()
  {
    //$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
    $data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
    $data['title'] = 'Payment | Seva Nashik';
    $data['pgKeywords'] = '';
    $data['pgDesc'] = '';
    $data['canonical'] = ''; 
    //$this->load->view('header',$data);
    $this->load->view('success',$data);
    //$this->load->view('footer');
  }

  public function failed()
  {
    //$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
    $data['offers'] = $this->common->getAllRow('offers','where show_on_website=1 ORDER BY id DESC');
    $data['title'] = 'Payment | Seva Nashik';
    $data['pgKeywords'] = '';
    $data['pgDesc'] = '';
    $data['canonical'] = ''; 
    $this->load->view('header',$data);
    $this->load->view('failed',$data);
    $this->load->view('footer');
  }


}
