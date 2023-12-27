<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmlguru.net/house-rent/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:44:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<?php include('header.php'); ?>

<body>
   
    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Close</button>
            
        </div> <!-- /.overlay-menu-item -->

        <!-- header-search-content -->
        <div class="gradient-transparent overlay-search">
            <button type="button" class="overlay-close">Close</button>
            <div class="header-search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="get" class="searchform">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-controller" placeholder="Search for snippets" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <div class="form-horizontal">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"> From Blog</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox">Find Your Apartment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-search" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.header-search-content -->  

        
    </div><!-- /.header-overlay-content -->

    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">Blog</h2>
                    <p class="page-description">Our all News feed</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->



    <!-- ====== Blog Area ====== --> 
    <div class="blog-area bg-gray-color">
       <div class="container">
           <div class="row">
                <div class="col-md-8">
                    <div class="post-filter-area clearfix">
                        <div class="post-filter-area clearfix">
                            <ul class="nav nav-tabs hidden-sm hidden-xs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab"><span>Recent</span>/<span>News</span></a>
                                </li>
                               
                            </ul>

                            <form class="hidden-md hidden-lg">
                                <select class="blog-menu-mobile">
                                    <option value='0'>Recent / News</option>
                                   
                                </select>
                            </form>
                        </div> <!-- /.tab-list -->
                    </div><!-- /.post-filter -->

                   <div class="blog-content-left">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                   
                                   
                                    
                                    <div class="clearfix"></div><!-- /.clearfix -->

<?php
include"connection.php";
				$sql=mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC Limit 10");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($sql); $i++){   
               ?>



                                    <div class="col-md-6 col-sm-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="blog-single.php?id=<?php echo $row['id'];?>">
                                                  <?php if($row['photo']==""){ ?>
   <img   src="NewsPhoto/noimage.png"><?php } else {?>
   <img   style="width:700px;height:350px" src="NewsPhoto/<?php echo htmlentities($row['photo']);?>">
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
                                                <div class="entry-footer">
                                                    
                                                </div><!-- /.entry-footer -->
                                            </div><!-- /.post-content -->
                                        </article><!-- /.post -->
                                    </div><!-- /.col-md-6 --> 
									
									
				<?php } ?>
									
									
									
									
									
									
									
									

                                    

                                </div><!-- /.row -->

                                
                            </div> <!-- /.home -->
                              
              
                        </div> <!-- /.tab-content -->
                   </div><!-- /.blog-content-left -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-4">
                    <div class="blog-content-right">
                        <div class="widget widget_popular_posts clearfix">
                            <div class="widget-title-area">
                                <h4 class="widget-title">News Posts</h4><!-- /.widget-title -->
                            </div><!-- /.widget-title-area -->

                            <div class="widget-content">
<?php
				$query=mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC Limit 10");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($query); $i++){   
               ?>
                   
                                <div class="post-content clearfix">
								                 <div class="image-content">
                                        <a href="blog-single.php?id=<?php echo $row['id'];?>">
                                          <?php if($row['photo']==""){ ?>
   <img   src="NewsPhoto/noimage.png"><?php } else {?>
   <img   src="NewsPhoto/<?php echo htmlentities($row['photo']);?>">
   <?php } ?>
                                        </a>
                                    </div><!-- /.image-content -->
                                    <div class="post-title">
                                        <h5><a href="blog-single.php?id=<?php echo $row['id'];?>"><?php echo htmlentities($row['title']);?></a></h5>
                                        <span><?php echo $row['date']; ?></span>
                                    </div>
				<!-- /.post-title -->
                                </div><!-- /.post-content -->
                             
                               <?php } ?>
                               
                            </div><!-- /.widget-content -->
                        </div><!-- /.widget widget_popular_post -->

                        <div class="widget widget_categories clearfix">
                            <div class="widget-title-area">
                                <h4 class="widget-title">Categories</h4> <!-- /.widget-title -->
                            </div><!-- /.widget-title-area -->
				
							
                            <ul>
               <?php
			   $num="";
				$query=mysqli_query($conn,"SELECT * FROM rent_home where category='Apartement'");
				$num=mysqli_num_rows($query);
               ?>
                                <li>
                                    <a href="apartment.php">Appartement</a>
                                    <span class="count"><?php echo $num; ?></span>
                                </li>
								 <?php
			   $num="";
				$query=mysqli_query($conn,"SELECT * FROM rent_home where category='Condominium'");
				$num=mysqli_num_rows($query);
               ?>
                                <li>
                                    <a href="condominium.php">Condominium</a>
                                    <span class="count"><?php echo $num; ?></span>
                                </li>
								 <?php
			   $num="";
				$query=mysqli_query($conn,"SELECT * FROM rent_home where category='Real Estate'");
				$num=mysqli_num_rows($query);
               ?>
                                <li>
                                    <a href="realEstate.php">Real Estate</a>
                                    <span class="count"><?php echo $num; ?></span>
                                </li>
								 <?php
			   $num="";
				$query=mysqli_query($conn,"SELECT * FROM rent_home where category='Normal House'");
				$num=mysqli_num_rows($query);
               ?>
                                <li>
                                    <a href="normalHouse.php">Normal House</a>
                                    <span class="count"><?php echo $num; ?></span>
                                </li>
								 <?php
			   $num="";
				$query=mysqli_query($conn,"SELECT * FROM rent_home where category='One room house'");
				$num=mysqli_num_rows($query);
               ?>
                                <li>
                                    <a href="oneRoom.php">One room house</a>
                                    <span class="count"><?php echo $num; ?></span>
                                </li>
								 <?php
			   $num="";
				$query=mysqli_query($conn,"SELECT * FROM rent_home where category='Business House'");
				$num=mysqli_num_rows($query);
               ?>
								<li>
                                    <a href="businessHouse.php">Business house</a>
                                    <span class="count"><?php echo $num; ?></span>
                                </li>
                            </ul>
							
						
                        </div> <!-- /.widget_categories -->

                        

                        <!-- /.widget_tagcloud -->
                    </div><!-- /.blog-content-right -->
               </div><!-- /.col-md-4 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
    </div><!-- /.blog-area -->

    <?php include('footer.php'); ?>
    <!-- All The JS Files
    ================================================== --> 
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script> <!-- main-js -->
</body>

<!-- Mirrored from htmlguru.net/house-rent/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:44:49 GMT -->
</html>