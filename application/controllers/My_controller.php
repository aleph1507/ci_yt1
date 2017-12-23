<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


	class My_controller extends CI_Controller {

		public function index(){
			$this->load->view('myindexview');
		}

		public function test(){
			$this->load->model('authentication_from_google', 'google');
			$name = $this->google->userData();
			echo "My name is $name";
			// $this->load->model('my_model');
			// $firstName = $this->my_model->firstName();
			// $lastName = $this->my_model->lastName();
			// echo "firstName = $firstName";
			// echo "<br>lastName = $lastName <br>";
		}

		public function phpinfo(){
			phpinfo();
		}
	}

?>