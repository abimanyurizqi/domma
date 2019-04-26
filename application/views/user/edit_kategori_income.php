<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
							<div class="panel-heading">
								<h3 class="panel-title">Edit Kategori Income</h3>
							</div>
							<div class="panel-body">
								
									
		
								<form action="" method="post">
								
								<input type="hidden" name="id_kategori_income" value="<?= $getKategoriIncomebyID['id_kategori_income']?>">
								<div class="input-group">
								<input type="type" class="form-control" name="nama_kategori_income" placeholder="nama kategori income" value="<?= $getKategoriIncomebyID['nama_kategori_income']?>">	
								</div>
								<small class="text-danger"><?php echo form_error('nama_kategori_income'); ?></small>
								<br>
								<button type="submit" name="ubahKategori" class="btn btn-primary">Ubah data</button>
							</form>
	
							</div>	
							</div>
				</div>
			</div>
		</div>
		</div>
		<!-- END MAIN -->