
<?php
session_start();
include("connection.php");
require("mail.php");

 $message="";
  if(isset($_POST['send-link'])){
	    $email=mysqli_real_escape_string($conn,$_POST['email']);
		/*$selectquery=mysqli_query($conn,"SELECT * FROM new_user WHERE email='$email'");
		$numberofrows=mysqli_num_rows($selectquery);
		if($numberofrows>0){
			while($row=mysqli_fetch_array($selectquery)){*/
			$recipient="shlelisa123@gmail.com";
			$subject="121212";
			$message="password forget";
		    send_mail($recipient,$subject,$message);
			header("location:resetPassword.php");
			/*}*/
		
		}
		



?>

<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Forgot Password</title>

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
				<a href="forgot-password.php">
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
							<h2 class="text-center text-primary">Forgot Password</h2>
						</div>
						<h6 class="mb-20">Enter your email address to reset your password</h6>
						<form method="post" enctype="multipart/form-data">
							<div class="input-group custom">
								<input type="email" class="form-control form-control-lg" name="email"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="off" required placeholder="Email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col-5">
									<div class="input-group mb-0">
										
											
											<input class="btn btn-primary btn-lg btn-block" type="submit" name="send-link" value="Submit">
										
									
									</div>
								</div>
								<div class="col-2">
									<div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
								</div>
								<div class="col-5">
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="login.php">Login</a>
									</div>
								</div>
								
							</div>
							<?php echo $message; ?></span>
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