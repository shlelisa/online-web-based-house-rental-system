
<?php include('includes/headerforuser.php'); ?>

		<?php $query=mysqli_query($con,"select * from news where id = '".$_GET['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
		<main>
			<header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image: <?php if($row['image']==""){ ?>"
   <img class="img-fluid w-100" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?> 
				<div class="alignHolder d-flex w-100 align-items-center">
					<div class="align w-100 position-relative">
						<div class="container">
							<h1 class="text-white mb-2"><?php echo htmlentities($row['title']);?></h1>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb breadcrWhite rounded-0 border-0 p-0 fontAlter mb-0">
									<li class="breadcrumb-item"><a href="home.html">Home</a></li>
									<li class="breadcrumb-item"><a href="newsClassic.html">News</a></li>
									<li class="breadcrumb-item active" aria-current="page">Metro Road Design Plan 2025</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<article class="newsSingleWrap pt-7 pb-2 pt-md-9 pb-md-4 pt-lg-14 pb-lg-8 pt-xl-22 pb-xl-13">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8 col-xl-9 mb-6">
							<div class="pr-xl-14">
								<div class="imgHolder mb-4 mb-md-8 position-relative">
									<div class="nrcImageSlider">
										<div>
											<div class="imgWrap">
											<?php if($row['image']==""){ ?>
   <img class="img-fluid w-100" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
												
											</div>
										</div>
										
									</div>
								</div>
								<header class="nrcHead">
									<strong class="d-block fwMedium title mb-1">
										<i class="icnTheme fwMedium icomoon-clock"><span class="sr-only">icon</span></i>
										<time datetime="2011-01-12"><?php echo $row['date']; ?></time>
										
									</strong>
									<h2 class="h2vii fwSemiBold mb-5"><?php echo htmlentities($row['title']);?></h2>
								</header>
								<p><?php echo strip_tags(substr($row['description'],0,1000)) ;?></p>	<ol class="nwzPostDetailList list-unstyled pt-5 m-0">
									
									
								</ol>
								
								
								
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xl-3 mb-6">
							<aside class="dscSidebar pt-1 ml-xl-n5">
								<aside class="sidebar">
									<section class="widget widgetSearch mb-6 mb-lg-10">
										<form action="#" class="searchForm">
											<div class="input-group">
												<input type="search" class="form-control" placeholder="Search Here…">
												<div class="input-group-append">
													<button class="btn btnTheme btnNoOver d-flex align-items-center justify-content-center" type="button">
														<i class="icomoon-search"><span class="sr-only">search</span></i>
													</button>
												</div>
											</div>
										</form>
									</section>
								
									<nav class="widget widgetUpcoming mb-6 mb-lg-10">
										<h3 class="fwMedium mb-5">Recent News</h3>
										<?php
				$query=mysqli_query($con,"SELECT * FROM news ORDER BY id DESC Limit 3");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($query); $i++){   
               ?>
										<ul class="list-unstyled pl-0 mb-7">
											<li>
												<div class="imgHolder flex-shrink-0 mr-4 mt-1">
												<?php if($row['image']==""){ ?>
   <img  class="img-fluid"  src="images/noimage.png"><?php } else {?>
   <img class="img-fluid"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
												
												</div>
												<div class="descrWrap">
													<h4 class="fwMedium mb-1">
														<a href="blog-single.php?id=<?php echo $row['id'];?>"><?php echo htmlentities($row['title']);?></a>
													</h4>
													<time datetime="2011-01-12" class="d-block"><i class="icomoon-clock icn mr-1"><span class="sr-only">icon</span></i><?php echo htmlentities($row['date']);?></time>
												</div>
											</li>
											
											
										</ul>
										<?php } ?>
									</nav>
				
									<section class="widget widgetGallery mb-6 mb-lg-10">
										<h3 class="fwMedium mb-5">Photo Gallery</h3>
										<ul class="list-unstyled pl-0 d-flex flex-wrap">
											<li>
												<a href="assets/images/img194.jpg" class="lightbox" data-fancybox="true">
													<img src="assets/images/img194.jpg" class="img-fluid" alt="image description">
												</a>
											</li>
											<li>
												<a href="assets/images/img195.jpg" class="lightbox" data-fancybox="true">
													<img src="assets/images/img195.jpg" class="img-fluid" alt="image description">
												</a>
											</li>
											<li>
												<a href="assets/images/img196.jpg" class="lightbox" data-fancybox="true">
													<img src="assets/images/img196.jpg" class="img-fluid" alt="image description">
												</a>
											</li>
											<li>
												<a href="assets/images/img197.jpg" class="lightbox" data-fancybox="true">
													<img src="assets/images/img197.jpg" class="img-fluid" alt="image description">
												</a>
											</li>
											<li>
												<a href="assets/images/img194.jpg" class="lightbox" data-fancybox="true">
													<img src="assets/images/img194.jpg" class="img-fluid" alt="image description">
												</a>
											</li>
											<li>
												<a href="assets/images/img195.jpg" class="lightbox" data-fancybox="true">
													<img src="assets/images/img195.jpg" class="img-fluid" alt="image description">
												</a>
											</li>
										</ul>
									</section>
									
									
								</aside>
							</aside>
						</div>
					</div>
				</div>
			</article>
		</main>
<?php include('includes/footerforuser.php');}?>