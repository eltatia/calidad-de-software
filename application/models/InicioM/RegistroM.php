<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroM extends CI_Model 
{
	public function Crear($data)
	{
		$this->db->insert("usuario",$data);
	}
    public function Verificar($dni)
	{
		$this->db->select('dni');
		$this->db->from('usuario');
		$this->db->where('dni',$dni);
		$query = $this->db->get()->num_rows();
		if($query==0)
		{
			return "true";
		}
		else
		{
			return "false";
		}
	}
}