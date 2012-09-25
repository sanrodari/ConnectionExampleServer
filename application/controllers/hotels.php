<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hotels extends CI_Controller {

	public function all() {
		$this->load->model('Hotel');
		$hotels = $this->Hotel->getAll();
		
		echo json_encode($hotels);
	}
	
	public function hello() {
		echo "Hola como estas";
	}
	
	public function echoPostParams() {
		if($this->input->post()) {
			var_dump($this->input->post());
		}
		else {
			echo "Ningun parametro ha sido ingresado.";
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */