<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EstudiantesM extends CI_Model 
{
    public function MostrarEstudiantes()
	{
		$query = $this->db->get('estudiante');
        return $query->result();
	}
	public function Crear($data)
	{
		$this->db->insert("estudiante",$data);
	}
	public function Update($data,$key)
	{
		$this->db->where("Dni",$key);
		return $this->db->update("estudiante",$data);
	}
	public function Verificar($dni)
	{
		$this->db->select('Dni');
		$this->db->from('estudiante');
		$this->db->where('Dni',$dni);
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
?>