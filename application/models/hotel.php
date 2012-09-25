<?php

/**
 * Para interactuar con la tabla hotels.
 */
class Hotel extends CI_Model {
	
	function __construct() {
		parent::__construct();
		
		$this->load->database();
	}
	
	public function getAll() {
		return $this->db->get('hotels')->result_array();
	}
	
	public function insertHotel($name, $value) {
		$insert_values['name']   = $name;
        $insert_values['value']  = $value;

        return $this->db->insert('hotels', $insert_values);
	}
}
