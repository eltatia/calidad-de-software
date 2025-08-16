<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InventarioC extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model("MantenimientoM/LibrosM");
	}
	public function index()
	{
        if($this->session->userdata("login")=="iniciado")
        {
            $data = array(
                'libros' => $this->LibrosM->MostrarLibros(),
            );
            $this->load->view('Layout/Header');
            $this->load->view('Layout/Navbar');
            $this->load->view('Layout/Sidebar');
            $this->load->view('InventarioV/InventarioV',$data);
            $this->load->view('Layout/Footer');
        }
        else
        {
            redirect(base_url());
        }
	}
    public function Confirmacion()
    {
        $codigo = $this->input->post('codigo');
        $cantidad = $this->input->post('cantidad');
        $inventario = $this->input->post('inventario');
        $diferencia = $inventario - $cantidad;
        //echo $diferencia." ".$codigo." ".$inventario." ".$cantidad;
        if($diferencia==0)
        {
            $estado = "Registrado";
            $data = array(
                'EstadoInv' => $estado,
            );
        }
        else
        {
            $estado = "Incompleto";
            $data = array(
                'EstadoInv' => $estado,
                'Diferencia' => $diferencia,
            );
        }
        $this->LibrosM->Update($data,$codigo);
    }
    public function Reset()
    {
        $data = array(
            'EstadoInv' => $this->input->post('estado'),
        );
        //print_r($data);
        $this->LibrosM->UpdateAll($data);
    }
}
?>