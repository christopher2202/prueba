<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaModel extends CI_model
{
	// $this->id;
	// $this->nombre;
	// $this->email:
	// $this->status;
	function __construct()
	{
		$this->load->database();
	}
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$consulta = $this->db->get();
		$respuesta = array(
			'Error'=> FALSE,
			'Mensaje'=> "el acceso a la tabla de usuarios es exitoso",
			'data' => $consulta->result_array()
		);
		return json_encode($respuesta);
	}
}