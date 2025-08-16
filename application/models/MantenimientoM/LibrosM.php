<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibrosM extends CI_Model 
{
    public function MostrarLibros()
	{
		$query = $this->db->get('libro');
        return $query->result();
	}
	public function Crear($data)
	{
		$this->db->insert("libro",$data);
	}
	public function Update($data,$key)
	{
		$this->db->where("Codigo",$key);
		return $this->db->update("libro",$data);
	}
	public function Delete($key)
	{
		$this->db->where('Codigo', $key);
        $this->db->delete('libro');
	}
	public function CodeGenerator($categoria,$estante,$titulo,$autor,$editorial)
	{
		$pt1 = substr($categoria, 0, 3);
		$pt1 = strtoupper($pt1);
		$pt2 = $estante;
		$pt3 = substr($titulo, 0, 2);
		$pt3 = strtoupper($pt3);
		$pt4 = substr($autor, 0, 2);
		$pt4 = strtoupper($pt4);
		$pt5 = substr($editorial, 0, 2);
		$pt5 = strtoupper($pt5);
		$caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        	$pt6 = '';
        	for ($i = 0; $i < 4; $i++) 
        	{
            		$pt6 .= $caracteres[rand(0, strlen($caracteres) - 1)];
        	}
		return $pt1.$pt2.$pt3.$pt4.$pt5.$pt6;
	}
	public function GuardarImagenQr($codigo,$data)
	{
		$this->db->where('Codigo', $codigo);
        $this->db->update('libro', $data);
	}
	public function UpdateAll($data)
	{
		$this->db->update("libro",$data);
	}
	public function DescontarStock($key)
	{
		$this->db->select('Ejemplares');
        $this->db->where('Codigo', $key);
        $query = $this->db->get('libro');
        if ($query->num_rows() == 1) 
		{
            $row = $query->row();
            $cantidad_actual = $row->Ejemplares;
            $nueva_cantidad = $cantidad_actual - 1;
            $this->db->where('Codigo', $key);
            $this->db->update('libro', array('Ejemplares' => $nueva_cantidad));
        }
	}
	public function ReponerStock($key)
	{
		$this->db->select('Ejemplares');
        $this->db->where('Codigo', $key);
        $query = $this->db->get('libro');
        if ($query->num_rows() == 1) 
		{
            $row = $query->row();
            $cantidad_actual = $row->Ejemplares;
            $nueva_cantidad = $cantidad_actual + 1;
            $this->db->where('Codigo', $key);
            $this->db->update('libro', array('Ejemplares' => $nueva_cantidad));
        }
	}
}
?>