<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
							<div class="panel-heading">
								<h3 class="panel-title">Edit Expense</h3>
							</div>
							<div class="panel-body">
								
									
		
								<form action="" method="post">
								<?php echo $this->session->flashdata('message'); ?>
								<input type="hidden" name="id_expense" value="<?= $getExpensebyID['id_expense']?>">
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
										<input type="type" class="form-control" name="expense" placeholder="expense" value="<?= $getExpensebyID['nominal_expense']?>">
									<span class="input-group-addon">.00</span>
								</div>
								<small class="text-danger"><?php echo form_error('expense'); ?></small>
								<br>
								<select class="form-control" name="kategori_expense">
									<option value=""> Pilih Kategori </option>
									<?php
									if(count($kategori_expense)){
										foreach ($kategori_expense as $list2) {
											echo "<option value='". $list2['id_kategori_expense'] . "'>" . $list2['nama_kategori_expense'] . "</option>";
										}
										foreach ($kategori_expense_custom as $list3) {
											echo "<option value='". $list3['id_kategori_expense'] . "'>" . $list3['nama_kategori_expense'] . "</option>";
										}
									}
									?>
								</select>
								<br>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#tambahkategori1">Tambah Kategori</button>
								<br>
								<br>
								<div class="input-group">
									<input type="text" id="datepicker" name="date_expense" placeholder="yyyy-mm-dd" value="<?= $getExpensebyID['date_expense']; ?>">
								</div>
								
								<br>
								<button type="submit" name="ubahDataExpense" class="btn btn-primary">Ubah data</button>
							</form>
	
							</div>	
							</div>


					<!--modal-->
						<div id="tambahkategori1" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Tambah Kategori</h4>
											</div>
											<?= form_open(base_url('Expense/tambahkategori_expense')); ?>
											<form method="post" action="<?php echo base_url('Expense/tambahkategori_expense'); ?>">
												<div class="modal-body">
													<div class="form-group">
														<label class="control-label" for="nama_kategori_expense">Nama Kategori</label>
														<input type="text" name="nama_kategori_expense" class="form-control" id="nama_kategori_expense">	
													</div>
												</div>
											<div class="modal-footer">
												<input type="submit" name="btn btn-primary" name="tambahkategori_expense" value="Tambah">
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