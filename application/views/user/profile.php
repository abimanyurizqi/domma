
		
		
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="container-fluid">
						<!-- overview -->
						<div class="panel panel-headline">
							<div class="panel-heading">
								<h3 class="panel-title"><?php echo $title; ?></h3>
							</div>
							<div class="panel-body">
								<div class="card mb-3" style="max-width: 540px;">
								  	<div class="row no-gutters">
								    	<div class="col-md-4">
								      		<img src="http://localhost/DompetMahasiswa/assets/img/profile-icon-9.png" class="card-img" alt="...">
								    	</div>
								    	<div class="col-md-8">
								      		<div class="card-body">
								        		<p class="card-title">Nama : <?php echo $user['name']; ?></p>
								        		<p class="card-text">Email : <?php echo $user['email']; ?></p>
								        		<p class="card-text"><small class="text-muted">Member since <?php echo date('d F Y', $user['date_created']); ?></small></p>
								      		</div>
								    	</div>
								  	</div>
								</div>
							</div>
						<!-- end of overview -->
			  			</div>
  					</div>
				</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		