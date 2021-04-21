<?php

class Users extends CI_Controller{

	public function index(){
		echo "hello index for users default";
	}
	public function show(){

		$data['results'] = $this->user_model->get_users();

		$this->load->view('show',$data);



	}
}
