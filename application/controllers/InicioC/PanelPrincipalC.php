<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PanelPrincipalC extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
        $this->load->model("InicioM/PanelPrincipalM");
	}
	public function index()
	{
        if($this->session->userdata("login")=="iniciado")
        {
            $data = array(
                'TotalLibros' => $this->PanelPrincipalM->TotalLibros(),
                'PresVigentes' => $this->PanelPrincipalM->PrestamoVigente(),
                'PresFinalizados' => $this->PanelPrincipalM->PrestamoFinalizado(),
                'PresObservados' => $this->PanelPrincipalM->PrestamoObservado(),
                'Top' => $this->PanelPrincipalM->Top(),
            );
            $this->load->view('Layout/Header');
            $this->load->view('Layout/Navbar');
            $this->load->view('Layout/Sidebar');
            $this->load->view('InicioV/PanelPrincipalV',$data);
            $this->load->view('Layout/Footer');
        }
        else
        {
            redirect(base_url());
        }
	}
    public function DatosGenero() 
    {
        $datos = $this->PanelPrincipalM->FiltroDatosPorGenero();
        echo json_encode($datos);
    }
    public function DatosGrado() 
    {
        $datos = $this->PanelPrincipalM->FiltroDatosPorGrado();
        echo json_encode($datos);
    }
    public function DatosCategoria() 
    {
        $datos = $this->PanelPrincipalM->FiltroDatosPorCategoria();
        echo json_encode($datos);
    }
    public function DatosEstante() 
    {
        $datos = $this->PanelPrincipalM->FiltroDatosPorEstante();
        //print_r(json_encode($datos));
        echo json_encode($datos);
    }
}
?>