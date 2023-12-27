
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
									<a class="d-inline-block align-top dropdown-toggle dropIcn" href="javascript:void(0);" role="button" id="hdLanguagedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</a>
									<div class="dropdown-menu dropdown-menu-right rounded-lg overflow-hidden desktopDropOnHover p-0" aria-labelledby="hdLanguagedropdown">
										<a class="dropdown-item text-center " href="javascript:void(0);">Eng</a>
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