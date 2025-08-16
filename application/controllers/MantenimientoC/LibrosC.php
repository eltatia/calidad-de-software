<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LibrosC extends CI_Controller 
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
			$this->load->view('MantenimientoV/LibrosV',$data);
			$this->load->view('Layout/Footer');
        }
        else
        {
            redirect(base_url());
        }
	}
	public function RegistrarLibro()
	{
		$codigo = $this->LibrosM->CodeGenerator($this->input->post('categoria'),$this->input->post('estante'),$this->input->post('nombre'),$this->input->post('autor'),$this->input->post('editorial'));
		$data = array(
			'Codigo' => $codigo,
            'Nombre' => $this->input->post('nombre'),
            'Autor' => $this->input->post('autor'),
            'Editorial' => $this->input->post('editorial'),
            'Edicion' => $this->input->post('edicion'),
            'Ejemplares' => $this->input->post('ejemplares'),
			'Categoria' => $this->input->post('categoria'),
			'Estante' => $this->input->post('estante'),
        );
        //print_r($data);
		$this->LibrosM->Crear($data);
        redirect(base_url()."MantenimientoC/LibrosC");
	}
	public function EditarLibro()
	{
		$codigo = $this->LibrosM->CodeGenerator($this->input->post('U_categoria'),$this->input->post('U_estante'),$this->input->post('U_nombre'),$this->input->post('U_autor'),$this->input->post('U_editorial'));
		$data = array(
			'Codigo' => $codigo,
            'Nombre' => $this->input->post('U_nombre'),
            'Autor' => $this->input->post('U_autor'),
            'Editorial' => $this->input->post('U_editorial'),
            'Edicion' => $this->input->post('U_edicion'),
            'Ejemplares' => $this->input->post('U_ejemplares'),
			'Categoria' => $this->input->post('U_categoria'),
			'Estante' => $this->input->post('U_estante'),
			'Qr' => NULL,
        );
		$this->LibrosM->Update($data,$this->input->post('U_codigo'));
		//Acciones con el qr, al actualizar el codigo qr actual no sirve por lo que se elimina para tener que generarse otro con los datos cambiados
        redirect(base_url()."MantenimientoC/LibrosC");
	}
	public function EliminarLibro()
	{
		if($this->input->is_ajax_request())
		{
			$del_id = $this->input->post('del_id');
			$this->LibrosM->Delete($del_id);
		}
	}
	public function GuardarQrLibro()
	{
		$codigo = $this->input->post('codigo');
		$data = array(
			'Qr' => $this->input->post('imagenQr')
		);
        $this->LibrosM->GuardarImagenQr($codigo,$data);
	}
}
?>