<?php

class User extends CI_Controller {

  public function __construct(){
    parent::__construct();
  	$this->load->model('user_model');
  }


function login_user(){

  $email=$this->input->post('email');

  $password=$this->input->post('password'); 

    $data['users']=$this->user_model->login_user($email,$password);

      if($data['users']!='')
      {
		  
        $user_id = $this->session->set_userdata('id',$data['users'][0]['id']);
        $email_id = $this->session->set_userdata('email',$data['users'][0]['email']);
        //$username = $this->session->set_userdata('username',$data['users'][0]['username']);
        //$mobile_no = $this->session->set_userdata('mobile_no',$data['users'][0]['mobile_no']);
		    echo $this->session->set_userdata('id'); 
        redirect('backend/dashboard');
      }
      else{
     
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $data['title'] = 'Rushabh Honda | Two Wheeler';
        $this->load->view("admin/secure",$data);
      }


}

public function logout(){

  $this->session->sess_destroy();
  redirect('secure', 'refresh');
}

}

?>