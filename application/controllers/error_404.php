<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_404 extends CI_Controller {

	public function index()
	{
		$this->load->library('calendar');
		$datos['titulo']="Error";
		$datos['contenido']="Error 404";
		$this->load->view('front_end/solo_error_404',$datos);
	}

}
