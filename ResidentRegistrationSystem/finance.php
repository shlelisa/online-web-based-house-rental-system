<?php 
session_start();
include('includes/config.php'); 
if(strlen($_SESSION['alogin'])==0){
	header('location:index.php');
}else{

?>


<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>finance</title>

	

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
	<?php 
	$query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
	
	
	$cnt=1;
	
	while($row=mysqli_fetch_array($query)){
	?>
	
<?php include('includes/header.php')?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="invoice-wrap">
					<div class="invoice-box">
						<div class="invoice-header">
							<div class="logo text-center">
								<img src="vendors/images/deskapp-logo.png" alt="">
							</div>
						</div>
						<h4 class="text-center mb-30 weight-600">INVOICE</h4>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15">Client Name</h5>
								<p class="font-14 mb-5">Date Issued: <strong class="weight-600">10 Jan 2018</strong></p>
								<p class="font-14 mb-5">Invoice No: <strong class="weight-600">4556</strong></p>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<p class="font-14 mb-5">Your Name </strong></p>
									<p class="font-14 mb-5">Your Address</p>
									<p class="font-14 mb-5">City</p>
									<p class="font-14 mb-5">Postcode</p>
								</div>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-sub">Description</div>
								<div class="invoice-rate">Rate</div>
								<div class="invoice-hours">Hours</div>
								<div class="invoice-subtotal">Subtotal</div>
							</div>
							<div class="invoice-desc-body">
								<ul>
									<li class="clearfix">
										<div class="invoice-sub">Website Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Logo Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Website Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Logo Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal"><span class="weight-600">$2000</span></div>
									</li>
								</ul>
							</div>
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Bank Info</div>
									<div class="invoice-rate">Due By</div>
									<div class="invoice-subtotal">Total Due</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
												<p class="font-14 mb-5">Account No: <strong class="weight-600">123 456 789</strong></p>
												<p class="font-14 mb-5">Code: <strong class="weight-600">4556</strong></p>
											</div>
											<div class="invoice-rate font-20 weight-600">10 Jan 2018</div>
											<div class="invoice-subtotal"><span class="weight-600 font-24 text-danger">$8000</span></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
					</div>
				</div>
			</div>
			<?php include('includes/footer.php');?>
		</div>
	</div>
	<?php }?>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>

<?php 
}

?>