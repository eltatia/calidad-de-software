<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UsuariosC extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model("MantenimientoM/UsuariosM");
	}
	public function index()
	{
		if($this->session->userdata("login")=="iniciado")
        {
            $data = array(
				'usuarios' => $this->UsuariosM->MostrarUsuarios(),
			);
			$this->load->view('Layout/Header');
			$this->load->view('Layout/Navbar');
			$this->load->view('Layout/Sidebar');
			$this->load->view('MantenimientoV/UsuariosV',$data);
			$this->load->view('Layout/Footer');
        }
        else
        {
            redirect(base_url());
        }
	}
}
?>