<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tambah_ke_user()
	{
		return $this->db->insert('tb_user',array(
			'email'=> $this->email,
			'password'=> $this->password,
			'akses'=> $this->akses
			));
	}
	
	public function cari_user($kolom,$kriteria)
	{
		return $this->db->query("select $kolom from tb_user $kriteria");
	}
}