<?php 
include("adminHeader.php");
if (isset($_GET['delid']))
{
    $delid = $_GET['delid'];
    $deletequery = "DELETE FROM contact WHERE id='$delid'";
    $rundeletequery = mysqli_query($conn, $deletequery);
    if ($rundeletequery)
    {
        $message = "deleted";
    }
    else
    {
        $message = "not deleted";
    }
}
if(isset($_POST['replay'])){
	$subject=mysqli_real_escape_string($conn,$_POST['subject']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$messag=mysqli_real_escape_string($conn,$_POST['message']);
	
	
         
                $subject = "Answer User Question Or Suggestion ";
                $message = $messag;
                $sender = "From: oromobiblestudy@yahoo.com";
                if(mail($email, $subject, $message, $sender)){
                   
                }else{
                    $mesaage = "Failed while sending Message!!";
                }
           
        
		
	 }

?>
<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
<br><br><br>
<div style="margin-left:300px;padding:50px;margin-right:30px;margin-top:30px" class="card-box mb-20">
					
					<div class="pd-2">
						<h4 style="text-align:center" class="text-blue h4">Contact Detail</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>E-mail</th>
									<th>Date</th>
								    <th>Action</th>
									
								</tr>
								
							</thead>
							<tbody>
							
<?php
$sql = mysqli_query($conn, "select * from contact");

while ($row = mysqli_fetch_array($sql))
{
?>	
	
								<tr>
								    <td><?php echo htmlentities($row['id']); ?></td>
									<td><?php echo htmlentities($row['name']); ?></td>
									<td><?php echo htmlentities($row['email']); ?></td>
									
									
									<td><?php echo htmlentities($row['date']); ?></td>
									<td>
									<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#viewcontact_modal<?php echo $row['id'] ?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> View</p></a>
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#replay_modal<?php echo $row['id'] ?>"><p style="color: royalblue;"><i class="fas fa-reply"></i> Replay</p></a>
												<a class="dropdown-item" href="?delid=<?php echo $row['id'] ?>"><i class="dw dw-delete"></i>Delete</a>
													
											</div>
										</div>
										</td>
								</tr>
<div style="margin-left:250px" class="modal fade bs-example-modal-xl" id="viewcontact_modal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-20">
					<div class="pd-30 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-60">View Contact Information</p></h4></center>
						</div>
					<form name="dept" method="post" enctype="multipart/form-data">
							<div class="row">
						<input type="hidden" name="id7" value="21">


					           <div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Name</label>
									<input  name="name" class="form-control"readonly value="<?php echo $row['name']; ?>">
								</div>
								</div>
						
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>E-mail</label>
									<input  name="email" class="form-control"readonly value="<?php echo $row['email']; ?>">
								</div>
							</div>	
							<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Date</label>
									<input  name="date" class="form-control"readonly  value="<?php echo $row['date'] ?>">
								</div>
							</div>	
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Message</label>
									<textarea  name="message" class="form-control"readonly  ><?php echo $row['message'] ?></textarea>
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
<div style="margin-left:250px" class="modal fade bs-example-modal-xl" id="replay_modal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						
						
					<form name="dept" method="post" enctype="multipart/form-data">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div style="width:100%"class="col-md-20">
					<div style="width:100%" class="pd-30 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-60">Replay to User</p></h4></center>
						</div>
							<div class="row">
					     	<input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            <input  type="hidden" name="email" class="form-control"readonly value="<?php echo $row['email']; ?>">
                             <div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Question or Suggestion</label>
									<textarea  name="subject" class="form-control" readonly  ><?php echo $row['message'];?></textarea>
								</div>
							</div>	
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Message</label>
									<textarea  name="message" class="form-control" minlength="10"  required placeholder="write the answer to the user for is question or suggestion." ></textarea>
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
				<button type="submit" name="replay" class="btn btn-primary">Send</button>
			
						</div>
		
						</div>
						</form>
						</div>
						</div>		
		
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
	<script src="vendors/scripts/datatable-setting.js"></script></body>
				<?php  include("adminfooter.php");