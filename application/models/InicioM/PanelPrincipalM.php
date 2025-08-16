<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PanelPrincipalM extends CI_Model 
{
	public function PrestamoFinalizado()
	{
		$this->db->select('Nro');
		$this->db->from('prestamo');
		$this->db->where('Estado','Finalizado');
		$query = $this->db->get()->num_rows();
		return $query;
	}
    public function PrestamoVigente()
	{
		$this->db->select('Nro');
		$this->db->from('prestamo');
		$this->db->where('Estado','Vigente');
		$query = $this->db->get()->num_rows();
		return $query;
	}
    public function PrestamoObservado()
	{
		$this->db->select('Nro');
		$this->db->from('prestamo');
		$this->db->where('Estado','Observado');
		$query = $this->db->get()->num_rows();
		return $query;
	}
    public function TotalLibros()
	{
		$this->db->select('Codigo');
		$this->db->from('libro');
		$query = $this->db->get()->num_rows();
		return $query;
	}
    public function FiltroDatosPorGenero() 
    {
        $query = $this->db->query("SELECT Genero, COUNT(*) as Cantidad FROM Estudiante INNER JOIN Prestamo ON Prestamo.estudiante_Dni = Estudiante.Dni GROUP BY Genero");
        return $query->result();
    }
    public function FiltroDatosPorGrado() 
    {
        $query = $this->db->query("SELECT Grado, COUNT(*) as Cantidad FROM Estudiante INNER JOIN Prestamo ON Prestamo.estudiante_Dni = Estudiante.Dni GROUP BY Grado");
        return $query->result();
    }
    public function FiltroDatosPorCategoria() 
    {
        $query = $this->db->query("SELECT Categoria, COUNT(*) as Cantidad FROM Libro INNER JOIN Prestamo ON prestamo.libro_Codigo = libro.Codigo GROUP BY Categoria");
        return $query->result();
    }
    public function FiltroDatosPorEstante() 
    {
        $query = $this->db->query("SELECT Estante, COUNT(*) as Cantidad FROM Libro INNER JOIN Prestamo ON prestamo.libro_Codigo = libro.Codigo GROUP BY Estante");
        return $query->result();
    }
    public function Top() 
    {
        $query = $this->db->query("SELECT Nombre, Autor, Qr, count(*) AS veces_prestado FROM Libro INNER JOIN Prestamo ON prestamo.libro_Codigo = libro.Codigo WHERE Estado = 'Finalizado' GROUP BY Codigo ORDER BY veces_prestado DESC LIMIT 3");
        return $query->result();
    }
}