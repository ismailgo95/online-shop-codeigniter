<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Konten -->

<section class="section section-components">
  <div class="container">
      <h4 align="center" class="h4 text-dark font-weight-bold mb-4">KELOLA DATA CUSTOMER</h4>
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="nav-wrapper">
          <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
            <li class="nav-item">
              <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Data Customer</a>
            </li>
          </ul>
        </div>
        <div class="card shadow">
          <div class="card-body">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-striped" id="myTable">
                        <thead>
                          <tr>
                            <small>
                            <th scope="col"><small><b>No</b></small></th>
                            <th scope="col"><small><b>Nama</b></small></th>
                            <th scope="col"><small><b>Nomor Handphone</b></small></th>
                            <th scope="col"><small><b>Alamat</b></small></th>
                            <th scope="col"><small><b>Email</b></small></th>
                            <th scope="col"><small><b>Aksi</b></small></th>
                            </small>
                          </tr>
                        </thead> 
                        <tbody>
                          <?php $no = 1; ?>
                          <?php foreach ($datacustomer->result_array() as $d_customer) : ?>
                          <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d_customer['nama'] ?></td>
                            <td><?= $d_customer['hp'] ?></td>
                            <td><?= $d_customer['alamat'] ?></td>
                            <td><?= $d_customer['email'] ?></td>
                            <td>
                              <?php echo "
                                <a href='".base_url("CI_system/hapus_customer")."' style='color: red'><i class='fas fa-trash'></i></a>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>