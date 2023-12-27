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
	$query=mysqli_query($conn,"UPDATE rent_home SET see='yes' WHERE id='$id'");
                
}
             if(isset($_POST['updateRent'])){
				 $id=$_POST['id'];
				 $rent=$_POST['rent'];
				 $status=mysqli_real_escape_string($conn,$_POST['status']);
				 $about_home=mysqli_real_escape_string($conn,$_POST['about_home']);
				 $payment=mysqli_real_escape_string($conn,$_POST['payment']);
				 $start_date=mysqli_real_escape_string($conn,$_POST['start_date']);
				 $end_date=mysqli_real_escape_string($conn,$_POST['end_date']);
				
				$query=mysqli_query($conn,"UPDATE rent_home SET about_home='$about_home',rent='$rent',status='$status',payment='$payment',start_date='$start_date',end_date='$end_date'WHERE id='$id'");
                if($query){
					 $mess="Data Updated!";
				}else{
					$mess=" ".mysqli_connect_errno();
				}
			 }
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM rent_home WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $message="deleted";
	}else{
		 $message="not deleted";
		}
} 
if(isset($_GET['not_active']))
{
	$not_active=$_GET['not_active'];
	$deletequery="UPDATE rent_home SET status='deactive' WHERE id='$not_active'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $mess="not_active";
	}else{
		 $message="not_active";
		}
} if(isset($_GET['actived']))
{
	$actived=$_GET['actived'];
	$update="UPDATE rent_home SET status='active' WHERE id='$actived'";
	$sel="SELECT * FROM rent_home where id='$actived'";
	$query=mysqli_query($conn,$sel);
	$dat=mysqli_fetch_assoc($query);
	$username=$dat['username'];
	$selectquery=mysqli_query($conn,"SELECT * FROM new_user WHERE username='$username'");
	$fetchdata=mysqli_fetch_assoc($selectquery);
	$email=$fetchdata['email'];
	$update=mysqli_query($conn,$update);
	if($update){
	  $mess="actived";
	            $link="<a href='http://localhost/house-rent/profile.php'></a>";
	            $subject = "Your house is activated by admin";
                $message = "Yeroo kana kaasee manni kee kireeffamuu ni danda'a click on this link ".$link;
                $sender = "From: oromobiblestudy@yahoo.com";
                if(mail($email, $subject, $message, $sender)){
                   
                }else{
                    $mesaage = "Failed while sending Message!!";
                }
           
	}else{
		 $message="not actived";
		}
} 
?>

			
			<!-- Export Datatable start -->
				<br><br><br>
				<div style="margin-left:300px;padding:50px;margin-right:30px;margin-top:30px" class="card-box mb-20">
					
					<div class="pd-2">
						<h4 style="text-align:center"class="text-blue h4">Rental Home Detail</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<thead>
								<tr>
								

									<th>id</th>
									<th>category</th>
									<th>rent</th>
									
									<th>home_location</th>
									<th>home_number</th>
									<th>status</th>
									<th>payment</th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>
							
<?php
$sql=mysqli_query($conn,"select * from rent_home WHERE status='active' or status='deactive' or status='booked'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>	
	
								<tr>
								<td><?php echo htmlentities($row['id']);?></td>
									<td><?php echo htmlentities($row['category']);?></td>
									<td><?php echo htmlentities($row['rent']);?></td>
									<td><?php echo substr($row['home_location'], 0, 10) . "...";?></td>
									<td><?php echo htmlentities($row['home_number']);?></td>
								
									<td><?php if($row['status']=='active') {echo'
										<img style="width:50px;height:30px"  src="../assets/images/active.png">';}else if($row['status']=='deactive'){echo'
										<img style="width:50px;height:30px"  src="../assets/images/notverified.png">';}else if($row['status']=='booked'){
											 echo'<img style="width:50px;height:30px"  src="../assets/images/booked.png">';}else{
												 echo'<img style="width:50px;height:30px"  src="../assets/images/rented.png">';}?></td>
									<td><?php echo "Not paid" ;?></td>
									<td>
              						<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> Edit</p></a> 
												<a class="dropdown-item" data-toggle="modal" type="button" data-target="#view_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> View</p></a>
												<a class="dropdown-item" href="?not_active=<?php echo $row['id']?>"><i class="fa fa-remove"></i>deactive</a>
												<a class="dropdown-item" href="?actived=<?php echo $row['id']?>"><i class="fa fa-check-square"></i>active</a>
													
												<a class="dropdown-item" href="?id=<?php echo $row['id']?>"><i class="dw dw-delete"></i>Delete</a>
													
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
						<center><h4><p class="mb-60">Available House Information</p></h4></center>
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
									<label>Price</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['rent']." ETB"?>">
								</div>
							</div>
							
						
						
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bedroom</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['bedroom']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bathroom</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['bathroom']?>">
								</div>
							</div>	
									<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment Method</label>
									<input type="text" name="rentingMethod" class="form-control"readonly value="<?php echo $row['rentingMethod'];?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Location</label>
									<a href="<?php echo $row['home_location']?>"><i style="color:royalblue" class="glyphicon glyphicon-map-marker">Track</i></a><input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['home_location']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Number</label>
									<input type="text" name="lgaa6" class="form-control" readonly value="<?php echo $row['home_number']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Image</label><br>
									<img style="width:200px;height:130px" readonly src="../RentHomePhoto/<?php echo $row['home_image']?>">
								</div>
							</div>	
							
					
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bedroom Image</label>
									<img style="width:200px;height:130px" readonly src="../RentHomePhoto/<?php echo $row['bed_image']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bathroom Image</label>
									<img style="width:200px;height:130px"readonly src="../RentHomePhoto/<?php echo $row['bath_image']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Toilet Image</label>
									<img style="width:200px;height:130px" readonly src="../RentHomePhoto/<?php echo $row['toilet_image']?>">
								</div>
							</div>	
							
						
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Kitchen Image</label>
									<img style="width:200px;height:130px"readonly  src="../RentHomePhoto/<?php echo $row['kitchen_image']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Owner Photo</label>
									<img style="width:200px;height:130px"readonly  src="../NewsPhoto/<?php echo $row['OwnerPhoto']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Ownership</label>
									<img style="width:200px;height:130px"readonly  src="../NewsPhoto/<?php echo $row['homeOwnership']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Identity Card</label>
									<img style="width:200px;height:130px"readonly  src="../RentHomePhoto/<?php echo $row['identityCard']?>">
								</div>
								</div>
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Status</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['status']?>">
								</div>
							</div>	
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Message</label><br>
									<textarea name="message" class="form-control" readonly><?php echo $row['about_home'];?></textarea>
								</div>
							</div>	
							
						
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment</label>
									<input type="text" name="lgaa6" class="form-control"readonly value="<?php echo $row['payment']?>">
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
									<label>Start Date</label>
									<input type="date" name="start_date" class="form-control" readonly value="<?php echo $row['start_date']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date</label>
									<input type="date" name="end_date" class="form-control"readonly value="<?php echo $row['end_date']?>">
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
						<center><h4><p class="mb-30">Update House Information</p></h4></center>
						</div>
						
						<div class="row">
						<input type="hidden" name="id7" value="21">
							
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Category</label>
									<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
									<input type="text" name="category" readonly class="form-control" value="<?php echo $row['category']?>">
								</div>
								</div>
	                            <div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Price</label>
									<input type="text" name="rent" class="form-control"readonly value="<?php echo $row['rent']." ETB"?>">
								</div>
							</div>
							
					
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bedroom</label>
									<input type="text" name="bedroom" readonly  class="form-control"  value="<?php echo $row['bedroom']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bathroom</label>
									<input type="text" name="bathroom" readonly   class="form-control"  value="<?php echo $row['bathroom']?>">
								</div>
							</div>	
									<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment Method</label>
									<input type="text" name="rentingMethod" class="form-control"readonly value="<?php echo $row['rentingMethod'];?>">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Location</label>
									<a href="<?php echo $row['home_location']?>"><i style="color:royalblue" class="glyphicon glyphicon-map-marker">Track</i></a><input type="text" name="home_location"readonly  class="form-control"  value="<?php echo $row['home_location']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Number</label>
									<input type="text" name="home_number"readonly class="form-control"  value="<?php echo $row['home_number']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Image</label><br>
									<img style="width:200px;height:130px" readonly src="../RentHomePhoto/<?php echo $row['home_image']?>">
								   
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bedroom Image</label>
									<img style="width:200px;height:130px" readonly src="../RentHomePhoto/<?php echo $row['bed_image']?>">
								   
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Bathroom Image</label>
									<img style="width:200px;height:130px" required src="../RentHomePhoto/<?php echo $row['bath_image']?>">
								    
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Toilet Image</label>
									<img style="width:200px;height:130px" required src="../RentHomePhoto/<?php echo $row['toilet_image']?>">
								    
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Kitchen Image</label>
									<img style="width:200px;height:130px" required  src="../RentHomePhoto/<?php echo $row['kitchen_image']?>">
								  
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Owner Photo</label>
									<img style="width:200px;height:130px"readonly  src="../NewsPhoto/<?php echo $row['OwnerPhoto']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Home Ownership</label>
									<img style="width:200px;height:130px"readonly  src="../NewsPhoto/<?php echo $row['homeOwnership']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Identity Card</label>
									<img style="width:200px;height:130px"readonly  src="../RentHomePhoto/<?php echo $row['identityCard']?>">
								</div>
								</div>
								
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Message</label><br>
									<textarea name="about_home" class="form-control" required><?php echo $row['about_home'];?></textarea>
								</div>
							</div>	
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Status</label>
									<input type="text" name="status" required class="form-control" value="<?php echo $row['status']?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Payment</label>
									<input type="text" name="payment" required class="form-control" value="<?php echo $row['payment']?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" readonly class="form-control"  value="<?php echo $row['username']?>">
								</div>
								</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Start Date</label>
									<input type="date" name="start_date" class="form-control" required value="<?php echo $row['start_date']?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date</label>
									<input type="date" name="end_date" class="form-control"required value="<?php echo $row['end_date']?>">
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
				<button type="submit" name="updateRent" class="btn btn-primary">Save changes</button>
				<span><?php echo $mess; ?></span>
						</div>
						</div>
						</div>
						</div>
						</form>
									
								</tr>
								
<?php  }?>
								
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