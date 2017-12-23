<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Test extends CI_Controller {
		function index(){
			$this->load->library('Test_lib');
			$str =  $this->test_lib->test_1();
			echo $str;
			// echo 'Index method of TestController';
		}

		function test_index(){
			echo 'Index method of TestController';
		}
	}

?>