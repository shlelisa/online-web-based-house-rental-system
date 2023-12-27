
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
		<main>
			<div class="introBlock ibSlider">
				<div>
					<article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
						<div class="alignHolder d-flex align-items-center w-100">
							<div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
								<div class="container position-relative">
									<div class="row">
										<div class="col-12 col-md-9 col-xl-7 fzMedium">
											<h1 class="text-white mb-4 h1Large">Welcome To Bishoftu The City Of Tourism</h1>
											<p>The Most Exciting guide to living, working, visiting and investing business.</p>
											<a href="eventsList.html" class="btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0 mt-6" data-hover="Discover More">
												<span class="d-block btnText">Discover More</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<span class="ibBgImage bgCover position-absolute" style="background-image: url(assets/images/bishoftu.jpg);"></span>
					</article>
				</div>
				<div>
					<article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
						<div class="alignHolder d-flex align-items-center w-100">
							<div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
								<div class="container position-relative">
									<div class="row">
										<div class="col-12 col-md-9 col-xl-7 fzMedium">
											<h1 class="text-white mb-4 h1Large">Bishoftu Dire Jitu kebele is tuorism area</h1>
											<a href="eventsList.html" class="btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0 mt-6" data-hover="Discover More">
												<span class="d-block btnText">Discover More</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<span class="ibBgImage bgCover position-absolute" style="background-image: url(assets/images/babogaya.jpg);"></span>
					</article>
				</div>
				<div>
					<article class="d-flex w-100 position-relative ibColumn text-white overflow-hidden">
						<div class="alignHolder d-flex align-items-center w-100">
							<div class="align w-100 pt-20 pb-20 pt-md-40 pb-md-30 px-md-17">
								<div class="container position-relative">
									<div class="row">
										<div class="col-12 col-md-9 col-xl-7 fzMedium">
											<h1 class="text-white mb-4 h1Large">Lovely &amp; Romantic City for Natural Lovers</h1>
											<p>Every year 10 millions of people from worldwide don’t forget to visit here.</p>
											<a href="eventsList.html" class="btn btnTheme font-weight-bold btnMinSm text-capitalize position-relative border-0 p-0 mt-6" data-hover="Discover More">
												<span class="d-block btnText">Discover More</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<span class="ibBgImage bgCover position-absolute" style="background-image: url(assets/images/hora.jpg);"></span>
					</article>
				</div>
			</div>
			<section class="exploreServicesBlock position-relative pt-7 pt-md-12 pt-lg-16 pt-xl-20 pb-0 pb-md-4 pb-lg-8 pb-xl-12">
				<div class="container">
					<header class="headingHead mb-7 md-md-9 mb-lg-13">
						<div class="row align-items-end">
							<div class="col-12 col-sm-7 col-xl-5">
								<h2 class="mb-0">Let’s explore local services, programs &amp; initiatives.</h2>
							</div>
							<div class="col-12 col-sm-5 col-xl-7 d-sm-flex justify-content-sm-end">
								<a href="services.html" class="btn btn-dark text-capitalize position-relative border-0 p-0 mt-4 mt-sm-0 mb-sm-1 minWidthMedium" data-hover="Explore Services">
									<span class="d-block btnText">Explore Services</span>
								</a>
							</div>
						</div>
					</header>
					<div class="row justify-content-center">
						<div class="col-12 col-md-6 col-lg-4">
							<article class="esColumn position-relative text-center mb-13">
								<span class="imgHolder d-block w-100 bgCover" style="background-image: url(assets/images/register.png);"></span>
								<div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
									<h3 class="fwMedium mb-0">Register Resident</h3>
									<a href="servicesSingle.html" class="btnLink fontAlter">Learn More <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="esColumn position-relative text-center mb-13">
								<span class="imgHolder d-block w-100 bgCover" style="background-image: url(assets/images/idcard.png);"></span>
								<div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
									<h3 class="fwMedium mb-0">Issuance Of Id Card</h3>
									<a href="servicesSingle.html" class="btnLink fontAlter">Learn More <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="esColumn position-relative text-center mb-13">
								<span class="imgHolder d-block w-100 bgCover" style="background-image: url(assets/images/govern.jfif);"></span>
								<div class="escCaption bg-white shadow position-absolute pt-4 px-2 pb-5">
									<h3 class="fwMedium mb-0">Govern Them</h3>
									<a href="servicesSingle.html" class="btnLink fontAlter">Learn More <i class="fas fa-chevron-right blIcn"><span class="sr-only">icon</span></i></a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>
			<section class="newsPulicationsBlock position-relative bg-light overflow-hidden pt-7 pb-4 pt-md-10 pb-md-4 pt-lg-16 pb-lg-10 pt-xl-22 pb-xl-16">
							
				<div class="container position-relative npbHolder">
					<div class="row">
						<div class="col-12 col-lg-3">
							<header class="headingHead pt-2 mb-7 mb-lg-0">
								<h2 class="fwSemiBold mb-2">News and Publications</h2>
								<p>The news about recent activities for needed peoples.</p>
								<a href="newsSingle.html" class="btn btn-outline-secondary bdrWidthAlter text-capitalize position-relative border-0 p-0 mt-5 btnXsMinWidth" data-hover="More News">
									<span class="d-block btnText">More News</span>
								</a>
							</header>
						</div>
						
						<div class="col-12 col-lg-9">
							
							<div class="row">
				<?php
				$query=mysqli_query($con,"SELECT * FROM news ORDER BY id DESC Limit 4");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($query); $i++){   
               ?>
								<div class="col-12 col-md-6 col-xl-4">
							
									<article class="npbColumn shadow bg-white mb-6">
										<div class="imgHolder position-relative">
											<a href="javascript:void(0);">
											<?php if($row['image']==""){ ?>
   <img class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
				
											</a>
											<time datetime="2011-01-12" class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1">15 Oct 2020</time>
										</div>
										<div class="npbDescriptionWrap px-5 pt-8 pb-5">
											<strong class="d-block npbcmWrap font-weight-normal mb-1">
												<span class="mr-5">In Goverment</span>
												<i class="icomoon-chat"><span class="sr-only">icon</span></i> 0
											</strong>
											<h3 class="fwSemiBold mb-6">
												<a href="blog-single.php?id=<?php echo $row['id'];?>"><?php echo htmlentities($row['title']);?></a>
											</h3>
											<a href="blog-single.php?id=<?php echo $row['id'];?>" class="btnCr d-inline-block align-top fontAlter">Continue Reading <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span class="sr-only">icon</span></i></a>
										</div>
									</article>
				
								</div>
									<?php } ?>
								
							</div>
						
						</div>
					
					</div>
				</div>
	
				<span class="npbBgPattern w-100 h-100 bgCover position-absolute inaccessible" style="background-image: url(assets/images/bgPattern2.jpg);"></span>
			</section>
			<section class="exploreResourceBlock position-relative pt-7 pt-md-10 pt-lg-16 pt-xl-22 pb-7 pb-md-10">
				<div class="container">
					<div class="row">
						<div class="col-12 col-xl-4 pt-xl-2">
							<header class="erHeadingHead mb-7 mb-lg-11 mb-xl-0">
								<h2 class="text-white">Explore Online <br>Services &amp; Resource</h2>
								<p>City  providing a wide range of online services to people who need help.</p>
							</header>
						</div>
						<div class="col-12 col-xl-8">
							<div class="pl-xl-9">
								<div class="row no-gutters shadow">
								
<div class="col-12 col-md-6 d-md-flex">
										<ul class="list-unstyled erLinksList px-7 py-7 px-lg-10 py-lg-10 bg-white w-100 mb-0">
											<li>
												<a href="#">Registration Of Resident</a>
											</li>
											<li>
												<a href="#">Isuance Of Id card</a>
											</li>
											<li>
												<a href="#">Give Birth certificate </a>
											</li>
											<li>
												<a href="#">Give Building Permission</a>
											</li>
											<li>
												<a href="#">Give Mariege certificate</a>
											</li>
											<li>
												<a href="#">Give Death certificate</a>
											</li>
											
										</ul>
									</div>
									
									<div class="col-12 col-md-6 d-md-flex">
										<ul class="list-unstyled erLinksList px-7 py-7 px-lg-10 py-lg-10 bgTheme w-100 mb-0">
											<li>
												<a href="#">Public Service Identity</a>
											</li>
											<li>
												<a href="#">Apply for a City Job</a>
											</li>
											<li>
												<a href="#">Collecting Tax Licenses</a>
											</li>
											<li>
												<a href="#">Kebele Planning Framework</a>
											</li>
											<li>
												<a href="#">Apply for Business License</a>
											</li>
											<li>
												<a href="#">Online Court Services At Kebele level</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="meetCouncilBlock position-relative pt-7 pt-md-9 pt-lg-14 pt-xl-20 pb-6">
				<div class="container">
					<header class="headingHead text-center cdTitle mb-7 mb-md-13">
						<h2 class="fwSemiBold mb-4">Meet kebele Administrators</h2>
						<p>The kebele Administrators have the real super powers as administraion to lead country.</p>
					</header>
					<div class="row justify-content-center">
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<?php $query=mysqli_query($con,"select * from admin where role='admin'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
 $un=$row['username'];	?>

	
		
							<article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
								<div class="imgHolder position-relative">
								<?php if($row['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
									
								</div>
								<?php $mquery=mysqli_query($con,"select * from registerresident where username='$un'");
$cnt=1;
while($rw=mysqli_fetch_array($mquery))
{ ?>
								<div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
									<h3 class="fwMedium h3Small mb-1"><?php if($rw['full_name']==""){ echo"no name";?><?php } else {?>
                     <?php echo htmlentities($rw['full_name']);?>
                       <?php } ?></h3>
									<h4 class="fwSemiBold fontBase text-secondary"><?php echo htmlentities($row['role']);?></h4>
									<ul class="list-unstyled mccInfoList">
										<li>
											<a href="mailto:hirkoefrem@gmail.com">
												
												<?php echo htmlentities($rw['email']);?>
											</a>
										</li>
										<li>
											<a href="tel:+251938606334">
												<i class="fas fa-phone-alt icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['phone']);?>
											</a>
										</li>
									</ul>
								</div>
<?php } ?>
							</article>
<?php } ?>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<?php $query=mysqli_query($con,"select * from admin where role='manager'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
							<article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
								<div class="imgHolder position-relative">
								<?php if($row['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
																	
								</div>
	<?php $mquery=mysqli_query($con,"select * from registerresident where username='".$row['username']."'");
$cnt=1;
while($rw=mysqli_fetch_array($mquery))
{ ?>
		
								<div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
									<h3 class="fwMedium h3Small mb-1"><?php echo htmlentities($rw['full_name']);?></h3>
									<h4 class="fwSemiBold fontBase text-secondary">City<?php echo"  ".htmlentities($row['role']);?></h4>

									<ul class="list-unstyled mccInfoList">
										<li>
											<a href="mailto:hirkoefrem@gmail.com">
												<i class="fas fa-envelope icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['email']);?>
											</a>
										</li>
										<li>
											<a href="tel:+251938606334">
												<i class="fas fa-phone-alt icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['phone']);?>
											</a>
										</li>
									</ul>
								</div>
								
<?php } ?>
							</article>
<?php }?>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<?php $query=mysqli_query($con,"select * from admin where role='registrar'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
							<article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
								<div class="imgHolder position-relative">
								
															<?php if($row['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
									
								</div>
	<?php $mquery=mysqli_query($con,"select * from registerresident where username='".$row['username']."'");
$cnt=1;
while($rw=mysqli_fetch_array($mquery))
{ ?>				
								<div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
									<h3 class="fwMedium h3Small mb-1"><?php echo htmlentities($rw['full_name']);?></h3>
									<h4 class="fwSemiBold fontBase text-secondary"><?php echo htmlentities($row['role']);?></h4>
									
									<ul class="list-unstyled mccInfoList">
										<li>
											<a href="mailto:hirkoefrem@gmail.com">
												<i class="fas fa-envelope icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['email']);?>
											</a>
										</li>
										<li>
											<a href="tel:+251938606334">
												<i class="fas fa-phone-alt icn mr-1"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['phone']);?>
											</a>
										</li>
									</ul>
								</div>
<?php } ?>
							</article>
<?php }?>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
						<?php $query=mysqli_query($con,"select * from admin where role='sectormanager'");
$cnt=1;
while($row=mysqli_fetch_array($query)){
	?>
							<article class="mccColumn bg-white shadow mb-6 mx-auto mx-sm-0">
								<div class="imgHolder position-relative">
								
																					<?php if($row['image']==""){ ?>
   <img  class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
									
								</div>
								
		<?php $mquery=mysqli_query($con,"select * from registerresident where username='".$row['username']."'");
$cnt=1;
while($rw=mysqli_fetch_array($mquery))
{ ?>							
								<div class="mcCaptionWrap px-5 pt-5 pb-4 position-relative">
									<h3 class="fwMedium h3Small mb-1"><?php echo htmlentities($rw['full_name']);?></h3>
									<h4 class="fwSemiBold fontBase text-secondary"><?php echo htmlentities($row['role']);?></h4>
									
									<ul class="list-unstyled mccInfoList">
										<li>
											<a href="mailto:collector@citygov.com">
												<i class="fas fa-envelope icn"><span class="sr-only">icon</span></i>
									<?php echo htmlentities($rw['email']); ?>
											</a>
										</li>
										<li>
											<a href="tel:+251912677351">
												<i class="fas fa-phone-alt icn"><span class="sr-only">icon</span></i>
												<?php echo htmlentities($rw['phone']); ?>
											</a>
										</li>
									</ul>
								</div>
								
<?php } ?>
							</article>
							<?php }?>
						</div>
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
										<a href="newsGridSmall.html">News</a>
									</li>
									<li>
										<a href="contact-1.html">Contact</a>
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
								<p class="mb-2"><strong class="font-weight-normal">Bishoftu twon <br>Dire Jitu</strong></p>
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
										<a href="tel:+25191267351">+2519 126 7351</a>
									</li>
									<li>
										<i class="fas fa-envelope icn mr-1 mr-sm-0"><span class="sr-only">icon</span></i>
										<strong class="title font-weight-normal text-white">Email:</strong>
										<a href="mailto:muratanegessa6@gmail.com">demo@example.com</a>
									</li>
								</ul>
							</address>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xlwd-2 mb-6">
							<h3 class="ftHeading text-white mb-4">Service Request</h3>
							<ul class="list-unstyled ftsrLinksList mb-0">
								<li>
									<a href="">Request for Registration</a>
								</li>
								<li>
									<a href="#">Request for ID Card</a>
								</li>
								<li>
									<a href="#">Request for BC</a>
								</li>
								<li>
									<a href="#">Request for MC</a>
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
										<a href="donateNow.html">Donate</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-sm-8 col-md-12 col-xl-4 mb-6">
							<div class="ml-xl-n1 ml-xlwd-n7">
								<h3 class="ftHeading text-white mb-5">City News &amp; Updates</h3>
								<form action="#" class="ftSubscribeForm">
									<label class="d-block mb-7">The latest Resident management news, articles, and resources, sent straight to your inbox every month.</label>
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
					<p><a href="javascript:void(0);">Resident management</a> - <a href="javascript:void(0);">muleta& efrem</a> &copy; 2023. <br class="d-md-none">All Rights Reserved</p>
				</div>
			</footer>
		</div>
	</div>
	<!-- include jQuery library -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<!-- include custom JavaScript -->
	<script src="assets/js/jqueryCustom.js"></script>
	<!-- include plugins JavaScript -->
	<script src="assets/js/plugins.js"></script>
	<!-- include fontAwesome 
	<script src="../../../kit.fontawesome.com/391f644c42.js"></script>-->
</body>

<!-- Mirrored from htmlbeans.com/html/egovt/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 08:48:35 GMT -->
</html>