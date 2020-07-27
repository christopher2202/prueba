<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
require APPPATH.'/libraries/RestController.php';
class Prueba extends RestController{
	public function __construct(){
		$this->load->database();
	}
	public function index_get(){
		$this->response("hola", RestController::HTTP_OK);
	}
}