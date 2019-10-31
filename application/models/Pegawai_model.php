<?php 
defined('BASEPATH') Or exit ('No direct script access allowed');

class Pegawai_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertPegawai(){
		$object = array (
		'nama' =>$this->input->post('NAMA'),
		'harga' =>$this->input->post('HARGA'),
		'gambar'=>$this->upload->data('file_name')
		);
	$this->db->insert('game',$object);
	}
	public function getgame(){
		$query = $this->db->query("SELECT * from game ");
		return $query->result_array();
	}
	public function getBiodataQueryArray($nama){
		$query = $this->db->query("SELECT * from user where username ='$nama'");
		return $query->result_array();
	}
	public function getPegawai($id){
		$this->db->where('id',$id);
		$query = $this->db->get('game');
		return $query->result();

	}
	public function getharga($nama){
		$query = $this->db->query("SELECT * from game where gambar = '$nama'");
		return $query->result_array();
	}
	public function UpdateById($id,$nama,$uang,$hargaa){
	
		// $this->load->view('sasd');
			// echo $uang;
			// foreach ($hargaa as $key) {
			// 	$haha=$key['harga'];
			// }
			// echo $haha;

		$coba='(game1 != "")';
	if($this->db->where($coba)){
		$data = array
		(
		
		'game2'=>($id));
	}
	else{
		$data = array
		(
		
		'game1'=>($id));
		}
echo $nama;
// echo $id;
// echo $data;
		$this->db->where('username',$nama);
		$this->db->update('user',$data);
	}
	public function UpdateGame($id){
		$data = array
		(
		'nama' =>$this->input->post('nama'),
		'harga' =>$this->input->post('harga'),
		'deskripsi' =>nl2br($this->input->post('deskripsi')),
		'foto'=>$this->upload->data('file_name')
		);
		$this->db->where('id',$id);
		$this->db->update('game',$data);
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('game');
		

	}
}
 ?>