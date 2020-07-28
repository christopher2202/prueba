<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ZonasModel extends CI_model
{
	
	function __construct()
	{
		$this->load->database();
	}
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('zonas');
		$consulta = $this->db->get();
		$respuesta = array(
			'Error'=> FALSE,
			'Mensaje'=> "el acceso a la tabla de zonas es exitoso",
			'data' => $consulta->result_array()
		);
		return json_encode($respuesta);
	}
}