<?php

class User_model extends CI_Model{

	public function get_users(){


//		$config['default'] = array(
//			'dsn'	=> '',
//			'hostname' => 'localhost',
//			'username' => 'root',
//			'password' => '',
//			'database' => 'errand_db',
//			'dbdriver' => 'mysqli',
//			'dbprefix' => '',
//			'pconnect' => FALSE,
//			'db_debug' => (ENVIRONMENT !== 'production'),
//			'cache_on' => FALSE,
//			'cachedir' => '',
//			'char_set' => 'utf8',
//			'dbcollat' => 'utf8_general_ci',
//			'swap_pre' => '',
//			'encrypt' => FALSE,
//			'compress' => FALSE,
//			'stricton' => FALSE,
//			'failover' => array(),
//			'save_queries' => TRUE
//		);


		$this->load->database();


		$query = $this->db->query('select * from users');

		return $query->result();

//		return $query->num_fields(); return how many cell per rows
//		return $query->num_rows(); return how many rows
	}
}
