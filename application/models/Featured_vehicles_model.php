<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Featured_vehicles_model extends CI_Model {

	var $table = 'featured_vehicles';
	//var $column = array('title','position');
	var $order = array('id' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
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
