<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mibaseneil_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function personas()
	{
		$this->load->database();
		$query=$this->db->query("select * from persona");
		return $query->result();
	}
	
	public function persona($id)
	{
		$this->load->database();
		$query=$this->db->query("select * from persona where id_persona='$id'");
		return $query->result();
	}
}