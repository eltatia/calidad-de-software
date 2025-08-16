<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PrestamoOC extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model("PrestamoM/PrestamoM");
	}
	public function index()
	{
        if($this->session->userdata("login")=="iniciado")
        {
            $data = array(
                'prestamosObservados' => $this->PrestamoM->MostrarPrestamosObservados(),
            );
            $this->load->view('Layout/Header');
            $this->load->view('Layout/Navbar');
            $this->load->view('Layout/Sidebar');
            $this->load->view('PrestamoV/PrestamoOV',$data);
            $this->load->view('Layout/Footer');
        }
        else
        {
            redirect(base_url());
        }
    }
    
}
?>