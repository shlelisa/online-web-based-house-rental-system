<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
	
$full_name=mysqli_real_escape_string($con, $_POST['full_name']);
$age=mysqli_real_escape_string($con, $_POST['age']);
$date_of_birth=mysqli_real_escape_string($con, $_POST['date_of_birth']);
$username=mysqli_real_escape_string($con, $_POST['username']);
$password=md5($_POST['password']);		
$email=mysqli_real_escape_string($con, $_POST['email']);
$phone=mysqli_real_escape_string($con, $_POST['phone']);
$country=mysqli_real_escape_string($con, $_POST['country']); 
$region=mysqli_real_escape_string($con, $_POST['region']);
$city=mysqli_real_escape_string($con, $_POST['city']);
$address=mysqli_real_escape_string($con, $_POST['address']);
$role=mysqli_real_escape_string($con, $_POST['role']);
$gender=mysqli_real_escape_string($con, $_POST['gender']);
$image=$_FILES["image"]["name"];

move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
$query=mysqli_query($con,"INSERT INTO kebeleworker (full_name,age,date_of_birth,username,password,email,phone,country,region,city,
address,role,gender,image) VALUES ('$full_name','$age','$date_of_birth','$username','$password','$email','$phone','$country','$region','$city','$address','$role','$gender','$image')");
if($query)
{
$_SESSION['msg']="Account Registered Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Not Registered";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Hojeta Galmesuu</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
	

	<?php if($_SESSION['id']!="");?>
<?php $sql=mysqli_query($con,"select * from kebeleworker where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>
	
			<?php include('includes/header.php'); ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
			
				<!-- Default Basic Forms Start -->
				
				

				<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-center">
							<center><h4 class="text-blue h4">REGISTERATION FORM</h4></center>
													</div>
					</div>
					<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Reg.No</label>
									<input type="text" class="form-control" name="Reg.No" value="" placeholder=" Reg.No">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>ID No</label>
									<input type="text" class="form-control" name="ID No" value="" placeholder="ID No">
								</div>
							</div>
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								
									<label> Full Name</label>
									<input type="text"  class="form-control form-control-lg date-picker" name="full_name" value="" placeholder="Full Name">
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>DOB</label>
									<input type="date" class="form-control" name="birth_date" value="" placeholder="">
								</div>
							</div>
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								
									<label>Blood Group</label>
									<input type="text" class="form-control" name="Blood_group" value="" placeholder="Blood Group">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Issue Dt</label>
									<input type="date" class="form-control" name="Issue Dt" value="" placeholder="">
								</div>
							</div>
						
						</div>
						
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Expiry Dt</label>
									<input type="date" class="form-control" name="Expiry Dt" value="" placeholder="">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Country</label>
									<input type="text" class="form-control" name="country" value="" placeholder="Country">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Region</label>
									<input type="text" class="form-control" name="region" value="" placeholder="Region">
								</div>
							</div>
						</div>
						<div class="row">
						
	

							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control" name="city" value="" placeholder="City">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" name="address" value="" placeholder="Role">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Role</label>
									<input type="text" class="form-control" name="role" value="" placeholder="Role">
								</div>
							</div>
						</div>
					
									
						<div class="row">
						
						<div class="col-md-4 col-sm-12">
						<div class="form-group">
						<label>Upload Profile Picture</label>
						<input type="file" class="form-control form-control-lg" id="image" name="image" class="form-control"  value="selected" />
						</div>
						</div>
						</div>		
						<div class="form-group">
						<label>Gender</label>
						<div class="d-flex">
						<div class="custom-control custom-radio mb-5 mr-20">
							<input type="radio" id="customRadio4" class="custom-control-input"  name="gender" value="Male">
							<label class="custom-control-label weight-400" for="customRadio4">Male</label>
						</div>
						<div class="custom-control custom-radio mb-5">
							<input type="radio" id="customRadio5" class="custom-control-input"  name="gender" value="Female">
							<label class="custom-control-label weight-400" for="customRadio5">Female</label>
						</div>
						</div>
					</div>
						

						<div class="form-group mb-0">
						<input type="submit" class="btn btn-primary"  name="submit" value="Save Information">

						</div>

              </form>
					
				</div>
					
				</div>
		
<script src="sweetalert.min.js"></script>
	<?php
if(isset($_POST['submit']))
{
?> <script>
	swal({
  title: "Good job!",
  text: "<?php echo htmlentities($_SESSION['msg']);?>",
  icon: "success",
	});
	</script>
	<?php 
   echo htmlentities($_SESSION['msgerror']="");
 } ?>
			</div>
			<?php include('includes/footer.php'); ?> 
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
<?php } ?><?php } ?>