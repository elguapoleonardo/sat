<?php 
		$this->load->view('plantilla/front_end/header');
		$this->load->view('plantilla/front_end/menu_superior');
		$this->load->view('plantilla/front_end/contenedor_principal');
		$this->load->view('plantilla/front_end/menu_lateral');
		$this->load->view('plantilla/front_end/contenido');
		$this->load->view('front_end/'.$contenido);
		$this->load->view('plantilla/front_end/cierre_contenedor_principal');