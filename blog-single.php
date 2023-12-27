

<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmlguru.net/house-rent/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:44:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<?php include('header.php'); 
include("connection.php");
?>
<body>
        
    </div><!-- /.header-overlay-content -->

    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Blog</h2>
                    <p class="page-description">Article Details</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area ======= --> 
    <div class="breadcrumbs-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Blog Single</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

	<!-- ====== Single Content Area ====== --> 
<?php 
$query=mysqli_query($conn,"select * from news where id ='".$_GET['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
	<div class="single-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-main-content">
						<article class="post">
							<div class="entry-header">
								<h2 class="entry-title"><?php echo htmlentities($row['title']);?></h2>
							</div><!-- /.entry-header -->
						    <div class="entry-meta">
						        <div class="entry-date">
						            <span></span> <?php echo $row['date']; ?>
						        </div>
						
						       		

						        <!-- /.entry-like -->

						    </div><!-- /.entry-header -->

						    <figure class="post-thumb">
						          <?php if($row['photo']==""){ ?>
   <img  src="NewsPhoto/noimage.png"><?php } else {?>
   <img  src="NewsPhoto/<?php echo htmlentities($row['photo']);?>" width="800" height="350">
   <?php } ?>
						    </figure><!-- /.post-thumb -->

						    <div class="entry-content">
						    
 <p><?php echo strip_tags(substr($row['detail'],0,2000)) ;?></p>
							</div><!-- /.entry-content -->

						
						</article><!-- /.post -->
					</div><!-- /.single-main-content -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>
	<?php } ?><!-- /.single-content -->



<!-- ====== Blog Area ======= --> 
    <div class="blog-area bg-gray-color">
        <div class="container">
            <div class="col-md-12">
                <div class="heading-content-one">
                    <h2 class="title">Blog</h2>
                    <h5 class="sub-title">Our News</h5>
                </div><!-- /.blog-heading-content -->
            </div><!-- /.col-md-12 -->
            <div class="row">
			
				<?php
				$sql=mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC Limit 3");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($sql); $i++){   
               ?>
			
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.php?id=<?php echo $row['id'];?>">
						
							
							
                                <?php if($row['photo']==""){ ?>
   <img   src="NewsPhoto/noimage.png"><?php } else {?>
   <img  style="width:700px;height:350px" src="NewsPhoto/<?php echo htmlentities($row['photo']);?>">
   <?php } ?>
                            </a>
                        </figure><!-- /.post-thumb -->
                        <div class="post-content">  
                            <div class="entry-meta">
                                <span class="entry-date">
                                    <?php echo $row['date']; ?>
                                </span>
                               
                            </div><!-- /.entry-header -->
                            <div class="entry-header">
                                <h3><a href="blog-single.php?id=<?php echo $row['id'];?>"><?php echo htmlentities($row['title']);?></a></h3>
                            </div><!-- /.entry-header -->
                           
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
				
				
				
					<?php } ?>
				
				
			<!-- /.col-md-4 -->
            </div><!-- /.row -->
            <a href="blog.php" class="button">show all</a>
        </div><!-- /.container -->
    </div><!-- /.Blog-area-->


    
  

   <?php include('footer.php'); ?>

	<!-- All The JS Files
	================================================== --> 
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script> <!-- main-js -->
</body>

<!-- Mirrored from htmlguru.net/house-rent/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:44:51 GMT -->
</html>