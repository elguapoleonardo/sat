<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitudes extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Solicitudes_model', 'solicitudes');
	}

	public function index()
	{
		$datos=array(); 
		$datos['lista'] = $this->solicitudes->lista_solicitudes();
		if( $datos['lista']==false ){ 
			$datos['type']   =false; 
			$datos['message']='No hay solicitudes.'; 
		}else{ 
			$datos['type']=true; 
		} 
		$datos['titulo']="Solicitudes";
		$datos['contenido']="solicitudes/plantilla_solicitudes_view";
		$this->load->view('plantilla/plantilla',$datos);
	}

	function lista_solicitudes()
	{
		$datos=array(); 
		$datos['lista'] = $this->solicitudes->lista_solicitudes();
		if( $datos['lista']==false ){ 
			$datos['type']   =false; 
			$datos['message']='No hay solicitudes.'; 
		}else{ 
			$datos['type']=true; 
		} 
		$this->output->set_content_type('application/json')->set_output( json_encode( $data ) ); 
	}

	function detalle_solicitudes($id_solicitud)
	{
		$datos=array(); 
		$id_limpio= $this->security->xss_clean($id_solicitud);
		$datos['detalle']=$this->articulos->detalle_articulo($id_limpio);
		//para el titulo llamamos los datos obtenidos con detalle y luego agregamos el campo de la tabla a mostrar
		//eso hace para utilizar datos del modelo en el controlador
		$datos['titulo']="Solicitudes";
		$datos['contenido']="lista_solicitudes";
		$this->load->view('plantilla/plantilla',$datos);
	}

}
