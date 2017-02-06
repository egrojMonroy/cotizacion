<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccoti extends CI_Controller {
function __construct(){

	parent::__construct();
	$this->load->helper('form');

	$this->load->model('cotizacion_model');
	$this->load->library ('form_validation');
	 $this->load->helper('url');


	$config = array(
			array( 
					'field'=> 'cliente','label' => 'Cliente','rules' => 'required|alpha','errors' => 'Porfavor ingrese %s'


				),
			array( 
					'field'=> 'trabajo','label' => 'Trabajo','rules' => 'required|alpha','errors' => 'Porfavor ingrese %s'


				),

			array( 
					'field'=> 'tamano','label' => 'Tamaño','rules' => 'required|alpha_numeric','errors' => 'Porfavor ingrese %s'


				),

			array( 
					'field'=> 'cantidad','label' => 'Cantidad','rules' => 'required|numeric|integer','errors' => 'Porfavor ingrese %s'


				),

			array( 
					'field'=> 'material','label' => 'Material','rules' => 'required|alpha','errors' => 'Porfavor ingrese %s'


				),
			array( 
					'field'=> 'color','label' => 'Color','rules' => 'required|alpha','errors' => 'Porfavor ingrese %s'


				),

			array( 
					'field'=> 'numdel','label' => 'Cantidad','rules' => 'required|numeric|integer','errors' => 'Porfavor ingrese %s'


				),
			array( 
					'field'=> 'numal','label' => 'Cantidad','rules' => 'required|numeric|integer','errors' => 'Porfavor ingrese %s'
//cotizacion







				),
			array( 
					'field'=> 'materialcoti','label' => 'Material','rules' => 'required|alpha','errors' => 'Porfavor ingrese %s'


				),


			array( 
					'field'=> 'materialcoti2','label' => 'Material','rules' => 'required|alpha','errors' => 'Porfavor ingrese %s'


				),


			array( 
					'field'=> 'materialcoti2','label' => 'Material','rules' => 'required|alpha','errors' => 'Porfavor ingrese %s'


				),
			


			);$this->form_validation->set_rules($config);

		
}
function index(){
	$this->load->view('headers');
	$this->load->view('formulario');
	 


}




/*function coti(){

$this->load->view('jeje/headers');
$this->load->view('jeje/formulario');
}*/

function recibirDatos()
{
$data = array (

		'fecha' => $this->input->post('fecha'),
		'cliente' => $this->input->post('cliente'),
		'trabajo' => $this->input->post('trabajo'),
		'tamano' => $this->input->post('tamano'),
		'cantidad' => $this->input->post('cantidad'),
		'material' => $this->input->post('material'),
		'color' => $this->input->post('color'),
		'numdel' => $this->input->post('numdel'),
		'numal' => $this->input->post('numal'),

		

		);
if ($this->form_validation->run()!= FALSE)
	{
		$this->cotizacion_model->crearCotizacion($data);



		 $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                 $data = array('upload_data' => $this->upload->data());

		//$this->do_upload();
	

	}
	$this->load->view('formulario');

	}

}






?>