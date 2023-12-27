
<?php include('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from htmlbeans.com/html/egovt/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 08:45:57 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>welcome</title>
	<!-- inlcude google nunito sans font cdn link -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
	<!-- inlcude google cabin font cdn link -->
	<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="assets/style.css">
	<!-- include theme color setting stylesheet -->
	<link rel="stylesheet" href="assets/css/colors.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- phStickyWrap -->
		<div class="phStickyWrap">
			<!-- pageHeader -->
			<header id="pageHeader" class="bg-white">
				<div class="hdTopBar py-2 py-xl-3 bg-dark d-none d-md-block">
					<div class="container">
						<div class="row">
							<div class="col-8">
								<ul class="list-unstyled hdScheduleList mb-0 d-flex flex-wrap align-items-center">
									<li>
										<a href="tel:+251938606334">
											<i class="icomoon-telRcv align-middle icn"><span class="sr-only">icon</span></i>
											Call us on: +251938606334
										</a>
									</li>
									<li>
										<time datetime="2011-01-12">
											<i class="icomoon-clock align-middle icn"><span class="sr-only">icon</span></i>
											Open Hours: Mon - Fri 8.00 am - 6.00 pm
										</time>
									</li>
								</ul>
							</div>
							<div class="col-4">
								<ul class="list-unstyled hdAlterLinksList d-flex justify-content-end flex-wrap mb-0">
									<li>
										<a href="javascript:void(0);">Council</a>
									</li>
									<li>
										<a href="javascript:void(0);">Vacancies</a>
									</li>
									<li>
										<a href="javascript:void(0);">Complaints</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="hdFixerWrap py-2 py-md-3 py-xl-5 sSticky bg-white">
					<div class="container">
						<nav class="navbar navbar-expand-md navbar-light p-0">
							<div class="logo flex-shrink-0 mr-3 mr-xl-8 mr-xlwd-16">
								<a href="index.php">
									
								</a>
							</div>
							<div class="hdNavWrap flex-grow-1 d-flex align-items-center justify-content-end justify-content-lg-start">
								<div class="collapse navbar-collapse pageMainNavCollapse mt-2 mt-md-0" id="pageMainNavCollapse">
									<ul class="navbar-nav mainNavigation">
										<li class="nav-item dropdown ddohOpener">
											<a class="nav-link dropdown-toggle" href="index.php" role="button"  aria-expanded="false">Home</a>
										</li>
										
										<li class="nav-item dropdown ddohOpener">
											<a class="nav-link dropdown-toggle" href="news.php" role="button" aria-expanded="false">News</a>
											
										</li>
										
										<li class="nav-item dropdown ddohOpener">
											<a class="nav-link dropdown-toggle " href="gallery.php" role="button"  aria-expanded="false">Gallerys</a>
											
										</li>
										<li class="nav-item dropdown ddohOpener">
											<a class="nav-link dropdown-toggle" href="contact.php" role="button"  aria-expanded="false">Contact Us</a>
										</li>
										<li class="nav-item dropdown ddohOpener">
											<a class="nav-link dropdown-toggle" href="Ourservice.php" role="button"  aria-expanded="false">Ourservice </a>
										</li>
										
										<li class="nav-item dropdown ddohOpener">
											<a class="nav-link dropdown-toggle dropIcn" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
											<div class="dropdown-menu hdMainDropdown desktopDropOnHover">
												<ul class="list-unstyled mb-0 hdDropdownList">
															<li><a class="dropdown-item" href="history.php">History</a></li>
																<li><a class="dropdown-item" href="mission.php">Mission</a></li>
																<li><a class="dropdown-item" href="vision.php">Vision</a></li>
																<li><a class="dropdown-item" href="goal.php">Our Goal</a></li>
															</ul>
											</div>
										</li>
										
									</ul>
								</div>
								
							</div>
							<div class="hdRighterWrap d-flex align-items-center justify-content-end">
								<div class="dropdown hdLangDropdown ddohOpener d-none d-lg-block">
									<a class="d-inline-block align-top dropdown-toggle dropIcn" href="javascript:void(0);" role="button" id="hdLanguagedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eng</a>
									<div class="dropdown-menu dropdown-menu-right rounded-lg overflow-hidden desktopDropOnHover p-0" aria-labelledby="hdLanguagedropdown">
										<a class="dropdown-item text-center active" href="javascript:void(0);">Eng</a>
										<a class="dropdown-item text-center" href="javascript:void(0);">Oromo</a>
										
									</div>
								</div>
								<a href="security/login.php" class="btn btn-outline-secondary bdrWidthAlter ml-3 ml-xl-6 btnHd d-none d-lg-block text-capitalize position-relative border-0 p-0" data-hover="Login">
									<span class="d-block btnText">Sign In</span>
								</a>
								<button class="navbar-toggler pgNavOpener ml-2 bdrWidthAlter position-relative" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
							</div>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<main>
			<header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image: url(assets/images/img86.jpg);">
				<div class="alignHolder d-flex w-100 align-items-center">
					<div class="align w-100 position-relative">
						<div class="container">
							<h1 class="text-white mb-2">Latest News</h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item"><a href="news.php">News</a></li>
								
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<section class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
				<div class="container">
					
					<div class="row">
					<?php
				$query=mysqli_query($con,"SELECT * FROM news ORDER BY id DESC Limit 10");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($query); $i++){   
               ?>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="npbColumn shadow bg-white mb-6 mb-xl-12">
								<div class="imgHolder position-relative">
									<a href="newsSingle.html">
									<?php if($row['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
										
									</a>
									<time datetime="2011-01-12" class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1"><?php echo $row['date']; ?></time>
								</div>
								<div class="npbDescriptionWrap px-5 pt-8 pb-5">
									<strong class="d-block npbcmWrap font-weight-normal mb-1">
							
										<i class="icomoon-chat"><span class="sr-only">icon</span></i> 0
									</strong>
									<h3 class="fwSemiBold mb-5">
										<a href="blog-single.php?id=<?php echo $row['id'];?>"><?php echo htmlentities($row['title']);?></a>
									</h3>
									       <p><?php echo strip_tags(substr($row['description'],0,100)) ;?>...</p>
									<a href="blog-single.php?id=<?php echo $row['id'];?>" class="btnCr d-inline-block align-top fontAlter">Continue Reading <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span class="sr-only">icon</span></i></a>
								</div>
							</article>
						</div>
						
						
						<?php } ?>
					</div>
				
					
				</div>
			</section>
		</main>
		<!-- ftAreaWrap -->
		<div class="ftAreaWrap position-relative bg-gDark fontAlter">
			<aside class="ftConnectAside pt-4 pb-3 pt-md-7 pb-md-7 text-center text-md-left">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-7">
							<nav class="ftcaNav mb-4 mb-lg-0">
								<ul class="list-unstyled d-flex flex-wrap mb-0 justify-content-center justify-content-lg-start">
									<li>
										<a href="about.html">About Us</a>
									</li>
									<li>
										<a href="services.html">Services</a>
									</li>
									<li>
										<a href="eventsList.html">Events</a>
									</li>
									<li>
										<a href="newsGridSmall.html">News</a>
									</li>
									<li>
										<a href="contact-1.html">Contact</a>
									</li>
									<li>
										<a href="portfolioClassic.html">Portfolio</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="col-12 col-lg-5">
							<div class="ctConnectWrap d-sm-flex justify-content-sm-center justify-content-lg-end align-items-sm-center">
								<strong class="title flex-shrink-0 mb-1 font-weight-normal mr-sm-3 d-block">Connect With Us</strong>
								<ul class="list-unstyled socialNetworks ftSocialNetworks d-flex flex-wrap justify-content-center justify-content-sm-end mb-0">
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-facebook-square"><span class="sr-only">facebook</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-instagram"><span class="sr-only">instagram</span></i>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i class="fab fa-youtube"><span class="sr-only">youtube</span></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<!-- footerAside -->
			<aside class="footerAside pt-9 pb-sm-2 pt-xl-14 pb-xl-12">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-6 col-md-5 col-xl-3 mb-6">
							<div class="ftLogo mt-md-1 mb-6">
								<a href="home.html">
									<img src="assets/images/logoWhite.png" class="img-fluid" alt="egovt">
								</a>
							</div>
							<address class="mb-0 ftPlace">
								<p class="mb-2"><strong class="font-weight-normal">95 FF3, App Street Avenue <br>NSW 96209, Canada</strong></p>
								<ul class="list-unstyled ftpScheduleList mb-0">
									<li>
										<i class="icomoon-clock fwSemiBold icn mr-1 mr-sm-0"><span class="sr-only">icon</span></i>
										<strong class="title font-weight-normal text-white">Opening Hours:</strong>
										<br>
										<time datetime="2011-01-12">Mon – Fri: 8:00 am – 6:00 pm</time>
									</li>
									<li>
										<i class="fas fa-phone-alt icn mr-1 mr-sm-0"><span class="sr-only">icon</span></i>
										<strong class="title font-weight-normal text-white">Phone:</strong>
										<a href="tel:18001234567">1800 123 4567</a>
									</li>
									<li>
										<i class="fas fa-envelope icn mr-1 mr-sm-0"><span class="sr-only">icon</span></i>
										<strong class="title font-weight-normal text-white">Email:</strong>
										<a href="mailto:demo@example.com">demo@example.com</a>
									</li>
								</ul>
							</address>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xlwd-2 mb-6">
							<h3 class="ftHeading text-white mb-4">Service Request</h3>
							<ul class="list-unstyled ftsrLinksList mb-0">
								<li>
									<a href="servicesSingle.html">Apply for a City Job</a>
								</li>
								<li>
									<a href="servicesSingle.html">Request a 311 Service</a>
								</li>
								<li>
									<a href="servicesSingle.html">Get a Parking Permit</a>
								</li>
								<li>
									<a href="servicesSingle.html">Get a Parking Permit</a>
								</li>
								<li>
									<a href="servicesSingle.html">Online Birth Certificate</a>
								</li>
								<li>
									<a href="servicesSingle.html">Trade License</a>
								</li>
							</ul>
						</div>
						<div class="col-12 col-sm-4 col-md-3 col-xl-2 col-xlwd-3 mb-6">
							<div class="pl-xlwd-11">
								<h3 class="ftHeading text-white mb-4">Useful Links</h3>
								<ul class="list-unstyled ftsrLinksList mb-0">
									<li>
										<a href="newsClassic.html">Our Blog</a>
									</li>
									<li>
										<a href="portfolioClassic.html">Town Gallery</a>
									</li>
									<li>
										<a href="history.html">Our History</a>
									</li>
									<li>
										<a href="departments.html">Department</a>
									</li>
									<li>
										<a href="portfolioOverlay.html">Portfolio</a>
									</li>
									<li>
										<a href="donateNow.html">Donate</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-8 col-md-12 col-xl-4 mb-6">
							<div class="ml-xl-n1 ml-xlwd-n7">
								<h3 class="ftHeading text-white mb-5">City News &amp; Updates</h3>
								<form action="#" class="ftSubscribeForm">
									<label class="d-block mb-7">The latest Egovt news, articles, and resources, sent straight to your inbox every month.</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control form-control-lg" placeholder="Enter Your Email">
										<div class="input-group-append">
											<button type="button" class="btn btnTheme d-flex font-weight-bold text-capitalize position-relative border-0 p-0" data-hover="Send">
												<span class="d-block btnText">Subscribe</span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</aside>
			<!-- pageFooter -->
			<footer id="pageFooter" class="text-center bg-dark pt-6 pb-3 pt-md-8 pb-md-5">
				<div class="container">
					<p><a href="javascript:void(0);">EGovt Template</a> - <a href="javascript:void(0);">Mad UX</a> &copy; 2022. <br class="d-md-none">All Rights Reserved</p>
				</div>
			</footer>
		</div>
	</div>
	<!-- include jQuery library -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="js/jqueryCustom.js"></script>
	<!-- include plugins JavaScript -->
	<script src="js/plugins.js"></script>
	<!-- include fontAwesome -->
	<script src="../../../kit.fontawesome.com/391f644c42.js"></script>
</body>

<!-- Mirrored from htmlbeans.com/html/egovt/newsGridLarge.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 09:00:17 GMT -->
</html>