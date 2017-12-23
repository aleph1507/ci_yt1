<?php 
	class User_details extends CI_Controller{

		function index(){
			// $this->load->library('form_validation');
			// $this->form_validation->set_rule();

			// $this->load->helper('helper_method');

			// $this->load->helper('html');

			echo br(3);

			$this->load->helper('common');

			echo returnHello() . br();
			echo add();
// 
			// $this->load->model('user_model');
			$data['userArray'] = $this->user_model->return_users();
			$this->load->view('user_view', $data);
		}
	}
?>