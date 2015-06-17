<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Ordenes_model extends CI_Model 
{ 
	public function __contruct()
	{
			parent::__contruct();
	}

	function lista_ordenes()
	{
		$this->db->order_by('id_orden','asc');
		$consulta = $this->db->get('ordenes');
		//return $consulta->result();
		return($consulta->num_rows()>0)?$consulta->result_array():false; 

	}

	function detalle_ordenes_id($id_orden)
	{
		$this->db->where('id_orden', $id_orden); 
		$consulta = $this->db->get('ordenes');
		//return $consulta->row();
		return($consulta->num_rows()>0)?$consulta->result_array():false; 
	}

	function detalle_ordenes_valor($valor)
	{
		$this->db->where('numero_orden', $valor); 
		$this->db->where('id_orden', $valor); 
		$consulta = $this->db->get('ordenes');
		return $consulta->row();
	}

	function agregar_ordenes($info)
	{ 
		$this->db->set('numero_orden', $info['numero_orden']);
		$this->db->set('codigo_cliente', $info['codigo_cliente']);
		$this->db->set('nombre_cliente', $info['nombre_cliente']);
		$this->db->set('direccion_cliente', $info['direccion_cliente']);
		$this->db->set('categoria_orden', $info['categoria_orden']);
		$this->db->set('problema_cliente', $info['problema_cliente']);
		$this->db->set('tipo_problema', $info['tipo_problema']);
		$this->db->set('id_tecnico', $info['id_tecnico']);
		$this->db->set('estado_orden', $info['estado_orden']);
		$this->db->set('solucion_problema', $info['solucion_problema']);
		$this->db->set('observaciones', $info['observaciones']);
		$this->db->set('fecha_elaboracion', $info['fecha_elaboracion']);
		$this->db->set('fecha_finalizacion', $info['fecha_finalizacion']);
		/*
		*/
		$consulta=$this->db->insert('ordenes');
		return($this->db->affected_rows()>0)?$this->db->insert_id():false;
	} 
 
 
	function modificar_ordenes($info)
	{ 
		$this->db->set('numero_orden', $info['numero_orden']);
		$this->db->set('codigo_cliente', $info['codigo_cliente']);
		$this->db->set('nombre_cliente', $info['nombre_cliente']);
		$this->db->set('direccion_cliente', $info['direccion_cliente']);
		$this->db->set('categoria_orden', $info['categoria_orden']);
		$this->db->set('problema_cliente', $info['problema_cliente']);
		$this->db->set('tipo_problema', $info['tipo_problema']);
		$this->db->set('id_tecnico', $info['id_tecnico']);
		$this->db->set('estado_orden', $info['estado_orden']);
		$this->db->set('solucion_problema', $info['solucion_problema']);
		$this->db->set('observaciones', $info['observaciones']);
		$this->db->set('fecha_elaboracion', $info['fecha_elaboracion']);
		$this->db->set('fecha_resolucion', $info['fecha_resolucion']);
		$this->db->update('ordenes', $info); 
		return($this->db->affected_rows()>0)?true:false;
	} 

	function eliminar_ordenes_logico($info)
	{ 
		$this->db->set('estado_registro', $info['estado_registro']);
		$this->db->delete('ordenes'); 
		return($this->db->affected_rows()>0)?true:false; 
	} 
 
 
	function eliminar_ordenes($id)
	{ 
		$this->db->where('id_orden', $id['id_orden']); 
		$this->db->delete('ordenes'); 
		return($this->db->affected_rows()>0)?true:false; 
	} 
 
}
