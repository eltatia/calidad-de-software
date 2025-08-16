<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginC extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('session');
		$this->load->model("InicioM/LoginM");
	}
	public function index()
	{
		$this->load->view('InicioV/LoginV');
	}
	public function Login()
	{
		$username = $this->input->post("usuario");
		$password = $this->input->post("contraseña");
		//echo $username."".$password;
		$res = $this->LoginM->Login($username,$password,"consulta");
		if(!$res)
		{
			redirect(base_url());
		}
		else
		{
			$infoUsuario = $this->LoginM->Login($username,$password,"sesion");
			$data = array(
				'nombre' => $infoUsuario->Nombre,
				'apellidos' => $infoUsuario->Apellidos,
				'dni' => $infoUsuario->Dni,
				'login' => "iniciado",
			);
			$this->session->set_userdata($data);
			redirect(base_url()."InicioC/PanelPrincipalC");
		}
	}
	public function Logout()
	{
		//$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>
