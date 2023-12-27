	<?php  
	include('header.php'); 
	include_once"connection.php";


	
	$message="";
	$mess="";
	if(isset($_POST['booking'])){
		if($_SESSION['alogin']==""){
			echo'<script type="text/javascript">window.location="login.php?page=apartment-single"; </script>';
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
			
			$selectQuery=mysqli_query($conn,"SELECT * FROM rent_home WHERE id='".$_GET['id']."'");
			$row=mysqli_fetch_array($selectQuery);
			$category=$row['category'];
			$house_id=$row['id'];
			$payment="0";
			$id=$_SESSION['alogin'];
			
			
			$query="INSERT INTO booked_home(id,fullname,phone,email,family_member,children,address,category,house_id,payment,start_date,end_date,message)
			VALUES('$id','$fullname','$phonenumber','$email','$familymember','$children','$address','$category','$house_id','$payment','$startDate','$endDate','$yourmessage')";
			$runquery=mysqli_query($conn,$query);
			if($runquery){
				$mess="please wait until admin aprove your request!";
				header("location:info.php");
				
			}else{
				$message=" ".mysqli_error();
			}
	    }		
	 }
	
	?>


    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">House</h2>
                    <p class="page-description">All One Room List</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->
	
	


                              					<?php
												include"connection.php";
				$sql=mysqli_query($conn,"SELECT * FROM rent_home WHERE status='active' AND category='One room house' AND payment ='0' ORDER BY id DESC Limit 10");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($sql); $i++){   
               ?>    
									<div style="background-color:white" class='col-md-4 col-sm-6 col-xs-6'>
				
                                        <div class='apartments-content'>
                                            <div class='image-content'>
                                               <a href='oneroom-single.php?id=<?php echo $row['id'];?>'>
  <?php if($row['home_image']==""){ ?>
  <img   src="RentHomePhoto/noimage.png"><?php } else {?>
   <img   style="width:700px;height:350px"src="RentHomePhoto/<?php echo htmlentities($row['home_image']);?>">
   <?php } ?>
											   
											   
											  </a>
                                            </div>
                                        
                                            <div class='text-content'>
                                                <div class='top-content'>
                                                    <h3>
                                                        <a href='oneroom-single.php'?id=<?php echo $row['id'];?> >One Room House</a>
													   
                                                    </h3>
                                                   <span>
                                                        <a href="<?php echo $row['home_location'] ?>"><i class='fa fa-map-marker'></i></a>
                                                   </span> 
                                                </div>
                                                <div class='bottom-content clearfix'>
                                                   <div class='meta-bed-room'>
                                                        <i class='fa fa-bed'></i><?php echo $row['bedroom'] ?> bedroom
                                                    </div>
                                                    <div class='meta-bath-room'>
                                                        <i class='fa fa-bath'></i><?php echo $row['bathroom'] ?>bathroom;
                                                    </div>
                                                    <span class='clearfix'></span>
                                                   <div class='rent-price pull-left'>
                                                       <?php echo $row['rent'] ?>/month
                                                    </div>
                                               
                                                 </div>
                                             </div>
                                         </div>	
                                     </div>
									 <?php } ?>


<?php  include('footer.php');?>