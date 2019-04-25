<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!--panel total-->
					<div class="col-md-8">
						<div class="panel panel-headline ">
							<div class="panel-heading">
								<h3 class="panel-title text-center">Sisa Uang Anda</h3>
								<h3 class="text-center">Rp.<?= $total_income - $total_expense; ?></h3>
							</div>
							<div class="panel-body">
								<div class="col-md-3 col-sm-7"></div>
								<div class="col-md-3 col-sm-4"><h4 class="text-center">Total Income
								<p>Rp.<?= $total_income; ?></p></h4></div>
								<div class="col-md-4 col-sm-6"><h4 class="text-center">Total Expense
								<p>Rp.<?= $total_expense; ?></p></h4></div>
								
							</div>

							

							</div>
						</div>
					
					<!--end of panel total-->
					
					<div class="col-md-8">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-headline">
									<div class="panel-heading">
										<h3 class="panel-title text-center">Total Income Berdasarkan Kategori</h3>
									</div>
								</div>
								<div class="panel-body">
								<div class="text-center">	
									<table class="table">
										<thead>
											<tr>
												<th class="text-center">Kategori</th>
												<th class="text-center">Total</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($total_income_bykategori as $katsum) : ?>
											<tr>
												<td><?= $katsum['nama_kategori_income']; ?></td>
												<td>Rp.<?= $katsum['total_income_kategori']; ?></td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
								</div>	
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>



						<div class="col-md-8">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-headline">
									<div class="panel-heading">
										<h3 class="panel-title text-center">Total Expense Berdasarkan Kategori</h3>
									</div>
								</div>
								<div class="panel-body">
								<div class="text-center">	
									<table class="table">
										<thead>
											<tr>
												<th class="text-center">Kategori</th>
												<th class="text-center">Total</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($total_expense_bykategori as $katsum1) : ?>
											<tr>
												<td><?= $katsum1['nama_kategori_expense']; ?></td>
												<td>Rp.<?= $katsum1['total_expense_kategori']; ?></td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
								</div>	
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>




						</div>
				</div>
			</div>
		</div>
		</div>
		<!-- END MAIN -->