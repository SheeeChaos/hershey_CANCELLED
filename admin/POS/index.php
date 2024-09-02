
<?php
 include('login.php');
 include('config/config.php'); // Update the path to include the config.php file
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('templates/head.php'); ?>
	<script src="bootstrap4/jquery/sweetalert.min.js"></script>
	<style>
		.img-fluid{
			height: 350px;
		}
		@media  only screen and (min-width: 1000px) {
			.img-fluid{
				height: 500px;
			}
		}
	</style>
</head>
<body class="bg-dark">
	<div class="text-center border border-dark">
		<div class="main">
			<img class="img-fluid" src="images/logo2.png"/>
  			<?php include('error.php');?>
		</div>
		<div class="fixed-bottom mb-2">
			<div class="d-inline">
				<button type="button" id="admin" class="btn-lg btn-secondary" ><i class="fas fa-user-tie"></i> Dashboard</button>
			</div>
			
			<div class="d-inline">
				<button type="button" id="admin" class="btn-lg btn-secondary" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-user-tie"></i> Administrator</button>
			</div>
			
		</div>
	</div>
	<script src="bootstrap4/jquery/jquery.min.js"></script>
	<script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
	<?php include('modals/admin_login_modal.php');?>
	<?php include('modals/employee_login_modal.php');?>
</body>
</html>
