<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model {

	public function view()
	{
		$this->db->select("id,Nama,Nip,DATE_FORMAT(Tanggal,'%d-%m-%Y')as Tanggal,Alamat");
		$query=$this->db->get('pegawai');
		$query->result();
	}
// public function view_row()
// 	{
// 		$this->db->select("id,Nama,Nip,DATE_FORMAT(Tanggal,'%d-%m-%Y')as Tanggal,Alamat");
// 		$query=$this->db->get('pegawai');
// 	return 	$query->result();
// 	}
	public function view_row()
	{
		$this->db->select("nama,harga,deskripsi,gambar");
		$query=$this->db->get('game');
	return 	$query->result();
	}
}

/* End of file cetak_model.php */
/* Location: ./application/controllers/cetak_model.php */