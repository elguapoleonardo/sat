<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitudes_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	//genera listado de solicitudes
	function lista_solicitudes()
	{
		$this->db->order_by('id_solicitud','desc');
		$consulta = $this->db->get('solicitudes');
		return $consulta->result_array();
	}

	function detalle_solicitud($id_solicitud)
	{
		$this->db->order_by('id_solicitud','desc');
		$this->db->where('id_solicitud',$id_solicitud);
		$consulta = $this->db->get('solicitudes');
		// usar row si solo es una fila de registro que extraeraS
		return $consulta->row_array();
	}
}