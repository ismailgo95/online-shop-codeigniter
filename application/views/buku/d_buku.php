<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="section pb-0 section-components">
	<form method="post" action=" <?= $barang; ?>">
		<div class="container">
			<div class="row pt-4 ">
				<div class="col-md-12">
					<button type="button" class="btn btn-sm btn-primary">
					  Detail Buku <span style="color: white" class="badge badge-light"><?= $detailbuku['namabuku'] ?></span>
					</button>
				</div>
			</div>

			<div class="row mt-0">
				<div class="col-md-12 mt-3">
					<div class="card border-info">
						<h6 class="card-header"><small class="text-muted">Kategori</small> &raquo; <?= $detailbuku['kategori'] ?></h6>
						<div class="card-body">
							<div class="row mb-0">
								<div class="col-md-3">
									<center>
							  		<?php echo "<img src='".base_url("./upload/buku_".$detailbuku['id_buku'].".jpg")."' class='shadow bg-light rounded' width='230px' >"; ?>
										</center>
								</div>
								<div class="col-md-9">
									<h5 class="card-title"><?= $detailbuku['namabuku']; ?></h5>
									<p class="card-text">
										<small>
											<ul type="circle" style="padding-left: 20px;">
												<li>Pengarang : <?= $detailbuku['pengarang'] ?></li>
									    		<li>Penerbit : <?= $detailbuku['penerbit'] ?></li>
									    		<li>Tahun : <?= $detailbuku['tahun'] ?></li>
									    		<br>
									    		<li>Deskripsi : <?= $detailbuku['deskripsi'] ?></li>
									    		<hr>
									    		<h5><span  class="text-muted">STOK :</span> <b class="text-primary"><?= $detailbuku['stok'] ?></b> <small>Pcs</small></h5>
									    		<br>
									    		<div class="row">
									    			<div class="col-md-5">
									    				<?php if ($this->session->userdata('akses')=="Customer") { ?>
									    				<input type="number" name="jumlah_buku" placeholder="Masukan jumlah yang diinginkan" class="form-control">
									    				<?php } ?>
									    			</div>
									    		</div>
											</ul>
										</small></p>
								</div>
							</div>
							<hr>
							<?php if ($this->session->userdata('akses')=="Customer") { ?>
							<h4 class="text-danger float-left">Rp. <?= number_format($detailbuku['harga'],0,',','.') ?>,-</h4>
						    <button type="submit" class="btn btn-md btn-primary float-right" style="width: 30%;"><i class="fa fa-cart-plus"></i>&nbsp; PESAN SEKARANG</button>
						  <?php }else { ?>
						  	<?php echo "<h5 class='mail' align='center'>SILAHKAN MASUK ATAU DAFTAR DAHAULU UNTUK LANJUT KE PEMBELIAN</h5>"; ?>
						  <?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>
