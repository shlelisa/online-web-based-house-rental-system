<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin Ethio-House Rental Management System</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
	<?php include("adminHeader.php"); ?>
<body>
	<div style="padding:20px;"class="wrapper">
			
			<div style="margin-top:10px;border-radius:10px;background-color:#d4cfcf" class="main-panel">
				<div style="border-radius:10px;padding:10px"class="content">
					<div  class="container-fluid">
						
						<div style="background-color:white;padding:10px" class="row">
							<div class="col-md-3">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<a style="text-decoration:none;color:white" href="users.php"><i class="la la-users"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
											<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from new_user");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="users.php">Users</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="users.php"><?php echo $row; ?></a></h4>
												</div>
												

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<a style="text-decoration:none;color:white" href="availableHouse.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from rent_home where payment='Not paid'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="availableHouse.php">Available House</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="availableHouse.php"><?php echo $row; ?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-danger">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<a style="text-decoration:none;color:white" href="rentedHome.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from booked_home where payment='1' AND status='rented'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="rentedHome.php">Rented House</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="rentedHome.php"><?php  echo $row; ?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<a style="text-decoration:none;color:white" href="bookedHome.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from booked_home where payment='0' AND status='booked'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="bookedHome.php">Booked House</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="bookedHome.php"><?php  echo $row; ?></a></h4>
												</div>
												
											
												
											</div>
										</div>
									</div>
								</div>
							</div>
						    <div  class="col-md-3">
								<div style="background-color:red"class="card card-stats">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center icon-warning">
													<a style="text-decoration:none;color:white" href="availableApartement.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from rent_home where payment='Not paid' AND category='Apartement'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="availableApartement.php">Available Apartment</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="availableApartement.php"><?php echo $row; ?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div style="background-color:green"class="card card-stats">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<a style="text-decoration:none;color:white" href="availableCondominium.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from rent_home where payment='Not paid' AND category='Condominium'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
												<p class="card-category"><a style="text-decoration:none;color:white" href="availableCondominium.php">Available Condominium</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="availableCondominium.php"><?php echo $row; ?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div style="background-color:red"class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<a style="text-decoration:none;color:white" href="availableRealestate.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from rent_home where payment='Not paid' AND category='Real Estate'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="availableRealestate.php">Available Real Estate</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="availableRealestate.php"><?php echo $row; ?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div style="background-color:green"class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<a style="text-decoration:none;color:white" href="availableNormalhouse.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
											<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from rent_home where payment='Not paid' AND category='Normal House'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="availableNormalhouse.php">Available Normal House</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="availableNormalhouse.php"><?php echo $row;?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div style="background-color:orange"class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<a style="text-decoration:none;color:white" href="availableOneroomhouse.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
											<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from rent_home where payment='Not paid' AND category='One room house'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="availableOneroomhouse.php">Available One room house</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="availableOneroomhouse.php"><?php echo $row;?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								<div class="col-md-3">
								<div style="background-color:blue" class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
												<a style="text-decoration:none;color:white" href="availableBusinesshouse.php"><i class="la la-home"></i></a>
												</div>
											</div>
											<div class="col-5 d-flex align-items-center">
											<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from rent_home where payment='Not paid' AND category='Business house'");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="availableBusinesshouse.php">Available Business house</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="availableBusinesshouse.php"><?php echo $row;?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div style="background-color:orange" class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
												<a style="text-decoration:none;color:white" href="news.php"><i class="la la-news"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
											<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from news");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="news.php">Posted News</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="news.php"><?php echo $row;?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
								<div class="col-md-3">
								<div style="background-color:blue" class="card card-stats">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
												<a style="text-decoration:none;color:white" href="contact.php"><i class="la la-contact"></i></a>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
											<?php 
include"connection.php";
$row="";
$sql=mysqli_query($conn,"select * from contact");
$row=mysqli_num_rows($sql);?>
												<div class="numbers">
													<p class="card-category"><a style="text-decoration:none;color:white" href="contact.php">Contact</a></p>
													<h4 class="card-title"><a style="text-decoration:none;color:white" href="contact.php"><?php echo $row;?></a></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div style="width:100%" class="row row-card-no-pd">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="progress-card">
<?php 
$row="";
$sql=mysqli_query($conn,"select * from new_user");
$row=mysqli_num_rows($sql);?>
											<div class="d-flex justify-content-between mb-1">
												<span class="text-muted">Number of user</span>
												<span class="text-muted fw-bold"><?php echo $row; ?></span>
											</div>
											
											<div class="progress mb-2" style="height: 7px;">
												<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $row/100; ?>%" aria-valuenow="<?php echo $row/100; ?>" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="78%"></div>
											</div>
										</div>
										<div class="progress-card">
<?php 
$row="";
$sql=mysqli_query($conn,"select * from booked_home WHERE status='booked' AND payment='0'");
$row=mysqli_num_rows($sql);?>
											<div class="d-flex justify-content-between mb-1">
												<span class="text-muted">Booked home</span>
												<span class="text-muted fw-bold"><?php echo $row; ?></span>
											</div>
											<div class="progress mb-2" style="height: 7px;">
												<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $row/100; ?>%" aria-valuenow="<?php echo $row; ?>" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="65%"></div>
											</div>
										</div>
<?php 
$row="";
$sql=mysqli_query($conn,"select * from booked_home WHERE status='rented' AND payment='1'");
$row=mysqli_num_rows($sql);?>
										<div class="progress-card">
											<div class="d-flex justify-content-between mb-1">
												<span class="text-muted">Rented home</span>
												<span class="text-muted fw-bold"><?php echo $row; ?></span>
											</div>
											<div class="progress mb-2" style="height: 7px;">
												<div class="progress-bar bg-primary" role="progressbar" style="width:<?php echo $row/100; ?>%" aria-valuenow="<?php echo $row; ?>" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="70%"></div>
											</div>
										</div>
<?php 
$row="";
$sql=mysqli_query($conn,"select * from rent_home");
$row=mysqli_num_rows($sql);?>

										<div class="progress-card">
											<div class="d-flex justify-content-between mb-1">
												<span class="text-muted">Total Number of house</span>
												<span class="text-muted fw-bold"><?php echo $row; ?></span>
											</div>
											<div class="progress mb-2" style="height: 7px;">
												<div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $row; ?>%" aria-valuenow="<?php echo $row; ?>" aria-valuemin="0" aria-valuemax="1000" data-toggle="tooltip" data-placement="top" title="<?php echo $row; ?>%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
		
			</div>
		</div>
	</div>
	
</body>
        
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
</html>
<?php include("adminfooter.php"); ?>