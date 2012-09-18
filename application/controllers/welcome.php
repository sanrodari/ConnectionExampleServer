<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()	{
		echo "<pre>";
		var_dump("Hola gente como estas, bien?");
		echo "</pre>";
		$this->load->view('welcome_message');
	}
	
	public function hello() {
		echo "Hola como estas";
	}
	
	public function echoPostParams() {
		if(count($this->input->post()) > 0) {
			echo "Los parámetros ingresados fueron: " . var_dump($this->input->post());
		}
		else {
			echo "Ningun parámetro ha sido ingresado.";
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */