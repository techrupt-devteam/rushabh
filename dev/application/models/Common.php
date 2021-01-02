<?php class Common extends CI_Model {	
	public function __construct(){		
		parent::__construct();		
		date_default_timezone_set('Asia/Calcutta');	
	}	

	function logo()
	{
		$this->session->set_userdata('logo',base_url()."/media/front/images/logo.jpg");
	}

	function getOneRow($table,$where){				 
	 $query=$this->db->query("select * from $table $where limit 1");		
	   return $query->row_array();	  }	

	 function getAllRow($table,$where){		
	  			 		  $query=$this->db->query("select * from $table $where");		
						    return $query->result_array();	  }	 

	function getAllRowOrderGroup($table,$where,$order){		
	  			 		  $query=$this->db->query("select * from $table $where $order");		
						    return $query->result_array();	  }


	 function getAllRec($select,$table,$where){	
	 	$query=$this->db->query("select $select from $table $where");		
	   return $query->result_array();	  }	 
	    	 
	 function checkDuplicate($table,$where){		
	   $query=$this->db->query("select * from $table $where limit 1");		 
	    return $query->row();				  }	  	  
	function getOneRecField($id,$table,$where){	 	 
	 $query=$this->db->query("select $id from $table $where limit 0,1");		 
	  return $query->row_array();	  }	  
	 function numRow($table,$where){			 
	  $query=$this->db->query("select * from $table $where");		 
	   return $query->num_rows();	  }	  
	function numRowSelect($select,$table,$where){			 
	 $query=$this->db->query("select $select from $table $where");		
	   return $query->num_rows();	  }	  
	 
	function deleteRecord($table,$where){				
	  $this->db->delete($table,$where);	  }	  	  
	  function insertRecord($table,$data){		 
	   $this->db->insert($table,$data);			
	     }	  
	function updateRecord($table,$data,$where){		
	  $this->db->update($table,$data,$where);	
	    }  
		  
	function mysql_safe_string($value){		  
	$value=trim( mysql_real_escape_string($value));		  //$value=strip_image_tags($value);		  //$value=encode_php_tags($value);	
		  return $value;	  }	  	  
	
	
	public function getOneRowPayment($tableName,$filter=array()){
		$this->db->select('*');
		$this->db->from($tableName);
		if($filter){
			$this->db->where($filter);
		}
		$query=$this->db->get();
		//echo $this->db->last_query();exit;
		return $query->row_array();
	}	

	function getCustomerPaymentDtls($customer_shipping_detail_id){

        $sql = "SELECT cr.* FROM customer_shipping_detail AS cr WHERE cr.customer_shipping_detail_id=".$this->db->escape($customer_shipping_detail_id);

        $query = $this->db->query($sql);
        return $query->row_array();
    }	
			
	//Extract Functions	//====================================================    
	function nextId( $table , $id )    {		$this->db->select_max( $id );		$query = $this->db->get( $table );				if ($query->num_rows() > 0)		{			$row = $query->row();			$nextid= $row->$id + 1;		}   		else		{		$nextid= 1;		}           return $nextid;	  }    //funtion select data from table as single row array    //usage row['name']   
	function select_row( $table )    {       
			  $query = $this->db->get( $table );		
			  $result = $query->row_array();		
			  $query->free_result();	 	return $result;   
			   } 
			   
	function select_object_row($table , $whereclause)   {		
				//$sql_rss = "SELECT * from $table WHERE $whereclause";		
				$this->db->where($whereclause);		$query = $this->db->get($table);		$result = $query->result();		return $result;	   	   } 		    
	function select_row_where( $table , $whereclaus )    {        $query = $this->db->get_where( $table, $whereclaus );		$result = $query->row_array();		$query->free_result();       // print_r($result);		
				return $result;    }		//function get results from table as multi rows with where clause
	function select_results_where( $table , $whereclaus )    {        $query = $this->db->get_where( $table, $whereclaus );	 	$result = $query->result();		$query->free_result();		return $result;    }	//Id,table,where//Count Records
		function select_where_row($id, $table, $where)	{		$this->db->select($id);		$this->db->from($table);		$this->db->where($where);		$query = $this->db->get();		return $query->row_array();   }	//function select data from table as single row object    
	function select_row_object(  $table )    {        $query = $this->db->get( $table);  	 	$result = $query->row();		$query->free_result();        return $result;    }	//function select data as results	// use foreach to select data
		 		function select_results( $table ,$id )    {	    $this->db->order_by($id,'desc');        $query = $this->db->get( $table );		$result = $query->result();		$query->free_result();        return $result;    }
//Projects Base Function
	function currFinan(){
	$fyr= $this->db->query("select * from financial_year where  is_default ='Yes'")->row_array();
	return $fyr['financial_year_id'];
}
function DefaultSeller(){
	$seller= $this->db->query("select * from seller where  is_default ='Yes'")->row_array();
	return $seller['seller_id'];
}
	function getAutogen($table,$id,$prefix){
			$query = $this->db->query("select max(".$id.")+1 as nextId from ".$table."");
			$res = $query->result();
			if($res[0]->nextId==''){
				$id = 1;
			}else {
				$id = $res[0]->nextId;
			}
			return $val = $prefix.$id;
		}


	 function authorize($userid,$controller,$status){
		 
		 $user_auth = $this->db->query("select * from erp_master_authorization where employee_id = '".$userid."' AND controllers ='".$controller."' AND status='".$status."'")->num_rows();
		 if($user_auth>0){
			return true; 
		 } else {
			return false;  
		 }
		 
	 }
	 
	 function getModules( $status, $employee_id )
{		
	$combo = '';
	$statrarr = array( "company"=>"Company","branch"=>"branch","business_partner"=>"Alliance","item"=>"Item" ,"employee"=>"Employee" ,"department"=>"Department" ,"financial_year"=>"Financial Year" ,"customer_ledger"=>"Opening Balance" ,"billofmat"=>"Bill Of Material" ,"item_group"=>"Item Group" ,"other_charge"=>"Other Charge" ,"purchase"=>"Purchase Order" ,"grin"=>"GRIN" ,"purchase_invoice"=>"AP Invoice" ,"ap_credit_menu"=>"AP Credit Memo" ,"visit"=>"Visit / Enquiry" ,"sale_order"=>"Booking" ,"delivery_challan"=>"Delivery Challan" ,"invoice"=>"AR Invoice" ,"ar_credit_menu"=>"AR Credit Memo","customer_issue"=>"Customer Issue","customer_receipt"=>"Customer Receipt","outgoing_payment"=>"Outgoing Payment CR","outgoing_payment"=>"Outgoing Payment AP","incoming_payment"=>"Incoming Payment","on_account"=>"On Account Payment","general_entries"=>"Journal Entries","gl_accounts"=>"Main Drawer" ,"stock_branch"=>"Stock Branch" ,"apt_report"=>"APT Report" ,"daily_reports"=>"Daily Reports" ,"buspart_ledger"=>"Alliance Ledger");
	foreach( $statrarr as $id => $value )
	{
		$det_auth = $this->db->query("select * from erp_master_authorization where employee_id='".$employee_id."' AND controllers='".$id."'")->num_rows();
		 if( $det_auth >0 )
			$combo.="<li><input type='checkbox' name='controllers[]' value=$id checked> $value</li>";
		else
			$combo.="<li><input type='checkbox' name='controllers[]' value=$id> $value</li>";
	}
	return $combo;
}
function GetGroupTax($id)	{
			$cat_name = '';
		 	$this->db->select('*');
			$this->db->group_by('tax_row_rate');	
			$query = $this->db->get('tax_detail');	
			$cat_name = '<option value="" selected>Select Tax</option>';
			if($query->num_rows() == 0) 	{				return false;			}			else 	{			$state = $query->result();			foreach($state as $val_type) 	{				if($id==$val_type->tax_row_rate) 				$cat_name.='<option value="'.$val_type->tax_row_rate.'" selected>'.$val_type->tax_row_rate.'</option>';				else				$cat_name.='<option value="'.$val_type->tax_row_rate.'">'.$val_type->tax_row_rate.'</option>';  			}		   return $cat_name;			   }	}	
function GetTax($id)	{
			$cat_name = '';
		 	$this->db->select('*');
            $this->db->where("is_deleted","No");
			$this->db->order_by('tax_id');	
			$query = $this->db->get('tax');	
			$cat_name = '<option value="" selected>Select Tax</option>';
			if($query->num_rows() == 0) 	{				return false;			}			else 	{			$state = $query->result();			foreach($state as $val_type) 	{				if($id==$val_type->tax_id) 				$cat_name.='<option value="'.$val_type->tax_id.'" selected>'.$val_type->tax_code.'</option>';				else				$cat_name.='<option value="'.$val_type->tax_id.'">'.$val_type->tax_code.'</option>';  			}		   return $cat_name;			   }	}	
function authorizeNew($userid){
	
	$ci =& get_instance();
	$cntr = $ci->router->class; // gets class name (controller)
	$funct = $ci->router->method; // gets function name (controller function)
	//$authorize = $this->db->query("select * from authorization where  admin_id ='".$userid."' AND controllers ='".$cntr."'")->row_array();
		
		/*if($this->session->userdata('userType')!='Admin'){
		if($authorize){	
				
			if($authorize['status']!=1 && $authorize['status']!=2){
			 redirect("admin/secure/home");
			}
		   }
		}*/
}
function getController(){
	$ci =& get_instance();
    $cntr = $ci->router->class; 
	return $cntr;
}


function authorizeWrite($userid,$cntr){
	
	$ci =& get_instance();
	$cntr = $ci->router->class; // gets class name (controller)
	$funct = $ci->router->method;
	$authorize = $this->db->query("select * from authorization where  admin_id ='".$userid."' AND controllers ='".$cntr."'")->row_array();
		
		if($this->session->userdata('userType')!='Admin'){
		if($authorize){	
			if($authorize['status']!=2){				
			 redirect('admin/'.$cntr);
			}
		   }
		}
}
 function getModuleslist( $status, $employee_id )
{		
	$combo = '';
	$statrarr = array( "company"=>"Company","users"=>"User","authorize"=>"Authorize","delivery_company"=>"Delivery Company","country"=>"Country","state"=>"State","city"=>"City","banner"=>"Banner","order_status"=>"Order Status","return_reason"=>"Return Reason","cancel_reason"=>"Cancel Reason","uom"=>"Unit Of Measurement","product_group"=>"Colour","material"=>"Material","tax"=>"Tax","promotion_offers"=>"Promotion Offers/Coupon Code","hsn_sac"=>"HSN/SAC code","company_type"=>"Company Type","delivery_pincode"=>"Delivery Pincode","financial_year"=>"Financial Year","customer"=>"Customer","product"=>"Product","todays_deal"=>"Todays Deal","flash_sale"=>"Flash Sale","credit_points"=>"Wallet","contact_us"=>"Contact Us/Enquiry","category"=>"Category", "notification"=>"Notification","product_import"=>"Product Import","review"=>"Review","manufacturer"=>"Manufacturer / Brand ", "rates"=>"Ratings","faq"=>"FAQ","testimonial"=>"Testimonials", "filter"=>"Filter","seller"=>"Seller","seller_payout"=>"Seller Payout","seller_email"=>"Seller Email","orders"=>"Orders","order_return"=>"Orders Return","order_cancel"=>"Order Cancel","product_mylist"=>"Wish List Product","product_quotation"=>"Product Quotation", "quotation"=>"Quotations","pages"=>"Pages");
	return $statrarr;
} 
 function getFinancialYear($id=0)
	{
	  $cat_name = '';
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('is_deleted','No');				
	  $query = $this->db->get('financial_year');								
	  $cat_name = '<option value="" selected>Select Financial Year</option>';
							  
	  if($query->num_rows() == 0) 	{
		  return false;
	  }
	  else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->financial_year_id) 
			  $cat_name.='<option value="'.$val_type->financial_year_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->financial_year_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
 function getCountry($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('country');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->country_id) 
			  $cat_name.='<option value="'.$val_type->country_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->country_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
	function getCity($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('city');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->city_id) 
			  $cat_name.='<option value="'.$val_type->city_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->city_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
 function GetState($id){       $this->db->select('*');						
			$this->db->order_by('state_id');							
			$query = $this->db->get('state');										
			$cat_name = '<option value="" selected>Select State</option>';			
			if($query->num_rows() == 0) 	{return $cat_name;}	else 	{
				$state = $query->result();			
			foreach($state as $val_type) 	{				
			if($id==$val_type->state_id) 				
			           $cat_name.='<option value="'.$val_type->state_id.'" selected>'.$val_type->name.'</option>';			
				else	$cat_name.='<option value="'.$val_type->state_id.'">'.$val_type->name.'</option>';  
			}		   return $cat_name;			 
			  }	
	 }
 function getCategory($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('category');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->category_id) 
			  $cat_name.='<option value="'.$val_type->category_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->category_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
	 function getProductGroup($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('title')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('product_group');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->product_group_id) 
			  $cat_name.='<option value="'.$val_type->product_group_id.'" selected>'.$val_type->title.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->product_group_id.'">'.$val_type->title.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
 function getManufacturer($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('manufacturer');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->manufacturer_id) 
			  $cat_name.='<option value="'.$val_type->manufacturer_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->manufacturer_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
	function getCompany($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('company');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->company_id) 
			  $cat_name.='<option value="'.$val_type->company_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->company_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
 function GetFaq($id){       $this->db->select('*');						
			$this->db->order_by('faq_id');							
			$query = $this->db->get('faq');										
			$cat_name = '<option value="" selected>Select</option>';			
			if($query->num_rows() == 0) 	{return $cat_name;}	else 	{
				$state = $query->result();			
			foreach($state as $val_type) 	{				
			if($id==$val_type->faq_id) 				
			           $cat_name.='<option value="'.$val_type->faq_id.'" selected>'.$val_type->title.'</option>';			
				else	$cat_name.='<option value="'.$val_type->faq_id.'">'.$val_type->title.'</option>';  
			}		   return $cat_name;			 
			  }	
	 }	
		
function GetMaterial($id){       
            $this->db->select('*');						
			$this->db->order_by('material_id');							
			$query = $this->db->get('material');										
			$cat_name = '<option value="" selected>Select</option>';			
			if($query->num_rows() == 0) 	{return $cat_name;}	else 	{
				$state = $query->result();			
			foreach($state as $val_type) 	{				
			if($id==$val_type->material_id) 				
			           $cat_name.='<option value="'.$val_type->material_id.'" selected>'.$val_type->title.'</option>';			
				else	$cat_name.='<option value="'.$val_type->material_id.'">'.$val_type->title.'</option>';  
			}		   return $cat_name;			 
			  }	
	 }	
								 		
 function getReturnReason($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('return_reason');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->return_reason_id) 
			  $cat_name.='<option value="'.$val_type->return_reason_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->return_reason_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
	function getOrderStatus($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('order_status');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->order_status_id) 
			  $cat_name.='<option value="'.$val_type->order_status_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->order_status_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
function getSeller($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('seller');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->seller_id) 
			  $cat_name.='<option value="'.$val_type->seller_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->seller_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}	
function getUOM($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('uom');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->uom_id) 
			  $cat_name.='<option value="'.$val_type->uom_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->uom_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
	function getDocumentNextNo($document_numbering_id){
	 
	  $nextNo = $this->common->getOneRow('document_numbering','where document_numbering_id='.$document_numbering_id.'');
	  if($nextNo){
		  echo $nextNo['next_doc_no'];
	  }else{
		return false;  
	  }
  }
function getDocNo($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('series_name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('document_numbering');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->document_numbering_id) 
			  $cat_name.='<option value="'.$val_type->document_numbering_id.'" selected>'.$val_type->series_name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->document_numbering_id.'">'.$val_type->series_name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
function getCountryOrigin($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('country_origin');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->country_origin_id) 
			  $cat_name.='<option value="'.$val_type->country_origin_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->country_origin_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}	
 function getCancelReason($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('cancel_reason');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->cancel_reason_id) 
			  $cat_name.='<option value="'.$val_type->cancel_reason_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->cancel_reason_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
function getNameTitle($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('title')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('name_title');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->name_title_id) 
			  $cat_name.='<option value="'.$val_type->name_title_id.'" selected>'.$val_type->title.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->name_title_id.'">'.$val_type->title.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
	function getSizeChart($id){
	  $this->db->select('*');			
	  $this->db->order_by('title')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('size_chart_master');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->size_chart_master_id) 
			  $cat_name.='<option value="'.$val_type->size_chart_master_id.'" selected>'.$val_type->title.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->size_chart_master_id.'">'.$val_type->title.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
	function getHsnSac($id){
	  $this->db->select('*');			
	  $this->db->order_by('code')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('hsn_sac');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->hsn_sac_id) 
			  $cat_name.='<option value="'.$val_type->hsn_sac_id.'" selected>'.$val_type->code.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->hsn_sac_id.'">'.$val_type->code.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
	function getPaymentGroup($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('title')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('payment_group');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->payment_group_id) 
			  $cat_name.='<option value="'.$val_type->payment_group_id.'" selected>'.$val_type->title.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->payment_group_id.'">'.$val_type->title.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
function getSize($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('title')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('size');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->size_id) 
			  $cat_name.='<option value="'.$val_type->size_id.'" selected>'.$val_type->title.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->size_id.'">'.$val_type->title.'</option>';  		
		 }
		 return $cat_name;
	  }
	}	
function getMainSize($id=0){
	  $this->db->select('*');			
	  $this->db->where('status','Active')->where('size_type','Yes')->where('is_deleted','No')->order_by('title','ASC');				
	  $query = $this->db->get('size');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->size_id) 
			  $cat_name.='<option value="'.$val_type->size_id.'" selected>'.$val_type->title.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->size_id.'">'.$val_type->title.'</option>';  		
		 }
		 return $cat_name;
	  }
	}	
function getDeliveryCompany($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('delivery_company');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->delivery_company_id) 
			  $cat_name.='<option value="'.$val_type->delivery_company_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->delivery_company_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}
function getSimilarProduct($id=0,$category = ''){
	  $this->db->select('*');	
	  if($category){
		  $this->db->where('category_id',$category);
	  }
	  $this->db->order_by('title')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('similar_product');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->similar_product_id) 
			  $cat_name.='<option value="'.$val_type->similar_product_id.'" selected>'.$val_type->title.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->similar_product_id.'">'.$val_type->title.'</option>';  		
		 }
		 return $cat_name;
	  }
	}		
function getMenuPage($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('menu_page');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result();
		 foreach($state as $val_type){
			  if($id==$val_type->menu_page_id) 
			  $cat_name.='<option value="'.$val_type->menu_page_id.'" selected>'.$val_type->name.'</option>';
			  else
			  $cat_name.='<option value="'.$val_type->menu_page_id.'">'.$val_type->name.'</option>';  		
		 }
		 return $cat_name;
	  }
	}	
function getFilter($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('title')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('filter');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result_array();
		 foreach($state as $val_type){
			  if($id==$val_type['filter_id']) 
			  $cat_name.='<option value="'.$val_type['filter_id'].'" selected>'.$val_type['title'].'</option>';
			  else
			  $cat_name.='<option value="'.$val_type['filter_id'].'">'.$val_type['title'].'</option>';  		
		 }
		 return $cat_name;
	  }
	}	
function GetParentCategory($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('category_id')->where('status','Active')->where('is_deleted','No')->where('parent_id','0');				
	  $query = $this->db->get('category');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result_array();
		 foreach($state as $val_type){
			  if($id==$val_type['category_id']) 
			  $cat_name.='<option value="'.$val_type['category_id'].'" selected>'.$val_type['name'].'</option>';
			  else
			  $cat_name.='<option value="'.$val_type['category_id'].'">'.$val_type['name'].'</option>';  		
		 }
		 return $cat_name;
	  }
	}	
function GetCompanyType($id=0){
	  $this->db->select('*');			
	  $this->db->order_by('company_type_id')->where('status','Active')->where('is_deleted','No');				
	  $query = $this->db->get('company_type');								
	  $cat_name = '<option value="" selected>Select</option>';							  
	  if($query->num_rows() == 0) 	{
		  return $cat_name;
	  }else{
		 $state = $query->result_array();
		 foreach($state as $val_type){
			  if($id==$val_type['company_type_id']) 
			  $cat_name.='<option value="'.$val_type['company_type_id'].'" selected>'.$val_type['title'].'</option>';
			  else
			  $cat_name.='<option value="'.$val_type['company_type_id'].'">'.$val_type['title'].'</option>';  		
		 }
		 return $cat_name;
	  }
	}					 		
	 function categoryParentChildTree($parent = 0, $spacing = '', $category_tree_array = '') {
	
	if (!is_array($category_tree_array))
		$category_tree_array = array();
 
	$sqlCategory = $this->getAllRow('category',"where status='Active' AND is_deleted='No' AND parent_id = $parent");
	
	
	if (count($sqlCategory) > 0) {
		foreach($sqlCategory as $val) {
			$category_tree_array[] = array("category_id" => $val['category_id'], "name" => $spacing . $val['name']);
			$category_tree_array = $this->categoryParentChildTree($val['category_id'], '&nbsp;&nbsp;&nbsp;&nbsp;'.$spacing . '-&nbsp;', $category_tree_array);
		}
	}
	return $category_tree_array;
}	
 	 
	 function getChildren($parent) {
    $query = "SELECT * FROM category WHERE parent_id = $parent";
    $result = $this->db->query($query)->result_array();
   
    $i = 0;
    foreach($result as $val)  {
		 $downline[] = $val['category_id'];
       //$downline['id'] = $this->getChildren($val['category_id']);
    $i++;
    }
return $downline;
}
	 //ADDING PRODUCT TO WISHLIST
    function add_compare($product_id)
    {
		if($this->session->userdata('compare')==''){
          $compared = array();
		}else{
			$compared = $this->session->userdata('compare');
		}
		if(!in_array($product_id,$compared)){
        array_push($compared, $product_id);
		}
		//$this->db->query("select product_id from product where ");
        $this->session->set_userdata('compare', $compared);
    }

    //REMOVING PRODUCT FROM WISHLIST
    function remove_compare($product_id)
    {
		$compare = $this->session->userdata('compare');
		print_r($compare);
		foreach($compare as $key=>$val){
			if($val==$product_id){
		unset($compare[$key]);
			}
		}
		$this->session->set_userdata('compare',$compare);
    }
	function sellerProduct($seller_id){	  
	  $res =  $this->db->query('select count(distinct p.product_id) as tot from product as  p left join seller_product as sp ON sp.product_id=p.product_id where sp.seller_id='.$seller_id.' and p.status="Active" AND p.is_package="No" AND p.is_deleted="No" ')->row_array();
	  if($res){
		  return $res['tot'];
	  }else{
	      return false;
	  }
	}
	function categoryProduct($category_id){
		$data['category_list'] = $this->common->categoryParentChildTree($category_id);
		$data_arr[] = $category_id;
		if($data['category_list']){
		foreach($data['category_list'] as $key => $value){
		    $data_arr[] = $value['category_id'];
	     }
        }
		$data_arr;
	  $res =  $this->db->query('select count(distinct p.product_id) as tot  from product as p LEFT JOIN product_category as pc ON pc.product_id=p.product_id where pc.category_id IN ( '.implode(',',$data_arr).' ) AND p.status="Active" AND p.is_package="No" AND p.is_deleted="No"')->row_array();
	  if($res){
		  return $res['tot'];
	  }else{
		  return false;
	  }
	}
	function filterProducts($id){
		$query = $this->db->query('select COUNT(pf.product_id) as tot from product_filter as pf LEFT JOIN product as p ON pf.product_id=p.product_id where pf.filter_detail_id='.$id.' AND p.status="Active" AND p.is_deleted="No"')->row_array();
		if($query) return $query['tot']; else return false;
	}
	function onlineUser(){
	//$online = $this->db->query('SELECT COUNT(DISTINCT ip_address) as tot From ci_sessions as cs left join customer as c on cs.ip_address=c.ip WHERE (DATE_ADD(FROM_UNIXTIME(last_activity), INTERVAL 5 MINUTE) < NOW()) AND c.ip!=""')->row_array();	
	$online = $this->db->query('SELECT COUNT(DISTINCT customer_id) as tot from customer  where last_login >= NOW() -  INTERVAL 5 MINUTE')->row_array();	
	return $online['tot'];
	}
	function getBrandNoProducts($id,$category_id){
		$query = $this->db->query('select COUNT(distinct p.product_id) as tot from product as p LEFT JOIN product_category as pc ON p.product_id=pc.product_id  where p.manufacturer_id='.$id.' AND pc.category_id IN ( '.implode(',',$category_id).' )  AND p.status="Active" AND p.is_deleted="No" ')->row_array();
		if($query) return $query['tot']; else return false;
	}
	function getDiscountNoProducts($id,$category_id){
		$query = $this->db->query('select COUNT(distinct p.product_id) as tot from product as p LEFT JOIN product_category as pc ON p.product_id=pc.product_id  where p.discount_range_id='.$id.' AND pc.category_id IN ( '.implode(',',$category_id).' )  AND p.status="Active" AND p.is_deleted="No" ')->row_array();
		if($query) return $query['tot']; else return false;
	}
	function getCountryOriginNoProducts($id,$category_id){
		$query = $this->db->query('select COUNT( distinct p.product_id) as tot from product as p LEFT JOIN product_category as pc ON p.product_id=pc.product_id  where p.country_origin_id='.$id.' AND pc.category_id IN ( '.implode(',',$category_id).' )  AND p.status="Active" AND p.is_deleted="No" ')->row_array();
		if($query) return $query['tot']; else return false;
	}
	function filterCategoryProducts($id,$category_id){
		$query = $this->db->query('select COUNT(pf.product_id) as tot from product_filter as pf LEFT JOIN product_category as pc ON pf.product_id=pc.product_id left join product as p ON pc.product_id=p.product_id where pf.filter_detail_id='.$id.' AND pc.category_id='.$category_id.'  AND p.status="Active" AND p.is_deleted="No" ')->row_array();
		if($query) return $query['tot']; else return false;
	}
function filterCategoryDetailProducts($id,$category_id){
		$query = $this->db->query('select COUNT(pf.product_id) as tot from product_filter as pf LEFT JOIN product_category as pc ON pf.product_id=pc.product_id left join product as p ON pc.product_id=p.product_id where pf.filter_detail_id='.$id.' AND pc.category_id  IN ( '.implode(',',$category_id).' )  AND p.status="Active" AND p.is_deleted="No" ')->row_array();
		if($query) return $query['tot']; else return false;
	}
function CustomerCart(){
            $this->db->where('customer_id', $this->session->userdata('hyabhavat_usr'));
		    $this->db->delete('customer_cart');		
		    foreach ($this->cart->contents() as $items){		
			$this->common->insertRecord('customer_cart',array('customer_id'=>$this->session->userdata('hyabhavat_usr'),'product_id'=>$items['id'],'quantity'=>$items['qty']));
				}	
}
function CustomerCartProduct($product_id,$customer_id,$qty,$size_id,$seller_id,$pincode){
	if($customer_id){
	        $customer_prod = $this->getOneRow('customer_cart','where product_id='.$product_id.' AND customer_id='.$customer_id.''); 
			if(!$customer_prod){
            $this->common->insertRecord('customer_cart',array('customer_id'=>$customer_id,'product_id'=>$product_id,'quantity'=>$qty,'size_id'=>$size_id,'seller_id'=>$seller_id,'pincode'=>$pincode));
			}else{
			$this->common->updateRecord('customer_cart',array('quantity'=>$qty),"customer_cart_id = ". $customer_prod['customer_cart_id']);	
			}
	}
}

function deleteCustomerCart($customer_id,$product_id){
	        $this->db->where('customer_id', $customer_id)->where('product_id',$product_id); 
		    $this->db->delete('customer_cart');	
}

function get_most_root_of_any_id($id=NULL){

        if($id==NULL){
            return false;
        }

        $this->db->select("parent_id");
        $this->db->where("category_id",$id);
        $result = $this->db->get("category");

        if($result->num_rows()==0){
            return false;
        }

      $record =  $result->first_row();

      if($record->parent_id==0){
            return $id;
      }else{
        return $this->get_most_root_of_any_id($record->parent_id);
      } 

    }

	function DuplicateMySQLRecord ($table, $primary_key_field, $primary_key_val) 
	{
	   /* generate the select query */
	   $this->db->where($primary_key_field, $primary_key_val); 
	   $query = $this->db->get($table);
	  
	    foreach ($query->result() as $row){   
	       foreach($row as $key=>$val){        
	          if($key != $primary_key_field){ 
	          /* $this->db->set can be used instead of passing a data array directly to the insert or update functions */
	          $this->db->set($key, $val);               
	          }//endif              
	       }//endforeach
	    }//endforeach
	    /* insert the new record into table*/
	    return $this->db->insert($table); 
	}

	
	function SmsMobileNutridockRegistration($id,$mobile){
		
		$query = $this->common->getOneRow('sms_config','where 1');	

		$webinar = $this->common->getOneRow('webinar',"WHERE id='".$id."'");
		

		$param['Message'] = 'Hello '.$webinar['name'].','.'\r\n'.'This is a confirmation that we have received your online payment of Rs.150.'.'\r\n'.'From'.'\r\n'.'Team Nutridock.';

		$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&senderid=".$query['sender_id']."&route=".$query['route']."&number=".$mobile."&message=".rawurlencode($param['Message']);
		
		$ch = curl_init($url); 
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		  $curl_scraped_page = curl_exec($ch); curl_close($ch);  $curl_scraped_page;
	}

	function SmsMobileNutridockRegistration2($id,$mobile){
		$query = $this->common->getOneRow('sms_config','where 1');	
		$webinar = $this->common->getOneRow('webinar1',"WHERE id='".$id."'");
		
         $zoom_link = "https://zoom.us/j/99903943845?pwd=ZnEwNWkwUGhKK1ByQ3NHbVFQL2ZjUT09";
         
		$param['Message'] = 'Hello '.$webinar['name'].','.'\r\n'.'This is our zoom link for webinar.'.'\r\n'.$zoom_link.'\r\n'.'From'.'\r\n'.'Team Nutridock.';

		$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&senderid=".$query['sender_id']."&route=".$query['route']."&number=".$mobile."&message=".rawurlencode($param['Message']);
		
		$ch = curl_init($url); 
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		  $curl_scraped_page = curl_exec($ch); curl_close($ch);  $curl_scraped_page;
	}



	function SmsMobileBookingService($id,$mobile){
		
		$query = $this->common->getOneRow('sms_config','where 1');	

		$service_data = $this->common->getOneRow('book_your_service',"WHERE id='".$id."'");
		

		$param['Message'] = 'Dear '.$service_data['name'].','.'\r\n'.'Thank you for book service. One of our team member shall get back to you at the time of booking Date.'.'\r\n'.'Team Rushubh Honda,'.'\r\n'.'Nashik: 0253-6643444';
		//http://alerts2.netsolitsolution.com/http-api.php?username=enterusername&password=enterpassword&senderid=6char-senderid&route=1&unicode=2&number=enternumber&message=हेलो 

		//$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&to=".$mobile."&text=".rawurlencode($param['Message'])."&from=".$query['sender_id'];
		
		//http://alerts2.netsolitsolution.com/http-api.php?username=enterusername&password=enterpassword&senderid=6char-senderid&route=1&number=enternumber&message=hello
		
		//Previous id = RUSHBH


		$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&senderid=".$query['sender_id']."&route=".$query['route']."&number=".$mobile."&message=".rawurlencode($param['Message']);
		//echo $url;
		//exit();
		$ch = curl_init($url); 
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		  $curl_scraped_page = curl_exec($ch); curl_close($ch);  $curl_scraped_page;
	}

	function SmsMobileOnlineBooking($id,$mobile){
		
		$query = $this->common->getOneRow('sms_config','where 1');	

		$booking_data = $this->common->getOneRow('booking',"WHERE id='".$id."'");
		

		$param['Message'] = 'Dear '.$booking_data['name'].','.'\r\n'.'Thank you for booking '.$booking_data['car'].'-'.$booking_data['varient'].'.'.' One of our team member shall get back to you shortly.'.'\r\n'.'Team Rushubh Honda,'.'\r\n'.'Nashik: 0253-6643444';
		//SUCCESSFULLY RUN = http://alerts2.netsolitsolution.com/http-api.php?username=rushab&password=rushab123&senderid=RUSHBH&route=1&unicode=1&number=9284225229&message=Hello

		//http://alerts2.netsolitsolution.com/http-api.php?username=enterusername&password=enterpassword&senderid=6char-senderid&route=1&unicode=2&number=enternumber&message=हेलो 

		//$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&to=".$mobile."&text=".rawurlencode($param['Message'])."&from=".$query['sender_id'];
	
		//$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&senderid=".$query['sender_id']."&route=".$query['route']."&unicode=".$id."&number=".$mobile."&message=".rawurlencode($param['Message']);

		$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&senderid=".$query['sender_id']."&route=".$query['route']."&number=".$mobile."&message=".rawurlencode($param['Message']);

		
		//echo $url;
		//exit();
		$ch = curl_init($url); 
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		  $curl_scraped_page = curl_exec($ch); 
		  curl_close($ch);  
		  $curl_scraped_page;
	}


	function SmsWhatsAppBookService($id,$mobile){

		$service_data = $this->common->getOneRow('book_your_service',"WHERE id='".$id."'");

		$location = $service_data['location'];

		if($location=="Mumbai Naka"){
			$param['Message'] = "Dear ".$service_data['name'].","."\r\n"."Thank you for booking our service.One of our team member shall get back to you shortly. "."\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";

			$arr1=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['Message']
			));
			$url1="https://eu41.chat-api.com/instance154201/message?token=5prvx9tgc13jwnww";
			
			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"lat"=>"19.986883",
				"lng"=>"73.784095"
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendLocation?token=e1lhshb7e3o1nbwf";
		}elseif($location=="Indira Nagar"){//,

			$param['Message'] = "Dear ".$service_data['name'].","."\r\n"."Thank you for booking our service.One of our team member shall get back to you shortly. "."\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";

			$arr1=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['Message']
			));
			$url1="https://eu41.chat-api.com/instance154201/message?token=5prvx9tgc13jwnww";

			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"lat"=>"19.974323",
				"lng"=>"73.787056"
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendLocation?token=e1lhshb7e3o1nbwf";
		}elseif($location=="Ambad"){//, 

			$param['Message'] = "Dear ".$service_data['name'].","."\r\n"."Thank you for booking our service.One of our team member shall get back to you shortly. "."\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";

			$arr1=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['Message']
			));
			$url1="https://eu41.chat-api.com/instance154201/message?token=5prvx9tgc13jwnww";

			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"lat"=>"19.955379",
				"lng"=>"73.752280"
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendLocation?token=e1lhshb7e3o1nbwf";
		}
		
		$ch1=curl_init();
		curl_setopt($ch1,CURLOPT_URL,$url1);
		curl_setopt($ch1,CURLOPT_POST,true);
		curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch1,CURLOPT_POSTFIELDS,$arr1);
		curl_setopt($ch1,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr1)
		));
		$result1=curl_exec($ch1);
		curl_close($ch1);
		$result1;

		$ch2=curl_init();
		curl_setopt($ch2,CURLOPT_URL,$url2);
		curl_setopt($ch2,CURLOPT_POST,true);
		curl_setopt($ch2,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch2,CURLOPT_POSTFIELDS,$arr2);
		curl_setopt($ch2,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr2)
		));
		$result2=curl_exec($ch2);
		curl_close($ch2);
		$result2;
	}


	function SmsWhatsAppOnlineBooking($id,$mobile){

		$booking_data = $this->common->getOneRow('booking',"WHERE id='".$id."'");

		//$param['Message'] = 'Dear '.$finance_data['name'].','.'\r\n'.'Thank you for contacting us. We have received your enquiry. One of our team member shall get back to you shortly. '.'\r\n'.'Thanks & Regards,'.'\r\n'.'Team Rushubh Honda,'.'\r\n'.'Nashik: 0253-6643444';

		$param['Message'] = "Dear ".$booking_data['name'].","."\r\n"."Thank you for choosing Rushabh Honda.We hope you had a good experience. We always strive to keep improving the service we offer. Our highest priority is to ensure that these services meet your expectations."."\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";


		$arr=json_encode(array(
			"phone"=>'91'.$mobile,
			"body"=>$param['Message']
		));
		//$url="https://eu41.chat-api.com/instance154201/message?token=5prvx9tgc13jwnww";
		$url="https://eu41.chat-api.com/instance154201/message?token=5prvx9tgc13jwnww";
		
		$param['File'] = base_url()."assets/pdf/cd110dream_brochure.pdf";
		$param['Name'] = "CD110_Dream.pdf";

		$arr2=json_encode(array(
			"phone"=>'91'.$mobile,
			"body"=>$param['File'],
			"filename"=>$param['Name'] 
		));
		$url2 = "https://eu14.chat-api.com/instance155295/sendFile?token=e1lhshb7e3o1nbwf";
		
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_POST,true);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
		curl_setopt($ch,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr)
		));
		$result=curl_exec($ch);
		curl_close($ch);
		//echo $result;

		$ch2=curl_init();
		curl_setopt($ch2,CURLOPT_URL,$url2);
		curl_setopt($ch2,CURLOPT_POST,true);
		curl_setopt($ch2,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch2,CURLOPT_POSTFIELDS,$arr2);
		curl_setopt($ch2,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr2)
		));
		$result2=curl_exec($ch2);
		curl_close($ch2);
		$result2;
		$result;
	}

	function WhatsAppMsgFinance($id,$mobile){

		$finance_data = $this->common->getOneRow('finance',"WHERE id='".$id."'");

		$param['Message'] = "Dear ".$finance_data['name'].","."\r\n"."Thanks for connecting with Rushabh Honda.Our executive will get back to you soon. "."\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";
		
		
		$arr1=json_encode(array(
			"phone"=>'91'.$mobile,
			"body"=>$param['Message']
		));

	
		$url1 = "https://eu14.chat-api.com/instance155295/message?token=e1lhshb7e3o1nbwf";
		/*$url2 = "https://eu14.chat-api.com/instance155295/sendLocation?token=e1lhshb7e3o1nbwf";*/
	
		$ch1=curl_init();
		curl_setopt($ch1,CURLOPT_URL,$url1);
		curl_setopt($ch1,CURLOPT_POST,true);
		curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch1,CURLOPT_POSTFIELDS,$arr1);
		curl_setopt($ch1,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr1)
		));
		$result1=curl_exec($ch1);
		curl_close($ch1);
		//echo $result;

		$result1;
	}


	function WhatsAppMsgInsurance($id,$mobile){

		$insurance_data = $this->common->getOneRow('insurance',"WHERE id='".$id."'");

		$param['Message'] = "Dear ".$insurance_data['full_name'].","."\r\n"."Thanks for connecting with Rushabh Honda.Our executive will get back to you soon. "."\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";
		
		
		$arr1=json_encode(array(
			"phone"=>'91'.$mobile,
			"body"=>$param['Message']
		));
		$url1 = "https://eu14.chat-api.com/instance155295/message?token=e1lhshb7e3o1nbwf";
		/*$url2 = "https://eu14.chat-api.com/instance155295/sendLocation?token=e1lhshb7e3o1nbwf";*/
	
		$ch1=curl_init();
		curl_setopt($ch1,CURLOPT_URL,$url1);
		curl_setopt($ch1,CURLOPT_POST,true);
		curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch1,CURLOPT_POSTFIELDS,$arr1);
		curl_setopt($ch1,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr1)
		));
		$result1=curl_exec($ch1);
		curl_close($ch1);
		//echo $result;
		$result1;
	}

	function WhatsAppMsgAmc($id,$mobile){

		$amc_data = $this->common->getOneRow('amc',"WHERE id='".$id."'");

		$param['Message'] = "Dear ".$amc_data['name'].","."\r\n"."Thanks for connecting with Rushabh Honda.Our executive will get back to you soon. "."\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";
		
		
		$arr1=json_encode(array(
			"phone"=>'91'.$mobile,
			"body"=>$param['Message']
		));
		$url1 = "https://eu14.chat-api.com/instance155295/message?token=e1lhshb7e3o1nbwf";
		/*$url2 = "https://eu14.chat-api.com/instance155295/sendLocation?token=e1lhshb7e3o1nbwf";*/
	
		$ch1=curl_init();
		curl_setopt($ch1,CURLOPT_URL,$url1);
		curl_setopt($ch1,CURLOPT_POST,true);
		curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch1,CURLOPT_POSTFIELDS,$arr1);
		curl_setopt($ch1,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr1)
		));
		$result1=curl_exec($ch1);
		curl_close($ch1);
		//echo $result;
		$result1;
	}

	function WhatsAppMsgHondaShield($id,$mobile){

		$enquiry_data = $this->common->getOneRow('enquiry',"WHERE id='".$id."'");

		$model = $enquiry_data['modelid']; 

		$param['Message'] = "Dear ".$enquiry_data['name'].","."\r\n"."Thanks for connecting with Rushabh Honda.Our executive will get back to you soon. "."\r\n"."Thanks & Regards,"."\r\n"."Team Rushubh Honda,"."\r\n"."Nashik: 0253-6643444";
		$arr1=json_encode(array(
			"phone"=>'91'.$mobile,
			"body"=>$param['Message']
		));
		$url1 = "https://eu14.chat-api.com/instance155295/message?token=e1lhshb7e3o1nbwf";


		if($model=="SP125"){
			$param['File'] = base_url()."assets/pdf/SP_125BS_VI.pdf";
			$param['Name'] = "SP_125BS_VI.pdf";

			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['File'],
				"filename"=>$param['Name'] 
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendFile?token=e1lhshb7e3o1nbwf";
		}elseif($model=="CD110 Dream"){
			$param['File'] = base_url()."assets/pdf/cd110dream_brochure.pdf";
			$param['Name'] = "CD110_Dream.pdf";

			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['File'],
				"filename"=>$param['Name'] 
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendFile?token=e1lhshb7e3o1nbwf";
		}elseif($model=="Activa 125"){
			$param['File'] = base_url()."assets/pdf/Activa125_BS-VI.pdf";
			$param['Name'] = "Activa_125.pdf";

			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['File'],
				"filename"=>$param['Name'] 
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendFile?token=e1lhshb7e3o1nbwf";
		}elseif($model=="Livo"){
			$param['File'] = base_url()."assets/pdf/Livo-Brochure.pdf";
			$param['Name'] = "Livo_Brochure.pdf";

			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['File'],
				"filename"=>$param['Name'] 
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendFile?token=e1lhshb7e3o1nbwf";
		}elseif($model=="New Unicorn BS-VI"){
			$param['File'] = base_url()."assets/pdf/unicornBS6Brochure.pdf";
			$param['Name'] = "New_Unicorn_BS_VI.pdf";

			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['File'],
				"filename"=>$param['Name'] 
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendFile?token=e1lhshb7e3o1nbwf";
		}elseif($model=="Shine BS VI"){
			$param['File'] = base_url()."assets/pdf/ShineBS6Brochure.pdf";
			$param['Name'] = "Shine_BS_VI.pdf";

			$arr2=json_encode(array(
				"phone"=>'91'.$mobile,
				"body"=>$param['File'],
				"filename"=>$param['Name'] 
			));
			$url2 = "https://eu14.chat-api.com/instance155295/sendFile?token=e1lhshb7e3o1nbwf";
		}

		$ch1=curl_init();
		curl_setopt($ch1,CURLOPT_URL,$url1);
		curl_setopt($ch1,CURLOPT_POST,true);
		curl_setopt($ch1,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch1,CURLOPT_POSTFIELDS,$arr1);
		curl_setopt($ch1,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr1)
		));
		$result1=curl_exec($ch1);
		curl_close($ch1);

		$ch2=curl_init();
		curl_setopt($ch2,CURLOPT_URL,$url2);
		curl_setopt($ch2,CURLOPT_POST,true);
		curl_setopt($ch2,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch2,CURLOPT_POSTFIELDS,$arr2);
		curl_setopt($ch2,CURLOPT_HTTPHEADER,array(
			'Content-type:application/json',
			'Content-length:'.strlen($arr2)
		));
		$result2=curl_exec($ch2);
		curl_close($ch2);
		$result2;

		$result1;
	}


	


  	function calTaxDetail($tax_code,$row_total,$primary_detail_id,$detail_id,$detail_table,$document_id,$tax_type){
     	$tax  = $this->common->getOneRow('tax','where tax_rate='.$tax_code.' AND type="'.$tax_type.'"');   
     	$tax_det = $this->common->getAllRow('tax_detail','where tax_id='.$tax['tax_id'].'');
		foreach($tax_det as $tval){
			$tax_rate = ($row_total*$tval['tax_row_rate'])/100;	
			$this->common->insertRecord($detail_table,array($primary_detail_id=>$detail_id,'invoice_id'=>$document_id,'tax_id'=>$tax['tax_id'],'tax_detail_id'=>$tval['tax_detail_id'],'tax_head_name'=>$tval['tax_row_code'],'tax_rate'=>$tval['tax_row_rate'],'amount'=>$tax_rate));			
		}						
	}
  
  
  function getCategoryTreeIDs($catID) {
        $row = $this->db->query("SELECT parent_id FROM category WHERE category_id = '$catID'")->row_array();
        $path = array();
        if (!$row['parent_id'] == '') {
            $path[] = $row['parent_id'];
            $path = array_merge($this->getCategoryTreeIDs($row['parent_id']), $path);
        }
        return $path;
    }
	
	function showCatBreadCrumb($catID) {
 
        $array = $this->getCategoryTreeIDs($catID);
 
        $numItems = count($array);
        for ($i = 0; $i<=$numItems-1; $i++) {
			$category_detail = $this->getOneRow('category','where category_id='.$array[$i].'');
            return $category_detail['name'] . ' >';
        }
    }
function account_verified($id){
	$seller_verified = $this->common->getOneRow('seller','where seller_id='.$id.' AND seller_approved="No"');
	if($seller_verified)
	redirect('vendor/secure/home');
}
function checkPincodeOnProductCategory($product_id, $pincode){
	$product_dtl = $this->getOneRow('product', "WHERE product_id='".$product_id."'");
	$cat_delivery_pincode_dtl = $this->getOneRow('category_delivery_pincode', "WHERE category_id='".$product_dtl['parent_category_id']."' AND pincode='".$pincode."'");
	if($cat_delivery_pincode_dtl){
		return $cat_delivery_pincode_dtl;
	}
	return false;
}
}
?>