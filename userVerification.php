<?php
session_start();
include("connection.php");
if(strlen($_SESSION['info'])==0){
	header("location:signUp.php");
}
$message=$_SESSION['info'];

if(isset($_POST['verify'])){
	$code=mysqli_real_escape_string($conn,$_POST['code']);
	$email=$_SESSION['email'];
	      $selectQuery=mysqli_query($conn,"select * from new_user WHERE email='$email' AND code='$code' LIMIT 1");
		  $row=mysqli_num_rows($selectQuery);
		    if($row>0){
			$update_status = "UPDATE new_user SET code ='0', status = 'verified' WHERE code = '$code'";
            $run_query = mysqli_query($conn, $update_status);
			  if($run_query ){
				 header("location:login.php");
			  }else{
				  $message="Something Goes Wrong";
			  }
			}
			else{
				$message="Invalid Otp-Code!!!";
			}
	}
?>



<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>User Verification Page</title>

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

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				
				<div style="margin-left:300px" class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 style="color:green" class="text-center text-primary">Email Verification</h2>
						</div>
						<div class="login-title">
							<h5 class="text-center text-primary"><?php echo $message; ?></h5>
						</div>
						<h6 class="mb-20">Enter Verification Code</h6>
						<form method="post" enctype="multipart/form-data">
							<div class="input-group custom">
								<input type="number" name="code" class="form-control form-control-lg" required>
								
							</div>
							
							<div style="margin-left:100px"class="row align-items-center">
								<div class="col-7">
									<div class="input-group mb-0">
										
											
											<input class="btn btn-primary btn-lg btn-block" name="verify" type="submit" value="verify">
										
									
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