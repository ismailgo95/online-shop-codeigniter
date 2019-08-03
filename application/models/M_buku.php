<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tambah_buku()
	{
		return $this->db->insert('tb_buku',array(
			'kategori'=> $this->kategori,
			'namabuku'=> $this->nama_buku,
			'penerbit'=> $this->penerbit,
			'tahun'=>$this->tahun,
			'pengarang'=>$this->pengarang,
			'harga'=>$this->harga,
			'stok'=>$this->stok,
			));
	}
	public function ubah_buku($id)
	{
		$this->db->where('id_buku',$id);
		return $this->db->update('tb_buku',array(
			'kategori'=> $this->kategori,
			'namabuku'=> $this->nama_buku,
			'penerbit'=> $this->penerbit,
			'tahun'=>$this->tahun,
			'pengarang'=>$this->pengarang,
			'harga'=>$this->harga,
			'stok'=>$this->stok,
			'deskripsi'=>$this->deskripsi
			));
	}
	
	public function cari_buku($kolom,$kriteria)
	{
		return $this->db->query("select $kolom from tb_buku $kriteria");
	}
}