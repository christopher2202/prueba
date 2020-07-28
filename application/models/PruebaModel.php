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
		$respuesta = $this->db->get();
		return json_encode($respuesta->result_array());
	}
}