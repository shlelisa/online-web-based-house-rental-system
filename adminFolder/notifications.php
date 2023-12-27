<?php include("adminHeader.php"); ?>
<html>
<head>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
</head>
	<body style="background-color:white;width:cover;">
	<br><br><br><br>
	<div style="margin-left:290px;background-color:white;width:75%;height:90vh;padding:20px;border-radius:10px"> 
      <div style="padding:20px;background-color:whitesmoke;margin-right:300px">
	          <?php
    include "connection.php";
    $sql = mysqli_query($conn, "select * from new_user where see='no' ORDER BY id ASC");
    while ($row = mysqli_fetch_array($sql))
    { ?>
								
								
									<div class="notif-center">
										<a href="users.php?notification=<?php echo $row['id'];?>">
											 
											<div class="notif-content">
												<span class="block">
													<i class="la la-user-plus"></i> <?php echo "New user registered <br>".$row['fullname'];  ?>
												</span>
											</div>
										</a>
									</div>
								
								<?php } ?>
								 <?php
  
    $sql = mysqli_query($conn, "select * from rent_home where see='no' ORDER BY id ASC");
    while ($row = mysqli_fetch_array($sql))
    { ?>
								
								
									<div class="notif-center">
										<a href="availableHouse.php?notification=<?php echo $row['id'];?>">
											 
											<div class="notif-content">
												<span class="block">
													<i class="la la-home"></i> <?php echo "New home added to database by ".$row['username']; ?>
												</span>
												
											</div>
										</a>
									</div>
							
								<?php } ?>
								 <?php
  
    $sql = mysqli_query($conn, "select * from booked_home where see='no' ORDER BY id ASC");
    while ($row = mysqli_fetch_array($sql))
    { ?>
								
								
									<div class="notif-center">
										<a href="bookedHome.php?notification=<?php echo $row['id'];?>">
											 
											<div class="notif-content">
												<span class="block">
													<i class="la la-home"></i> <?php echo "New home ".$row['status']." by ".$row['fullname']; ?>
												</span>
												
											</div>
										</a>
									</div>
								
								<?php } ?>
    <?php
    $sql = mysqli_query($conn, "select * from contact where see='no' ORDER BY id ASC");
    while ($row = mysqli_fetch_array($sql))
    { ?>
		                            <div style="background-color:whitesmoke;color:black;width:300px;height:50px" class="notif-center">
										<a style="text-decoration:none" href="contact.php?notification=<?php echo $row['id'];?>">
											<div style="padding:10px"class="notif-content">
												<span class="block">
													 <i class="la la-comment-o"></i>  <?php echo "New comment is sent by ".$row['name']; ?>
												</span>
												
											</div>
									
										</a>
									</div>
									
		<?php } ?>
	  
	  </div>
	  </body>

</div>
</html>

	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
<?php include("adminfooter.php"); ?>
