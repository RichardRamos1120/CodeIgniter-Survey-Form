<?php


class Home extends CI_Controller{

	public function index(){

		$this->load->view('home');
	}
	public function test(){

		$data['results'] = $this->queriedData->get_users();
		var_dump($results);
	}
}
