<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
	
$full_name=mysqli_real_escape_string($con, $_POST['full_name']);
$username=mysqli_real_escape_string($con, $_POST['username']);
$password=md5($_POST['password']);		
$email=mysqli_real_escape_string($con, $_POST['email']);
$role=mysqli_real_escape_string($con, $_POST['role']);
$query=mysqli_query($con,"INSERT INTO admin (username,password,email,role) VALUES ('$username','$password','$email','$role')");
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
	<title>Create Account</title>
	<script src="includes/sweetalert.min.js"></script>
	

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
<?php $sql=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

<?php include('includes/header.php');?>
<div class="mobile-menu-overlay"></div>
<!--<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">-->
			
	<div  class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="main-container">
			<div class="row align-items-center">
			
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Register Employee</h2>
						</div>
						<form name="dept" method="post" enctype="multipart/form-data">
						
							<div class="input-group custom">
			
								<input type="text" class="form-control form-control-lg" name="username"placeholder="Username" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">

								<input type="password" class="form-control form-control-lg" name="password "placeholder="Password" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
							
								<input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="email"></i></span>
								</div>
							</div>
							<div class="input-group custom">
										
											
											<select name="role" class="custom-select form-control" required>
											<option disabled selected>Select Role</option>
												<option value="admin">Super Admin</option>
												<option value="manager">Manager</option>
												<option value="registrar">Registrar</option>
												<option value="finance">Finance</option>
												<option value="security">security</option>
												<option value="landAdmin">Land Admin</option>
												<option value="pservice">Public service</option>
												<option value="sectormanager">Sector Manager</option>
												<option value="imxadmin">Imx Admin</option>
											</select>
										
							</div>
							
							
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										
											<input class="btn btn-primary btn-lg btn-block" name="submit" type="submit" value="Register">
		
										
									</div>
									
								</div>
							</div>
						</form>
					</div>
				</div>
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
	
				<?php include('includes/footer.php');?>
		
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
<?php }} ?>