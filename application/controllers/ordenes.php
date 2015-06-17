<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ordenes extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ordenes_model', 'ordenes');
	}

	public function index()
	{
		$data=array(); 
		$data['lista'] = $this->ordenes->lista_ordenes();
		if( $data['lista']==false ){ 
			$data['type']   =false; 
			$data['message']='No hay ordenes.'; 
		}else{ 
			$data['type']=true; 
		} 
		$data['titulo']="ordenes";
		$data['contenido']="ordenes/plantilla_ordenes_view";
		$this->load->view('plantilla/plantilla',$data);
	}

	function lista_ordenes()
	{
		$data=array(); 
		$data['lista'] = $this->ordenes->lista_ordenes();
		if( $data['lista']==false ){ 
			$data['type']   =false; 
			$data['message']='No hay ordenes.'; 
		}else{ 
			$data['type']=true; 
		} 
		$this->output->set_content_type('application/json')->set_output( json_encode( $data ) ); 
	}

	function detalle_ordenes($id_solicitud)
	{
		$data=array(); 
		$id_limpio= $this->security->xss_clean($id_solicitud);
		$data['detalle']=$this->articulos->detalle_articulo($id_limpio);
		//para el titulo llamamos los data obtenidos con detalle y luego agregamos el campo de la tabla a mostrar
		//eso hace para utilizar data del modelo en el controlador
		$data['titulo']="ordenes";
		$data['contenido']="lista_ordenes";
		$this->load->view('plantilla/plantilla',$data);
	}

	public function reporte()
		{
			$data["datos"] = $this->ordenes->lista_ordenes();
	        $this->load->vars($data);
	        $this->load->view("front_end/ordenes/reportes/reporte_ordenes_view");	
	        //$this->load->view("front_end/reportes/reporte_prueba_view");	
		}

 	public function agregar_ordenes()
 	{
		$this->form_validation->set_rules('numero_orden', 'Numero de Orden', 'trim|required|numeric|xss_clean'); 
		$this->form_validation->set_rules('codigo_cliente', 'Codigo de Cliente', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('nombre_cliente', 'Nombre de Cliente', 'trim|required|xss_clean');
		$this->form_validation->set_rules('direccion_cliente', 'Direccion de Cliente', 'trim|required|xss_clean');
		$this->form_validation->set_rules('categoria_orden', 'Categoria', 'trim|required|xss_clean');
		$this->form_validation->set_rules('problema_cliente', 'Problema de cliente', 'trim|required|xss_clean');
		$this->form_validation->set_rules('tipo_problema', 'Tipo Problema', 'trim|required|xss_clean');
		$this->form_validation->set_rules('estado_orden', 'Estado', 'trim|required|xss_clean');
		$this->form_validation->set_rules('fecha_elaboracion', 'Fecha de elaboración', 'trim|required|xss_clean');

		$this->form_validation->set_message('numeric', 'Este Campo solo acepta valores numericos');
		if( $this->form_validation->run() === FALSE )
		{ 
			$data['type']   =false; 
			$data['message']=validation_errors(); 
		}
		else
		{ 
			$info=array();
			$info['numero_orden'] = $this->input->post('numero_orden');
			$info['codigo_cliente'] = $this->input->post('codigo_cliente');
			$info['nombre_cliente'] = $this->input->post('nombre_cliente');
			$info['direccion_cliente'] = $this->input->post('direccion_cliente');
			$info['categoria_orden'] = $this->input->post('categoria_orden');
			$info['problema_cliente'] = $this->input->post('problema_cliente');
			$info['tipo_problema'] = $this->input->post('tipo_problema');
			$info['id_tecnico'] = $this->input->post('id_tecnico');
			$info['estado_orden'] = $this->input->post('estado_orden');
			$info['solucion_problema'] = $this->input->post('solucion_problema');
			$info['fecha_elaboracion'] = $this->input->post('fecha_elaboracion');
			$info['fecha_finalizacion'] = $this->input->post('fecha_finalizacion');
			$info['observaciones'] = $this->input->post('observaciones');
			
			$info_obt=$this->ordenes->agregar_ordenes($info);
			$data['type']   =true; 
			$data['message']='Se guardo exitosamente.'; 
			/*
			if( $info_obt==false )
			{ 
				$data['type']   =false; 
				$data['message']='Los datos no se guardaron.'; 
			}
			else
			{ 
				$data['type']   =true; 
				$data['message']='Se guardo exitosamente.'; 
				$data['id_valor']= $info_obt;
			} 
			*/
		} 
		$this->output->set_content_type('application/json')->set_output( json_encode( $data ) );
 	}

 	public function modificar_ordenes()
 	{
		$this->form_validation->set_rules('numero_orden2', 'Nombre de info_obt', 'trim|required|xss_clean'); 
		$this->form_validation->set_rules('codigo_cliente2', 'Codigo de Cliente', 'trim|required|xss_clean');
		if( $this->form_validation->run() === FALSE )
		{ 
			$data['type']   =false; 
			$data['message']=validation_errors(); 
		}
		else
		{ 
			$info=array();
			$info['numero_orden'] = $this->input->post('numero_orden2');
			$info['codigo_cliente'] = $this->input->post('codigo_cliente2');
			$info['Idinfo_obt'] = $this->input->post('Idinfo_obt2');
			$info_obt=$this->ordenes->modificar_ordenes($info);
			if( $info_obt==false )
			{ 
				$data['type']   =false; 
				$data['message']='Los datos no se guardaron.'; 
			}
			else if($info_obt==true)
			{ 
				$data['type']   =true; 
				$data['message']='Se guardo exitosamente.'; 
			} 
		} 
		$this->output->set_content_type('application/json')->set_output( json_encode( $data ) );	
 	}

 	public function eliminar_ordenes()
 	{
 		if(!isset($_POST))
 		{
 			$data['type']   =false; 
			$data['message']='No esta enviando datos.'; 
 		}
 		else
 		{		
			$info=array();
			$info['Idinfo_obt'] = $this->input->post('Idinfo_obt3');
			$info_obt=$this->ordenes->eliminar_ordenes($info);
			if( $info_obt==false )
			{ 
				$data['type']   =false; 
				$data['message']='Los datos no pudieron ser eliminados.'; 
			}
			else if($info_obt==true)
			{ 
				$data['type']   =true; 
				$data['message']='Los datos se eliminaron exitosamente.'; 
			} 
		 
			$this->output->set_content_type('application/json')->set_output( json_encode( $data ) );	
 		}
 	} 
}	