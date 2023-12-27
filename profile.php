<?php
include("header.php");
include("connection.php"); 
?>
<?php 
include("connection.php"); 

if(isset($_SESSION['ausername'])){
	  $query=mysqli_query($conn,"SELECT * FROM rentProcess where Ownerusername='".$_SESSION['ausername']."'");
	  $data=mysqli_fetch_array($query);
	  $num=mysqli_num_rows($query);
	  $currentDay=date("Y-m-d");
	  if($num>0){
	  $endDate=$data['endDate'];
	  
 if($currentDay== $endDate){
    $deletequery = "DELETE FROM rentProcess WHERE currentDay='$currentDay' AND endDate='$endDate'";
    $rundeletequery = mysqli_query($conn, $deletequery);
    if ($rundeletequery)
    {
        $message = "deleted";
    }
    else
    {
        $message = "not deleted";
    }

  }
	  
}
  
} 



if(isset($_GET['idChange'])){
$currentDay="";
$endDate="";
$house_id="";
$rentingMethod="";
	$sql=mysqli_query($conn,"SELECT * FROM booked_home WHERE house_id='".$_GET['idChange']."'");
	while($data=mysqli_fetch_array($sql)){
		$house_id=$data['house_id'];
		$rentingMethod=$data['rentingMethod'];
	}
    if($rentingMethod=="Monthly"){
		$currentDay=date("Y-m-d");
		$cd=date_create($currentDay);
		$endDateFormat=date_add($cd,date_interval_create_from_date_string("1 months"));
		$endDate=date_format($endDateFormat,"Y-m-d");
		

}
if($rentingMethod=="Six_Month"){
		$currentDay=date("Y-m-d");
		$cd=date_create($currentDay);
		$endDateFormat=date_add($cd,date_interval_create_from_date_string("6 months"));
		$endDate=date_format($endDateFormat,"Y-m-d");
		


}
if($rentingMethod=="Yearly"){
		$currentDay=date("Y-m-d");
		$cd=date_create($currentDay);
		$endDateFormat=date_add($cd,date_interval_create_from_date_string("12 months"));
		$endDate=date_format($endDateFormat,"Y-m-d");

}
         $sql=mysqli_query($conn,"Update booked_home set start_date='$currentDay',end_date='$endDate',payment='1', status='rented',see='no' where house_id='".$_GET['idChange']."'");
         $sql=mysqli_query($conn,"Update rent_home set payment='1',start_date='$currentDay',end_date='$endDate', status='rented' where id='$house_id'");

if(isset($_SESSION['ausername'])){
	 $username="";
	
	 $photo="";
	 $time="";
	
	 $sql=mysqli_query($conn,"SELECT * FROM rent_home where id='$house_id'");
	 while($data=mysqli_fetch_array($sql)){
	 $username=$data['username'];
	 $category=$data['category'];
	 $rentingMethod=$data['rentingMethod'];
	 $price=($data['rent']*97.5)/100;
	 $deliveryFee=(($data['rent'])*5)/100;
	 }
	  
	  
	  $queryLessor=mysqli_query($conn,"SELECT * FROM booked_home where house_id='$house_id'");
	  $data=mysqli_fetch_array($queryLessor);
	   $fullnameLessor=$data['fullname'];
	   $phoneLessor=$data['phone'];
	   $photoLessor=$data['photo'];
	   $emailLessor=$data['email'];
	  
	  
	  
	  
	  $title=$username." Finished the payment for House id: ".$house_id;
	  $sql=mysqli_query($conn,"SELECT * FROM new_user where username='$username'");
	  while($row=mysqli_fetch_array($sql)){
		   $photoHomeowner=$row['photo'];
		   $phoneHomeowner=$row['phone'];
		   $fullnameHomeowner=$row['fullname'];
		   $emailHomeowner=$row['email'];
	  }
	 $insertQuery=mysqli_query($conn,"INSERT INTO rentProcess(Ownerusername,category,rentingMethod,price,
	 deliveryFee,photoLessor,fullnameLessor,phoneLessor,emailLessor,photoHomeowner,fullnameHomeowner,phoneHomeowner,emailHomeowner,currentDay,endDate,see,status)
	 VALUES('$username','$category','$rentingMethod','$price','$deliveryFee','$photoLessor','$fullnameLessor','$phoneLessor','$emailLessor','$photoHomeowner','$fullnameHomeowner','$phoneHomeowner','$emailHomeowner','$currentDay','$endDate','no','0')");
	 if($insertQuery){
		     
			 
	$subject=mysqli_real_escape_string($conn,$_POST['subject']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	
	
	
                $price=$price+$deliveryFee;
                $subject = "You paid succesfully";
                $message = "You rented $category from $currentDay to $endDate by $price ETB";
                $sender = "From: lelisa123sh@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                   
                }else{
                    
                }
			 
			 
	 }else{
		 $mess="".mysqli_connect_error($insertQuery);
	 }
}
}

?>





<?php 
$end_date="";
$mess="";
$selectQuery=mysqli_query($conn,"SELECT * FROM booked_home WHERE status='rented' AND username='".$_SESSION['ausername']."'");
while($data=mysqli_fetch_array($selectQuery)){
	$house_id=$data['house_id'];
	$currentDay=date("Y-m-d");
	if($currentDay==$data['end_date'] || $currentDay>$data['end_date']){
		$sql=mysqli_query($conn,"Update booked_home set start_date='$currentDay',payment='0', status='active' where end_date='".$data['end_date']."'");
		 if(!$sql){
			$mess=" ".mysqli_connect_error($sql); 
		 }else{
			 
		 }
		$sql=mysqli_query($conn,"Update rent_home set start_date='$currentDay',payment='0', status='active' where id='$house_id'");
		 if(!$sql){
			$mess=" ".mysqli_connect_error($sql); 
		 }else{
			 
		 }
	}
}

       


		   
?>


	<link rel="stylesheet" type="text/css" href="adminFolder/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="adminFolder/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="adminFolder/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="adminFolder/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="adminFolder/vendors/styles/style.css">

<?php 

if(strlen(isset($_SESSION['alogin']))==0){
	echo'<script type="text/javascript">window.location="login.php?page=profile"; </script>';
}
include_once"connection.php";
// variable declaration
$message="";
$mess="";
$id="";
if(isset($_POST['update']))
{
$photo=$_FILES['photo']['name'];


if(empty($photo)){
	$selectPhoto=mysqli_query($conn,"select * from new_user WHERE id='".$_SESSION['alogin']."'");
	while($data=mysqli_fetch_array($selectPhoto)){
		$photo=$data['photo'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"NewsPhoto/".$_FILES["photo"]["name"]);
	}
}else{
	    move_uploaded_file($_FILES["photo"]["tmp_name"],"NewsPhoto/".$_FILES["photo"]["name"]);
}

$fullname=mysqli_real_escape_string($conn,$_POST["fullname"]);
$gender=mysqli_real_escape_string($conn,$_POST["sel"]);
$phone=mysqli_real_escape_string($conn,$_POST["phone"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$username=mysqli_real_escape_string($conn,$_POST["username"]);

$updateq="UPDATE new_user SET fullname='$fullname',photo='$photo',gender='$gender',phone='$phone',username='$username',email='$email' WHERE id='".$_SESSION['alogin']."'";
	$run_updateq=mysqli_query($conn,$updateq);
	if($run_updateq)
	{
		$message="UPDATED";
		
	}
	else
	{
		$mess="NOT UPDATE ".mysqli_connect_error($run_updateq);
	}
	
}
?>



<?php  
						$queryselect=mysqli_query($conn,"SELECT * FROM new_user WHERE id='".$_SESSION['alogin']."'");
						while($row=mysqli_fetch_array($queryselect)){
						?>
<form method="post" enctype="multipart/form-data">
<div style="margin-left:100px;"class="row">
					<div style="margin-top:60px"class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						
						<div class="pd-30 card-box height-150-p">
							<div class="profile-photo">
								
								<img id="image" style="border-radius:50%;width:100%;height:90%" src="NewsPhoto/<?php if($row['photo']==""){echo "noimage.png";}else{echo $row['photo'];} ?>" alt="profile picture">
								 <br>
								 <input type="file" accept="image/*" capture="user" name="photo"><br>
								
							
							</div>
							<br>
							<h5 class="text-center h5 mb-0"><?php echo $row['fullname'] ?></h5>
							
							<div class="profile-info">
								<h5 class="mb-20 h5 text-blue">Contact Information</h5>
								<ul>
									<li>
										<span>Email Address:</span>
										<?php echo $row['email'] ?>
									</li>
									<li>
										<span>Phone Number:</span>
										<?php echo $row['phone'] ?>
									</li>
									
								</ul>
							</div>
						
						
						</div>
					</div>
					<div style="margin-top:60px"class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
					
						<div class="card-box height-100-p overflow-hidden">
							<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" name="fullname" class="form-control"required value="<?php echo $row['fullname']?>">
								</div>
								</div>
									<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Gender</label>
									<select name="sel" class="form-control">
									  <option value="Male" <?php if($row['gender']=="Male"){echo"selected";}?>>Male</option>
									  <option value="Female" <?php if($row['gender']=="Female"){echo"selected";}?>>Female</option>
									  <option value="Other" <?php if($row['gender']=="Other"){echo"selected";}?>>Other</option>
									</select>
									
								</div>
							</div>	
							<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Phone number</label>
									<input type="text" name="phone" class="form-control" required value="<?php echo $row['phone']?>">
								</div>
								</div>
									<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" name="email" class="form-control" required value="<?php echo $row['email']?>">
								</div>
								</div>
								<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control" required value="<?php echo $row['username']?>">
								</div>
							</div>	
							
							<div class="col-md-6 col-sm-12">
							<input class="btn btn-primary btn-lg btn-block" type="submit" name="update" value="Save and Change">
							</div>
							<span><?php echo $mess; ?></span>
							<span><?php echo $message; ?></span>
						</div>
						
					</div>
				</div>
</form>
						<?php } ?>

	<?php   
include_once"connection.php";
$message="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM rent_home WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $message="deleted";
	}else{
		 $message="not deleted";
		}
}
?>			

				
				
				
				
				
				
				<div style="margin-left:20px;"class="card-box mb-20">
					<br>
					<div class="pd-2">
						<h4 style="text-align:center;"  class="text-blue h4">Rental Home Detail</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<thead>
								<tr>
								

									<th>id</th>
									<th>category</th>
									<th>Price</th>
									<th>Renting Method</th>
									
									<th>home_location</th>
									<th>home_number</th>
									
									<th>status</th>
									<th>payment</th>
									<th colspan="3">Action</th>
								</tr>
							</thead>
							<tbody>
							
<?php
$selectQuery=mysqli_query($conn,"select * from new_user where id='".$_SESSION['alogin']."'");
while($data=mysqli_fetch_array($selectQuery)){
	$username=$data['username'];
}
$sql=mysqli_query($conn,"select * from rent_home where username='$username'");
while($row=mysqli_fetch_array($sql))
{
?>	
	
								<tr>
								    <td><?php echo htmlentities($row['id']);?></td>
									<td><?php echo htmlentities($row['category']);?></td>
									<td><?php echo htmlentities($row['rent']);?></td>
									<td><?php echo htmlentities($row['rentingMethod']);?></td>
									<td><?php echo htmlentities($row['home_location']);?></td>
									<td><?php echo htmlentities($row['home_number']);?></td>
									<td><?php echo htmlentities($row['status']);?></td>
									<td><?php if($row['payment']==0){echo"Not Paid";}else{echo"paid";}?></td>
									
									<td><a href="viewrent_home.php?id=<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> View</p></a></td>
					                <?php 
									$sat="";
												$selectbooked=mysqli_query($conn,"SELECT * FROM booked_home WHERE house_id='".$row['id']."'");
												$num=mysqli_num_rows($selectbooked);
												while($value=mysqli_fetch_array($selectbooked)){
													$sat=$value['status'];
									if($value['status']=='active' || $value['status']=='deactive' || $num<0 ){?>
									
										<td> <a href="?id=<?php echo $row['id']?>"><p style="color: royalblue;"><i class="dw dw-delete"></i>Delete</p></a></td>

									<?php }}?>
									<?php if($sat!='rented' && $sat !='booked'){ ?>
									<td><a href="updaterent_home.php?id=<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> Edit</p></a> </td>
									<?php }?>
									
									
								</tr>

<?php  }?>
								
							</tbody>
						</table>
					</div>
				</div>
				
<?php   
include_once"connection.php";
$message="";
if(isset($_GET['iddelelete']))
{
	$id=$_GET['iddelelete'];
	$deletequery="DELETE FROM booked_home WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $message="deleted";
	}else{
		 $message="not deleted";
		}
}
?>	
				
						
				<div style="margin-left:20px;"class="card-box mb-20">
					<br>
					<div class="pd-2">
					
						<h4 style="text-align:center;" class="text-blue h4">Booked Home Detail</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<thead>
								<tr>
								

									<th>id</th>
									<th>category</th>
									<th>status</th>
									<th>payment</th>
									<th>Start date</th>
									<th>End date</th>
									<th>Approval </th>
									<th>Pay with Yenepay</th>
									<th colspan="2">Action</th>
									
								</tr>
							</thead>
							<tbody>
							
<?php
$rent="";
$selectQuery=mysqli_query($conn,"select * from new_user where id='".$_SESSION['alogin']."'");
while($data=mysqli_fetch_array($selectQuery)){
	$username=$data['username'];
}

$sql=mysqli_query($conn,"select * from booked_home where username='$username' and (status='booked' || status='rented') ");
while($row=mysqli_fetch_array($sql))
{
?>	
	
								<tr>
								<td><?php echo htmlentities($row['house_id']);?></td>
									<td><?php echo htmlentities($row['category']);?></td>
									<td><?php echo htmlentities($row['status']);?></td>
									<td ><?php if($row['payment']==0){echo"Not paid";}else{echo"paid";}?></a></td>
									<td><?php echo htmlentities($row['start_date']);?></td>
									<td><?php echo htmlentities($row['end_date']);?></td>
									<td><?php if($row['approval']=='0'){echo'<img style="width:50px;height:30px"  src="assets/images/pending.png">';?>
									
									 <td>Wait Until Your Request Is Approved</td>
									
									<?php }
									 else if($row['approval']=='1'){echo'<img style="width:50px;height:30px"  src="assets/images/approved.png">';?></td>
									<td><?php if($row['payment']==0){?>
                                   <a id="yenepayLogo" href="https://yenepay.com/checkout/Home/Process/?ItemName=<?php echo $row['category'];?>&ItemId=<?php echo $row['house_id'];?>&UnitPrice=<?php echo ($row['price']*97.5)/100;?>&Quantity=1&Process=Express&ExpiresAfter=&DeliveryFee=<?php echo ($row['price']*5)/100;?>&HandlingFee=&Tax1=&Tax2=&Discount=&SuccessUrl=http%3A%2F%2Flocalhost%2Fhouse-rent%2Fsuccess.php?aid=<?php echo $row['house_id']; ?>&IPNUrl=http%3A%2F%2Flocalhost%2Fhouse-rent%2Ferror.php&MerchantId=21136">
								   <img style="width:100px" src=" https://yenepayprod.blob.core.windows.net/images/logo.png">
                                   </a>
                                   <span></span>
									<?php }else{?>
								      <p>You finished the payment</p>
										<?php } ?>
								</td>
									<?php }?>
									<td><a href="viewbooked_home.php?id=<?php echo $row['house_id']?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> View</p></a></td>
 <?php if($row['status']=='booked'){?>
														                
									<td> <a href="?iddelelete=<?php echo $row['id']?>"><p style="color: royalblue;"><i class="dw dw-delete"></i>Delete</p></a></td>
 <?php }?>					
										
								</tr>
		
					
<?php  }?>
								
							</tbody>
						</table>
						<span><?php echo $mess; ?></span>
					</div>
				</div>
				
				
				
<script src="adminFolder/vendors/scripts/core.js"></script>
	<script src="adminFolder/vendors/scripts/script.min.js"></script>
	<script src="adminFolder/vendors/scripts/process.js"></script>
	<script src="adminFolder/vendors/scripts/layout-settings.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="adminFolder/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="adminFolder/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="adminFolder/vendors/scripts/datatable-setting.js"></script></body>

<?php  include"footer.php";  ?>