<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EstudiantesC extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model("MantenimientoM/EstudiantesM");
	}
	public function index()
	{
        if($this->session->userdata("login")=="iniciado")
        {
            $data = array(
                'estudiantes' => $this->EstudiantesM->MostrarEstudiantes(),
            );
            $this->load->view('Layout/Header');
            $this->load->view('Layout/Navbar');
            $this->load->view('Layout/Sidebar');
            $this->load->view('MantenimientoV/EstudiantesV',$data);
            $this->load->view('Layout/Footer');
        }
        else
        {
            redirect(base_url());
        }
	}
    public function RegistrarEstudiante()
	{
		$data = array(
            'Dni' => $this->input->post('dni'),
            'Nombre' => $this->input->post('nombre'),
            'Apellidos' => $this->input->post('apellidos'),
            'Grado' => $this->input->post('grado'),
            'Seccion' => $this->input->post('seccion'),
            'Genero' => $this->input->post('genero'),
        );
        //print_r($data);
		$this->EstudiantesM->Crear($data);
        redirect(base_url()."MantenimientoC/EstudiantesC");
	}
    public function ModificarEstudiante()
    {
        $key = $this->input->post("dni");
        $data = array(
			'Dni' => $this->input->post("dni_U"),
            'Nombre' => $this->input->post("nombre"),
            'Apellidos' => $this->input->post("apellidos"),
            'Grado' => $this->input->post("grado"),
            'Seccion' => $this->input->post("seccion"),
            'Genero' => $this->input->post("gnro"),
		);
        $this->EstudiantesM->Update($data,$key);
        redirect(base_url()."MantenimientoC/EstudiantesC");
    }
    public function ComprobarDuplicado()
    {
        $request = $this->input->post('dni_U');
        $status = $this->EstudiantesM->Verificar($request);
        echo $status;
    }
    public function ComprobarDuplicadoRegistro()
    {
        $request = $this->input->post('dni');
        $status = $this->EstudiantesM->Verificar($request);
        echo $status;
    }
}
?>