<?php
session_start();

include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['update']))
{
$id=mysqli_real_escape_string($con, $_POST['id']);
$username=mysqli_real_escape_string($con, $_POST['username']);	
$email=mysqli_real_escape_string($con, $_POST['email']);
$role=mysqli_real_escape_string($con, $_POST['role']);
$query=mysqli_query($con,"update admin set username='$username', email='$email', role='$role' where id='$id'");
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
<?php if($_SESSION['id']!="");?>
<?php $query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
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
						
					</div>
					
					<div class="dataTables_length" id="example_length">
					<label>Show 10 entries if you want to see more just het next button bellow the table</label></div>
					
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
$query=mysqli_query($con,"select * from admin");                                                                                                                                                                                                                       
																																																																																																																																																																																																		
$cnt=1;

while($row=mysqli_fetch_array($query))
{
$sql=mysqli_query($con,"select * from registerresident where username='".$row['username']."'");
while($rw=mysqli_fetch_array($sql))
{	
?>	                                <td class="table-plus"><?php echo $cnt;?></td>
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
												 <a class="dropdown-item" type="button" href='residentinfo/viewdetals1.php?id=<?php echo htmlentities($rw['id']);?>'><i class="dw dw-eye"></i> View</a>
												                    
												<a class="dropdown-item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> Edit</p></a>                   
												<a class="dropdown-item" href="admin-account.php?eid=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to Active the account?')"><i class="dw dw-unlock"></i>Active</a>
												<a class="dropdown-item" href="admin-account-deactive.php?eid=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to Deactivate the account?')"><i class="dw dw-lock"></i>Deactive</a>
											</div>
										</div>
									</td>
								</tr>
								
			<!-- modal class-->
		<div class="modal fade bs-example-modal-xl" id="view_modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div class="modal-content">
						
					<center>	  
					
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard">
						
						</form>
					</div>
							
				</div>
			</div>
		</div>
	</div>
		</div>	</center>
		
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="update" class="btn btn-primary">Save changes</button>
								
						</div>
						</div>
						</div>
						</div>
							
							
					<!-- modal edit class-->
		<div class="modal fade bs-example-modal-xl" id="update_modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div class="modal-content">
						
						  <div class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-12">
					<div class="pd-20 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-30">Update Form</p></h4></center>
						</div>
						<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" class="form-control" name="full_name" value="<?php echo htmlentities($row['full_name']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Age</label>
									<input type="number" class="form-control" name="age" value="<?php echo htmlentities($row['age']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								
									<label>Date Of Birth</label>
									<input type="text"  class="form-control form-control-lg date-picker" name="date_of_birth" value="<?php echo htmlentities($row['date_of_birth']); ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="username" value="<?php echo htmlentities($row['username']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" value="<?php echo htmlentities($row['password']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" value="<?php echo htmlentities($row['email']); ?>">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Phone</label>
									<input type="text" class="form-control" name="phone" value="<?php echo htmlentities($row['phone']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>country</label>
									<input type="text" class="form-control" name="country" value="<?php echo htmlentities($row['country']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
							<label>Region</label>
							<select class="selectpicker form-control form-control-lg" data-style="btn-outline-secondary btn-lg" name="region">
								<option selected>Oromia</option>
								<option>SNNP</option>
								<option>Sidama</option>
								<?php echo htmlentities($row['region']); ?>
							</select>
						</div>
							</div>
						</div>
						<div class="row">
						
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control" name="city" value="<?php echo htmlentities($row['city']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" name="address" value="<?php echo htmlentities($row['address']); ?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Role</label>
									<input type="text" class="form-control" name="role" value="<?php echo htmlentities($row['role']); ?>">
								</div>
							</div>
						</div>
						
						<div class="form-group">
																<label>Gender</label>
																<div class="d-flex">
																<div class="custom-control custom-radio mb-5 mr-20">
																	<input type="radio" id="customRadio4" class="custom-control-input"  name="gender"<?php if($row['gender']=="Male") {echo "checked";}?> value="Male">
																	<label class="custom-control-label weight-400" for="customRadio4">Male</label>
																</div>
																<div class="custom-control custom-radio mb-5">
																	<input type="radio" id="customRadio5" class="custom-control-input"  name="gender" <?php if($row['gender']=="Female") {echo "checked";}?> value="Female">
																	<label class="custom-control-label weight-400" for="customRadio5">Female</label>
																</div>
																</div>
															</div>
						<div class="form-group"><label>Upload Profile Picture</label>
						<input type="file" style="width:400px; height:40px"class="form-control form-control-lg" id="image" name="image" class="form-control"  value="selected" />
						

						</div>
<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="update" class="btn btn-primary">Save changes</button>
								
						</div>

              </form>
							<?php 
$cnt++;
} }?> 	
</tbody>
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
<?php }?>