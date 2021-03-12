<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online_booking extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
    }
	public function index()
	{	
	    
		if($this->input->post('submit'))
		{	
		    $name            = $_POST['name'];
		    $email           = $_POST['email'];
		    $mobile          = $_POST['mobile'];
		    $city            = $_POST['city'];
		    $address         = $_POST['address'];
		    $location        = $_POST['location'];
		    $car             = $_POST['car'];
		    $varient         = $_POST['varient'];
		    $color           = $_POST['color'];
		    $roadprice       = $_POST['roadprice'];
		    $special_request = $_POST['special_request'];
		    $finance         = $_POST['finance'];
		    $dob             = $_POST['dob'];
            
		    if(empty($name) || empty($mobile) || empty($city) || empty($address) || empty($car) || empty($color) || empty($roadprice) || empty($finance))
		    {
		      echo "<script>alert('Please enter valid data! Please try again.');window.location.href = 'https://rushabh2w.com/online-booking.php';</script>";
		    }
		    $characters       = '0123456789abcdefghijklmnopqrstuvwxyz';
		    $charactersLength = strlen($characters);
		    $randomString     = '';
		    for ($i = 0; $i < 18; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    $latest_image1= '';
		    $latest_image = '';
		    if(isset($_FILES["adhar_cart"]["name"]) && !empty($_FILES["adhar_cart"]["name"]) || isset($_FILES["pan_card"]["name"]) && !empty($_FILES["pan_card"]["name"]))
		    {
		        $file_name        = $_FILES["pan_card"]["name"];
		        $file_tmp         = $_FILES["pan_card"]["tmp_name"];
		        $ext              = pathinfo($file_name,PATHINFO_EXTENSION);
		        $random_file_name = $randomString.'0.'.$ext;
		        $latest_image     = 'assets/admin/upload/pan/'.$random_file_name;
		        $file_name1        = $_FILES["adhar_cart"]["name"];
		        $file_tmp1         = $_FILES["adhar_cart"]["tmp_name"];
		        $ext1              = pathinfo($file_name1,PATHINFO_EXTENSION);
		        $random_file_name1 = $randomString.'1.'.$ext1;
		        $latest_image1     = 'assets/admin/upload/adhar/'.$random_file_name1;
		        $flag = 0;
		    }
		        date_default_timezone_set("Asia/Kolkata");
		        $data = date('d-m-Y h:i:s A');
		        $data = array(
					'name'=>$name,
					'email'=>$email,
					'mobile'=>$mobile,
					'city'=>$city,
					'location'=>$location,
					'address'=>$address,
					'car'=>$car,
					'varient'=>$varient,
					'color'=>$color,
					'road_cost'=>$roadprice,
					'special_request'=>$special_request,
					'finance'=>$finance,
					'adhar_card'=>$latest_image1,
					'pan_card'=>$latest_image,
					'dob'=>$dob,
					'booking_date'=>$data,
					'transaction_id'=>'null',
					'amount'=>'1',//1000
					'created_at'=>$data
				);
		        
		        $this->db->insert('booking',$data);
		        $id = $this->db->insert_id();

		        if ($id) {
		          //echo "New record created successfully";
		        } else {
		          echo "Error: " . $sql . "<br>" . $conn->error;
		        }
			redirect('payment/index/'.base64_encode($id));
		}
		/*Subscription*/
		if($this->input->post('subscription_submit'))
		{
			$data_in['email'] = $this->input->post('email');


			$this->load->library('email');
				$config = array (
				'protocol' => 'mail',
				'mailpath' => '/usr/s; die;bin/sendmail', 
				'mailtype' => 'html',
				'charset'  => 'utf-8',
				'priority' => '1'
			);
			$this->email->initialize($config);
			$this->email->from('it@rushabh2w.com', 'rushabh');
			$this->email->to($data_in['email']);
			$this->email->subject('Subscriber');
			$message=$this->load->view('send_mail_subscribe',$data_in,TRUE);
			$this->email->message($message);
			$this->email->send();

			$this->load->library('email');
				$config = array (
				'protocol' => 'mail',
				'mailpath' => '/usr/s; die;bin/sendmail', 
				'mailtype' => 'html',
				'charset'  => 'utf-8',
				'priority' => '1'
			);
			$this->email->initialize($config);
			$this->email->from('it@rushabh2w.com');

			$list = array('it@rushabh2w.com');
			$this->email->to($list);
			$this->email->subject('Subscriber');
			$message1=$this->load->view('send_mail_subscribe_admin',$data_in,TRUE);
			$this->email->message($message1);
			$this->email->send();

			redirect('thank_you');		
		}
		/*Subscription close*/
		
		/*$current_url = current_url();
		$url = 'https://rushabh2w.com/online_booking';
		if($url == $current_url){
		    redirect('page-not-found');
		}else{
		    $data['canonical'] = 'online-booking'; 
		}*/
		
		$data['offers'] = $this->common->getAllRow('offers',' ORDER BY id DESC');
		/*$data['product'] = $this->db->query("SELECT car, ANY_VALUE(color) as color, MAX(on_road_price) as on_road_price FROM product GROUP BY car")->result();*/

		$data['product'] = $this->db->query("SELECT * FROM product GROUP BY car")->result();

		$data['title'] = 'Honda Online Booking | Rushabh Honda | Two Wheeler In Nashik';
		$data['pgKeywords'] = '';
		$data['pgDesc'] = 'Rushabh Honda is Honda Two wheeler Dealer in Nashik. Newest models of Two-wheeler Available at Best prices.Browse your favorite two-wheeler easily. Book now!';
		$this->load->view('header',$data);
		$this->load->view('online-booking',$data);
		$this->load->view('footer');
	}

	public function getvarient()
    {
        $id = $this->input->post('id');
        if ($id != null) {
            $city = $this->db->query("Select * FROM product where car='$id' group by varient order by varient asc")->result();
                        echo "<option  value=''>Select Variant</option>";
                if (count($city) > 0) {
                    foreach ($city as $city_details) {
						echo "<option value='" . $city_details->varient . "'>" . $city_details->varient ."</option>";
                    }
                } else {
                    echo "<option  value=''>-</option>";
                }
        }
        else
        {
             echo "<option  value=''>Select Variant</option>";
        }
    }

    public function getcolor()
    {
        $id = $this->input->post('id');
        $car = $this->input->post('car');

        if ($id != null) {
                 $city = $this->db->query("Select * FROM product where varient='$id' and car='$car' order by color asc")->result();
                        echo "<option  value=''>Select Color</option>";
                if (count($city) > 0) {
                    foreach ($city as $city_details) {
                        echo "<option value='" . $city_details->color . "'>" . $city_details->color . "</option>";
                    }
                } else {
                    echo "<option  value=''>-</option>";
                }
        }
        else
        {
             echo "<option value=''>Select Color</option>";
        }
    }

    public function getprice()
    {
        $id = $this->input->post('id');
        $varient = $this->input->post('varient');
        $car = $this->input->post('car');
        $city = $this->db->query("Select * FROM product where color='$id' and varient='$varient' and car='$car'")->row();
        echo $city->on_road_price; 
    }


}
