<?php

Class Controller7 extends CI_controller
{
		public function index()
		{
			//what wil happen if query returns nothing
			//$my_Array=array();
			
			//$this->load->view("view7");
			
			if ($mysql=$this->model7->get_records())
				// if everythings ok...
				{
					$my_Array["records"]=$mysql;
					$this->load->view("view7", $my_Array);
				}
		}
	
	
		public function create()//what will happen after we press the submit button
		{
			//actually adding records to the table, transfering from form to variables
			$my_Array=array(
							"FirstName"=>$this->input-> post("FirstName"), 
							"Email"=>$this->input->post("Email")
							);
			
			$this->model7->add_records($my_Array);
			$this->index();
					
		}
	
	
	
}