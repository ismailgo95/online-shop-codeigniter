<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CI_system extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');

		$this->load->model('M_user');
		$this->load->model('M_buku');
		$this->load->model('M_customer');
		$this->load->model('M_keranjang');
		
	}

	public function index()
	{
		$data['tampilbarang']=$this->M_buku->cari_buku("*","");
		$data['customer']=base_url('CI_system/daftar_customer');
		$data['url']=base_url('CI_system/aksilogin');

		$data['akses']=$this->session->userdata('akses');
		$data['email']=$this->session->userdata('email');
		$data['nama']=$this->session->userdata('nama');

		$data['log']=$this->session->userdata('log');

		$this->load->view('template/v_header',$data);
		$this->load->view('template/v_konten');
		$this->load->view('template/v_footer');
	}
	public function aksilogin()
	{
		$cari=$this->M_user->cari_user("*","Where email='$_POST[email]' and password='$_POST[password]'");
		if ($cari->num_rows()==1) {
			$res=$cari->row_array(0);
			if ($res['akses']=="Admin") {
				//cek Akses Jika Pelamar
				$carinamaadmin=$this->M_user->cari_user("*","where email='".$res['email']."'")->row_array(0);

				$this->session->set_userdata('log',$res['id']);
				$this->session->set_userdata('email',$res['email']);
				$this->session->set_userdata('akses',$res['akses']);
				$this->session->set_userdata('nama','Admin');
				header("location:".base_url("CI_system"));
			}
			if ($res['akses']=="Customer") {
				//cek Akses Jika Pelamar
				$carinamacustomer=$this->M_user->cari_user("*","where email='".$res['email']."'")->row_array(0);

				$this->session->set_userdata('log',$res['id']);
				$this->session->set_userdata('email',$res['email']);
				$this->session->set_userdata('akses',$res['akses']);
				$this->session->set_userdata('nama',$carinamacustomer['nama']);
				header("location:".base_url("CI_system"));
			}
		}else{
			echo "<script>alert('Email/Password Salah');document.location='".base_url('CI_system/v_header')."'</script>";
		}
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		header("location:".base_url());
	}

	// CUSTOMER
	public function daftar_customer()
	{
		//ini Dari data User
		$this->M_user->email=$_POST["email"];
		$this->M_user->password=$_POST["password"];
		$this->M_user->akses="Customer";
		$this->M_user->tambah_ke_user();
		// ini dari data Pelamar
		$this->M_customer->nama=$_POST['nama'];
		$this->M_customer->hp=$_POST['nohp'];
		$this->M_customer->alamat=$_POST['alamat'];
		$this->M_customer->email=$_POST['email'];
		$this->M_customer->tambah_customer();

		echo "
		<script>
			alert('Customer Berhasil Registrasi');
			document.location='".base_url('CI_system/index')."'
		</script>
		";
	}
	public function data_customer()
	{
		$data['datacustomer']=$this->M_customer->data_customer("*","");

		$this->load->view('template/v_header');
		$this->load->view('customer/v_customer',$data);
		$this->load->view('template/v_footer');
	}
	public function hapus_customer($id=null)
	{
		
		$this->M_customer->hapus_customer($id);

		echo "
		<script>
			alert('Data Berita Berhasil dihapus');
			document.location='".base_url('CI_system/index')."'
		</script>
		";
	}
	public function ubah_profil()
	{
		$data['datacustomer']=$this->M_customer->data_customer("*","");

		$this->load->view('template/v_header');
		$this->load->view('customer/ubah_profil');
		$this->load->view('template/v_footer');
	}

	// DATA BUKU
	public function data_buku($id=null)
	{
		$data['id']=$id;
		if ($id != null) {

		$data['ubah']=$this->M_buku->cari_buku("*","where id_buku='$id'")->row_array(0);
		$data['url']=base_url('CI_system/ubah_buku/'.$id.'');
		}
		else {
			$data['url']=base_url('CI_system/simpan_buku');

		}

		$data['hasilcover']=$this->M_buku->cari_buku("*","");

		$this->load->view('template/v_header');
		$this->load->view('buku/v_buku',$data);
		$this->load->view('template/v_footer');
	}

	public function simpan_buku()
	{
		$this->M_buku->kategori=$_POST['kategori'];
		$this->M_buku->nama_buku=$_POST['nama_buku'];
		$this->M_buku->penerbit=$_POST['penerbit'];
		$this->M_buku->tahun=$_POST['tahun'];
		$this->M_buku->pengarang=$_POST['pengarang'];
		$this->M_buku->harga=$_POST['harga'];
		$this->M_buku->stok=$_POST['stok'];
		$this->M_buku->deskripsi=$_POST['deskripsi'];
		$this->M_buku->tambah_buku();

		$config['file_name'] = 'buku_'.$this->db->insert_id();
		$config['allowed_types'] = 'jpg';
		$config['upload_path'] = 'upload';

		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$data = '';
		if ($this->upload->do_upload('file')) {
			$data = $this->upload->data();
		}

		echo "
		<script>
			alert('Buku Berhasil Di tambah !');
			document.location='".base_url('CI_system/data_buku')."'
		</script>";
	}
	public function ubah_buku($id=null)
	{
		
		$this->M_buku->kategori=$_POST['kategori'];
		$this->M_buku->nama_buku=$_POST['nama_buku'];
		$this->M_buku->penerbit=$_POST['penerbit'];
		$this->M_buku->tahun=$_POST['tahun'];
		$this->M_buku->pengarang=$_POST['pengarang'];
		$this->M_buku->harga=$_POST['harga'];
		$this->M_buku->stok=$_POST['stok'];
		$this->M_buku->deskripsi=$_POST['deskripsi'];
		$this->M_buku->ubah_buku($id);

		$config['file_name'] = 'berita_'.$id;
		$config['allowed_types'] = 'jpg';
		$config['upload_path'] = 'upload';

		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$data = '';
		if ($this->upload->do_upload('file')) {
			$data = $this->upload->data();
		}

		echo "
		<script>
			alert('Buku Berhasil diubah');
			document.location='".base_url('CI_system/data_buku')."'
		</script>
		";
	}
	public function detailbuku($id=null)
	{
		$data['id']=$id;	
		$data['akses']=$this->session->userdata('akses');
		$data['email']=$this->session->userdata('email');
		$data['nama']=$this->session->userdata('nama');
		$data['log']=$this->session->userdata('log');

		$data['detailbuku']=$this->M_buku->cari_buku("*","where id_buku='$id'")->row_array(0);
		$cekidcustomer= $this->M_customer->data_customer("*","where email='".$data['email']."'")->row_array(0);


		$data['tampilbarang']=$this->M_buku->cari_buku("*","");
		$data['customer']=base_url('CI_system/daftar_customer');
		$data['url']=base_url('CI_system/aksilogin');

		$data['barang']=base_url('CI_system/pesan/'.$id.'/'.$cekidcustomer['id_customer'].'/'.$data['detailbuku']['harga'].'');

	
		$this->load->view('template/v_header',$data);
		$this->load->view('buku/d_buku',$data);
		$this->load->view('template/v_footer');
	}
	public function pesan($idbuku=null, $idcustomer=null, $harga=null)
	{
		$data['idbuku']=$idbuku;
		$data['idcustomer']=$idcustomer;
		$data['harga']=$harga;

		$this->M_keranjang->id_buku=$data['idbuku'];
		$this->M_keranjang->idcustomer=$data['idcustomer'];
		$this->M_keranjang->harga=$data['harga'];
		$this->M_keranjang->jumlah_buku=$_POST['jumlah_buku'];
		$this->M_keranjang->tambah();

		echo "
		<script>
			alert('Buku Berhasil Masuk Keranjang');
			document.location='".base_url('CI_system')."'
		</script>
		";

	}




}

