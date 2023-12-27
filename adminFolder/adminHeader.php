<?php include "connection.php";
session_start();
if ($_SESSION['alogin'] != 0 && $_SESSION['arole']=='admin')
{

?>

<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Bule Hora City Online House Rental System</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">

	
</head>
<body   style="background-color:#d4cfcf">
<div class="main-header">
			<div class="logo-header">
				<a href="index.php" class="logo">
					<img style="width:110px;height:70px;background-color:transparent" src="../assets/images/logo-png-removebg-preview.png" alt="House Rent Logo"/>
				</a>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
    <?php
    include "connection.php";
    $sql = mysqli_query($conn, "select * from new_user where see='no'");
	$num1=mysqli_num_rows($sql);
    ?>	
	 <?php
    include "connection.php";
    $sql = mysqli_query($conn, "select * from rent_home where see='no'");
	$num2=mysqli_num_rows($sql);
    ?>
	 <?php
    include "connection.php";
    $sql = mysqli_query($conn, "select * from booked_home where see='no'");
	$num3=mysqli_num_rows($sql);
    ?>
	 <?php
    include "connection.php";
    $sql = mysqli_query($conn, "select * from contact where see='no'");
	$num4=mysqli_num_rows($sql);
    ?>				
						
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i style="color:white" class="la la-bell"></i>
								<?php if($num1+$num2+$num3+$num4!=0){?>
									
								<span class="notification"><?php echo $num1+$num2+$num3+$num4; ?></span>
								
								<?php }?>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have <?php echo $num1+$num2+$num3+$num4; ?> new notification</div>
								</li>
								
    <?php
    include "connection.php";
    $sql = mysqli_query($conn, "select * from new_user where see='no'");
    while ($row = mysqli_fetch_array($sql))
    { ?>
								
								<li>
									<div class="notif-center">
										<a href="users.php?notification=<?php echo $row['id'];?>">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													<?php echo "New user registered <br>".$row['fullname'];  ?>
												</span>
											</div>
										</a>
									</div>
								</li>
								<?php } ?>
								 <?php
  
    $sql = mysqli_query($conn, "select * from rent_home where see='no'");
    while ($row = mysqli_fetch_array($sql))
    { ?>
								
								<li>
									<div class="notif-center">
										<a href="availableHouse.php?notification=<?php echo $row['id'];?>">
											<div class="notif-icon notif-primary"> <i class="la la-home"></i> </div>
											<div class="notif-content">
												<span class="block">
													<?php echo "New home added to database by ".$row['username']; ?>
												</span>
												
											</div>
										</a>
									</div>
								</li>
								<?php } ?>
				  			 <?php
  
    $sql = mysqli_query($conn, "select * from booked_home where see='no'");
    while ($row = mysqli_fetch_array($sql))
    { ?>
								
								<li>
									<div class="notif-center">
										<a href="bookedHome.php?notification=<?php echo $row['id'];?>">
											<div class="notif-icon notif-primary"> <i class="la la-home"></i> </div>
											<div class="notif-content">
												<span class="block">
													<?php echo "New home ".$row['status']." by ".$row['fullname']; ?>
												</span>
												
											</div>
										</a>
									</div>
								</li>
								<?php } ?>
												  			 <?php
  
    $sql = mysqli_query($conn, "select * from contact where see='no'");
    while ($row = mysqli_fetch_array($sql))
    { ?>
								
								<li>
									<div class="notif-center">
										<a href="contact.php?notification=<?php echo $row['id'];?>">
											<div class="notif-icon notif-primary"> <i class="la la-comment-o"></i> </div>
											<div class="notif-content">
												<span class="block">
													<?php echo "New comment is sent by ".$row['name']; ?>
												</span>
												
											</div>
										</a>
									</div>
								</li>
								<?php } ?>
							</ul>
						</li>
	
						
						
						
						
	<?php
    include "connection.php";
    $sql = mysqli_query($conn, "select * from new_user where username='".$_SESSION['ausername']."' AND role='admin'");
    while ($row = mysqli_fetch_array($sql))
    { ?>	
						
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"><span ><?php echo $row['username']; ?></span></span> 
			        <img style="background-color:transparent;border-radius:50%;width:80px;height:65px" src="../NewsPhoto/<?php if($row['photo']==""){echo "noimage.png";}else{echo $row['photo'];} ?>" alt="profile picture">
								 
							</a>
							<ul class="dropdown-menu dropdown-user">

									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="profile.php"><i class="ti-user"></i> My Profile</a>
									
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../reset-password.php"><i class="ti-lock"></i> Change Password</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
						</li>
						
						<?php
    } ?>	
						
						</ul>
					</div>
			</nav>
		</div>
		
		
		
		
			<div class="sidebar">
			<br><br>
				<div class="scrollbar-inner sidebar-wrapper">

					
					<ul class="nav">
						<li class="nav-item">
							<a href="index.php">
								<i class="la la-dashboard"></i>
								<p>Home</p>
								
							</a>
						</li>
						
						<li class="nav-item">
							
								<ul class="dropdown">

									<a class="dropdown-item" href="users.php"><i class="la la-user"></i><p>Manage User</p></a>
									<a class="dropdown-item" href="availableHouse.php"><i class="la la-home"></i><p>Manage Rental Home</p></a>
									<a class="dropdown-item" href="bookedHome.php"><i class="la la-home"></i><p>Manage Booked Home</p></a>
									<a class="dropdown-item" href="rentedHome.php"><i class="la la-home"></i><p>Manage Rented Home</p></a>
									<a class="dropdown-item" href="news.php"><img style="width:15%;height:15%" src="../assets/images/newsicon.png  " class="la la-news"></i><p>&nbsp Manage News</p></a>
									<a class="dropdown-item" href="contact.php"><i class="la la-comment"></i><p>Replay Contact</p></a>
									<a class="dropdown-item" href="backup.php"><i class="la la-comment"></i><p>BackUp Database</p></a>
									</ul>
						</li>
						
						<li class="nav-item">
							<a href="notifications.php">
								<i class="la la-bell"></i>
								<p>Manage Notifications</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="rentingData.php">
								<i class="la la-th"></i>
								<p>Manage Rented Home</p>
								
							</a>
						</li>
					</ul>
				</div>
			</div>
	


<?php

}
else
{
    header("location:../login.php");
}

?>
</body>