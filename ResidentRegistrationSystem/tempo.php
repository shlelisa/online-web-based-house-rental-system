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
$id=mysqli_real_escape_string($con, $_POST['id']);
$full_name=mysqli_real_escape_string($con, $_POST['full_name']);
$username=mysqli_real_escape_string($con, $_POST['username']);	
$email=mysqli_real_escape_string($con, $_POST['email']);
$role=mysqli_real_escape_string($con, $_POST['role']);
$query=mysqli_query($con,"update set admin username='$username', email='$email', role='$role' where id='$id'");
if($query)
{
$_SESSION['msg']="Account Updated Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Not Updated";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Manage Staff</title>

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
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	
</head>
<body>
<?php $query=mysqli_query($con,"select * from admin where username='".$_SESSION['alogin']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
				<?php include('includes/header.php'); ?>
	<div class="mobile-menu-overlay"></div>

<div class="main-container">
			
				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Manage Staff</h4>
						<center><font color="green" align="center"><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?></font></center>
				
					</div>
					
					<div class="pb-20">
					
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
								<th class="table-plus datatable-nosort">#</th>
									<th>Username</th>
									<th>Email</th>
									<th>Role</th>
									<th>Account</th>
									
								
									
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<?php
$query=mysqli_query($con,"select * from admin ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									<td class="table-plus"><?php echo $cnt;?></td>
									<td><?php echo htmlentities($row['username']);?></td>
									<td><?php echo htmlentities($row['email']);?></td>
									<td><?php echo htmlentities($row['role']);?></td>
									
									<td><?php if($row['status']==0){
								echo'<font style="color: red;">Deactivated</font>';
						}
						else{
							echo' <font style="color: green;">Active';
							}
						 ?></td></font>
								
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											<form name="dept" action="" method="post">
											<a href="#login-modal<?php echo $row['id']?>" class="btn-block" data-backdrop="static" data-toggle="modal" data-target="#login-modal" type="button">
								<i class="icon-copy fa fa-eye" aria-hidden="true"></i>View
							</a>
											<!--<a class="dropdown-item" href="#view_modal<?php echo $row['id']?>"><i class="icon-copy fa fa-eye" aria-hidden="true"></i>View</a>-->
											<a class="dropdown-item" href="#update_modal<?php echo $row['id']?>"><i class="icon-copy fa fa-edit" aria-hidden="true"></i>Edit</a>
</form>
												<a class="dropdown-item" href="admin-account.php?eid=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to Active the account?')"><i class="dw dw-unlock"></i>Active</a>
												<a class="dropdown-item" href="admin-account-deactive.php?eid=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to Deactivate the account?')"><i class="dw dw-lock"></i>Deactive</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- Login modal -->
					<div class="col-md-4 col-sm-12 mb-30">
						
							
							<div class="modal fade" id="login-modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="login-box bg-white box-shadow border-radius-10">
											<div class="login-title">
												<h2 class="text-center text-primary">Update Account</h2>
											</div>
										
						
						
						
						
							
						
						</form><form name="dept" method="post" enctype="multipart/form-data">
						
							<div class="input-group custom">
						<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
								<input type="text" class="form-control form-control-lg" name="username"placeholder="Username" value="<?php echo htmlentities($row['username']);?>">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							
							<div class="input-group custom">
							
								<input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="<?php echo htmlentities($row['email']);?>">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="email"></i></span>
								</div>
							</div>
							<div class="input-group custom">
										
											
											<select name="role" class="custom-select form-control" required>
											<option disabled selected>Select Role</option>
												<option <?php if($row['role']=="admin") {echo "selected";}?> value="admin">Super Admin</option>
												<option <?php if($row['role']=="manager") {echo "selected";}?> value="manager">Manager</option>
												<option <?php if($row['role']=="registrar") {echo "selected";}?> value="registrar">Registrar</option>
												<option <?php if($row['role']=="finance") {echo "selected";}?> value="finance">Finance</option>
												<option <?php if($row['role']=="security") {echo "selected";}?> value="security">security</option>
												<option <?php if($row['role']=="landAdmin") {echo "selected";}?> value="landAdmin">Land Admin</option>
												<option <?php if($row['role']=="pservice") {echo "selected";}?> value="pservice">Public service</option>
												<option <?php if($row['role']=="sectormanager") {echo "selected";}?> value="sectormanager">Sector Manager</option>
												<option <?php if($row['role']=="imxadmin") {echo "selected";}?> value="imxadmin">Imx Admin</option>
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
						
					</div>

			 
			 
			 
			 
			 
			 
			 
			 
			 
			 




							</tbody>
							<?php 
$cnt++;
} ?> 	
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
				
			</div>
			
			<?php include('includes/footer.php');?>
		</div>
	</div>
	 <?php } ?>
	<!-- js -->
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
	
</html>
     <?php } ?>