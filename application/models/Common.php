<?php class Common extends CI_Model 
{	
	public function __construct(){		
		parent::__construct();		
		date_default_timezone_set('Asia/Calcutta');	
	}	


	function getOneRow($table,$where){				 
		$query=$this->db->query("select * from $table $where limit 1");		
	   	return $query->row_array();	 
	}	  	 
	function getAllRow($table,$where){		
		$query=$this->db->query("select * from $table $where");		
		return $query->result_array();	  
	}	 
	function getAllRowOrderGroup($table,$where,$order)
	{		
		$query=$this->db->query("select * from $table $where $order");		
		return $query->result_array();	  
	}
	function getAllRec($select,$table,$where)
	{	
	 	$query=$this->db->query("select $select from $table $where");		
		return $query->result_array();	  
	}	 
	function checkDuplicate($table,$where)
	{		
	   $query=$this->db->query("select * from $table $where limit 1");		 
	   return $query->row();				  
	}	  	  
	function getOneRecField($id,$table,$where)
	{	 	 
		$query=$this->db->query("select $id from $table $where limit 0,1");		 
	  	return $query->row_array();	  
	}	  
	function numRow($table,$where)
	{			 
		$query=$this->db->query("select * from $table $where");		 
	    return $query->num_rows();	  
	}	  
	function numRowSelect($select,$table,$where)
	{			 
		$query=$this->db->query("select $select from $table $where");		
	    return $query->num_rows();	  
	}	  
	function deleteRecord($table,$where)
	{				
		$this->db->delete($table,$where);	  
	}	  	  
	function insertRecord($table,$data)
	{		 
		$this->db->insert($table,$data);			
	}	  
	function updateRecord($table,$data,$where)
	{		
		$this->db->update($table,$data,$where);	
	}  	  	  
	public function getOneRowPayment($tableName,$filter=array())
	{
		$this->db->select('*');
		$this->db->from($tableName);
		if($filter){
			$this->db->where($filter);
		}
		$query=$this->db->get();
		return $query->row_array();
	}	

	function getCustomerPaymentDtls($customer_shipping_detail_id)
	{
        $sql = "SELECT cr.* FROM customer_shipping_detail AS cr WHERE cr.customer_shipping_detail_id=".$this->db->escape($customer_shipping_detail_id);
        $query = $this->db->query($sql);
        return $query->row_array();
    }	
			
	function nextId( $table , $id )   
	{		
		$this->db->select_max( $id );		
		$query = $this->db->get( $table );				
		if ($query->num_rows() > 0)		
		{			
			$row = $query->row();			
			$nextid= $row->$id + 1;		
		}   		
		else		
		{		
			$nextid= 1;		
		}           
		return $nextid;	 
	}    
	function select_row( $table )    
	{       
		$query = $this->db->get( $table );		
		$result = $query->row_array();		
		$query->free_result();	 	
		return $result;   
	} 
			   
	function select_object_row($table,$whereclause)   
	{		
		$this->db->where($whereclause);		
		$query = $this->db->get($table);		
		$result = $query->result();		
		return $result;	   	   
	} 		    
	function select_row_where( $table , $whereclaus )    
	{        
		$query = $this->db->get_where( $table, $whereclaus );		
		$result = $query->row_array();		
		$query->free_result(); 
		return $result;    
	}		
	function select_results_where( $table , $whereclaus )   
	{ 
	    $query = $this->db->get_where( $table, $whereclaus );	 	
	    $result = $query->result();		
	    $query->free_result();		
	    return $result;    
	}
	function select_where_row($id, $table, $where)	
	{		
		$this->db->select($id);		
		$this->db->from($table);		
		$this->db->where($where);		
		$query = $this->db->get();		
		return $query->row_array();   
	}	
	function select_row_object(  $table ) 
	{
	    $query = $this->db->get( $table);  	 	
	    $result = $query->row();		
	    $query->free_result();        
	    return $result;    
	}
	function select_results( $table ,$id )    
	{
	    $this->db->order_by($id,'desc');        
	    $query = $this->db->get( $table );		
	    $result = $query->result();		
	    $query->free_result();        
	    return $result;    
	}
	function currFinan()
	{
		$fyr= $this->db->query("select * from financial_year where  is_default ='Yes'")->row_array();
		return $fyr['financial_year_id'];
	}
	function DefaultSeller(){
		$seller= $this->db->query("select * from seller where  is_default ='Yes'")->row_array();
		return $seller['seller_id'];
	}
	function getAutogen($table,$id,$prefix)
	{
		$query = $this->db->query("select max(".$id.")+1 as nextId from ".$table."");
		$res = $query->result();
		if($res[0]->nextId==''){
		$id = 1;
		}else {
			$id = $res[0]->nextId;
		}
		return $val = $prefix.$id;
	}
	function authorize($userid,$controller,$status)
	{
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
	function GetGroupTax($id)	
	{
		$cat_name = '';
	 	$this->db->select('*');
		$this->db->group_by('tax_row_rate');	
		$query = $this->db->get('tax_detail');	
		$cat_name = '<option value="" selected>Select Tax</option>';
		if($query->num_rows() == 0) {
		return false;			
		}else{
		$state = $query->result();	
		foreach($state as $val_type) 	
			{				
				if($id==$val_type->tax_row_rate) 				
					$cat_name.='<option value="'.$val_type->tax_row_rate.'" selected>'.$val_type->tax_row_rate.'</option>';				
				else				
					$cat_name.='<option value="'.$val_type->tax_row_rate.'">'.$val_type->tax_row_rate.'</option>';  			
			}		   return $cat_name;			   
		}	
	}
	function GetTax($id)	
	{
		$cat_name = '';
	 	$this->db->select('*');
        $this->db->where("is_deleted","No");
		$this->db->order_by('tax_id');	
		$query = $this->db->get('tax');	
		$cat_name = '<option value="" selected>Select Tax</option>';
		if($query->num_rows() == 0) 	
		{				
			return false;			
		}else{
			$state = $query->result();			
			foreach($state as $val_type) 	
			{				
				if($id==$val_type->tax_id) 				
					$cat_name.='<option value="'.$val_type->tax_id.'" selected>'.$val_type->tax_code.'</option>';				
				else				
				$cat_name.='<option value="'.$val_type->tax_id.'">'.$val_type->tax_code.'</option>';  
			}		   
			return $cat_name;			  
		}	
	}	
	function authorizeNew($userid)
	{
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
 	function GetState($id)
 	{       
 		$this->db->select('*');						
		$this->db->order_by('state_id');							
		$query = $this->db->get('state');										
		$cat_name = '<option value="" selected>Select State</option>';			
		if($query->num_rows() == 0)
		{
			return $cat_name;
		}else{
			$state = $query->result();			
			foreach($state as $val_type) 	
			{				
				if($id==$val_type->state_id) 				
				$cat_name.='<option value="'.$val_type->state_id.'" selected>'.$val_type->name.'</option>';	
				else	
				$cat_name.='<option value="'.$val_type->state_id.'">'.$val_type->name.'</option>';  
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
 	function GetFaq($id)
 	{       
 		$this->db->select('*');						
		$this->db->order_by('faq_id');							
		$query = $this->db->get('faq');										
		$cat_name = '<option value="" selected>Select</option>';			
		if($query->num_rows() == 0) 	
		{
			return $cat_name;
		}
		else
		{
			$state = $query->result();			
			foreach($state as $val_type)
		{				
			if($id==$val_type->faq_id) 				
			$cat_name.='<option value="'.$val_type->faq_id.'" selected>'.$val_type->title.'</option>';	
			else	
				$cat_name.='<option value="'.$val_type->faq_id.'">'.$val_type->title.'</option>';  
			}	
			return $cat_name;			 
		}	
	}	

	function GetMaterial($id)
	{       
        $this->db->select('*');						
		$this->db->order_by('material_id');							
		$query = $this->db->get('material');										
		$cat_name = '<option value="" selected>Select</option>';			
		if($query->num_rows() == 0) 	
		{
			return $cat_name;
		}	
		else 	
		{
			$state = $query->result();			
			foreach($state as $val_type) 
			{				
				if($id==$val_type->material_id) 				
			    $cat_name.='<option value="'.$val_type->material_id.'" selected>'.$val_type->title.'</option>';			
				else
				$cat_name.='<option value="'.$val_type->material_id.'">'.$val_type->title.'</option>';  
			}	
			return $cat_name;			 
		}	
	}	
 	function getReturnReason($id=0)
 	{
		$this->db->select('*');			
	  	$this->db->order_by('name')->where('status','Active')->where('is_deleted','No');				
	  	$query = $this->db->get('return_reason');								
	  	$cat_name = '<option value="" selected>Select</option>';							  
	  	if($query->num_rows() == 0) 	
	  	{
			return $cat_name;
	  	}else{
		$state = $query->result();
		foreach($state as $val_type)
		{
			if($id==$val_type->return_reason_id) 
			$cat_name.='<option value="'.$val_type->return_reason_id.'" selected>'.$val_type->name.'</option>';
			else
			$cat_name.='<option value="'.$val_type->return_reason_id.'">'.$val_type->name.'</option>';  
		 }
		 return $cat_name;
	  }
	}
	function getOrderStatus($id=0)
	{
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
	function getSeller($id=0)
	{
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
	function getUOM($id=0)
	{
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
	function getDocNo($id=0)
	{
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
	function getNameTitle($id=0)
	{
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
	function getMainSize($id=0)
	{
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
	function getDeliveryCompany($id=0)
	{
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
	function getSimilarProduct($id=0,$category = '')
	{
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
	function getMenuPage($id=0)
	{
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
	function getFilter($id=0)
	{
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
		
	function GetCompanyType($id=0)
	{
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

	function SmsMobileNutridockRegistration($id,$mobile){
		$query = $this->common->getOneRow('sms_config','where 1');	
		$webinar = $this->common->getOneRow('webinar1',"WHERE id='".$id."'");
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
		$param['Message'] = 'Dear '.$service_data['name'].','.'\r\n'.'Thank you for book service. One of our team member shall get back to you at the time of booking Date.Please report before 10 am to respective location'.'\r\n'.'Team Rushubh Honda,'.'\r\n'.'Nashik: 0253-6643444';

		//$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&to=".$mobile."&text=".rawurlencode($param['Message'])."&from=".$query['sender_id'];
	
		//$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&senderid=".$query['sender_id']."&route=".$query['route']."&unicode=".$id."&number=".$mobile."&message=".rawurlencode($param['Message']);
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
		$array_data = $this->db->select('booking.*,offer_item.*')->from('booking')->join('offer_item', 'booking.offer_item_id = offer_item.offer_item_id')->where('id',$id)->get();
		$booking_data  = $array_data->row_array();
		
		$param['Message'] = 'Dear '.$booking_data['name'].','.'\r\n'.'We would like to Thank You for booking. '.$booking_data['car'].'-'.$booking_data['varient']. ' Your Booking ID is '. $booking_data['booking_id'].'. '.' & Congratulations! You won '.$booking_data['item'].'in our win assured gift offer'.' You can redeem it at the time of your vehicle delivery.'.' Our Customer Care member will call you.'.'\r\n'.'Team Rushubh Honda,'.'\r\n'.'Nashik: 0253-6643444';

		//$param['Message'] = 'Dear '.$booking_data['name'].','.'\r\n'.'Thank you for booking '.$booking_data['car'].'-'.$booking_data['varient']. ' Your booking id is '. $booking_data['booking_id'].'. '.'Congrats! Here is a gift for you '.$booking_data['item'].'.'.' You can redeem it at the time of delivery.'.' One of our team member shall get back to you shortly.'.'\r\n'.'Team Rushubh Honda,'.'\r\n'.'Nashik: 0253-6643444';
		/*$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&senderid=".$query['sender_id']."&route=".$query['route']."&number=".$mobile."&message=".rawurlencode($param['Message']);*/

		//http://alerts2.netsolitsolution.com/http-api.php?

		$url = $query['base_url']."username=".$query['username']."&password=".$query['password']."&senderid=".$query['sender_id']."&route=".$query['route']."&number=".$mobile."&message=".rawurlencode($param['Message']);

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
}
?>