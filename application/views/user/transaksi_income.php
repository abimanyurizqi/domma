	<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="container-fluid">
						<!-- overview -->
						<div class="panel panel-headline">
							<div class="panel-heading">
								<h3 class="panel-title">Masukan Data Transaksi Income</h3>
							</div>
							<div class="panel-body">
								<?= form_open(base_url('Incomes/income')); ?>
								<form action="<?php echo base_url('Incomes/income'); ?>" method="post">
								<?php echo $this->session->flashdata('message'); ?>
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
										<input type="type" class="form-control" name="income" placeholder="income">
									<span class="input-group-addon">.00</span>
								</div>
								<small class="text-danger"><?php echo form_error('income'); ?></small>
								<br>
								<select class="form-control" name="kat">
									<option value=""> Pilih Kategori </option>
									<?php
									if(count($kategori_income)){
										foreach ($kategori_income as $list) {
											echo "<option value='". $list['id_kategori_income'] . "'>" . $list['nama_kategori_income'] . "</option>";
										}
										foreach ($kategori_income_custom as $list1) {
											echo "<option value='". $list1['id_kategori_income'] . "'>" . $list1['nama_kategori_income'] . "</option>";
										}
									}
									?>
								</select>
								<br>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#tambahkategori">Tambah Kategori</button>
								<br>
								<br>
								<div class="input-group">
									<input type="text" id="datepicker" name="date_income" placeholder="yyyy-mm-dd">
								</div>
								
								<br>
								<button type="submit" class="btn btn-primary">submit</button>
							</form>
							</div>	
							</div>
						<!-- end of overview -->

						<!--modal-->
						<div id="tambahkategori" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Tambah Kategori</h4>
											</div>
											<?= form_open(base_url('Incomes/tambahkategori')); ?>
											<form method="post" action="<?php echo base_url('Income/tambahkategori'); ?>">
												<div class="modal-body">
													<div class="form-group">
														<label class="control-label" for="nama_kategori_income">Nama Kategori</label>
														<input type="text" name="nama_kategori_income" class="form-control" id="nama_kategori_income">	
													</div>
												</div>
											<div class="modal-footer">
												<input type="submit" name="btn btn-primary" name="tambahkategori" value="Tambah">
											</div>
										</form>
									</div>
								</div>
									
							</div>
							<!--end of modal-->
			  			
			  			<!--table_income-->
			  			<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Incomes</h3>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Date &amp; Time</th>
												<th>Nominal Income</th>
												<th>Kategori</th>
											</tr>
										</thead>
										<tbody>
											
											<?php foreach($income as $deret) : ?>
											<tr>
												<th><?php echo $deret['date_income']; ?></th>
												<th>Rp.<?php echo $deret['nominal_income']; ?></th>
												<th><p class="col-md-3"><?php echo $deret['nama_kategori_income']; ?></p></th>
												<th><a href="<?php echo base_url();?>Incomes/edit_income/<?php echo $deret['id_income']; ?>" class="label label-warning col-sm-6">Ubah</a></th>
												<th><a href="<?php echo base_url();?>Incomes/hapus_income/<?php echo $deret['id_income']; ?>" class="label label-danger col-sm-5" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></th>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Lastest</span></div>
									</div>
								</div>
							</div>

			  			</div>
			  			<!--end of table-->

			  			
							

						</div>
						
						

  					</div>
				</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->