

<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="container-fluid">
						<div class="col-sm-10">
						<!--table_income-->
			  			<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Kategori Income</h3>
								</div>
								<?php echo $this->session->flashdata('message'); ?>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>ID Kategori</th>
												<th>Nama Kategori Income</th>
											</tr>
										</thead>
										<tbody>
											
											<?php foreach($kategori_income as $deret) : ?>
											<tr>
												<th><?php echo $deret['id_kategori_income']; ?></th>
												<th><?php echo $deret['nama_kategori_income']; ?></th>
												<th><a href="<?php echo base_url();?>Pengaturan_kategori/edit_kategori_income/<?php echo $deret['id_kategori_income']; ?>"class="label label-warning col-sm-6" >Ubah</a></th>
												<th><a href="<?php echo base_url();?>Pengaturan_kategori/hapus_kategori_income/<?php echo $deret['id_kategori_income']; ?>" class="label label-danger col-sm-5" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></th>
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

			  			
			  			<!--end of table-->

			  			
			  			<!--table_expense-->
			  			<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Kategori Expense</h3>
								</div>
								<?php echo $this->session->flashdata('message'); ?>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>ID Kategori</th>
												<th>Nama Kategori Expense</th>
											</tr>
										</thead>
										<tbody>
											
											<?php foreach($kategori_expense as $deret2) : ?>
											<tr>
												<th><?php echo $deret2['id_kategori_expense']; ?></th>
												<th><?php echo $deret2['nama_kategori_expense']; ?></th>
												<th><a href="<?php echo base_url();?>Pengaturan_kategori/edit_kategori_expense/<?php echo $deret2['id_kategori_expense']; ?>"class="label label-warning col-sm-6" >Ubah</a></th>
												<th><a href="<?php echo base_url();?>Pengaturan_kategori/hapus_kategori_expense/<?php echo $deret2['id_kategori_expense']; ?>" class="label label-danger col-sm-5" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></th>
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
			  			<!--end of table-->
					</div>
			  			
							

					</div>
						
						

  					</div>
				</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->