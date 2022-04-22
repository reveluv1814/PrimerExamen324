<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectura extends CI_Controller {


	public function index()
	{
		//$datos["Nombre"]="Moises";
		//$datos["Apellido"]="Silva";
		$this->load->model("Mibaseneil_model");
		$filas = $this->Mibaseneil_model->personas();
		$datos=pg_fetch_array($filas);
		$this->load->view('view_lectura', $datos);
	}
	
	public function index2()
	{
		$datos["Nombre"]="Moises";
		$datos["Apellido"]="Silva";
		$this->load->model("Mibaseneil_model");
		$filas = $this->Mibaseneil_model->persona('1');
		$datos["filas"]=$filas;
		$this->load->view('view_lectura', $datos);
	}
}
