<?php 
defined('BASEPATH') Or exit ('No direct script access allowed');

class ktm extends CI_Model
{
public function __construct()
{
	parent::__construct();
	//Do your magic here
}
//return array
public function getktmQueryArray(){
		$query = $this->db->query("SELECT * from ktm");
		return $query->result_array();
	}
	// public function update_entry(){
	// 	$this->title->$_post('title');
	// 	$this->content->$_post('content');

	// }

}
 ?>