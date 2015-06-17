<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->library('calendar');
		$datos['titulo']="Inicio";
		$datos['contenido']="promociones";
		$this->load->view('plantilla/plantilla',$datos);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */