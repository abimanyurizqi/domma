<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="container-fluid">
						<!-- overview -->
						<div class="panel panel-headline">
							<div class="panel-heading">
								<h3 class="panel-title">Masukan Data Transaksi Expense</h3>
							</div>
							<div class="panel-body">
								<?= form_open(base_url('Expense/expense_index')); ?>
								<form action="<?php echo base_url('Expense/expense_index'); ?>" method="post">
								<?php echo $this->session->flashdata('message'); ?>
								<div class="input-group">
									<span class="input-group-addon">Rp.</span>
										<input type="type" class="form-control" name="expense" placeholder="expense">
									<span class="input-group-addon">.00</span>
								</div>
								<small class="text-danger"><?php echo form_error('expense'); ?></small>
								<br>
								<select class="form-control" name="kat_expense">
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
									<input type="text" id="datepicker" name="date_expense" placeholder="yyyy-mm-dd">
								</div>
								
								<br>
								<button type="submit" class="btn btn-primary">submit</button>
							</form>
							</div>	
							</div>
						<!-- end of overview -->

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
			  			
			  			<!--table_expense-->
			  			<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Expenses</h3>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Date &amp; Time</th>
												<th>Nominal Expense</th>
												<th>Kategori</th>
											</tr>
										</thead>
										<tbody>
											
											<?php foreach($expense as $deret1) : ?>
											<tr>
												<th><?php echo $deret1['date_expense']; ?></th>
												<th>Rp.<?php echo $deret1['nominal_expense']; ?></th>
												<th><?php echo $deret1['nama_kategori_expense']; ?></th>
												<th><a href="<?php echo base_url();?>Expense/edit_expense/<?php echo $deret1['id_expense']; ?>" class="label label-warning col-sm-6">Edit</a></th>
												<th><a href="<?php echo base_url();?>Expense/hapus_expense/<?php echo $deret1['id_expense']; ?>" class="label label-danger col-sm-5" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></th>
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
  					</div>
				</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->