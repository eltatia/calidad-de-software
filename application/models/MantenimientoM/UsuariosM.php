<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuariosM extends CI_Model 
{
    public function MostrarUsuarios()
	{
		$query = $this->db->get('usuario');
        return $query->result();
	}
}
?>