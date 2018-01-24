<?php

class Model7 extends CI_Model

{
	
	public function get_records()
	{
		$mysql=$this->db->get("customers_tbl");
		return $mysql->result();	
	
		
	}
	
	public function add_records($my_Array)
	{
		$this->db->insert("customers_tbl",$my_Array);
			return;
		
	}
	
	public function update_records($my_Array)
	{
		$this->db->where("customerid", 17);
		$this->db->update("customers_tbl",$my_Array);
	}
	
	public function delete_row()
	{
		$this->db->where("customerid",$this->uri->segment(3));
		$this->db->delete("customers_tbl");
	
	}
	
	
	
}

