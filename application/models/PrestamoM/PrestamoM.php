<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrestamoM extends CI_Model 
{
    public function MostrarPrestamos()
	{
		$this->db->select('prestamo.Nro, libro.Nombre as Libro, estudiante.Nombre, estudiante.Apellidos, Fecha, Hora_prestamo');
        $this->db->from('prestamo');
        $this->db->join('estudiante', 'estudiante.Dni = prestamo.estudiante_Dni');
        $this->db->join('libro', 'libro.Codigo = prestamo.libro_Codigo');
        $this->db->where('prestamo.Estado', 'Vigente');
        $query = $this->db->get();
        return $query->result();
	}
	public function DniyNombre()
	{
		$query = $this->db->select('Dni, Nombre, Apellidos')->get('estudiante');
        return $query->result();
	}
	public function DatosLibro()
	{
		$this->db->select('Codigo, Nombre');
		$this->db->from('libro');
		$this->db->where('Ejemplares >',0);		
		$query = $this->db->get();
        return $query->result();
	}
	public function Registrar($data)
	{
		$this->db->insert("prestamo",$data);
	}
	public function ObtenerCodigoLibro($id) 
	{
		$this->db->select('libro.Codigo');
        $this->db->from('prestamo');
        $this->db->join('libro', 'prestamo.libro_Codigo = libro.Codigo');
        $this->db->where('prestamo.Nro', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) 
		{
            return $query->row()->Codigo;
        }
    }
	public function Devolucion($data,$key)
	{
		$this->db->where('Nro', $key);
		$this->db->update("prestamo",$data);
	}
	public function MostrarPrestamosFinalizados()
	{
		$this->db->select('prestamo.Nro, libro.Nombre as Libro, estudiante.Nombre, estudiante.Apellidos, Fecha, Hora_prestamo, Fecha_devolucion, Hora_devolucion');
        $this->db->from('prestamo');
        $this->db->join('estudiante', 'estudiante.Dni = prestamo.estudiante_Dni');
        $this->db->join('libro', 'libro.Codigo = prestamo.libro_Codigo');
        $this->db->where('prestamo.Estado', 'Finalizado');
        $query = $this->db->get();
        return $query->result();
	}
	public function ObtenerDniAlumnoDeudor($id)
	{
		$this->db->select('estudiante.Dni');
        $this->db->from('prestamo');
        $this->db->join('estudiante', 'prestamo.estudiante_Dni = estudiante.Dni');
        $this->db->where('prestamo.Nro', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) 
		{
            return $query->row()->Dni;
        }
	}
	public function RegistrarObservacion($data)
	{
		$this->db->insert("observaciones",$data);
	}
	public function MostrarPrestamosObservados()
	{
		$this->db->select('observaciones.Id, observaciones.Descripcion, observaciones.prestamo_Nro, observaciones.Estado, CONCAT(estudiante.Nombre," ",estudiante.Apellidos) as Nombre_estudiante');
        $this->db->from('observaciones');
        $this->db->join('estudiante', 'observaciones.estudiante_Dni = estudiante.Dni');
        $query = $this->db->get();
        return $query->result();
	}
	public function ObtenerCodigoPrestamo($id)
	{
		$this->db->select('prestamo_Nro');
        $this->db->from('observaciones');
        $this->db->where('Id', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) 
		{
            return $query->row()->prestamo_Nro;
        }
	}
	public function Regularizacion($data,$key)
	{
		$this->db->where('Id', $key);
		$this->db->update("observaciones",$data);
	}
}
?>