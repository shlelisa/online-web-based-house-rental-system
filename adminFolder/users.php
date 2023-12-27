<?php   
include("adminHeader.php"); 
include("connection.php");
error_reporting(0);
$message="";
$mess="";
if($_GET['notification']){
	$id=$_GET['notification'];
	$query=mysqli_query($conn,"UPDATE new_user SET see='yes' WHERE id='$id'");
                
}
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM new_user WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $message="deleted";
	}else{
		 $mess="not deleted :".mysqli_connect_error($rundeletequery);
		}
}


if(isset($_POST['updateUserInfo'])){
				 $id=$_POST['id'];
				 $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
				 $gender=mysqli_real_escape_string($conn,$_POST['gender']);
				 $phone=mysqli_real_escape_string($conn,$_POST['phone']);
				 $email=mysqli_real_escape_string($conn,$_POST['email']);
				 $role=mysqli_real_escape_string($conn,$_POST['role']);
				 $username=mysqli_real_escape_string($conn,$_POST['username']);
				
				$query=mysqli_query($conn,"UPDATE new_user SET fullname='$fullname',gender='$gender',phone='$phone',email='$email',role='$role',username='$username'WHERE id='$id'");
                if($query){
					 $message="Data Updated!";
					
				}else{
					$mess=" ".mysqli_connect_error($query);
				}
			 }
 
 if(isset($_POST['register'])){
		  
		  $username=mysqli_real_escape_string($conn,$_POST['user']);
		  $email=mysqli_real_escape_string($conn,$_POST['emai']);
		  $phone=mysqli_real_escape_string($conn,$_POST['phon']);
		  $fullname=mysqli_real_escape_string($conn,$_POST['fname']);
		  $identityCard=$_FILES['identityCard']['name'];
		  $gender=$_POST['gen'];
		  $pass=md5($_POST['pass']);
		  $cpass=md5($_POST['cpass']);
		  $role="user";
		  $selectQuery=mysqli_query($conn,"select * from new_user WHERE username='$username'");
		  $row1=mysqli_num_rows($selectQuery);
		  $selectQuery=mysqli_query($conn,"select * from new_user WHERE email='$email'");
		  $row=mysqli_num_rows($selectQuery);
		    if($pass!=$cpass){
			    $mess="Password not match!";
			} if($row>0){
			    $mess="This E-mail is Already Exist!";
			} if($row1>0){
			    $mess="This Username is Already Exist!";
			}else{
			  move_uploaded_file($_FILES["identityCard"]["tmp_name"],"NewsPhoto/".$_FILES["identityCard"]["name"]);
			 $query="INSERT INTO new_user( fullname, gender, phone, email,username,password,identityCard, role) VALUES ('$fullname','$gender','$phone','$email','$username','$pass','$identityCard','$role')";
			 $runquery=mysqli_query($conn,$query);
			 if($runquery){
                  
			  }else{
				 $mess="not register ".mysqli_connect_error($runquery);
			
			  } 
			  }
			  }

	  

if(isset($_GET['usernot_verified']))
{
	$usernot_verified=$_GET['usernot_verified'];
	$deletequery="UPDATE new_user SET status='notverified' WHERE id='$usernot_verified'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $mess="user not_verified";
	}else{
		 $message="user not_verified";
		}
} if(isset($_GET['userverified']))
{
	$userverified=$_GET['userverified'];
	$deletequery="UPDATE new_user SET status='verified' WHERE id='$userverified'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $mess="user verified";
	}else{
		 $message="user not verified";
		}
} 

?>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Online House Rental Management System</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">


	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	
</head>



				<!-- Export Datatable start -->
				<br><br><br>
				<div style="margin-left:300px;padding:50px;margin-right:30px;margin-top:30px"class="card-box mb-20">
					
					<div class="pd-2">
						<h4 style="text-align:center" class="text-blue h4">User Detail</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<thead>
								<tr>
								    <th>Id</th>
									<th>Full Name   </th>
									<th>E-mail     </th>
									<th>Phone      </th>
									<th>Role       </th>
									<th>Status     </th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>
							
<?php
$sql=mysqli_query($conn,"select * from new_user ");

while($row=mysqli_fetch_array($sql))
{
?>	
	
								<tr>
								    <td><?php echo htmlentities($row['id']);?></td>
								    <td><?php echo htmlentities($row['fullname']);?></td>
									<td><?php echo htmlentities($row['email']);?></td>
									<td><?php echo htmlentities($row['phone']);?></td>
								
									<td><?php echo htmlentities($row['role']);?></td>
									<td><?php if($row['status']=='verified') {echo'
										<img style="width:50px;height:30px"  src="../assets/images/verified.png">';}else{echo'
										<img style="width:50px;height:30px"  src="../assets/images/notverified.png">';}?></td>
									<td>
              						<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#add_user"><p style="color: royalblue;"><i class="fa fa-user"></i> Add User</p></a>
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> Edit</p></a> 
												<a class="dropdown-item" data-toggle="modal" type="button" data-target="#view_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> View</p></a>
												<a class="dropdown-item" href="?usernot_verified=<?php echo $row['id']?>"><i class="fa fa-remove"></i>Not verified</a>
												<a class="dropdown-item" href="?userverified=<?php echo $row['id']?>"><i class="fa fa-check-square"></i>Verified</a>
												
												<a class="dropdown-item" href="?id=<?php echo $row['id']?>"><i class="dw dw-delete"></i>Delete</a>
													
											</div>
										</div>
										</td>
									
									
					              
				
								</tr>
<div style="margin-left:300px" class="modal fade bs-example-modal-xl" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		   
		   <form name="dept" method="post" enctype="multipart/form-data">
		   <div class="container">
			 <div class="row align-items-center">
				<div class="col-md-20">
					<div class="pd-30 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-60">Register New User</p></h4></center>
						</div>

					
					        	<div class="row">
								<div class="col-md-12 col-sm-8">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" minlength="5" maxlength="40" autocomplete="off" name="fname"required class="form-control" placeholder="Full name">
								</div>
								</div>
								
							
								 <div class="col-md-12 col-sm-12">
								 	<div class="form-group row align-items-center">
											<label style="font-size:18px" class="col-sm-1 col-form-label">Gender*</label>
											<div class="col-sm-6">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" name="gen" class="custom-control-input" required>
													<label class="custom-control-label" for="male">Male</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" name="gen" class="custom-control-input" required>
													<label class="custom-control-label" for="female">Female</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="other" name="gen" class="custom-control-input" required>
													<label class="custom-control-label" for="other">Other</label>
												</div>
											</div>
										</div>
								 </div>
								 
								 
								 
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Phone number</label>
									<input type="text" pattern="[+2519][0-9]{12}" autocomplete="off" name="phon"required class="form-control"  placeholder="phone number">
								</div>
								</div>
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="off" name="emai" required class="form-control"  placeholder="E-mail">
								</div>
								</div>
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="user" minlength="3" maxlength="40" class="form-control" required placeholder="Username">
								</div>
							</div>	
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="16" required  placeholder="Password">
								</div>
							</div>		
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" name="cpass" class="form-control" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="16" required  placeholder="Confirm Password">
								</div>
							</div>	
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Identity Card</label>
									<input type="file" name="identityCard"accept="image/*" class="form-control" required >
								</div>
							</div>	
								<div class="col-md-12 col-sm-12">
								<div class="custom-control custom-checkbox mt-4">
											<input type="checkbox" class="custom-control-input" required id="customCheck1">
											<label class="custom-control-label" for="customCheck1">I have read and agreed to the <a style="color:royalblue" href="../agreementHouseRental.php">terms of services and privacy policy</a></label>
								</div>
							</div>	
						</div>
						
							
					
						
						
					
						<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="register" class="btn btn-primary">Register New User</button>
							<span style="color:red"><?php echo $mess;?></span>	
						</div>
					
							
				</div>
				
			</div>
		</div>
	</div>
	</form>
		</div>
		
		
						</div>
						</div>
						</div>
						</div>
<div style="margin-left:300px" class="modal fade bs-example-modal-xl" id="view_modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			 <div class="row align-items-center">
				<div class="col-md-20">
					<div class="pd-30 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-60">View User Information</p></h4></center>
						</div>
					<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
						<input type="hidden" name="id7" value="21">
							
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" name="fullname" class="form-control"readonly value="<?php echo $row['fullname']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Gender</label>
									<input type="text" name="gender" class="form-control"readonly value="<?php echo $row['gender']?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Phone number</label>
									<input type="text" name="phone" class="form-control" readonly value="<?php echo $row['phone']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" name="email" class="form-control" readonly value="<?php echo $row['email']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control" readonly value="<?php echo $row['username']?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Role</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['role']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Photo</label><br>
									<img style="width:200px;height:130px" readonly src="../NewsPhoto/<?php if($row['photo']==""){echo "noimage.png";}else{echo $row['photo'];}?>">
								</div>
							</div>	
							
						</div>
						</form>
							
							
					</div>
							
				</div>
			</div>
		</div>
	</div>
		</div>
		
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				
								
						</div>
						</div>
						</div>
						</div>
											
										<!-- modal edit class-->
		<div style="margin-left:300px" class="modal fade bs-example-modal-xl" id="update_modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
			 <form name="dept" method="post" enctype="multipart/form-data">
				<div class="col-md-12">
					<div class="pd-20 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-30">Update User Information</p></h4></center>
						</div>
						
						<div class="row">
						<input type="hidden" name="id7" value="21">
							
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
								    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
									<label>Full Name</label>
									<input type="text" name="fullname" class="form-control"required value="<?php echo $row['fullname']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Gender</label>
									<input type="text" name="gender" class="form-control"required value="<?php echo $row['gender']?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Phone number</label>
									<input type="text" name="phone" class="form-control" required value="<?php echo $row['phone']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" name="email" class="form-control" required value="<?php echo $row['email']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control" required value="<?php echo $row['username']?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								<label>Role</label><br>
								<select style="width:100px;height:40px" name="role" id="role">
								  <option value="admin" <?php if($row['role']=='admin'){echo "selected";} ?>>admin</option>
								  <option value="user"  <?php if($row['role']=='user'){echo "selected";} ?>>user</option>
								</select>
								</div>
								</div>
								
							
						</div>
						<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="updateUserInfo" class="btn btn-primary">Save changes</button>
								
						</div>
						</form>
						</div>
							
				</div>
			</div>
		</div>
	</div>
		</div>
		
			
						</div>
						</div>
						</div>
<?php  }?>
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
		

	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script></body>

<?php  include("adminfooter.php"); ?>