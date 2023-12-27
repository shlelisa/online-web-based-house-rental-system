<?php  
	include('header.php'); 
	include_once"connection.php";


	
	$message="";
	$mess="";
	if(isset($_POST['booking'])){
		if($_SESSION['alogin']==""){
			echo'<script type="text/javascript">window.location="login.php?page=oneroom-single"; </script>';
	}else{
			$startDate=mysqli_real_escape_string($conn,$_POST['startDate']);
			$endDate=mysqli_real_escape_string($conn,$_POST['endDate']);
			$address=mysqli_real_escape_string($conn,$_POST['address']);
			
			$fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
			$phonenumber=mysqli_real_escape_string($conn,$_POST['phonenumber']);
			$email=mysqli_real_escape_string($conn,$_POST['email']);
			$familymember=mysqli_real_escape_string($conn,$_POST['familymember']);
			$children=mysqli_real_escape_string($conn,$_POST['children']);
			$yourmessage=mysqli_real_escape_string($conn,$_POST['yourmessage']);
			
			$identityCard=$_FILES['identityCard']['name'];
			move_uploaded_file($_FILES["identityCard"]["tmp_name"],"RentHomePhoto/".$_FILES["identityCard"]["name"]);
			$selectQuery=mysqli_query($conn,"SELECT * FROM rent_home WHERE id='".$_GET['id']."'");
			$row=mysqli_fetch_array($selectQuery);
			$category=$row['category'];
			$house_id=$row['id'];
			$price=$row['rent'];
			$rentingMethod=$row['rentingMethod'];
		
			$id=$_SESSION['alogin'];
			$selectq=mysqli_query($conn,"SELECT * FROM new_user WHERE id='$id'");
			while($data=mysqli_fetch_array($selectq)){
			$photo=$data['photo'];
			$username=$data['username'];
			if(empty($photo)){
				$photo="noimage.png";
			}
			}
			$query="INSERT INTO booked_home(id,fullname,phone,email,family_member,children,address,category,price,house_id,payment,start_date,end_date,message,photo,identityCard,status,username,rentingMethod,see)
			VALUES('$house_id','$fullname','$phonenumber','$email','$familymember','$children','$address','$category','$price','$house_id','0','$startDate','$endDate','$yourmessage','$photo','$identityCard','booked','$username','$rentingMethod','no')";
			$runquery=mysqli_query($conn,$query);
			if($runquery){
				$mess="please pay the payment go to your info!";
				echo'<script type="text/javascript">window.location="profile.php?payMessage=make your payment"; </script>';
				
			}else{
				$message=" ".mysqli_error();
			}
	    }		
	 }
	
	?>

<!doctype html>
<html class="no-js" lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />


<body>
    
    <!-- ====== Header Overlay Content ====== -->
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
                                                            <label><input type="checkbox">Find Your One Room House</label>
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


    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">House</h2>
                    <p class="page-description">More Details About One room house</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

   

	<!-- ====== Apartments-Single-Area ======= --> 
	<div class="apartment-single-area">
	  	<div class="container">
		  	<div class="row">
			    <div class="col-md-8">
<?php $query=mysqli_query($conn,"select * from rent_home where id = '".$_GET['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
				
    				<div class="corousel-gallery-content">
    					  <div class="gallery">
    					       <div class="full-view owl-carousel">
    					     	  <a class="item image-pop-up" href="RentHomePhoto/<?php echo htmlentities($row['home_image']);?>">
<?php if($row['home_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['home_image']);?>" style="width:800px; height:600px">
   <?php } ?>
    					     	  </a>
    					     	  <a class="item image-pop-up" href="RentHomePhoto/<?php echo htmlentities($row['bed_image']);?>">
    					     		  <?php if($row['bed_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['bed_image']);?>" style="width:800px; height:600px">
   <?php } ?>
    					     	  </a>
    					     	  <a class="item image-pop-up" href="RentHomePhoto/<?php echo htmlentities($row['bath_image']);?>">
    					     		 <?php if($row['bath_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['bath_image']);?>" style="width:800px; height:600px">
   <?php } ?>
    					     	  </a>
    					     	  <a class="item image-pop-up" href="RentHomePhoto/<?php echo htmlentities($row['kitchen_image']);?>">
    					     		 <?php if($row['kitchen_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['kitchen_image']);?>" style="width:800px; height:600px">
   <?php } ?>
    					     	  </a>
    					     	  <a class="item image-pop-up" href="RentHomePhoto/<?php echo htmlentities($row['toilet_image']);?>">
    					     				     		 <?php if($row['toilet_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['toilet_image']);?>" style="width:800px; height:600px">
   <?php } ?> 
    					     	  </a>
                                
    					       </div>

    					      <div class="list-view owl-carousel">
    					          <div class="item">
                                 <?php if($row['home_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['home_image']);?>" style="width:400px; height:100px;">
   <?php } ?>
    					          </div>
    					          <div class="item">
    					        	                                  <?php if($row['bed_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['bed_image']);?>" style="width:400px; height:100px;">
   <?php } ?>
    					          </div>
    					          <div class="item">
    					        	                                   <?php if($row['bath_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['bath_image']);?>" style="width:400px; height:100px;">
   <?php } ?>
    					          </div>
    					          <div class="item">
    					        	                                   <?php if($row['kitchen_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['kitchen_image']);?>" style="width:400px; height:100px;">
   <?php } ?>
    					          </div>
    					          <div class="item">
    					        	                                  <?php if($row['toilet_image']==""){ ?>
   <img  src="RentHomePhoto/noimage.png"><?php } else {?>
   <img  src="RentHomePhoto/<?php echo htmlentities($row['toilet_image']);?>" style="width:400px; height:100px;">
   <?php } ?>
    					          </div>
    					         
    					      </div>  
    					  </div> <!-- /.gallery-two -->
    				</div> <!-- /.corousel-gallery-content -->

<?php } ?>

<?php $query=mysqli_query($conn,"select * from rent_home where id = '".$_GET['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
    				<div class="family-apartment-content mobile-extend">
                        <div class="tb">
                            <div class="tb-cell">
        					   <h3 class="apartment-title"><?php echo $row['category']; ?> </h3>
                            </div><!-- /.tb-cell -->
                            <div class="tb-cell">
        					   <p class="pull-right rent"><?php echo $row['rent']; ?>/<?php echo $row['rentingMethod'];?> </p>
                            </div><!-- /.tb-cell -->
                        </div><!-- /.tb -->
    					
    					<p ><?php echo $row['about_home']; ?></p>
    					<div class="price-details">
    						<h3>Price Details-</h3>
    						<ul>
    							<li><span>Rent/<?php echo $row['rentingMethod'];?> : </span> <?php echo $row['rent']; ?></li>
    							<li><span>Security Deposit :</span> <?php echo $row['start_date']; ?> to <?php echo $row['end_date']; ?></li>
    							<li><span>Flat Release Policy :</span> 3 months earlier notice required</li>
    						</ul>
    					</div><!-- /.price -->

    					<div class="property-details">
    						<h3>Property Details-</h3>
    						<ul>
    							<li><span>Address :</span> <?php echo $row['home_location']; ?></li>
    							<li><span>Area :</span> <?php echo $row['size']; ?></li>
								<li><span>Additional Facilities :</span> <?php echo $row['additional_facility']; ?> </li>
    						</ul>
    					</div><!-- /.Property -->
    					
    					
    				</div><!-- /.family-apartment-content -->
					
<?php } ?>
                    <div class="hidden-md hidden-lg text-center extend-btn">
                        <span class="extend-icon">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </div>
			    </div> <!-- /.col-md-8 -->






    			<div class="col-md-4">
                    <div class="apartment-sidebar">                    
        				<div class="widget_rental_search clerafix">					
        					<div class="form-border gradient-border">
        						<form method="post" enctype="multipart/form-data" class="advance_search_query booking-form">
        							<div class="form-bg seven">
        								<div class="form-content">
                                            <h2 class="form-title">Book This One room House</h2>
        									<div class="form-group">
        									   <label>Full Name</label>
        									   <input type="text" name="fullname" minlength="5" maxlength="50" required placeholder="Full name" autocomplete="off"><br>
						
        									</div><!-- /.form-group -->
        									<div class="form-group">
                            					<label>Phone Number</label>
                                                <input type="tel" name="phonenumber" pattern="[+2519][0-9]{12}" required placeholder="+2519" autocomplete="off"><br>
											  
        									</div><!-- /.form-group -->
        									<div class="form-group">
        										<label>Email Address</label>
        										<input type="email" name="email" required placeholder="houserent@gmail.com" autocomplete="off"><br>
											  
        									</div><!-- /.form-group -->
        									<div class="form-group">
        									    <label>Family Member</label>
                                                <input type="number" required name="familymember" autocomplete="off" class="input-text"><br>

        									</div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label>Children</label>
                                                <input type="number" step="0" min="0" max="100"required  name="children" autocomplete="off" class="input-text"><br>
											  
                                            </div><!-- /.form-group -->
											  <div class="form-group">
                                                <label>Your Address</label>
                                                <input type="text"  minlength="3" maxlength="50" name="address"required autocomplete="off" class="input-text"><br>
											  
                                            </div><!-- /.form-group -->
											  <div class="form-group">
                                                <label>Start Date</label>
                                                <input type="date" name="startDate" required autocomplete="off" class="input-text"><br>
											  
                                            </div><!-- /.form-group -->
											 <div class="form-group">
                                                <label>End Date</label>
                                                <input type="date" name="endDate" required autocomplete="off" class="input-text"><br>
											  
                                            </div><!-- /.form-group -->
											 <div class="form-group">
                                                <label>Identity Card</label>
                                                <input type="file" accept="image/*" name="identityCard" required class="input-text"><br>
											  
                                            </div><!-- /.form-group -->
        									<div class="form-group">
        									    <label>Your Message</label>
        		                                <textarea name="yourmessage" minlength="10" maxlength="2000"  placeholder="Please Write Some Message"autocomplete="off" class="form-controller"></textarea><br>
											   
        									</div><!-- /.form-group -->
        									<div class="form-group">
        										<input type="submit" name="booking" class="button default-template-gradient button-radius" value="Request Booking">
        									</div><!-- /.form-group -->
											<span style="color:green"><?php echo $mess; ?></span>
											<span style="color:red"><?php echo $message; ?></span>
        								</div><!-- /.form-content -->
        							</div><!-- /.form-bg -->
        						</form> <!-- /.advance_search_query -->
        					</div><!-- /.form-border -->
        				</div><!-- /.widget_rental_search -->
                    </div><!-- /.apartment-sidebar -->
    			</div> <!-- .col-md-4 -->
		  	</div> <!-- /.row -->
	  	</div> <!-- /.container -->
  	</div> <!-- /.appartment-single-area -->
	

   <?php include('footer.php'); ?>
	<!-- All The JS Files
	================================================== --> 
	<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script> <!-- main-js -->
</body>

</html>

