<?php include("header.php");
include("connection.php");
 ?>
<?php

$message="";
$mess="";
	if(isset($_POST['save'])){
	$id=$_POST['id'];
	$category=mysqli_real_escape_string($conn,$_POST['category']);
	$rent=mysqli_real_escape_string($conn,$_POST['rent']);
	$hlong=mysqli_real_escape_string($conn,$_POST['hlong']);
	$bedroom=mysqli_real_escape_string($conn,$_POST['bedroom']);
	$bathroom=mysqli_real_escape_string($conn,$_POST['bathroom']);
	$hlocation=mysqli_real_escape_string($conn,$_POST['hlocation']);
	$hnumber=mysqli_real_escape_string($conn,$_POST['hnumber']);
	$about_home=mysqli_real_escape_string($conn,$_POST['about_home']);
	$start_date=mysqli_real_escape_string($conn,$_POST['start_date']);
	$end_date=mysqli_real_escape_string($conn,$_POST['end_date']);
	
	
	$update=mysqli_query($conn,"UPDATE rent_home SET category='$category',rent='$rent',how_long='$hlong',bedroom='$bedroom',bathroom='$bathroom',home_location='$hlocation',home_number='$hnumber',about_home='$about_home',start_date='$start_date',end_date='$end_date' WHERE id='$id'");
	if($update){
		$message="Updated!!!!";
		header("location:profile.php");
	}else{
	$mess="Not Updated :".mysqli_connect_error($update);	
	}
	
	
}


?>
<?php
				$sql=mysqli_query($conn,"SELECT * FROM rent_home WHERE id='".$_GET['id']."'");
				for($i=0; $row=mysqli_fetch_array($sql); $i++){   
               ?> 			   
	<form  style="margin-left:300px;margin-top:20px" name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
						
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Id</label>
								
									<input type="text" name="id" class="form-control" readonly value="<?php echo $row['id']?>">
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Category</label>
									<input type="text" name="sel" class="form-control"required value="<?php echo $row['category']?>">
								
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Rent/Month</label>
									<input type="text" name="rent" class="form-control"required value="<?php echo $row['rent']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>How Long</label>
									<input type="text" name="hlong" class="form-control" required value="<?php echo $row['how_long']?>">
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Bedroom</label>
									<input type="number" name="bedroom" class="form-control" required value="<?php echo $row['bedroom']?>">
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Bathroom</label>
									<input type="number" name="bathroom" class="form-control" required value="<?php echo $row['bathroom']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Home Location</label>
									<input type="text" name="hlocation" class="form-control" required value="<?php echo $row['home_location']?>">
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Home Number</label>
									<input type="text" name="hnumber" class="form-control" required value="<?php echo $row['home_number']?>">
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Home Image</label><br>
									<img style="width:200px;height:130px" required src="RentHomePhoto/<?php if($row['home_image']==""){echo"noimage.png";}else{echo $row['home_image'];}?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Bedroom Image</label>
									<img style="width:200px;height:130px" required src="RentHomePhoto/<?php if($row['home_image']==""){echo"noimage.png";}else{echo $row['bed_image'];}?>">
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Bathroom Image</label>
									<img style="width:200px;height:130px"required src="RentHomePhoto/<?php if($row['home_image']==""){echo"noimage.png";}else{echo $row['bath_image'];}?>">
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Toilet Image</label>
									<img style="width:200px;height:130px" required src="RentHomePhoto/<?php if($row['home_image']==""){echo"noimage.png";}else{echo $row['toilet_image'];}?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Kitchen Image</label>
									<img style="width:200px;height:130px"required  src="RentHomePhoto/<?php if($row['home_image']==""){echo"noimage.png";}else{echo $row['kitchen_image'];}?>">
								   
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>About Home</label>
									<textarea style="width:200px;height:130px" required name="about_home" > <?php echo $row['about_home']?></textarea>
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Status</label>
									<input type="text" name="status" class="form-control"readonly value="<?php echo $row['status']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Payment</label>
									<input type="text" name="payment" class="form-control"readonly value="<?php echo $row['payment']?>">
								</div>
								</div>
								<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" name="email" class="form-control" readonly value="<?php echo $row['email']?>">
								</div>
								</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Start Date</label>
									<input type="date" name="start_date" class="form-control" required value="<?php echo $row['start_date']?>">
								</div>
							</div>	
							
						</div>
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>End Date</label>
									<input type="date" name="end_date" class="form-control"required value="<?php echo $row['end_date']?>">
								</div>
							</div>	
							
						</div>
						
						</form>
						<center><input style="border-radius:15px;font-size:25px;color:white;background-color:green" type="submit" value="Save" name="save" ></center>
<span style="color:green"><?php echo $message; ?></span>
<span style="color:red"><?php echo $mess; ?></span>
<a style="font-size:18px;margin-left:20px;color:royalblue"href="profile.php">< back</a>

				<?php }include("footer.php"); ?>