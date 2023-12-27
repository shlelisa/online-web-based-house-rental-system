<?php
session_start();
error_reporting(0);
include("../includes/config.php");

if(isset($_POST['submit']))
{
	
	
    $username=mysqli_real_escape_string($con, $_POST['username']);
    $password=md5($_POST['password']);
	
	
	
	
	
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='admin'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='manager'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='pservice'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='registrar'");

$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='imxadmin'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='landAdmin'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='security'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='finance'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
$query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password' and role='sectormanager'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="../home.php";//
$_SESSION['alogin']=mysqli_real_escape_string($con, $_POST['username']);
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else{
	
$_SESSION['errmsg']="Invalid Username or Password";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">

	
</head>
<body class="login-page">
	
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="../vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login</h2>
						<center>	<?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></center>
						</div>
						 <form name="admin" method="post" action="login.php">
							
							<div class="input-group custom">
								<input type="text" name="username" class="form-control form-control-lg" autocomplete="off" placeholder="Username" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" name="password" class="form-control form-control-lg" autocomplete="off"placeholder ="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password.php"><a href="../forgot-password/forgot-password.php">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
						<button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
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
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
</body>
</html>