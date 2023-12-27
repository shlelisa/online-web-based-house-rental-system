<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['id'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$regid=intval($_GET['id']);

$full_name=$_POST['full_name'];
$age=$_POST['age'];
$date_of_birth=$_POST['date_of_birth'];	
$phone=$_POST['phone'];
$country=$_POST['country'];	
$region=$_POST['region'];	
$city=$_POST['city'];	
$address=$_POST['address'];	
$gender=$_POST['gender'];	
$image=$_FILES["image"]["name"];
$username=$_POST['username'];
$email=$_POST['email'];
$role=$_POST['role'];
$password=md5($_POST['password']);
//move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$FILES['image']['name']);
$ret=mysqli_query($con,"UPDATE registerresident SET full_name='$full_name',age='$age',date_of_birth='$date_of_birth',username='$username',password='$password',email='$email',phone='$phone',country='$country',region='$region',city='$city',address='$address',role='$role',gender='$gender',image='$image' WHERE id='".$_SESSION['id']."'");
if($ret)
{
$_SESSION['msg']="Record updated Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Admin Record not update";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>registerar</title>


	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	
</head>
<body>
<?php $query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
	
	<?php include('includes/header.php');?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-center">
							<center><h4 class="text-blue h4">UPDATE FORM</h4></center>
							<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>
						</div>
					</div>
					<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" class="form-control" name="full_name" value="<?php echo htmlentities($row['full_name']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Age</label>
									<input type="number" class="form-control" name="age" value="<?php echo htmlentities($row['age']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								
									<label>Date Of Birth</label>
									<input type="text"  class="form-control form-control-lg date-picker" name="date_of_birth" value="<?php echo htmlentities($row['date_of_birth']); ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username" value="<?php echo htmlentities($row['username']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" value="<?php echo htmlentities($row['password']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" value="<?php echo htmlentities($row['email']); ?>">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Phone</label>
									<input type="text" class="form-control" name="phone" value="<?php echo htmlentities($row['phone']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>country</label>
									<input type="text" class="form-control" name="country" value="<?php echo htmlentities($row['country']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
							<label>Region</label>
							<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" name="region">
								<option selected>Oromia</option>
								<option>India</option>
								<option>United Kingdom</option>
								<?php echo htmlentities($row['region']); ?>
							</select>
						</div>
							</div>
						</div>
						<div class="row">
						
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control" name="city" value="<?php echo htmlentities($row['city']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" name="address" value="<?php echo htmlentities($row['address']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Role</label>
									<input type="text" class="form-control" name="role" value="<?php echo htmlentities($row['role']); ?>">
								</div>
							</div>
						</div>
						
						<div class="form-group">
																<label>Gender</label>
																<div class="d-flex">
																<div class="custom-control custom-radio mb-5 mr-20">
																	<input type="radio" id="customRadio4" class="custom-control-input"  name="gender"<?php if($row['gender']=="Male") {echo "checked";}?> value="Male">
																	<label class="custom-control-label weight-400" for="customRadio4">Male</label>
																</div>
																<div class="custom-control custom-radio mb-5">
																	<input type="radio" id="customRadio5" class="custom-control-input"  name="gender" <?php if($row['gender']=="Female") {echo "checked";}?> value="Female">
																	<label class="custom-control-label weight-400" for="customRadio5">Female</label>
																</div>
																</div>
															</div>
						<div class="form-group"><label>Upload Profile Picture</label>
						<input type="file" style="width:400px; height:40px"class="form-control form-control-lg" id="image" name="image" class="form-control"  value="selected" />
						

						</div>

						<div class="form-group mb-0">
						<input type="submit" class="btn btn-primary"  name="submit" value="Update Information">

						</div>

              </form>
					
				</div>
				<!-- Form grid End -->


			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
			<?php include('includes/footer.php');?>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
<?php } }?>