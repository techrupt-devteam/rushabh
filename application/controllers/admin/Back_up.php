<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Back_up extends CI_Controller {
function __construct(){
        parent::__construct();
		$this->load->model('common','',TRUE);
		$this->load->helper('functions_helper');
		$this->load->helper('url');
		$this->load->model('book_appointment_model','book_appointment');
    }
    
	public function index()
	{	
		/*For Local*/
		/*$this->load->dbutil();
		$prefs = array(     
		    'format'      => 'zip',             
		    'filename'    => 'rushabh_booking.sql');
		$backup =& $this->dbutil->backup($prefs); 
		$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
		$save = 'pathtobkfolder/'.$db_name;

		$this->load->helper('file');
		write_file($save, $backup); 
		$this->load->helper('download');
		force_download($db_name, $backup);*/
        
        /*For Server*/
        $this->load->dbutil();
        $DBUSER=$this->db->username;
        $DBPASSWD=$this->db->password;
        $DATABASE=$this->db->database;
		$prefs = array(     
		    'format'      => 'zip',             
		    'filename'    => $DATABASE);
		$backup = $this->dbutil->backup($prefs); 
		$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
		$save = 'pathtobkfolder/'.$db_name;

		$this->load->helper('file');
		write_file($save, $backup); 
		$this->load->helper('download');
		force_download($db_name, $backup);
   
	}
	
    
}
   
   
   
	
				
			
	
	
	
