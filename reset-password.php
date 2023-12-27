<?php
session_start();
include_once"connection.php";
$message="";
if(isset($_POST['reset'])){
	$password=md5($_POST['password']);
	$cpassword=md5($_POST['cpassword']);
	if($password !=$cpassword){
		$message="Password Should Be Matched!!!";
	}else{
	$resetPassword=mysqli_query($conn,"UPDATE new_user SET password='$password' WHERE id='".$_SESSION['alogin']."'");
	if($resetPassword){
		header("location:login.php");
	}else{
		$message="Something Went Wrong  ".mysqli_error();
	}
}
}				  
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Reset Password</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

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
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="reset-password.php">
					<img src="assets/images/footer-logo.png" alt="logo">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="vendors/images/forgot-password.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Change Password</h2>
						</div>
						<h6 class="mb-20" style="color:red"><?php echo $message;?></h6>
						<form method="post" enctype="multipart/form-data">
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="16" placeholder="New Password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="cpassword" class="form-control form-control-lg" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="16" required placeholder="Confirm New Password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">
										
											<input class="btn btn-primary btn-lg btn-block" type="submit" name="reset" value="Submit">
										
										
									</div>
								</div>
								
							</div>
						</form>
					</div>
				</div>
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