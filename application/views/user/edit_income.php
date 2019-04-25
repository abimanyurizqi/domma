<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
							<div class="panel-heading">
								<h3 class="panel-title">Edit Income</h3>
							</div>
							<div class="panel-body">
								
									
		
								<form action="" method="post">
								<?php echo $this->session->flashdata('message'); ?>
								<input type="hidden" name="id_income" value="<?= $getIncomebyID['id_income']?>">
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
										<input type="type" class="form-control" name="income" placeholder="income" value="<?= $getIncomebyID['nominal_income']?>">
									<span class="input-group-addon">.00</span>
								</div>
								<small class="text-danger"><?php echo form_error('income'); ?></small>
								<br>
								<select class="form-control" name="kat">
									<option value=""> Pilih Kategori </option>
									<?php
									if(count($kategori_income)){
										foreach ($kategori_income_custom as $list1) {
											echo "<option value='". $list1['id_kategori_income'] . "'>" . $list1['nama_kategori_income'] . "</option>";
										}
										foreach ($kategori_income as $list) {
											echo "<option value='". $list['id_kategori_income'] . "'>" . $list['nama_kategori_income'] . "</option>";
										}
									}
									?>
								</select>
								<br>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#tambahkategori">Tambah Kategori</button>
								<br>
								<br>
								<div class="input-group">
									<input type="text" id="datepicker" name="date_income" placeholder="yyyy-mm-dd" value="<?= $getIncomebyID['date_income']; ?>">
								</div>
								
								<br>
								<button type="submit" name="ubahData" class="btn btn-primary">Ubah data</button>
							</form>
	
							</div>	
							</div>

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
				</div>
			</div>
		</div>
		</div>
		<!-- END MAIN -->