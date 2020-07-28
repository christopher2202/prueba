<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
require APPPATH.'/libraries/RestController.php';
class Prueba extends RestController{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->Model('ZonasModel');
	}
	public function index_get(){
		$this->response($this->ZonasModel->getAll(), RestController::HTTP_OK);
	}
}