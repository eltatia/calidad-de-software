<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PrestamoC extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model("PrestamoM/PrestamoM");
        $this->load->model("MantenimientoM/LibrosM");
	}
	public function index()
	{
        if($this->session->userdata("login")=="iniciado")
        {
            $data = array(
                'estudiantesDni' => $this->PrestamoM->DniyNombre(),
                'datosLibro' => $this->PrestamoM->DatosLibro(),
                'prestamos' => $this->PrestamoM->MostrarPrestamos(),
            );
            $this->load->view('Layout/Header');
            $this->load->view('Layout/Navbar');
            $this->load->view('Layout/Sidebar');
            $this->load->view('PrestamoV/PrestamoV',$data);
            $this->load->view('Layout/Footer');
        }
        else
        {
            redirect(base_url());
        }
    }
    public function RegistrarPrestamo()
	{
        //Dni del estudiante
        $codigo_e = $this->input->post("dni");
        //Codigo del libro
        $codigo_l = $this->input->post("codigo");
        //Construccion del Nro de prestamo
        $CDP1 = strtoupper(substr($codigo_e, 0, 3));
        $CDP2 = strtoupper(substr($codigo_l, 0, 3));
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $CDP3 = '';
        for ($i = 0; $i < 4; $i++) 
        {
            $CDP3 .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        $codigo_p = "P".$CDP1.$CDP2.$CDP3;
        //Fecha de prestamo
        date_default_timezone_set('America/Lima');
        $fecha_p = date('d/m/Y');
        //Hora de prestamo
        $hora_p = date('H:i');
        //Dni del usuario del sistema
        $codigo_u = $this->session->userdata('dni');
        $data = array(
            'Nro' => $codigo_p,
            'Fecha' => $fecha_p,
            'Estado' => "Vigente",
            'libro_Codigo' => $codigo_l,
            'estudiante_Dni' => $codigo_e,
            'usuario_Dni' => $codigo_u,
            'Hora_prestamo' => $hora_p,
        );
        $this->PrestamoM->Registrar($data);
        $this->LibrosM->DescontarStock($codigo_l);
        redirect(base_url()."PrestamoC/PrestamoC");
    }
    public function FinalizarPrestamo()
	{
        $codigo_p = $this->input->post("edit_id");
        $codigo_l =  $this->PrestamoM->ObtenerCodigoLibro($codigo_p);
        //Fecha de finalización de prestamo
        date_default_timezone_set('America/Lima');
        $fecha_f = date('d/m/Y');
        //Hora de finalización de prestamo
        $hora_f = date('H:i');
        $data = array(
            'Estado' => "Finalizado",
            'Fecha_devolucion' => $fecha_f,
            'Hora_devolucion' => $hora_f,
        );
        $this->PrestamoM->Devolucion($data,$codigo_p);
        $this->LibrosM->ReponerStock($codigo_l);
    }
    public function ObservarPrestamo()
	{
        //Codigo del prestamo a observar
        $codigo_p = $this->input->post("codigo_pres");
        //Descripcion de la observacion 
        $descripcion =  $this->input->post("descripcion");
        $data = array(
            'Estado' => "Observado",
        );
        //Este codigo actualiza el estado del prestamo, cuando se devuelve y cuando se observa
        $this->PrestamoM->Devolucion($data,$codigo_p);
        //Registrar un nuevo dato en la tabla de observaciones
        //Dni del alumno deudor
        $dni_alumno = $this->PrestamoM->ObtenerDniAlumnoDeudor($codigo_p);
        $dataObservaciones = array(
            'Descripcion' => $descripcion,
            'prestamo_nro' => $codigo_p,
            'estudiante_Dni' => $dni_alumno,
            'Estado' => "Vigente",
        );
        $this->PrestamoM->RegistrarObservacion($dataObservaciones);
        redirect(base_url()."PrestamoC/PrestamoOC");
    }
    public function RegularizarPrestamo()
	{
        $codigo_o = $this->input->post("edit_id");
        $codigo_p =  $this->PrestamoM->ObtenerCodigoPrestamo($codigo_o);
        date_default_timezone_set('America/Lima');
        $fecha_p = date('d/m/Y');
        $hora_p = date('H:i');
        //Actualizar datos de prestamo
        $data = array(
            'Estado' => "Finalizado",
            'Fecha_devolucion' => $fecha_p,
            'Hora_devolucion' => $hora_p,
        );
        $this->PrestamoM->Devolucion($data,$codigo_p);
        //Actualizar datos de observacion como regularizado
        $dataObservaciones = array(
            'Estado' => "Regularizado",
        );
        $this->PrestamoM->Regularizacion($dataObservaciones,$codigo_o);
        $codigo_l =  $this->PrestamoM->ObtenerCodigoLibro($codigo_p);
        $this->LibrosM->ReponerStock($codigo_l);
    }
}
?>