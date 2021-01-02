<?php
class User_model extends CI_model{
 
 
public function login_user($email,$password){
 //print_r($password); die;
  $this->db->select('*');
  $this->db->from('users');
  $this->db->where('email',$email);
  $this->db->where('password',$password);
 $query = $this->db->get();
 
  if($query->num_rows() > 0)
  {
  
      return $query->result_array();
  }
  else{
    return false;
  }
 
 
}

 
 
}
 
 
?>