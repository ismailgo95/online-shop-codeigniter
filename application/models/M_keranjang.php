<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keranjang extends CI_model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function tambah()
	{
		return $this->db->insert('tb_keranjang',array(
			'id_buku'=> $this->id_buku,
			'id_customer'=> $this->idcustomer,
			'jumlah_beli'=> $this->jumlah_buku,
			'harga_beli'=> $this->harga
			));
	}
	
	public function data_customer($kolom, $kriteria)
	{
		//Pencarian
		// return $this->db->query("select * from berita");
		return $this->db->query("select $kolom from tb_customer $kriteria");
	}
}