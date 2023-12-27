	<?php include("adminHeader.php"); 
	include("connection.php");
	$mess="";
	if (isset($_GET['id_delete']))
{
    $delid = $_GET['id_delete'];
    $deletequery = "DELETE FROM rentProcess WHERE id='$delid'";
    $rundeletequery = mysqli_query($conn, $deletequery);
    if ($rundeletequery)
    {
        $mess = "deleted";
    }
    else
    {
        $mess = "not deleted";
    }
}
	
	if (isset($_POST['updateRentingprocess']))
{
    $id = $_POST['id'];
    $currentday = mysqli_real_escape_string($conn, $_POST['currentDay']);
    $endDate = mysqli_real_escape_string($conn, $_POST['endDate']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $deliveryFee = mysqli_real_escape_string($conn, $_POST['deliveryFee']);
    $rentingMethod = mysqli_real_escape_string($conn, $_POST['rentingMethod']);
   
    

   
    $updatequery = mysqli_query($conn, "UPDATE rentProcess SET currentDay='$currentday',endDate='$endDate',status='$status',price='$price',deliveryFee='$deliveryFee',rentingMethod='$rentingMethod' WHERE id='$id'");
    if ($updatequery)
    {
        $mess = "Data updated";
    }
    else
    {
        $mess = "" . mysqli_connect_errno();
    }
}
?>	
	

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
				
				<br><br><br>
				<div style="margin-left:300px;padding:50px;margin-right:30px;margin-top:30px" class="card-box mb-20">
					
					<div class="pd-2">
						<h4 style="text-align:center" class="text-blue h4">Renting Detail Process</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<thead>
								<tr>
								

									<th>id</th>
									<th>Owner Username</th>
									<th>category</th>
									<th>Renting Method</th>
									<th>Price</th>
									<th>Delivery Fee</th>
									<th>Delivered</th>
									
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>
							
<?php
$sql = mysqli_query($conn, "select * from rentprocess ");
while ($row = mysqli_fetch_array($sql))
{
?>	
	
								<tr>
								    <td><?php echo htmlentities($row['id']); ?></td>
								     <td><?php echo htmlentities($row['Ownerusername']); ?></td>
								
									<td><?php echo htmlentities($row['category']); ?></td>
									<td><?php echo htmlentities($row['rentingMethod']); ?></td>
									
									<td><?php echo htmlentities($row['price']); ?></td>
									<td><?php echo htmlentities($row['deliveryFee']); ?></td>
									<td><?php if($row['status']=='0') {echo'
										<img style="width:50px;height:30px"  src="../assets/images/ondeliver.png">';}else if($row['status']=='1'){echo'
										<img style="width:50px;height:30px"  src="../assets/images/delivered.png">';}?></td>
									
									<td>
									<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#updaterentprocess_modal<?php echo $row['id'] ?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> </p></a> 
												<a class="dropdown-item" data-toggle="modal" type="button" data-target="#viewretprocess_modal<?php echo $row['id'] ?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> </p></a>
					                           
												<a class="dropdown-item" href="?id_delete=<?php echo $row['id'] ?>"><i class="dw dw-delete"></i></a>
												
											</div>
										</div>
									  </td>
									
								</tr>
									<!-- modal class-->
		<div style="margin-left:250px" class="modal fade bs-example-modal-xl" id="viewretprocess_modal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-20">
					<div class="pd-30 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-60">Renting Process Data Information</p></h4></center>
						</div>
					<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
						<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Owner username</label>
									<input type="text" name="Ownerusername" class="form-control"readonly value="<?php echo $row['Ownerusername'] ?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Category</label>
									<input type="text" name="category" class="form-control"readonly value="<?php echo $row['category'] ?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>renting Method</label>
									<input type="text" name="rentingMethod" class="form-control"readonly value="<?php echo $row['rentingMethod'] ?>">
								</div>
							</div>	
							
						
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>price</label>
									<input type="number" name="price" class="form-control" readonly value="<?php echo $row['price'] ?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>deliveryFee</label>
									<input type="number" name="deliveryFee" class="form-control" readonly value="<?php echo $row['deliveryFee'] ?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>fullname Lessor</label>
									<input type="text" name="fullnameLessor" class="form-control" readonly value="<?php echo $row['fullnameLessor'] ?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>phoneLessor</label>
									<input type="text" name="phoneLessor" class="form-control" readonly value="<?php echo $row['phoneLessor'] ?>">
								</div>
								</div>
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>emailLessor</label>
									<input type="email" name="emailLessor" class="form-control" readonly value="<?php echo $row['emailLessor'] ?>">
								</div>
								</div>
								
							
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>photo Lessor</label>
									<img style="width:200px;height:130px"readonly  src="../NewsPhoto/<?php echo $row['photoLessor']?>">
								</div>
								</div>
								
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>photo Homeowner</label>
									<img style="width:200px;height:130px"readonly  src="../NewsPhoto/<?php echo $row['photoHomeowner']?>">
								</div>
								</div>
								
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>fullname Homeowner</label>
									<input type="text" name="fullnameHomeowner" class="form-control"readonly value="<?php echo $row['fullnameHomeowner']?>">
								</div>
							</div>	
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>phone Homeowner</label>
									<input type="text" name="phoneHomeowner" class="form-control"readonly value="<?php echo $row['phoneHomeowner']?>">
								</div>
							</div>	
					
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>email Homeowner</label>
									<input type="email" name="emailHomeowner" class="form-control" readonly value="<?php echo $row['emailHomeowner'] ?>">
								</div>
								</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Start Day</label>
									<input type="date" name="currentDay" class="form-control" readonly value="<?php echo $row['currentDay'] ?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date</label>
									<input type="date" name="endDate" class="form-control"readonly value="<?php echo $row['endDate'] ?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Status</label>
									<input type="text" name="status" class="form-control"readonly value="<?php if($row['status']=="0"){echo"Not Delivered";}else{echo"Delivered";}?>">
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
		<div style="margin-left:250px" class="modal fade bs-example-modal-xl" id="updaterentprocess_modal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-12">
					<div class="pd-20 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-30">Update Renting process Home Information</p></h4></center>
						</div>
						<form name="dept" method="post" enctype="multipart/form-data">
							<div class="row">
						<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Owner username</label>
									<input type="hidden" name="id" class="form-control"readonly value="<?php echo $row['id'] ?>">
								
									<input type="text" name="Ownerusername" class="form-control"readonly value="<?php echo $row['Ownerusername'] ?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Category</label>
									<input type="text" name="category" class="form-control"readonly value="<?php echo $row['category'] ?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>renting Method</label>
									<input type="text" name="rentingMethod" class="form-control"readonly value="<?php echo $row['rentingMethod'] ?>">
								</div>
							</div>	
							
						
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>price</label>
									<input type="number" name="price" class="form-control" required value="<?php echo $row['price'] ?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>deliveryFee</label>
									<input type="number" name="deliveryFee" class="form-control" required value="<?php echo $row['deliveryFee'] ?>">
								</div>
							</div>	
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>fullname Lessor</label>
									<input type="text" name="fullnameLessor" class="form-control" readonly value="<?php echo $row['fullnameLessor'] ?>">
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>phoneLessor</label>
									<input type="text" name="phoneLessor" class="form-control" readonly value="<?php echo $row['phoneLessor'] ?>">
								</div>
								</div>
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>emailLessor</label>
									<input type="email" name="emailLessor" class="form-control" readonly value="<?php echo $row['emailLessor'] ?>">
								</div>
								</div>
								
							
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>photo Lessor</label>
									<img style="width:200px;height:130px"readonly  src="../NewsPhoto/<?php echo $row['photoLessor']?>">
								</div>
								</div>
								
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>photo Homeowner</label>
									<img style="width:200px;height:130px"readonly  src="../NewsPhoto/<?php echo $row['photoHomeowner']?>">
								</div>
								</div>
								
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>fullname Homeowner</label>
									<input type="text" name="fullnameHomeowner" class="form-control"readonly value="<?php echo $row['fullnameHomeowner']?>">
								</div>
							</div>	
								
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>phone Homeowner</label>
									<input type="text" name="phoneHomeowner" class="form-control"readonly value="<?php echo $row['phoneHomeowner']?>">
								</div>
							</div>	
					
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>email Homeowner</label>
									<input type="email" name="emailHomeowner" class="form-control" readonly value="<?php echo $row['emailHomeowner'] ?>">
								</div>
								</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Start Day</label>
									<input type="date" name="currentDay" class="form-control" required value="<?php echo $row['currentDay'] ?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>End Date</label>
									<input type="date" name="endDate" class="form-control"required value="<?php echo $row['endDate'] ?>">
								</div>
							</div>	
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								<label class="form-control">Delivery</label>
									<select class="form-control" name="status">
									  <option class="form-control" value='0' <?php if($row['status']=='0'){echo"selected";} ?>>Not Delivered</option>
									  <option class="form-control" value='1' <?php if($row['status']=='1'){echo"selected";} ?>>Delivered</option>
									</select>
								
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
				<button type="submit" name="updateRentingprocess" class="btn btn-primary">Save changes</button>
				<span><?php echo $mess; ?></span>
						</div>
						</div>
						</div>
						</div>
						</form>
<?php
} ?>
								
							</tbody>
						</table>
					</div>
				</div>
				
				
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
	<script src="vendors/scripts/datatable-setting.js"></script>
	<?php include("adminfooter.php"); ?>