<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotizacion_model extends CI_Model {

	function __construct(){

	parent::__construct();
	$this->load->database();
}



function crearCotizacion($data){

	$this->db->insert('cotizacion',array('fecha' =>$data['fecha'],'cliente' => $data['cliente'],'trabajo' => $data['trabajo'],'tamano' => $data['tamano'],'cantidad' => $data['cantidad'],'material' => $data['material'],'color' => $data['color'],'numdel' => $data['numdel'],'numal' => $data['numal']));
}
}




	?> 