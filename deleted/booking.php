<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmlguru.net/house-rent/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:44:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<?php include('header.php'); ?>

<body>
    <!-- ====== Header Overlay Content ====== -->
    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Close</button>
            <nav>
                <ul class="overlay-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Clients</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Work</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
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
                    <h2 class="page-title">Choose Your Best Choice</h2>
                    <p class="page-description">Take A House For Booking</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area======= --> 
    <div class="breadcrumbs-area bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index03.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">House List For Booking</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== Apartments-area ====== --> 
    <div class="apartments-area four bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="apartment-tab-area">
                        <ul role="tablist" class="nav nav-tabs apartment-menu hidden-xs hidden-sm">
                            <li class="active">
                                <a href="#popular-apartment" role="tab" data-toggle="tab">Popular</a>
                            </li>
                            <li>
                                <a href="#newest-to-oldest" role="tab" data-toggle="tab">Date<span>Newest to oldest</span></a>
                            </li>
                            <li>
                                <a href="#oldest-to-newest" role="tab" data-toggle="tab">Date <span>Older to newest</span> </a>
                            </li>
                            <li>
                                <a href="#price-height-to-low" role="tab" data-toggle="tab">Price<span>Low to high</span></a>
                            </li>
                            <li>
                                <a href="#price-low-to-heigh" role="tab" data-toggle="tab">Price<span>high to low</span></a>
                            </li>
                            <li class="pull-right">
                                <a href="#" role="tab" class="dropdown-toggle" data-toggle="dropdown">Category<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                     <li><a href="#">Family</a></li>
                                     <li><a href="#">Apartment</a></li>
                                     <li><a href="#">Sublet</a></li>
                                     <li><a href="#">Bachelor Mess</a></li>
                                     <li><a href="#">Office</a></li>         
                                </ul>
                            </li><!-- /.pull-right -->
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="apartment-menu-mobile">
                                <option value='0'>Popular</option>
                                <option value='1'>Date Newest to oldest</option>
                                <option value='2'>Date Older to newest</option>
                                <option value='3'>Price Low to high </option>
                                <option value='4'>Price high to low</option>
                                <optgroup label="Category">
                                    <option value='http://google.com'>Family</option>
                                    <option value='6'> Apartment </option>
                                    <option value='7'> Contact </option>
                                    <option value='8'> Sublet </option>
                                    <option value='9'> Bachelor Mess </option>
                                    <option value='10'> Office </option>
                                </optgroup>
                            </select>
                        </form>
                        <div class="tab-content">
                            <div role="tabpanel" id="popular-apartment" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                               <a href="apartment-single.php"><img src="assets/images/apartment/apartment-one.png" alt="apartment" /></a>
                                            </div><!-- /.image-content -->
                                       
                                            <div class="text-content">
                                                <div class="top-content">
                                                   <h3><a href="apartment-single.php">Family Apartment</a></h3>
                                                   <span>
                                                       <i class="fa fa-map-marker"></i>
                                                       Dhanmondi, Dhaka
                                                   </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                    <div class="meta-bed-room">
                                                       <i class="fa fa-bed"></i> 3 Bedrooms
                                                    </div>
                                                    <div class="meta-bath-room">                                
                                                       <i class="fa fa-bath"></i>2 Bathroom
                                                    </div>
                                                    <span class="clearfix"></span>
                                                    <div class="rent-price pull-left">
                                                       $200
                                                    </div>
                                                    <div class="share-meta dropup pull-right">
                                                        <ul>
                                                            <li class="dropup">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                               <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.php"><img src="assets/images/apartment/apartment-two.png" alt="apartment" /></a>
                                            </div><!-- /.image-content -->
                                        
                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3><a href="apartment-single.php">Family Apartment</a></h3>
                                                    <span>
                                                        <i class="fa fa-map-marker"></i>
                                                        Dhanmondi, Dhaka
                                                    </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                   <div class="meta-bed-room">
                                                       <i class="fa fa-bed"></i> 3 Bedrooms
                                                   </div>
                                                   <div class="meta-bath-room">                                
                                                       <i class="fa fa-bath"></i>2 Bathroom
                                                   </div>
                                                   <span class="clearfix"></span>
                                                   <div class="rent-price pull-left">
                                                       $200
                                                   </div>
                                                   <div class="share-meta dropup pull-right">
                                                       <ul>
                                                           <li class="dropup">
                                                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                               <ul class="dropdown-menu">
                                                                   <li>
                                                                       <a href="#"><i class="fa fa-facebook"></i></a>
                                                                   </li>
                                                                   <li>
                                                                       <a href="#"><i class="fa fa-twitter"></i></a>
                                                                   </li>
                                                                   <li>
                                                                       <a href="#"><i class="fa fa-instagram"></i></a>
                                                                   </li>
                                                                   <li>
                                                                       <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                   </li>
                                                               </ul>
                                                           </li>
                                                           <li>
                                                               <a href="#"><i class="fa fa-star-o"></i></a>
                                                           </li>
                                                       </ul>
                                                   </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->

                                    <div class="clearfix hidden-md hidden-lg"></div>

                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.php"><img src="assets/images/apartment/apartment-three.png" alt="apartment" /></a>
                                            </div><!-- /.image-content -->
                                        
                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3><a href="apartment-single.php">Family Apartment</a></h3>
                                                    <span>
                                                        <i class="fa fa-map-marker"></i>
                                                        Dhanmondi, Dhaka
                                                    </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                    <div class="meta-bed-room">
                                                        <i class="fa fa-bed"></i> 3 Bedrooms
                                                    </div>
                                                    <div class="meta-bath-room">                                
                                                        <i class="fa fa-bath"></i>2 Bathroom
                                                    </div>
                                                    <span class="clearfix"></span>
                                                    <div class="rent-price pull-left">
                                                        $200
                                                    </div>
                                                    <div class="share-meta dropup pull-right">
                                                        <ul>
                                                            <li class="dropup">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->

                                    <div class="clearfix hidden-xs hidden-sm"></div>

                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.php"><img src="assets/images/apartment/apartment-four.png" alt="apartment" /></a>
                                            </div><!-- /.image-content -->
                                        
                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3><a href="apartment-single.php">Family Apartment</a></h3>
                                                    <span>
                                                        <i class="fa fa-map-marker"></i>
                                                        Dhanmondi, Dhaka
                                                    </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                    <div class="meta-bed-room">
                                                        <i class="fa fa-bed"></i> 3 Bedrooms
                                                    </div>
                                                    <div class="meta-bath-room">                                
                                                        <i class="fa fa-bath"></i>2 Bathroom
                                                    </div>
                                                    <span class="clearfix"></span>
                                                    <div class="rent-price pull-left">
                                                        $200
                                                    </div>
                                                    <div class="share-meta dropup pull-right">
                                                        <ul>
                                                            <li class="dropup">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->

                                    <div class="clearfix hidden-md hidden-lg"></div>

                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.php"><img src="assets/images/apartment/apartment-five.png" alt="apartment" /></a>
                                            </div><!-- /.image-content -->
                                        
                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3><a href="apartment-single.php">Family Apartment</a></h3>
                                                    <span>
                                                        <i class="fa fa-map-marker"></i>
                                                        Dhanmondi, Dhaka
                                                    </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                    <div class="meta-bed-room">
                                                        <i class="fa fa-bed"></i> 3 Bedrooms
                                                    </div>
                                                    <div class="meta-bath-room">                                
                                                        <i class="fa fa-bath"></i>2 Bathroom
                                                    </div>
                                                    <span class="clearfix"></span>
                                                    <div class="rent-price pull-left">
                                                        $200
                                                    </div>
                                                    <div class="share-meta dropup pull-right">
                                                        <ul>
                                                            <li class="dropup">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->
                                    
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.php"><img src="assets/images/apartment/apartment-six.png" alt="apartment" /></a>
                                            </div><!-- /.image-content -->
                                        
                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3><a href="apartment-single.php">Family Apartment</a></h3>
                                                    <span>
                                                        <i class="fa fa-map-marker"></i>
                                                        Dhanmondi, Dhaka
                                                    </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                    <div class="meta-bed-room">
                                                        <i class="fa fa-bed"></i> 3 Bedrooms
                                                    </div>
                                                    <div class="meta-bath-room">                                
                                                        <i class="fa fa-bath"></i>2 Bathroom
                                                    </div>
                                                    <span class="clearfix"></span>
                                                    <div class="rent-price pull-left">
                                                        $200
                                                    </div>
                                                    <div class="share-meta dropup pull-right">
                                                        <ul>
                                                            <li class="dropup">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->

                                    <div class="clearfix hidden-md hidden-lg"></div>
                                    
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.php">
                                                    <img src="assets/images/apartment/apartment-one.png" alt="apartment" />
                                                </a>
                                            </div><!-- /.image-content -->
                                        
                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3>
                                                        <a href="apartment-single.php">Family Apartment</a>
                                                    </h3>
                                                   <span>
                                                       <i class="fa fa-map-marker"></i>
                                                       Dhanmondi, Dhaka
                                                   </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                    <div class="meta-bed-room">
                                                        <i class="fa fa-bed"></i> 3 Bedrooms
                                                    </div>
                                                    <div class="meta-bath-room"> 
                                                        <i class="fa fa-bath"></i>2 Bathroom
                                                    </div>
                                                    <span class="clearfix"></span>
                                                    <div class="rent-price pull-left">
                                                        $200
                                                    </div>
                                                    <div class="share-meta dropup pull-right">
                                                        <ul>
                                                            <li class="dropup">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.php">
                                                    <img src="assets/images/apartment/apartment-two.png" alt="apartment" />
                                                </a>
                                            </div><!-- /.image-content -->
                                        
                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3>
                                                        <a href="apartment-single.php">Family Apartment</a>
                                                    </h3>
                                                   <span>
                                                       <i class="fa fa-map-marker"></i>
                                                       Dhanmondi, Dhaka
                                                   </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                    <div class="meta-bed-room">
                                                        <i class="fa fa-bed"></i> 3 Bedrooms
                                                    </div>
                                                    <div class="meta-bath-room"> 
                                                        <i class="fa fa-bath"></i>2 Bathroom
                                                    </div>
                                                    <span class="clearfix"></span>
                                                    <div class="rent-price pull-left">
                                                        $200
                                                    </div>
                                                    <div class="share-meta dropup pull-right">
                                                        <ul>
                                                            <li class="dropup">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 --> 

                                    <div class="clearfix hidden-md hidden-lg"></div>

                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="apartments-content">
                                            <div class="image-content">
                                                <a href="apartment-single.php">
                                                    <img src="assets/images/apartment/apartment-three.png" alt="apartment" />
                                                </a>
                                            </div><!-- /.image-content -->
                                        
                                            <div class="text-content">
                                                <div class="top-content">
                                                    <h3>
                                                        <a href="apartment-single.php">Family Apartment</a>
                                                    </h3>
                                                   <span>
                                                       <i class="fa fa-map-marker"></i>
                                                       Dhanmondi, Dhaka
                                                   </span> 
                                                </div><!-- /.top-content -->
                                                <div class="bottom-content clearfix">
                                                    <div class="meta-bed-room">
                                                        <i class="fa fa-bed"></i> 3 Bedrooms
                                                    </div>
                                                    <div class="meta-bath-room">
                                                        <i class="fa fa-bath"></i>2 Bathroom
                                                    </div>
                                                    <span class="clearfix"></span>
                                                    <div class="rent-price pull-left">
                                                        $200
                                                    </div>
                                                    <div class="share-meta dropup pull-right">
                                                        <ul>
                                                            <li class="dropup">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- /.bottom-content -->
                                            </div><!-- /.text-content -->
                                        </div><!-- /.partments-content -->
                                    </div><!-- /.col-md-4 -->
                                </div><!-- /.row -->
                                <a href="#" class="more-link default-template-gradient">Load More</a>
                            </div><!-- /.popular-apartment -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.apartment-tab-area -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.Apartments-area-->
   
<?php include('footer.php');  ?>
    <!-- All The JS Files
    ================================================== --> 
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script> <!-- main-js -->
</body>

<!-- Mirrored from htmlguru.net/house-rent/booking.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Dec 2022 12:44:41 GMT -->
</html>