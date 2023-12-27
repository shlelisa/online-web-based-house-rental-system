<?php
session_start();
session_unset();
session_destroy();
session_start();
  include_once"connection.php";
  $page="";
  $page=isset($_GET['page']);
  $id="";
    $message="";
    $status="";
  if(isset($_POST['login'])){
	   $username=mysqli_real_escape_string($conn,$_POST['username']);
	   $password=md5($_POST['password']);

		$selectquery="SELECT * FROM new_user WHERE username='$username' and password='$password'";
		$runselectquery=mysqli_query($conn,$selectquery);
		$numberofrows=mysqli_num_rows($runselectquery);
		while($data=mysqli_fetch_array($runselectquery)){
			$_SESSION['arole']=$data['role'];
			$id=$data['id'];
			$status=$data['status'];
		}
		$_SESSION['ausername']=mysqli_real_escape_string($conn,$_POST['username']);
		
		if($numberofrows>0){
			
			
			
			if($status=='verified'){
               if($_SESSION['arole']=='admin'){
				    $_SESSION['ausername']=mysqli_real_escape_string($conn,$_POST['username']);
					$_SESSION['alogin']=$id;
					header("location:adminFolder/index.php");
				}else if($page=="rentHome"){
			        $_SESSION['alogin']=$id;
			        header("location:rentHome.php");
				}else if($page=="normalHouse-single"){
					
			          $_SESSION['alogin']=$id;
					  $_SESSION['aemail']=$data['email'];
			          header("location:normalHouse-single.php");
				}else if($page=="oneroom-single"){
					
			          $_SESSION['alogin']=$id;
					  $_SESSION['aemail']=$data['email'];
			          header("location:oneroom-single.php");
				}else if($page=="businessHouse-single"){
					
			          $_SESSION['alogin']=$id;
					  $_SESSION['aemail']=$data['email'];
			          header("location:businessHouse-single.php");
				}else if($page=="apartment-single"){
			          $_SESSION['alogin']=$id;
			          header("location:apartment-single.php");
					
				}else if($page=="condominium-single.php"){
					
			          $_SESSION['alogin']=$id;
					  $_SESSION['aemail']=$data['email'];
			          header("location:condominium_single.php");
				}else if($page=="realEstate-single.php"){
					
			          $_SESSION['alogin']=$id;
					  $_SESSION['aemail']=$data['email'];
			          header("location:realEstate.php");
				}else{
					$_SESSION['alogin']=$id;
			        header("location:profile.php");
				}
				
		}else{
			$_SESSION['variable']="email_verification";
			header("location:forgot-password/forgot-password.php");
		}
		
		
		
		}else{
			$message="Incorrect username or password ".mysqli_connect_error();
		}
		}
					
	  
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Bule Hora City Online House Rental System</title>

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
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="assets/images/footer-logo.png" alt="">
				</a>
			</div>
				<div class="login-menu">
				<ul>
					<li><a href="signUp.php">Register</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img style="width:100%;height:80%;background-color:transparent;" src="assets/images/login.png" alt="appartama">
					
				</div>
			
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To Bule Hora City Online House Rental System</h2>
						</div>
						<div >
							<center><span style="color:red" id="error"><?php echo $message; ?></span><center>
						</div><br>
						<form method="post"  enctype="multipart/form-data">
							
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" autocomplete="off" required  name="username" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" autocomplete="off"  required  name="password" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								
								<div class="col-6">
									<div class="forgot-password"><a href="forgot-password/forgot-password.php?forgotPassword=forgotPassword">Forgot Password?</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									
										
											<input class="btn btn-primary btn-lg btn-block"name="login" type="submit" value="Sign In">
									
									</div>
                                    <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="signUp.php">Register To Create Account</a>
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