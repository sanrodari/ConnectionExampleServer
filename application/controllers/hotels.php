<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotels extends CI_Controller {

	public function all() {
		$this->load->model('Hotel');
		$hotels = $this->Hotel->getAll();
		
		echo json_encode($hotels);
	}
	
	public function insertHotel() {
		$this->load->model('Hotel');
		
		$name  = $this->input->post('name');
		$value = $this->input->post('valueReservation');
		
		$success = $this->Hotel->insertHotel($name, $value);
		
		if($success) {
			echo json_encode(array("success" => true));
		}
		else {
			echo json_encode(array("success" => false, "message" => "Error inesperado en la DB"));
		}
	}
	
}
