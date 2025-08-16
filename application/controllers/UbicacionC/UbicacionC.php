<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UbicacionC extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		//$this->load->library('session');
		$this->load->model("UbicacionM/UbicacionM");
	}
	public function index()
	{
        if($this->session->userdata("login")=="iniciado")
        {
            $this->load->view('Layout/Header');
            $this->load->view('Layout/Navbar');
            $this->load->view('Layout/Sidebar');
            $this->load->view('UbicacionV/UbicacionV');
            $this->load->view('Layout/Footer');
        }
        else
        {
            redirect(base_url());
        }
	}
    public function BuscarDatos() 
    {
        $termino = $this->input->post('termino'); 
        $data['resultados'] = $this->UbicacionM->BuscarDatos($termino);
        $this->load->view('UbicacionV/TablaResultados',$data);
    }
}
?>
