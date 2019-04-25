
<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo base_url(); ?>C_sisa_uang/sisa_uang_index" class=""><i class="fas fa-fw fa-wallet"></i> <span>Sisa Uang</span></a></li>
						<li><a href="<?php echo base_url(); ?>user/profile"><i class="fas fa-fw fa-id-card"></i> <span>My Profile</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-fw fa-dollar-sign"></i> <span>Transaksi</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo base_url(); ?>Incomes/income" class="">Transaksi Income</a></li>
									<li><a href="<?php echo base_url(); ?>Expense/expense_index" class="">Transaksi expense</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo base_url(); ?>Pengaturan_kategori/pengaturankategori"><i class="fas fa-fw fa-list-ol"></i> <span>Atur Kategori</span></a></li>
						<li><a href="<?php echo base_url(); ?>auth/logout"><i class="fas fa-fw fa-door-open"></i> <span>Log out</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->