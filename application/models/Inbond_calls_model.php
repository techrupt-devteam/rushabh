<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbond_calls_model extends CI_Model {

	

	var $table = 'inbond_calls';
	//var $column = array('title','position');
	var $order = array('id' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private $_batchImport;

	public function setBatchImport($batchImport) {
        $this->_batchImport = $batchImport;
    }

	function insert_inboundData()
	{
		$data = $this->_batchImport;
		$this->db->insert_batch('inbond_calls_mumbai_naka', $data);
	}

	function insert_uttamnagarData()
	{
		$data = $this->_batchImport;
		$this->db->insert_batch('inbond_calls_uttam_nagar', $data);
	}

	function insert_indiranagarData()
	{
		$data = $this->_batchImport;
		$this->db->insert_batch('inbond_calls_indira_nagar', $data);
	}

	function insert_ambadData()
	{
		$data = $this->_batchImport;
		$this->db->insert_batch('inbond_calls_ambad', $data);
	}

	function insert_mhasrulData()
	{
		$data = $this->_batchImport;
		$this->db->insert_batch('inbond_calls_mhasrul', $data);
	}

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);

		$i = 0;
	    $ser = '';
			foreach ($this->column as $item) 
		{
			
			if($_POST['search']['value']){
				//($i===0) ? $this->db->like($item, $_POST['search']['value']) : $this->db->or_like($item, $_POST['search']['value']);
				if($i==0){
					$ser .='(';
				}
				
				 $ser .= $item.' Like "%'.$_POST['search']['value'].'%" ';
				if($i<count($this->column)-1){
					$ser .= ' OR ';
				}
				if($i==(count($this->column)-1)){
					$ser .=')';
				}
			$column[$i] = $item;
			$i++;
			}
		}
		if($ser){
		$this->db->where($ser);
		}
		
		if(isset($_POST['order']))
		{
			//$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		
		
		
		
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		if($this->input->get('submit')){
		
		if($this->input->get('position')){
			$this->db->where('position', $this->input->get('position'));
		}	
		} else {
			$this->db->where('is_deleted','No')->order_by('id','DESC');
		}
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		if($this->input->get('submit')){
			
		if($this->input->get('position')){
			$this->db->where('position', $this->input->get('position'));
		}
		} else {
			$this->db->where('is_deleted','No')->order_by('id','DESC');
		}
		$this->db->from($this->table);
		
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}


}
