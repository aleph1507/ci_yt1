<?php 
	class My_model extends CI_Model{

		public function firstName(){
			$lastName = $this->lastName();
			return 'Akshay ' . $lastName;
		}

		private function lastName(){
			return 'Bajpai';
		}
	}
?>