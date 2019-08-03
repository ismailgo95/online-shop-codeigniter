<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Konten -->

  <section class="section section-components">
    <div class="container">
      <h4 align="center" class="h4 text-dark font-weight-bold mb-4">KELOLA DATA BUKU</h4>
      <div class="row justify-content-center">
        <div class="col-lg-12">

          
          <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">

              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 <?php if ($id==null){echo "active";} ?>" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-books mr-2"></i>BUKU</a>
              </li>

              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 <?php if($id != null){echo "active";} ?>" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-book-bookmark mr-2"></i>INPUT BUKU</a>
              </li>

            </ul>
          </div>

          <div class="card shadow">
            <div class="card-body">
              <div class="tab-content" id="myTabContent">
                <!-- Tampil Data Buku -->
                <div class="tab-pane fade <?php if($id ==null){echo "show active";} ?>" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table table-striped" id="myTable">
                        <thead>
                          <tr>
                            <small>
                            <th scope="col"><small><b>No</b></small></th>
                            <!-- <th scope="col">Kode Buku</th> -->
                            <th scope="col"><small><b>Kategori</b></small></th>
                            <th scope="col"><small><b>Nama Buku</b></small></th>
                            <th scope="col"><small><b>Penerbit</b></small></th>
                            <th scope="col"><small><b>Tahun</b></small></th>
                            <th scope="col"><small><b>Pengarang</b></small></th>
                            <th scope="col"><small><b>Harga Buku</b></small></th>
                            <th scope="col"><small><b>Stok</b></small></th>
                            <th scope="col"><small><b>Cover</b></small></th>
                            <th scope="col"><small><b>Aksi</b></small></th>
                            </small>
                          </tr>
                        </thead> 
                        <tbody>
                          <?php $no = 1; ?>
                          <?php foreach ($hasilcover->result_array() as $cover) : ?>
                          <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $cover['kategori'] ?></td>
                            <td><?= $cover['namabuku'] ?></td>
                            <td><?= $cover['penerbit'] ?></td>
                            <td><?= $cover['tahun'] ?></td>
                            <td><?= $cover['pengarang'] ?></td>
                            <td><?= $cover['harga'] ?></td>
                            <td><?= $cover['stok'] ?></td>
                            <td>
                              <?php echo "<img src='".base_url("./upload/buku_".$cover['id_buku'].".jpg")."' width='50px' >
                              "; ?>
                            </td>
                            <td>
                              <?php echo "
                                <a href='".base_url("CI_system/data_buku/$cover[id_buku]")."'><i class='fas fa-edit'></i></a>
                                <br>
                              "; ?>
                            </td>
                          </tr>
                          <?php endforeach ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                
                <!-- Input Buku -->
                <div class="tab-pane fade <?php if($id !=null){echo "show active";} ?>" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                 
                    <form action="<?= $url; ?>" method="POST" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                              <span class="alert-inner--text"><strong>Success!</strong> Buku Berhasil Ditambah</span>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <br>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-6">
                          <div class="card border-info">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <input type="text" class="form-control form-control-lg" required="" name="kategori" id="kategori" placeholder="Kategori" value="<?php if($id != null) {echo $ubah['kategori'];} ?>">
                              </div>
                              <div class="form-group">
                                <label for="nama_buku">Nama Buku</label>
                                <input type="text" class="form-control form-control-lg" required="" name="nama_buku" id="nama_buku" placeholder="Nama Buku" value="<?php if($id != null) {echo $ubah['namabuku'];} ?>">
                              </div>
                              <div class="form-group">
                                <label for="penerbit">Penerbit</label>
                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="penerbit" id="penerbit" aria-describedby="penerbit" placeholder="Penerbit buku" value="<?php if($id != null) {echo $ubah['penerbit'];} ?>">
                                  </div>
                                  <div class="col-md-4">
                                    <input type="text" class="form-control" name="tahun" id="tahun" aria-describedby="tahun" placeholder="Tahun" maxlength="4" value="<?php if($id != null) {echo $ubah['tahun'];} ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-12">
                                    <label for="pengarang">Pengarang</label>
                                      <input type="text" class="form-control" name="pengarang" id="pengarang" aria-describedby="pengarang" placeholder="Pengarang buku" value="<?php if($id != null) {echo $ubah['pengarang'];} ?>">
                                  </div>
                                </div>
                              </div>
                              <button type="submit" name="btnSimpan" class="btn btn-success btn-lg btn-block"><i class="fa fa-save"></i> SIMPAN</button>
                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="card border-info">
                            <div class="card-body">
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-8">
                                      <label for="harga">Harga Buku</label>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <input type="text" class="form-control" name="harga" id="harga" aria-describedby="harga" placeholder="Harga Buku" value="<?php if($id != null) {echo $ubah['harga'];} ?>">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <label for="stok">Stok</label>
                                      <div class="row">
                                        <div class="col-md-12">
                                          <input type="text" class="form-control" name="stok" id="stok" aria-describedby="stok" placeholder="Stok Buku" value="<?php if($id != null) {echo $ubah['stok'];} ?>">
                                        </div>
                                      </div>
                                  </div>
                                  
                                    <div class="col-md-12 pt-3">
                                      <label for="deskripsi">Deskripsi Buku</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" aria-describedby="deskripsi" placeholder="Deskripsikan Buku"></textarea>
                                    </div>

                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-8">
                                    <img src="<?= base_url() ?>images/cover-kosong.png" id="tampil" name="tampil" class="shadow p-1  bg-light rounded" alt="" style="width: 170px;">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="file" name="file" onchange="readURL(this);" class="form-control-sm" id="file" aria-describedby="cover" accept="image/gif, image/jpeg, image/png">
                                    &nbsp;&nbsp;<i><small id="cover" class="form-text text-muted mt-0">**Ukuran file cover Maks. 10 MB;.</small></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>  
                        </div>
                      </div>
                    </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>