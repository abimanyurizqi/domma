<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
							<div class="panel-heading">
								<h3 class="panel-title">Edit Kategori Expense</h3>
							</div>
							<div class="panel-body">
								
									
		
								<form action="" method="post">
								
								<input type="hidden" name="id_kategori_expense" value="<?= $getKategoriExpensebyID['id_kategori_expense']?>">
								<div class="input-group">
								<input type="type" class="form-control" name="nama_kategori_expense" placeholder="nama kategori expense" value="<?= $getKategoriExpensebyID['nama_kategori_expense']?>">	
								</div>
								<small class="text-danger"><?php echo form_error('nama_kategori_expense'); ?></small>
								<br>
								<button type="submit" name="ubahKategoriexpense" class="btn btn-primary">Ubah data</button>
							</form>
	
							</div>	
							</div>
				</div>
			</div>
		</div>
		</div>
		<!-- END MAIN -->