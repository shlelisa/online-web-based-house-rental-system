<?php   
include"header.php";
include('connection.php');
if(strlen($_SESSION['alogin'])==0)
{
echo'<script type="text/javascript">window.location="login.php?page=info"; </script>';
}else{
	
 ?>
 <style type="text/css">
 body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

 </style>
 
  <?php 
 $message="";
 if(isset($_POST['update'])){
		  
		  $username=mysqli_real_escape_string($conn,$_POST['username']);
		  $email=mysqli_real_escape_string($conn,$_POST['email']);
		  $phone=mysqli_real_escape_string($conn,$_POST['phone']);
		  $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
		  $gender=$_POST['gender'];
		  $photo=$_FILES['photo']['tmp_name'];
	   
	   $select=mysqli_query($conn,"SELECT * from new_user WHERE email='$email'");
	   $row=mysqli_num_rows($select);
	   if($row>1){
		 $message="E-mail Already exist before";  
	   }else{
	      move_uploaded_file($_FILES["photo"]["tmp_name"],"RentHomePhoto/".$_FILES["photo"]["name"]);
		  $selectQuery=mysqli_query($conn,"UPDATE new_user SET username='$username',email='$email',phone='$phone',fullname='$fullname',password='$password',gender='$gender' ,photo='$photo' WHERE id='".$_SESSION['alogin']."'");
		   if($selectQuery){
			   $message="Your Data is Updated";
		   }else{
			   $message=" ".mysqli_error();
		   }
		}
 }
	  
	?>  

 
<div style="margin-top:20px" class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
	<?php  
	$select=mysqli_query($conn,"SELECT * from new_user WHERE id='".$_SESSION['alogin']."'");
	while($row=mysqli_fetch_array($select))
	{?>
	
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img style="width:50%;height:25%" src="NewsPhoto/<?php if($row['photo']==""){echo "noimage.png";}else{echo $row['photo']; }?>" alt="Admin">
				</div>
				<h5 class="user-name"><?php echo $row['username']; ?></h5>
				<h6 class="user-email"><?php echo $row['email']; ?></h6>
				<form method="post" enctype="multipart/form-data">
				<input type="file" name="photo"/>
				</form>
			</div>		
		</div>
		
	<?php 	}?>
	
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
	<form method="post" enctype="multipart/form-data">
	
		<?php  
	$select=mysqli_query($conn,"SELECT * from new_user WHERE id='".$_SESSION['alogin']."'");
	while($row=mysqli_fetch_array($select))
	{?>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" minlength="5" maxlength="40" autocomplete="off" name="fullname" required value="<?php echo $row['fullname']; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="off" class="form-control" required name="email" value="<?php echo $row['email']; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" pattern="[+2519][0-9]{12}" autocomplete="off" title="Please enter valid phone number" class="form-control" name="phone" required value="<?php echo $row['phone']; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Username</label>
					<input type="text" minlength="3" maxlength="40" autocomplete="off" required class="form-control" name="username" value="<?php echo $row['username']; ?>">
				</div>
			</div>
			
			
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
			<div class="form-group">
                <label >Gender <br>
                <input style="margin-left:100px" type="radio"  name="gender" value="male" required>male<br>
				<input style="margin-left:100px" type="radio"  name="gender" value="female" required>female
				</label>
             	</div>
			</div>
			
			
			
			
		</div>
		
	<?php  } ?>
		
		<div class="row gutters">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
				<div class="text-right">
					<button style="width:100px;border-radius:15px;font-size:20px;background-color:red" type="reset" id="submit" name="submit" class="btn btn-secondary">Clear</button>
					<button style="width:100px;border-radius:15px;font-size:20px" type="submit" id="update" name="update" class="btn btn-primary">Update</button>
				</div>
			</div>
			<span styhle="color:red"><?php echo $message; ?></span>
			<br>
		</div>
		</form>
	</div>
</div>
</div>
</div>
</div>



<?php
include_once"connection.php";
$id="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM booked_home WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  echo"deleted";
	}else{
		 echo"not deleted";
		}
}
?>

 <table border="10" style="background-color:white;margin-left:10px" align="center">
  <caption style="font-size:30px;font-weight:bold">
 <center> Details About your booked Home</center>
</caption>
  <tr style="font-size:18px;font-weight:bold">
    <td>Id</td>
	<td>category</td>
    <td>house_id</td>
	<td>payment</td>
	<td>start_date</td>
    <td>end_date</td>
	
	<th colspan="3" style="text-align:center">Actions</th>
  </tr>
  <?php
  include_once"connection.php";
  
	  $selectquery="SELECT * FROM booked_home WHERE id='".$_SESSION['alogin']."'";
	  $runselectquery=mysqli_query($conn,$selectquery);
	  $numberofrows=mysqli_num_rows($runselectquery);
		if($numberofrows>0){
	  while( $value=mysqli_fetch_assoc($runselectquery)){
		   $ema=$value['email'];
		    echo"
			 <tr>
			    <td>".$value['id']."</td>
				     <td>".$value['category']."</td>
				        <td>".$value['house_id']."</td>
				         <td><a style='color:red' href='#'>".$value['payment']."</a></td>
				           <td>".$value['start_date']."</td>
				             <td>".$value['end_date']."</td>
							 
		        	<td> <a style='color:blue' href='viewBookedDetail.php?house_id=".$value['house_id']."'>View</a></td>
		 			<td> <a style='color:blue' href='?id=".$value['id']."'>Delete</a></td>
			 </tr>";
		
	    }
		}
	?>

</table>



	
<?php   
include_once"connection.php";
$id="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM rent_home WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  echo"deleted";
	}else{
		 echo"not deleted";
		}
}
?>

<table border="1" style="background-color:white;width:700px;margin-right:10px;margin-left:10px" align="center">
  <caption style="font-size:30px;font-weight:bold">
 <center> Details About your rent Home</center>
</caption>
  <tr style="font-size:18px;font-weight:bold">
    <th>Id</th>
    <th>Category</th>
    <th>Rent/month</th>
	<th>How long</th>
    <th>Home Location</th>
	<th>Status</th>
	<th>Payment</th>
    <th colspan="3" style="text-align:center">Actions</th>
  </tr>
  <?php
  include_once"connection.php";
  
  $selectquery=mysqli_query($conn,"SELECT * FROM new_user WHERE id='".$_SESSION['alogin']."'");
  $data=mysqli_fetch_array($selectquery);
  $ema=$data['email'];
  
  $selectquery="SELECT * FROM rent_home WHERE email='$ema'";
  $runselectquery=mysqli_query($conn,$selectquery);

	  while($row=mysqli_fetch_assoc($runselectquery)){
		  ?>
			 <tr>
			    <td><?php echo htmlentities($row['id']);?></td>
                 <td><?php echo htmlentities($row['category']);?></td>
				      <td><?php echo htmlentities($row['rent']);?></td>
					    <td><?php echo htmlentities($row['how_long']);?></td>
					     <td><?php echo htmlentities($row['home_location']);?></td>
						 <td><?php echo htmlentities($row['status']);?></td>
						 <td><?php echo htmlentities($row['payment']);?></td>
<td>
						<a style="color: royalblue; class="dropdown-item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><i class="fa fa-edit"></i> Edit</a> 
						<a style="color: royalblue; class="dropdown-item" data-toggle="modal" type="button" data-target="#view_modal<?php echo $row['id']?>"><i class="fa fa-eye"></i> View</a>
						<a style="color: royalblue; class="dropdown-item" href="?id=<?php echo $row['id']?>"><i class="dw dw-delete"></i>Delete</a>
 </td>
 </tr>
	<div class="modal fade bs-example-modal-xl" id="view_modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-20">
					<div class="pd-30 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-60">Rental Home Information</p></h4></center>
						</div>
					<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Id</label>
									<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['id']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Category</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['category']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Rent/Month</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['rent']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>How Long</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['how_long']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bedroom</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['bedroom']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bathroom</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['bathroom']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Location</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['home_location']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Number</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['home_number']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Image</label><br>
									<img style="width:200px;height:130px" readonly src="../RentHomePhoto/<?php echo $row['home_image']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bedroom Image</label>
									<img style="width:200px;height:130px" readonly src="../RentHomePhoto/<?php echo $row['bed_image']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bathroom Image</label>
									<img style="width:200px;height:130px"readonly src="../RentHomePhoto/<?php echo $row['bath_image']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Toilet Image</label>
									<img style="width:200px;height:130px" readonly src="../RentHomePhoto/<?php echo $row['toilet_image']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Kitchen Image</label>
									<img style="width:200px;height:130px"readonly  src="../RentHomePhoto/<?php echo $row['kitchen_image']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>About Home</label>
									<textarea style="width:200px;height:130px" readonly  > <?php echo $row['about_home']?></textarea>
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Status</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['status']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['payment']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>E-mail</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['email']?>">
								</div>
								</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Start Date</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['start_date']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['end_date']?>">
								</div>
							</div>	
							
						</div>
						</form>
							
							
					</div>
							
				</div>
			</div>
		</div>
	</div>
		</div>
		
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				
								
						</div>
						</div>
						</div>
						</div>
								
	  <?php }?>
</table>
<?php 
include"footer.php";
} ?>