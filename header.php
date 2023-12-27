
<?php 
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
    <title>Bule Hora City Online House Rental System</title>

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
	
	
  	
    <!-- Modernizr
    ================================================== -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
    <!-- ====== Header Top Area ====== -->
    <header style="background-color:#6E6E6E" class="header-area nevy-blue-bg hidden-xs hidden-sm">
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
			      <ul class="cd-main-nav__list js-signin-modal-trigger">
				      <!-- inser more links here -->

				<?php  
				include("connection.php");
				if(strlen(isset($_SESSION['alogin']))==0){
                     $select=mysqli_query($conn,"SELECT phone FROM new_user WHERE role='admin' LIMIT 1");
					 $data=mysqli_fetch_array($select);
					 $phone=$data['phone'];
					?>
				   <li>
                          <a href="tel:+251970463204"><i class="fa fa-phone-square"></i>Call Us <?php echo $phone;?></a>
                           </li>
				         <li><a  style="text-decoration:none" href="login.php">Sign in</a></li>
				<?php  } else{ ?>
				<?php
				include"connection.php";
				$sql=mysqli_query($conn,"SELECT * FROM new_user WHERE id='".$_SESSION['alogin']."'");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($sql); $i++){  
			
               ?>

						<li style="margin-right:50px">
						<nav id="main-nav" class="site-navigation top-navigation">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
								
								
                                    <li>
                                        <a style="text-decoration:none;color:white" href="#"><?php echo $row['fullname']."  "; ?>
										   <?php if($row['photo']==""){ ?>
   <img   style="margin-top:0px;border-radius:50%;width:50px;height:50px"src="NewsPhoto/noimage.png"><?php } else {?>
   <img   style="margin-top:0px;border-radius:50%;width:50px;height:50px" src="NewsPhoto/<?php echo htmlentities($row['photo']);?>">
   <?php } ?>
										</a>
                                        <ul class="sub-menu">
                                                                                      
                                            <li>
                                                <a style="text-decoration:none;color:white" href="profile.php">Profile</a>
                                            </li><br>
											  <li>
                                                <a style="text-decoration:none;color:white"href="reset-password.php">Change Password</a>
                                            </li><br>
											 <li>
                                                <a style="text-decoration:none;color:white" href="logout.php">Logout</a>
                                            </li>
										
                                        </ul>
                                    </li>
					

                               
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper --> 
                    </nav>
					</li>	
						
						

                          
				<?php  }} ?>
						 
				      
		      	  </ul>
				  
				  
		
				  
                </div>
              </div><!-- /.left-content -->

			  
			  
			  
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.header-top-content -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ====== Header Bottom Content ====== -->
    <header style="background-color:#6E6E6E" class="header-bottom-content nevy-blue-bg hidden-xs hidden-sm">
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
                                        <a href="#">Available House</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="apartment.php">Apartment</a>
                                            </li>                                            
                                            <li>
                                                <a href="condominium.php">Condominium</a>
                                            </li>
											 <li>
                                                <a href="realEstate.php">Real state</a>
                                            </li>
											 <li>
                                                <a href="oneRoom.php">One room house</a>
                                            </li>
											 <li>
                                                <a href="normalHouse.php">Normal house</a>
                                            </li>
											 <li>
                                                <a href="businessHouse.php">Business house</a>
                                            </li>
                                        </ul>
                                    </li>
									
                                   <li>
                                        <a href="rentHome.php">For Rent</a>
                                    </li>
									<li>
                                        <a href="blog.php">Blog</a>
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

<script src="js/placeholders.min.js"></script> 
<script src="js/main.js"></script>