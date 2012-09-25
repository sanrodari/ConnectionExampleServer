<?php

/**
 * Para interactuar con la información de la tabla hotels.
 */
class Hotel extends CI_Model {
	
	function __construct() {
		parent::__construct();
		
		$this->load->database();
	}
	
	public function getAll() {
		return $this->db->get('hotels')->result_array();
	}
}
