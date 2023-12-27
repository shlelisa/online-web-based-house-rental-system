<?php  
include("connection.php");
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

    <!-- Titles
    ================================================== -->
    <title>Ethio-House Rent Service</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/images/house-logo.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html"> 
    
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="style.css">
	
	
  	
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
                <div style="margin-right:20px" class="left-content">
				
				
				<?php
				include"connection.php";
				$sql=mysqli_query($conn,"SELECT * FROM new_user WHERE id='".$_SESSION['id']."'");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($sql); $i++){  			
               ?>

			      <ul class="cd-main-nav__list js-signin-modal-trigger">
				      <!-- inser more links here -->
					 
					 
					 
					 <?php  if($_SESSION['id']==""){ ?>
					     <li>
                          <a href="tel:+251964509122"><i class="fa fa-phone-square"></i>Call Us +251970463204</a>
                           </li>
				         <li><a  style="text-decoration:none" href="login.php">Sign in</a></li>
					 <?php  }else{ ?>
						
						<li style="margin-right:50px">
						<nav id="main-nav" class="site-navigation top-navigation">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
								
								
                                    <li>
                                        <a style="text-decoration:none;color:white" href="#">Logged Us <?php echo $row['username']; ?></a>
                                        <ul class="sub-menu">
                                                                                      
                                            <li>
                                                <a style="text-decoration:none;color:white" href="profile.php">Profile</a>
                                            </li><br>
											  <li>
                                                <a style="text-decoration:none;color:white"href="forgotPassword.php">Reset Password</a>
                                            </li><br>
											 <li>
                                                <a style="text-decoration:none;color:white" href="logout.php">Logout</a>
                                            </li>
										
                                        </ul>
                                    </li>
									  <li>
                                        
							 
    <?php if($row['photo']==""){ ?>
   <img   style="margin-top:0px;border-radius:100px;width:50px;height:50px"src="NewsPhoto/noimage.png"><?php } else {?>
   <img   style="margin-top:0px;border-radius:100px;width:50px;height:50px" src="NewsPhoto/<?php echo htmlentities($row['photo']);?>">
   <?php } ?>
							 
							 
                                    </li>

                               
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper --> 
                    </nav>
					</li>	
						
						

                          
					 <?php  } ?>
						 
				      
		      	  </ul>
				  
				  
				  			  
			  <?php } ?>
				  
                </div>
              </div><!-- /.left-content -->

			  
			  
			  
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.header-top-content -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ====== Header Bottom Content ====== -->

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
                                        <a href="adminHome.php">Home</a>
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
