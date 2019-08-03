<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_customer extends CI_model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function tambah_customer()
	{
		return $this->db->insert('tb_customer',array(
			'nama'=> $this->nama,
			'hp'=> $this->hp,
			'alamat'=> $this->alamat,
			'email'=> $this->email,
			));
	}
	public function hapus_customer($id)
	{
		return $this->db->delete('tb_customer',array(
			'id_customer' => $id
			));
	}
	public function data_customer($kolom, $kriteria)
	{
		//Pencarian
		// return $this->db->query("select * from berita");
		return $this->db->query("select $kolom from tb_customer $kriteria");
	}
}