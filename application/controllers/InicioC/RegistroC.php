<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RegistroC extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		//$this->load->library('session');
		$this->load->model("InicioM/RegistroM");
	}
	public function index()
	{
		$this->load->view('InicioV/RegistroV');
	}
    public function ComprobarAutenticidad()
	{
		$request = $this->input->post('dni');
        $status = $this->RegistroM->Verificar($request);
        echo $status;
	}
    public function Registrar()
    {
        $nombre = $this->input->post('nombre');
        $apellidos = $this->input->post('nombre');
        $dni = $this->input->post('dni');
        $usuario = $this->input->post('usuario');
        $contraseña = $this->input->post('contraseña');
        $data = array(
            'Dni' => $this->input->post('dni'),
            'Nombre' => $this->input->post('nombre'),
            'Apellidos' => $this->input->post('apellidos'),
            'Usuario' => $this->input->post('usuario'),
            'Contraseña' => $this->input->post('contraseña'),
        );
        //print_r($data);
        $this->RegistroM->Crear($data);
        redirect(base_url()."LoginC");
    }
}
?>
