<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Tecnicos_model extends CI_Model 
{ 
	public function __contruct()
	{
			parent::__contruct();
	}

	function lista_tecnicos()
	{
		$this->db->order_by('id_tecnico','asc');
		$consulta = $this->db->get('tecnicos');
		//return $consulta->result();
		return($consulta->num_rows()>0)?$consulta->result_array():false; 

	}

	function detalle_tecnicos_id($id)
	{
		$this->db->where('id_tecnico', $id); 
		$consulta = $this->db->get('tecnicos');
		//return $consulta->row();
		return($consulta->num_rows()>0)?$consulta->result_array():false; 
	}

	function detalle_tecnicos_valor($valor)
	{
		$this->db->where($valor, $valor);  
		$consulta = $this->db->get('tecnicos');
		return($consulta->num_rows()>0)?$consulta->result_array():false; 
	}

	function agregar_tecnicos($info)
	{ 
		//$this->db->set('numero_tecnico', $info['numero_tecnico']);
		$consulta=$this->db->insert('tecnicos', $info);
		return($this->db->affected_rows()>0)?$this->db->insert_id():false;
	} 
 
 
	function modificar_tecnicos($id)
	{ 
		$this->db->where($id, $id); 
		$this->db->update('tecnicos', $info); 
		return($this->db->affected_rows()>0)?true:false;
	} 
 
 
	function eliminar_tecnicos($info)
	{ 
		$this->db->where('id_tecnico', $info['id_tecnico']); 
		$this->db->delete('tecnicos'); 
		return($this->db->affected_rows()>0)?true:false; 
	} 
 
}
