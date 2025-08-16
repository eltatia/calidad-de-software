<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UbicacionM extends CI_Model 
{
    public function BuscarDatos($termino) 
    {
        $this->db->like('Codigo', $termino);
        $query = $this->db->get('libro');
        return $query->result();
    }
}
?>