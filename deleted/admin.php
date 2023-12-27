<?php  
include('config.php');
session_start();
?>

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>House03</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/images/house-logo.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">   
    
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="style.css">
	
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
  	
    <!-- Modernizr
    ================================================== -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>



    <!-- ====== Header Top Area ====== -->
    <header class="header-area nevy-blue-bg hidden-xs hidden-sm">
        <div class="container">
            <div class="header-top-content">
                <div class="row">
                    <div class="col-md-7 col-sm-7 mobile-center">
                        <div class="site-logo">
                            <a href="index.php">
                                <img src="assets/images/logo.png" alt="site-logo" />
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.col-md-8 -->
                    <div class="col-md-5 col-sm-5 mobile-center">
                <div style="margin-right:100px" class="left-content">
						<div class="menu-content">
                                <ul class="menu-list">
                                    <li>
                                        <a style="color:white" href="#"> <?php isset($_GET['username']); ?></a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="editProfile.php">Edit Profile</a>
                                            </li>  <br>                                          
                                            <li>
                                                <a href="logout.php">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                  
                                </ul> <!-- /.menu-list -->
                            </div>
			      			     
                </div>
						
						
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.header-top-content -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ====== Header Bottom Content ====== -->
    <header class="header-bottom-content nevy-blue-bg hidden-xs hidden-sm">
        <div class="container">        
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <nav id="main-nav" class="site-navigation top-navigation">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>

                                    <li>
                                        <a href="#">Admin Jobs</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="userAccount.php">See User Account</a>
                                            </li>                                            
                                            <li>
                                                <a href="homeGoingToRent.php">Home Going To Rent</a>
                                            </li>
											 <li>
                                                <a href="rentedHome.php">Rented Home</a>
                                            </li>
											 <li>
                                                <a href="bookedHome.php">Booked house</a>
                                            </li>
											 <li>
                                                <a href="news.php">News</a>
                                            </li>
										
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about.php">About</a>
                                    </li>
                                   
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper --> 
                    </nav><!-- /.site-navigation --> 
                </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.header-bottom-content --> 
	
	
	    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Close</button>
           
        </div> <!-- /.overlay-menu-item -->

	
	
    <!-- ====== Slider Area ====== --> 
    <div class="slider-area">
        <div class="pogoSlider">
            <div class="pogoSlider-slide overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/appartama.jpg);">
                <div class="container-slider one">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome apartment Villa</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">It is our mission to assist you in finding your ideal home, and we can do so quickly and efficiently!</p>
                                
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
            <div class="pogoSlider-slide  overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/Condominium.jpg);">
                <div class="container-slider one">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome Condominium</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">It is our mission to assist you in finding your ideal home, and we can do so quickly and efficiently!</p>
                                
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
			<div class="pogoSlider-slide overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/ReasEstat.jpg);">
                <div class="container-slider one">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome Real Estate</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">It is our mission to assist you in finding your ideal home, and we can do so quickly and efficiently!</p>
                                
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
			<div class="pogoSlider-slide  overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/OneRoom.jpg);">
                <div class="container-slider one">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome One room house</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">It is our mission to assist you in finding your ideal home, and we can do so quickly and efficiently!</p>
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
			<div class="pogoSlider-slide  overlay-gradient" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/Business.jpg);">
                <div class="container-slider one">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Awesome Business house</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">It is our mission to assist you in finding your ideal home, and we can do so quickly and efficiently!</p>
                                
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
        </div><!-- .pogoSlider -->
    </div><!-- /.slider-area -->

    <!-- ====== Call To Action ======= --> 
    <div class="call-to-action style-two default-template-gradient">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="left-content">
                       
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="right-content">
                        <div class="row">
                            
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.slider-bottom-area -->

    <!-- ====== About Us Area ====== --> 
    <div class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title">About Us</h2>
                        <h5 class="sub-title">Welcome to our House Rent Company</h5>
                    </div><!-- /.heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-2">
                    <div class="tab-list">
                        <ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">About Company</a>
                            </li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terms &amp; Condition</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                            </li>
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="about-mobile">
                                <option value='0'>About Company</option>
                                <option value='1'>Terms &amp; Condition</option>
                                <option value='2'>Our specialty</option>
                                <option value='3'>Our specialty</option>
                            </select>
                        </form>
                    </div> <!-- /.tab-list -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-10">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active row" id="home">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                    <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                         <li>Cras etitikis mauris egeth lorem ultricies</li>
                                         <li>Amorem ipsum dolor sit amet, consectetur </li>
                                         <li>Cras etitikis mauris egeth lorem ultricies</li>
                                         <li>Amorem ipsum dolor sit amet, consectetur </li>
                                         <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul>
                                </div><!-- /.text-content -->    
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="assets/images/about-image.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.home -->
                          
                        <div role="tabpanel" class="tab-pane fade row" id="profile">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                    <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul>
                                </div><!-- /.text-content -->    
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="assets/images/about-image.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.profile -->
                        
                        <div role="tabpanel" class="tab-pane fade row" id="messages">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                                    <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul>
                                </div><!-- /.text-content -->    
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                              <div class="image-content">
                                  <img src="assets/images/about-image.png" alt="about" />
                              </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                         </div> <!-- /.messages -->
                    </div> <!-- /.tab-content -->
                 </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.aboutus-area -->

    
    <!-- ====== Gallery Area ====== --> 
    <div class="gallery-area">
        <div class="container-fluid">
            <div class="container-large-device">
                <div class="row">
                    <div class="col-md-7">
                        <div class="gallery-left-content">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <a class="image-pop-up" href="assets/images/gallery/gallery-one.png">
                                        <img src="assets/images/gallery/gallery-one.png" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <a class="image-pop-up" href="assets/images/gallery/gallery-two.png">
                                        <img src="assets/images/gallery/gallery-two.png" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <a class="image-pop-up" href="assets/images/gallery/gallery-three.png">
                                        <img src="assets/images/gallery/gallery-three.png" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <a class="image-pop-up" href="assets/images/gallery/gallery-four.png">
                                        <img src="assets/images/gallery/gallery-four.png" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <a class="image-pop-up" href="assets/images/gallery/gallery-five.png">
                                        <img src="assets/images/gallery/gallery-five.png" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->s
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <a class="image-pop-up" href="#">
                                        <img src="assets/images/gallery/gallery-six.png" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="gallery-right-content">
                            <h2>Our<br/> Photo Gallery</h2>
                            <h3>Best of our <br/>Event portfolio Photos</h3>
                            <a href="gallery.php" class="button nevy-button">All Photos &amp; Video</a>
                        </div><!-- /.right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-large-device  -->
        </div><!-- /.container-fluid-->
    </div><!-- /.gallery-area -->
	
	
	
    <!-- ====== Blog Area ======= --> 
    <div class="blog-area bg-gray-color">
        <div class="container">
            <div class="col-md-12">
                <div class="heading-content-one">
                    <h2 class="title">Blog</h2>
                    <h5 class="sub-title">Our Newa Feed</h5>
                </div><!-- /.blog-heading-content -->
            </div><!-- /.col-md-12 -->
            <div class="row">
			
				<?php
				$sql=mysqli_query($con,"SELECT * FROM news ORDER BY id DESC Limit 3");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($sql); $i++){   
               ?>
			
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.php">
						
							
							
                                <?php if($row['photo']==""){ ?>
   <img   src="admin/studentphoto/noimage.png"><?php } else {?>
   <img   src="studentphoto/<?php echo htmlentities($row['photo']);?>">
   <?php } ?>
                            </a>
                        </figure><!-- /.post-thumb -->
                        <div class="post-content">  
                            <div class="entry-meta">
                                <span class="entry-date">
                                    <?php echo $row['date']; ?>
                                </span>
                                <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a>
                                </span>
                            </div><!-- /.entry-header -->
                            <div class="entry-header">
                                <h3><a href="blog-single.php?id=<?php echo $row['id'];?>"><?php echo htmlentities($row['news_title']);?></a></h3>
                            </div><!-- /.entry-header -->
                            <div class="entry-footer">
                                <div class="entry-footer-meta">
                                    <span class="view"><i class="fa fa-eye"></i>35</span>
                                    <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span>
                                </div><!-- /.entry-footer-meta -->
                            </div><!-- /.entry-footer -->
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
				
				
				
					<?php } ?>
				
				
			<!-- /.col-md-4 -->
            </div><!-- /.row -->
            <a href="blog.php" class="button">show all</a>
        </div><!-- /.container -->
    </div><!-- /.Blog-area-->




    <!-- ====== Contact Area ======= --> 
    <div class="contact-area pd-zero">
        <div class="container-fluid pd-zero">
            <div class="row">
                <div class="col-md-7">
                    <div class="map-left-content">
                        <iframe width="600" height="350" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1200.7317828357247!2d38.21982607405132!3d5.632119723309902!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17ba4dbbcedb1f83%3A0xc1ff8b7f26684ebb!2sBHU%20ICT!5e1!3m2!1sen!2set!4v1672057995808!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen="allowfullscreen"></iframe>
                    </div><!-- /.mapl-left-content -->
                </div><!-- /.col-md-7 -->
                <div class="col-md-5">
                    <div class="heading-content-two available">
                        <h2 class="title">We Are Available</h2>
                        <h5 class="sub-title">Our online support service is always 24 Hours</h5>
                    </div><!-- /.testimonial-heading-content -->
                    <div class="map-right-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-address-book"></i>Address</h4>
                                    <p>Bule Hora University, 4th Year Software Engineering Student</p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-envelope"></i>Mail</h4>
                                    <p>houserent@gmail.com</p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-phone-square"></i>Call</h4>
                                    <p><a href="tel:+251970463204">+251970463204 </a><br/><a href="tel:+25164509122">+251964509122</a></p>
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div><!-- /.Social-icon -->
                                </div><!-- /.contact -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.map-right-content -->
                </div><!-- /.col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.contact-area -->
    <!-- All The JS Files
    ================================================== --> 
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script> <!-- main-js -->
	
	
<script src="js/placeholders.min.js"></script> 
<script src="js/main.js"></script>