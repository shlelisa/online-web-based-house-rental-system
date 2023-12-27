
<?php include('includes/headerforuser.php'); ?>
<?php $query=mysqli_query($con,"select * from news");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
		<main>
			<header class="pageMainHead d-flex position-relative bgCover w-100 text-white" style="background-image:images/hora.jpg <?php if($row['image']==""){ ?>"
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
			<section class="ItemfullBlock pt-7 pb-7 pt-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-22 pb-xl-19">
				<div class="container">
								
					<div class="row">
							<?php
				$query=mysqli_query($con,"SELECT * FROM news ORDER BY date DESC Limit 10");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($query); $i++){   
               ?>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3">
							<article class="npbColumn shadow bg-white mb-6 mb-xl-12">
								<div class="imgHolder position-relative">
									
										<?php if($row['image']==""){ ?>
   <img class="img-fluid w-100 d-block" src="images/noimage.png"><?php } else {?>
   <img class="img-fluid w-100 d-block"  src="images/<?php echo htmlentities($row['image']);?>">
   <?php } ?>
									<time datetime="2011-01-12" class="npbTimeTag font-weight-bold fontAlter position-absolute text-white px-2 py-1"><?php echo htmlentities($row['date']); ?></time>
								</div>
								<div class="npbDescriptionWrap px-5 pt-8 pb-5">
									<strong class="d-block npbcmWrap font-weight-normal mb-1">
										<span class="mr-5">In Goverment</span>
										<i class="icomoon-chat"><span class="sr-only">icon</span></i> 0
									</strong>
									<h3 class="fwSemiBold mb-5">
										<a href="newsSingle.html"><?php echo htmlentities($row['title']); ?></a>
									</h3>
								<a href="blog-single.php?id=<?php echo $row['id'];?>" class="btnCr d-inline-block align-top fontAlter">Continue Reading <i class="icomoon-arrowRight bcIcn ml-2 align-middle"><span class="sr-only">icon</span></i></a>
								</div>
							</article>
						</div>
<?php }?>						
					</div>
				
					<nav aria-label="Page navigation">
						<ul class="pagination justify-content-center pt-2">
							<li class="page-item disabled">
								<a class="page-link" href="javascript:void(0);">Previous</a>
							</li>
							<li class="page-item active" aria-current="page">
								<a class="page-link" href="javascript:void(0);">1 <span class="sr-only">(current)</span></a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="javascript:void(0);">Next <i class="fas fa-chevron-right icn"><span class="sr-only">icon</span></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</section>
		</main>
	<?php include('includes/footerforuser.php');}?>