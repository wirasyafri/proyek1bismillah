<?php 
defined('BASEPATH') Or exit ('No direct script access allowed');

class Biodata extends CI_Model
{
public function __construct()
{
	parent::__construct();
	//Do your magic here
}
//return array
	public function getBiodataQueryArray(){
		$query = $this->db->query("SELECT * from biodata");
		return $query->result_array();
	}
	// public function update_entry(){
	// 	$this->title->$_post('title');
	// 	$this->content->$_post('content');

	// }
public function getBiodataQueryObject()
{

$query = $this->db->query("SELECT * FROM biodata");
return $query->result();
}
public function getBiodataBuilderArray(){
		$query = $this->db->get('biodata');
		return $query->result_array();
	}
	public function getBiodataBuilderObject(){
		$query = $this->db->get('biodata');
		return $query->result();
	}
}
 ?>