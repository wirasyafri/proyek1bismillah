<?php 
defined('BASEPATH') Or exit ('No direct script access allowed');

class wisata extends CI_Model
{
		public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
//return array
	public function insertWisata(){
	$object = array (
		'nama' =>$this->input->post('nama'),
		'alamat' =>$this->input->post('alamat'),
		//'Nip' =>$this->input->post('Nip'),
		'deskripsi' =>$this->input->post('deskripsi'),
'foto'=>$this->upload->data('file_name')
		);
	$this->db->insert('pariwisata',$object);
	}
	public function getWisataQueryArray(){
		$query = $this->db->query("SELECT * from game");
		return $query->result_array();
	}
	public function getWisata($id){
		$this->db->where('id',$id);
		$query = $this->db->get('pariwisata');
		return $query->result();

	}
	public function UpdateById($id){
		$data = array
		(
		'nama' =>$this->input->post('nama'),
		'alamat' =>$this->input->post('alamat'),
		//'Nip' =>$this->input->post('Nip'),
		'deskripsi' =>$this->input->post('deskripsi'),
		'foto'=>$this->upload->data('file_name')
		);
		$this->db->where('id',$id);
		$this->db->update('pariwisata',$data);
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('pariwisata');
		

	}
}
 ?>