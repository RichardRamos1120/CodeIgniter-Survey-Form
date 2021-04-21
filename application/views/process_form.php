<?php


$data = array(
	'visited' => 0,
	'name' =>$this->input->post("name"),
	'location' =>$this->input->post("location"),
	'favorite_language' =>$this->input->post("favorite_language"),
	'comment' =>$this->input->post("comment")
);

$this->session->set_userdata($data);





header("location: /ci/surveys/result");
