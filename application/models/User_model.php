<?php 
	class User_model extends CI_Model{
		public function return_users(){
			$this->load->database();

			$query = $this->db->query("SELECT * FROM user");

			// die(print_r($query->result_object()));
			return $query->result();
			// $ra = $query->result_array();
			// print_r($ra[1]['username']);
			// return ["username"=>"Akshay", "company"=>"solution cone"];
		}
	}
?>