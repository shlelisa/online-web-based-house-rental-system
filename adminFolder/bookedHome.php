
<?php  include"adminHeader.php"; ?>
				
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">

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
			<?php  
			 include("connection.php");
			 $mess="";
			 $message="";
			 
if(isset($_GET['notification'])){
	$id=$_GET['notification'];
	$query=mysqli_query($conn,"UPDATE booked_home SET see='yes' WHERE id='$id'");
                
}			 
			 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM booked_home WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $mess="deleted";
	}else{
		 $message="not deleted";
		}
} 
if(isset($_GET['approved']))
{
	$approved=$_GET['approved'];
	$deletequery="UPDATE booked_home SET approval='1' WHERE id='$approved'";
	$rundeletequery=mysqli_query($conn,$deletequery);

		
   $mess="approved";
   $sel="SELECT * FROM booked_home where id='$approved'";
	$query=mysqli_query($conn,$sel);
	$dat=mysqli_fetch_array($query);
	$username=$dat['username'];
	$selectquery=mysqli_query($conn,"SELECT * FROM new_user WHERE username='$username'");
	$fetchdata=mysqli_fetch_array($selectquery);
	$email=$fetchdata['email'];
	if($rundeletequery){
	  $mess="actived";
	           $link="<a href='http://localhost/house-rent/profile.php'></a>";
	            $subject = "Your Rent Request is approved";
                $message = "click this link to make payment ".$link;
                $sender = "From: oromobiblestudy@yahoo.com";
                if(mail($email, $subject, $message, $sender)){
                   
                }else{
                    $mesaage = "Failed while sending Message!!";
                }
	  
	  
	  
	}else{
		 $message="not approved";
		}
} 


if(isset($_GET['pending']))
{
	$pending=$_GET['pending'];
	$deletequery="UPDATE booked_home SET approval='0' WHERE id='$pending'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $mess="pending";
	}else{
		 $message="not pending";
		}
} 
if(isset($_POST['updatebooked'])){
	$id=$_POST['id'];
	$status=mysqli_real_escape_string($conn,$_POST['status']);
	$payment=mysqli_real_escape_string($conn,$_POST['payment']);
	 
	 $query=mysqli_query($conn,"UPDATE booked_home SET status='$status',payment='$payment' WHERE id='$id'");
                if($query){
					 $mess="Data Updated!";
				}else{
					$message=" ".mysqli_connect_error($query);
				}
}
			?>

			
			<!-- Export Datatable start -->
				<br><br><br>
				<div style="margin-left:300px;padding:50px;margin-right:30px;margin-top:30px"class="card-box mb-20">
					
					<div class="pd-2">
						<h4 style="text-align:center" class="text-blue h4">Booked Home Detail</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<thead>
								<tr>

									<th>id</th>
									<th>Fullname</th>
									<th>Address</th>
									<th>Payment</th>
									<th>Start_date</th>
									<th>End_date</th>
									<th>status</th>
									<th>Approval</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
<?php
$sql=mysqli_query($conn,"select * from booked_home WHERE payment='0' AND status='booked'");

while($row=mysqli_fetch_array($sql))
{

  ?>	
	
								<tr>
								<td><?php echo htmlentities($row['id']);?></td>
									<td><?php echo htmlentities($row['fullname']);?></td>
									<td><?php echo htmlentities($row['address']);?></td>
									<td><?php echo "Not paid";?></td>
									<td><?php echo htmlentities($row['start_date']);?></td>
								
									<td><?php echo htmlentities($row['end_date']);?></td>
									<td><?php  if($row['status']=='booked'){
									 echo'<img style="width:50px;height:30px"  src="../assets/images/booked.png">';
									 }else{
									 echo'<img style="width:50px;height:30px"  src="../assets/images/rented.png">';
					}?></td>
									<td><?php if($row['approval']=='0'){echo'<img style="width:50px;height:30px"  src="../assets/images/pending.png">';}else{
										echo'<img style="width:50px;height:30px"  src="../assets/images/approved.png">';
									};?></td>
								
									<td>
              						<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> Edit</p></a> 
												<a class="dropdown-item" data-toggle="modal" type="button" data-target="#view_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> View</p></a>
												<a class="dropdown-item" href="?id=<?php echo $row['id']?>"><i class="dw dw-delete"></i>Delete</a>
												<a class="dropdown-item" href="?approved=<?php echo $row['id']?>"><i class="fa fa-check-square"></i>Approved</a>
												<a class="dropdown-item" href="?pending=<?php echo $row['id']?>"><i class="fa fa-remove"></i>Pending</a>
													
											</div>
										</div>
										</td>
     <div style="margin-left:300px;" class="modal fade bs-example-modal-xl" id="view_modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-20">
					<div class="pd-30 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-60">Available Booked House Information</p></h4></center>
						</div>
					<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
						<input type="hidden" name="id7" value="21">
							
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Category</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['category']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Full name</label>
									<input type="text" name="fname" class="form-control"readonly value="<?php echo $row['fullname']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Phone</label>
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
									<label>Lessor Photo</label>
									<img style="width:200px;height:130px"readonly  src="../RentHomePhoto/<?php echo $row['identityCard']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Lessor Identity Card</label>
									<img style="width:200px;height:130px"readonly  src="../RentHomePhoto/<?php echo $row['identityCard']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Family member</label>
									<input type="text" name="fmember" class="form-control" readonly value="<?php echo $row['family_member']?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Children</label>
									<input type="text" name="children" class="form-control" readonly value="<?php echo $row['children']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control" readonly value="<?php echo $row['address']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>House Id</label><br>
									<input type="text" name="hid" class="form-control" readonly value="<?php echo $row['house_id']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment</label><br>
									<input type="text" name="payment" class="form-control" readonly value="<?php echo $row['payment']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Start Date</label><br>
									<input type="date" name="start_date" class="form-control" readonly value="<?php echo $row['start_date']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date</label><br>
									<input type="date" name="end_date" class="form-control" readonly value="<?php echo $row['end_date']?>">
								</div>
							</div>	
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Message</label><br>
									<textarea name="message" class="form-control" readonly><?php echo $row['message'];?></textarea>
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Status </label>
									<input type="text" name="status" class="form-control" readonly value="<?php echo $row['status']?>">
								</div>
								</div>
								
									<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment method </label>
									<input type="text" name="rentingMethod" class="form-control" readonly value="<?php echo $row['rentingMethod']?>">
								</div>
								</div>
									<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Price </label>
									<input type="text" name="price" class="form-control" readonly value="<?php echo $row['price']?>">
								</div>
								</div>

						
						   <?php 
							   $sql=mysqli_query($conn,"select * from rent_home WHERE id='".$row['house_id']."'");
                               $data=mysqli_fetch_array($sql);
							   $ownerUsername=$data['username'];
							   
							    $query=mysqli_query($conn,"select * from new_user WHERE username='$ownerUsername'");
                               $data=mysqli_fetch_array($query);
							   $phone=$data['phone'];

							?>
								
						     	<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Owner Username </label>
									<input type="email" name="Owneremail" class="form-control" readonly value="<?php echo $ownerUsername;?>">
								</div>
								</div>
								
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Owner Phone </label>
									<input type="text" name="phone" class="form-control" readonly value="<?php echo $phone;?>">
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
						<form name="dept" method="post" enctype="multipart/form-data">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-12">
					<div class="pd-20 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-30">Update Booked House Information</p></h4></center>
						</div>
						
						<div class="row">
						<input type="hidden" name="id7" value="21">
						
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Category</label>
									
									<input type="hidden" name="id" value="<?php echo $row['id'];?>">
									<input type="text" name="category" class="form-control"readonly value="<?php echo $row['category']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Full name</label>
									<input type="text" name="fname" class="form-control"readonly value="<?php echo $row['fullname']?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Phone</label>
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
									<label>Lessor Photo</label>
									<img style="width:200px;height:130px"readonly  src="../RentHomePhoto/<?php echo $row['identityCard']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Lessor Identity Card</label>
									<img style="width:200px;height:130px"readonly  src="../RentHomePhoto/<?php echo $row['identityCard']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Family member</label>
									<input type="text" name="fmember" class="form-control" readonly value="<?php echo $row['family_member']?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Children</label>
									<input type="text" name="children" class="form-control" readonly value="<?php echo $row['children']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control" readonly value="<?php echo $row['address']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>House Id</label><br>
									<input type="text" name="hid" class="form-control" readonly value="<?php echo $row['house_id']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment</label><br>
									<input type="text" name="payment" class="form-control" required value="<?php echo $row['payment']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Start Date</label><br>
									<input type="date" name="start_date" class="form-control" readonly value="<?php echo $row['start_date']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date</label><br>
									<input type="date" name="end_date" class="form-control" readonly value="<?php echo $row['end_date']?>">
								</div>
							</div>	
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Message</label><br>
									<textarea name="message" class="form-control" readonly><?php echo $row['message'];?></textarea>
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Status </label>
									<input type="text" name="status" class="form-control" required value="<?php echo $row['status']?>">
								</div>
								</div>
								
									<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment method </label>
									<input type="text" name="rentingMethod" class="form-control" readonly value="<?php echo $row['rentingMethod']?>">
								</div>
								</div>
									<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Price </label>
									<input type="text" name="price" class="form-control" readonly value="<?php echo $row['price']?>">
								</div>
								</div>	
						
                              <?php 
							   $sql=mysqli_query($conn,"select * from rent_home WHERE id='".$row['house_id']."'");
                               $data=mysqli_fetch_array($sql);
							   $ownerUsername=$data['username'];
							   
							   $query=mysqli_query($conn,"select * from new_user WHERE username='$ownerUsername'");
                               $data=mysqli_fetch_array($query);
							   $phone=$data['phone'];
   
							  ?>
								
						     	<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Owner Username </label>
									<input type="email" name="Owneremail" class="form-control" readonly value="<?php echo $ownerUsername;?>">
								</div>
								</div>
								
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Owner Phone </label>
									<input type="text" name="phone" class="form-control" readonly value="<?php echo $phone;?>">
								</div>
								</div>
						</div>
							
							
					</div>
							
				</div>
			</div>
		</div>
	</div>
		</div>
		
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="updatebooked" class="btn btn-primary">Save changes</button>
				<span style="color:green"><?php echo $mess; ?></span>
				<span style="color:red"><?php echo $message; ?></span>
						</div>
						</div>
						</div>
						</div>
						</form>
									
								</tr>
								
<?php }?>
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
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

<?php  include"adminfooter.php"; ?>