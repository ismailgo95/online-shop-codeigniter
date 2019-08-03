<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Penjualan Buku</title>
  <!-- Nyubo LINK SEBELAH-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>./assets/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Favicon -->
  <link href="<?= base_url('./assets/img/brand/favicon.png') ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= base_url('./assets/vendor/nucleo/css/nucleo.css') ?>" rel="stylesheet">
  <link href="<?= base_url('./assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <!-- Argon CSS 1-->
  <link type="text/css" href="<?= base_url('./assets/css/argon.css?v=1.0.1') ?>" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="<?= base_url('./assets/css/docs.min.css') ?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <!-- MY CSS -->
  <link rel="stylesheet" href="<?= base_url('./assets/css/style.css') ?>">
  <!-- Datables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
</head>

<body>
  <!-- INI HEADER NYA  -->
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="mr-lg-3" href="./index.html">
          <img src="<?= base_url() ?>./assets/img/brand/logo.png" width="60px">
        </a>
        <h3 class="mail" style="color: white">TOKO BUKU ONLINE</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <!-- Navbar Button  -->
          <!-- JIKA akses Admin Tampilkan Button -->
          <?php  if ($this->session->userdata('akses')=="Admin") { ?>

            <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                  <i class="ni ni-ui-04 d-lg-none"></i>
                  <span class="nav-link-inner--text">Transaksi admin</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                  <span class="nav-link-inner--text">Kelola Data Admin</span>
                </a>
                <div class="dropdown-menu">
                <a href="<?= base_url('CI_system/data_customer') ?>" class="dropdown-item"><i class="fas fa-user-tie"></i>Data Customer</a>
                <a href="<?= base_url('CI_system/data_buku') ?>" class="dropdown-item"><i class="fas fa-book"></i>Data Buku</a>
                <a href="#" class="dropdown-item"><i class="fas fa-wallet"></i>Ferivikasi Pembayaran</a>
                <a href="#" class="dropdown-item"><i class="fas fa-clipboard-check"></i>Konfirmasi Pengiriman</a>
                <a href="#" class="dropdown-item"><i class="fas fa-file-invoice-dollar"></i>Laporan Penjualan</a>
              </div>
              </li>
              <li class="nav-item d-none d-lg-block ml-lg-4">
                <a href="<?php echo base_url('CI_system/keluar'); ?>"class="btn btn-neutral btn-icon">
                  <span class="nav-link-inner--text"><i class="fas fa-sign-out-alt"></i>&nbsp; Keluar</span>
                </a>
              </li>
            </ul>
          <?php } ?>

          <?php  if ($this->session->userdata('akses')=="Customer") {
          ?>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button" ata-original-title="Lihat Isi Keranjang">
                  <i class="ni ni-cart"></i>
                  <span class="nav-link-inner--text">Keranjang</span>
                </a>
                <div class="dropdown-menu">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body" align="center">
                      <h5 class="card-title text-center"><small><b>Keranjang Belanja Anda Kosong</b></small></h5>
                      <p class="card-text">Untuk saat ini anda tidak ada keranjang belanja</p>
                      <a href="#" class="btn btn-primary" >Belanja Sekarang</a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">

                  <span class="nav-link-inner--text"><i class="fas fa-cogs"></i>Akun</span>
                </a>
                <div class="dropdown-menu">
                <a href="<?= base_url('CI_system/ubah_profil') ?>" class="dropdown-item"><i class="fas fa-user-tie"></i>Ubah Profil</a>
              </div>
              </li>
              <li class="nav-item d-none d-lg-block ml-lg-4">
                <a href="<?php echo base_url('CI_system/keluar'); ?>"class="btn btn-neutral btn-icon">
                  <span class="nav-link-inner--text"><i class="fas fa-sign-out-alt"></i>&nbsp; Keluar</span>
                </a>
              </li>
            </ul>
          <?php } ?>

          <?php  
          //Publik
          if ($this->session->userdata('akses')!="Customer" and  $this->session->userdata('akses')!="Admin") {
          ?>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button" ata-original-title="Lihat Isi Keranjang">
                  <i class="ni ni-cart"></i>
                  <span class="nav-link-inner--text">Keranjang</span>
                </a>
                <div class="dropdown-menu">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body" align="center">
                      <h5 class="card-title text-center"><small><b>Keranjang Belanja Anda Kosong</b></small></h5>
                      <p class="card-text">Untuk saat ini anda tidak ada keranjang belanja</p>
                      <a href="#" class="btn btn-primary" >Belanja Sekarang</a>
                    </div>
                  </div>
                </div>
              </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                  <i class="ni ni-ui-04 d-lg-none"></i>
                  <span class="nav-link-inner--text">Transaksi public</span>
                </a>
              </li>
            </ul>
          <?php } ?>

        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="position-relative">
      <!-- Hero for FREE version -->
      <section class="section section-lg section-hero section-shaped">
        <!-- Background circles -->
        <div class="shape shape-style-1 shape-primary">
          <span class="span-150"></span>
          <span class="span-50"></span>
          <span class="span-50"></span>
          <span class="span-75"></span>
          <span class="span-100"></span>
          <span class="span-75"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
        </div>
        <!-- INI Button MASUK DAN DAFTAR -->
        <div class="container shape-container d-flex align-items-center py-md">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="<?= base_url() ?>./assets/img/brand/logo.png" style="width: 130px;" class="img-fluid">
                <p class="lead text-white"><q>Buku adalah jendela ilmu yang akan membuka cakrawala kehidupan manusia.</q></p>
                <?php  
                //Publik
                if ($this->session->userdata('akses')!="Customer" and  $this->session->userdata('akses')!="Admin") {
                ?>
                <div class="btn-wrapper mt-5">
                  <button type="button" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0" data-toggle="modal" data-target="#modal-form"><i class="fas fa-user"></i>&nbsp; masuk</button>
                   <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                   <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                     <div class="modal-content">
                       <div class="modal-body p-0">
                         <div class="card bg-secondary shadow border-0">
                           <div class="card-header bg-white pb-4">
                             <div class="text-muted text-center mb-3">
                               <small>SILAHKAN MASUK</small>
                             </div>
                             <div class="btn-wrapper text-center">
                                 <span class="btn-inner--icon">
                                   <img src="<?= base_url() ?>./assets/img/brand/logo.png" width="100px">
                                 </span>
                             </div>
                           </div>
                           <div class="card-body px-lg-5 py-lg-5">
                             <div class="text-center text-muted mb-4">
                               <small>MASUKAN EMAIL DAN PASSWORD</small>
                             </div>
                             <!-- Ini Form MASUK  -->
                             <form role="form" action="<?= $url; ?>" method="post">
                               <div class="form-group mb-3">
                                 <div class="input-group input-group-alternative">
                                   <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                   </div>
                                   <input name="email" class="form-control" placeholder="Email" type="text">
                                 </div>
                               </div>
                               <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                   <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                   </div>
                                   <input name="password" class="form-control" placeholder="Password" type="password">
                                 </div>
                               </div>
                               <div class="custom-control custom-control-alternative custom-checkbox">
                                 <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                 <label class="custom-control-label" for=" customCheckLogin">
                                   <span>Remember me</span>
                                 </label>
                               </div>
                               <div class="text-center">
                                 <button type="submit" name="login" value="login" class="btn btn-primary my-4">MASUK</button>
                               </div>
                             </form>
                             <!-- Akhir Form Masuk -->
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                <button type="button" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" data-toggle="modal" data-target="#modal-form-daftar"><i class="fas fa-user-plus"></i>&nbsp; daftar</button>
                <div class="modal fade" id="modal-form-daftar" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                   <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                     <div class="modal-content">
                       <div class="modal-body p-0">
                         <div class="card bg-secondary shadow border-0">
<!-- Ini FORM DAFTAR -->
                           <div class="card-body px-lg-5 py-lg-5">
                             <div class="text-center text-muted mb-4">
                               <small>LENGKAPI DATA DIRI ANDA</small>
                             </div>
                             <form role="form" method="post" action="<?= $customer; ?>">
                              <div class="form-group mb-3">
                                 <div class="input-group input-group-alternative">
                                   <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                   </div>
                                    <input class="form-control" name="nama" placeholder="Masukan Nama" type="text"required>
                                 </div>
                               </div>
                              <div class="form-group">
                               <div class="input-group input-group-alternative">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                 </div>
                                 <input class="form-control" name="nohp" placeholder="Masukan Nomor Handphone" type="text"required>
                               </div>
                               </div>
                               <div class="form-group">
                               <div class="input-group input-group-alternative">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                 </div>
                                 <input class="form-control" name="alamat" placeholder="Masukan Alamat" type="text"required>
                               </div>
                               </div>
                               <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                   <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                   </div>
                                   <input class="form-control" name="email" placeholder="Email" type="text" required>
                                 </div>
                               </div>
                               <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                   <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                   </div>
                                   <input class="form-control" name="password" placeholder="Password" type="password" required>
                                 </div>
                               </div>
                               <div class="text-center">
                                 <button type="submit" name="daftar" class="btn btn-primary my-4">DAFTAR</button>
                               </div>
                             </form>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                <!-- Akhir BUTTON MASUK DAN DAFTAR -->
                </div>
                <?php }else { ?>
                      <h1 class="mail" style="color: white">SELAMAT DATANG, <span style="color: black"><?php echo $this->session->userdata('akses') ?></span></h1>
                <?php } ?>
          
                <div class="mt-5">
                  <small class="text-white font-weight-bold mb-0 mr-2">Powered By :</small>
                  <img src="<?= base_url() ?>./assets/img/brand/creativetim-white-slim.png" style="height: 28px;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
    </div>

    