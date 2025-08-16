<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginM extends CI_Model 
{
    public function Login($username,$password,$modo)
	{
		$this->db->where("Usuario",$username);
		$this->db->where("Contraseña",$password);
        $resultados = $this->db->get("usuario");
        if($modo=="consulta")
        {
		    if($resultados->num_rows()>0)
		    {
			    return $resultados->row();
		    }
		    else
		    {
			    return false;
		    }
        }
        else
        {
            if($modo=="sesion")
            {
                return $resultados->row();
            }
        }
	}
}
?>