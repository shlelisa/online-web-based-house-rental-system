
<?php
session_start();
include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}else{	
if(isset($_GET['id'])){
 
            $id=$_GET['id']; 
			
           
		
}	
?><!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Gallery</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/fancybox/dist/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- fancybox Popup css -->
</head>
<body>
<? php ('include/includes/header.php')?>
<?php
$query=mysqli_query($con," SELECT *FROM gallery WHERE id='$id'");
$cnt=1;
	while($row=mysqli_fetch_array($query))
{?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Gallery</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Gallery</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="gallery-wrap">
					<ul class="row">
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img2.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img2.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img3.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img3.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img4.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img4.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img2.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img2.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img3.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img3.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img4.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img4.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="vendors/images/product-img1.jpg" alt="">
									<div class="da-overlay">
										<div class="da-social">
										<h5 class="mb-10 color-white pd-20">Lorem ipsum dolor sit amet, consectetur adipisicing.</h5>
											<ul class="clearfix">
												<li><a href="vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
												<li><a href="#"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		<?php include('includes/footer.php');}?>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<!-- fancybox Popup Js -->
	<script src="src/plugins/fancybox/dist/jquery.fancybox.js"></script>
</body>
</html>