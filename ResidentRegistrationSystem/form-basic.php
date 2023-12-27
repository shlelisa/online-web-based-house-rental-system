<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['id'])==0)
    {   
header('location: security/login.php');
}
else{?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>REgistration</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

</head>
<body>
	<?php $query=mysqli_query($con,"select * from kebeleworker where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
<?php	include('includes/header.php');?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				
				<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Form grid</h4>
							<p class="mb-30">All bootstrap element classies</p>
						</div>
						<div class="pull-right">
							<a href="#form-grid-form" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						
												<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
												<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
												<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>col-md-4</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						
					</form>
					
				</div>
				<!-- Form grid End -->

				
			</div>
			
			<?php include('includes/footer.php');?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
<?php } }?>