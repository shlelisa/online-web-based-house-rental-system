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
     $id = $_POST['id'];
	 
	$full_name=mysqli_real_escape_string($con, $_POST['full_name']);
	$birth_date=mysqli_real_escape_string($con, $_POST['birth_date']);	
	$age=mysqli_real_escape_string($con, $_POST['age']);	
	$Blood_Group=mysqli_real_escape_string($con, $_POST['Blood_Group']);	
	$mother_name=mysqli_real_escape_string($con, $_POST['mother_name']);	
	$house_number=mysqli_real_escape_string($con, $_POST['house_number']);	
	$ecp=mysqli_real_escape_string($con, $_POST['ecp']);	
	$phone=mysqli_real_escape_string($con, $_POST['phone']);	
	$address_of_resident=mysqli_real_escape_string($con, $_POST['address_of_resident']);	
	$marital_status=mysqli_real_escape_string($con, $_POST['marital_status']);	
	$ephone=mysqli_real_escape_string($con, $_POST['ephone']);	
	$kebele=mysqli_real_escape_string($con, $_POST['kebele']);	
    $image=$_FILES["image"]["name"];
	$gender=mysqli_real_escape_string($con, $_POST['gender']);	
	
$sql=mysqli_query($con,"SELECT * FROM registerresident WHERE id='$id'");
while($r=mysqli_fetch_array($sql))
{
if(empty($image)){
	$image=$r['image'];
}
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
$query=mysqli_query($con,"UPDATE registerresident  SET  full_name='$full_name',birth_date='$birth_date',age='$age',Blood_Group='$Blood_Group',mother_name='$mother_name',house_number='$house_number',ecp='$ecp',phone='$phone',address_of_resident='$address_of_resident',marital_status='$marital_status',ephone='$ephone',kebele='$kebele',image='$image',gender='$gender' WHERE id='$id'");
}
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
	<title>Manage Resident</title>

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
						<h4 class="text-blue h4">Manage Resident</h4>
						
					</div>
					
					<div class="dataTables_length" id="example_length">
					<label>Show 10 entries if you want to see more just het next button bellow the table</label></div>
					
					<div class="pb-20">
					
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
								<th class="table-plus datatable-nosort">#</th>
									<th>Full Name</th>
									<th>ID Number</th>
									<th>Address</th>
									<th>Account</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								 <?php
$sql=mysqli_query($con,"select * from registerresident");
$cnt=1;
while($rw=mysqli_fetch_array($sql))
{	
?>	                                <td class="table-plus"><?php echo $cnt;?></td>
									<td><?php echo htmlentities($rw['full_name']);?></td>
									<td><?php echo htmlentities($rw['id_no']);?></td>
									<td><?php echo htmlentities($rw['address_of_resident']);?></td>
									
									<td><?php if($rw['status']==0){
								echo'<font style="color: red;">Deactivated</font>';
						}
						else{
							echo' <font style="color: green;">Active';
							}
						 ?></td></font>
								<!--kebele-last@kebele-last.iam.gserviceaccount.com  
								102489336721499864660-->
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											
<a class="dropdown-item" href='residentinfo/viewdetals1.php?id=<?php echo htmlentities($rw['id']);?>'><i class="dw dw-eye"></i>View</a>     <a class="dropdown-item" href='card/card.php?id=<?php echo htmlentities($rw['id']);?>'><i class="dw dw-eye"></i> ID Card Front</a> 
<a class="dropdown-item" href='card/back.php?id=<?php echo htmlentities($rw['id']);?>'><i class="dw dw-eye"></i> ID Card Back</a> 
												<a class="dropdown-item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $rw['id']?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> Edit</p></a>                   
												<a class="dropdown-item" href="admin-account1.php?uid=<?php echo $rw['id']?>&del=delete" onClick="return confirm('Are you sure you want to Active the account?')"><i class="dw dw-unlock"></i>Active</a>
												<a class="dropdown-item" href="admin-account-deactive1.php?uid=<?php echo $rw['id']?>&del=delete" onClick="return confirm('Are you sure you want to Deactivate the account?')"><i class="dw dw-lock"></i>Deactive</a>
											</div>
										</div>
									</td>
								</tr>
								
		
							
							
					<!-- modal edit class-->
		<div class="modal fade bs-example-modal-xl" id="update_modal<?php echo $rw['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div class="modal-content">
						
						  <div class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-12">
					<div class="pd-20 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-30 text-blue">Update Form</p></h4></center>
						</div>
						<center><div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="profile-image">
								
								<?php if($rw['image']==""){ ?>
   <img id="image" src="images/noimage.png"><?php } else {?>
   <img id="image" src="images/<?php echo htmlentities($rw['image']);?>" class="avatar-image">
   <?php } ?>
							</div>
							</div>
					</div></center>
						<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
						<input type="hidden" name="id7" value="21">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Full Name</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" name="full_name" class="form-control" value="<?php echo $rw['full_name']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Mother Name</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="mother_name" name="mother_name" value="<?php echo htmlentities($rw['mother_name']);?>"   pattern="\D\S+(\s+\D\S+)+" autocomplete="off" >
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Date Of Birth</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="date" class="form-control" id="birth_date" name="birth_date" value="<?php echo htmlentities($rw['birth_date']);?>"  autocomplete="off" >
								</div>
							</div>
					</div>
						

						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Age</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="age" name="age" value="<?php echo htmlentities($rw['age']);?>" autocomplete="off"><span id="error3" style="color:red"></span>
								</div>
							</div>

								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Blood Group </label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="Blood_Group" name="Blood_Group" value="<?php echo htmlentities($rw['Blood_Group']);?>" autocomplete="off"><span id="error3" style="color:red"></span>
								</div>
							</div>
						
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>House Number</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="house_number" name="house_number" value="<?php echo htmlentities($rw['house_number']);?>" autocomplete="off">
								</div>
							</div>
							
						</div>
						
						<div class="row">
				         	<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Phone</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="phone" name="phone"  value="<?php echo htmlentities($rw['phone']);?>"autocomplete="off">
								</div>
							</div>
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Emeregcy Contact Person</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="ecp" name="ecp" value="<?php echo htmlentities($rw['ecp']);?>" placeholder="Emeregcy Contact Person"  autocomplete="off">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div clasSs="form-group">
							<label>Emeregcy Phone Number</label>
							<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
							<input class="form-control form-control-lg" type="text"id="ephone" name="ephone" value="<?php echo htmlentities($rw['ephone']);?>" autocomplete="off">
						</div>
						</div>
						</div>
								<div class="row">
				         	<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Address Of Resident</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="address_of_resident" name="address_of_resident"  value="<?php echo htmlentities($rw['address_of_resident']);?>"autocomplete="off">
								</div>
							</div>


							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Regstration Number</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" name="regstration_no" value="<?php echo htmlentities($rw['regstration_no']);?>" readonly  autocomplete="off">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div clasSs="form-group">
							<label>Id Number</label>
							<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
							<input class="form-control form-control-lg" type="text"id="id_no" name="id_no" value="<?php echo htmlentities($rw['id_no']);?>" readonly autocomplete="off">
						</div>
						</div>
						</div>
 			<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Marital Status</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="marital_status" name="marital_status" value="<?php echo htmlentities($rw['marital_status']);?>"  >
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Kebele</label>
									<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
									<input type="text" class="form-control" id="kebele" name="kebele" value="<?php echo htmlentities($rw['kebele']);?>"  autocomplete="off">
								</div>
							</div>
							
							<div class="col-md-4 col-sm-12">
						<div class="form-group">
						<label>Upload Profile Picture</label>
						<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
						<input type="file" class="form-control form-control-lg" id="image" name="image" class="form-control"  value="selected"  autocomplete="off"/>
						</div>
						</div>
				</div>

					<div class="form-group">
					<label>Gender</label>
					<div class="d-flex">
					<div class="custom-control custom-radio mb-5 mr-20">
					<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
						<input type="radio" id="customRadio4" class="custom-control-input" selected name="gender"<?php if($rw['gender']=="Male"){ echo "checked";}?> value="Male">
						<label class="custom-control-label weight-400" for="customRadio4">Male</label>
					</div>
					<div class="custom-control custom-radio mb-5">
					<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
						<input type="radio" id="customRadio5" class="custom-control-input"  name="gender" <?php if($rw['gender']=="Female") {echo "checked";}?> value="Female">
						<label class="custom-control-label weight-400" for="customRadio5">Female</label>
					</div>
				<div class="custom-control custom-radio mb-6">
				<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
						&nbsp;<input type="radio" id="customRadio6" class="custom-control-input" selected name="gender"<?php if($rw['gender']=="Other"){ echo "checked";}?> value="Male">
						<label class="custom-control-label weight-400" for="customRadio6">Other</label>
					</div>
					</div>
															</div>
					<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="update" class="btn btn-primary">Save changes</button>
								
						</div>
					
              </form>
							<?php 
$cnt++;
} ?> 	
</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
<?php include('includes/footer.php');}?>
		</div>
	</div>
	
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