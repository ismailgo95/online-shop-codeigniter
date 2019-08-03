<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Konten -->

    <!-- Ini Searching Buku -->
    <section class="section pb-0 section-components">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <div class="input-group input-group-alternative mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-secondary"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control bg-secondary" placeholder="Cari buku apa..?" type="text">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section pt-3 section-components">
      <div class="container mb-2">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row mt-0">
              <?php $n=1; ?>
              <?php foreach ($tampilbarang->result_array() as $tb) : ?>
                <div class="col-md-4 mt-2">
                  <div class="card border-primary shadow-sm">
                    <h6 class="card-header pt-2 pb-2"><small class="text-muted">Kategori</small>
                     &raquo; <?= $tb['kategori']; ?>
                    </h6>
                  
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                         <?php echo "<img src='".base_url("./upload/buku_".$tb['id_buku'].".jpg")."' class='shadow bg-light rounded' width='80px' >"; ?>
                        </div>
                        <div class="col-md-8">
                          <h6 class="card-title"><?= strlen($tb['namabuku'])>20?substr($tb['namabuku'], 0,20)."...":$tb['namabuku']; ?></h6>
                        <p class="card-text">
                          <small>
                            <ul type="circle" style="padding-left: 20px;">
                              <li>Pengarang : <?= $tb['pengarang'] ?></li>
                              <li>Penerbit : <?= $tb['penerbit'] ?></li>
                              <li>Tahun : <?= $tb['tahun'] ?></li>
                            </ul>
                          </small></p>
                        </div>
                      </div>
                        <hr class="mt-2">
                        <b class="text-danger"><small>Rp. </small><?= number_format($tb['harga'],0,',','.') ?>,-</b>
                        <a href="<?= base_url('CI_system/detailbuku/'.$tb['id_buku'].'') ?>" class="btn btn-sm btn-primary float-right"><i class="fa fa-cart-plus"></i> Detail...</a>
                    </div>
                  </div>
                </div>
              <?php $n++; ?>
              <?php endforeach ?> 
              <hr>
            </div>
            <hr>
          </div>
          <hr>
        </div>
        <hr>
      </div>
    </section>


    <section class="section pt-4 section-components">
      <div class="container mb-5">
        <!-- Inputs -->
        <h3 class="h4 text-success font-weight-bold mb-4">Inputs</h3>
        <div class="mb-3">
          <small class="text-uppercase font-weight-bold">Form controls</small>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="form-group">
              <input type="text" placeholder="Regular" class="form-control" />
            </div>
            <div class="form-group">
              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="form-group">
              <input type="text" placeholder="Regular" class="form-control" disabled />
            </div>
            <div class="form-group">
              <div class="input-group mb-4">
                <input class="form-control" placeholder="Birthday" type="text">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="form-group has-success">
              <input type="text" placeholder="Success" class="form-control is-valid" />
            </div>
            <div class="form-group has-danger">
              <input type="email" placeholder="Error Input" class="form-control is-invalid" />
            </div>
          </div>
        </div>
      </div>
    </section>