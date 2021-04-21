<?php

class  Surveys extends CI_Controller{

	public function index(){

		$this->load->view("index");
	}
	public function process_form(){
		$this->load->library('session');
		$this->load->view("process_form");
	}
	public function result(){
		$this->load->library('session');
		$this->load->view("result");
	}
}
