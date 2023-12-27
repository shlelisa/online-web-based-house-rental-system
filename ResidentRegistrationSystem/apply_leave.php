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
$user=$_POST['user'];
$apply_date=$_POST['apply_date'];
$leave_type=$_POST['leave_type'];
$reason=$_POST['reason'];
$leave_from=$_POST['leave_from'];
$leave_to=$_POST['leave_to'];
$ret=mysqli_query($con,"insert into apply_leave(user,apply_date,leave_type,reason,leave_from,leave_to) values('$user','$apply_date','$leave_type','$reason','$leave_from','$leave_to')");
                 
if($ret)
{
$_SESSION['msg']="Student Registered Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Student  not Register";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Register Students</title>

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

	<style>
.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
	</style>
	
</head>
<?php $sql=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>
<body>
	

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
				
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
		<?php include('header_all.php');?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">

	<div class="col-md-4 col-sm-12 mb-30">
	<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
	<button class="glow-on-hover" type="button"><i class="ti-plus"></i> Apply New Leave</button>
		</a>
				<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
						<div class="modal-header">
						<h4 class="modal-title" id="myLargeModalLabel">Apply New Leave</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						  <div class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-12">
					<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						
						
					</div>
					<form name="dept" method="post" class="tab-wizard wizard-circle wizard vertical" enctype="multipart/form-data">
	
					<div class="row">
						<div class="col-md-5 col-sm-12">
							
								<div class="form-group">
								
									<label>Select User</label>
									<div class="dropdown bootstrap-select form-control">
										<select name="user" class="selectpicker form-control" data-size="5" data-style="btn-outline-info" tabindex="-98">
										<?php 
							$sql=mysqli_query($con,"SELECT * FROM admin");
							
                            while($row=mysqli_fetch_array($sql)) 
							{
							?>
								<option><?php echo htmlentities($row['username']);?></option>
								<?php } ?>
								 </select>
							    </div>
								</div>
								
							</div>
							<div class="col-md-7 col-sm-12">
								<div class="form-group">
									&nbsp;&nbsp;&nbsp;&nbsp;<label>Apply Date</label>
									<div class="col-sm-12 col-md-10">
								<input type="date" class="form-control" name="apply_date" placeholder="Select Date" type="text">
							 </div>
								</div>
							</div>
							
							<div class="col-md-5 col-sm-12">
							
							<div class="form-group">
							
								<label>Leave Type</label>
								<div class="dropdown bootstrap-select form-control">
									<select name="leave_type" class="selectpicker form-control" data-size="5" data-style="btn-outline-info" tabindex="-98">
									<?php 
						$sql=mysqli_query($con,"SELECT * FROM leave_type");
						
						while($row=mysqli_fetch_array($sql)) 
						{
						?>
							<option><?php echo htmlentities($row['name']);?></option>
							<?php } ?>
							 </select>
							</div>
							</div>
							
						</div>
						<div class="col-md-7 col-sm-12">
							<div class="form-group">
								&nbsp;&nbsp;&nbsp;&nbsp;<label>Reason</label>
								<div class="col-sm-12 col-md-10">
							<input class="form-control" name="reason" placeholder="Enter Reason" type="text">
						 </div>
							</div>
						</div>
						
						
							
						<div class="col-md-6 col-sm-14">
							<div class="form-group">
								&nbsp;&nbsp;&nbsp;&nbsp;<label>Leave From</label>
								<div class="col-sm-12 col-md-12">
							  <input type="date" class="form-control" name="leave_from" placeholder="Select Date" type="text">
						      </div>
						 </div>
						</div>
						
						<div class="col-md-6 col-sm-14">
							<div class="form-group">
								&nbsp;&nbsp;&nbsp;&nbsp;<label>Leave To</label>
								<div class="col-sm-12 col-md-12">
							<input type="date" class="form-control" name="leave_to" placeholder="Select Date" type="text">
						   </div>
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
				<button type="submit" name="submit" class="glow-on-hover">Save changes</button>
								
						</div>
						</div>
						</div>
						</div>
					</div>

					<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Leave Type</h4>
					</div>
					
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">ID</th>
									<th>User Name</th>
									<th>Apply Date</th>
									<th>Leave Type</th>
									<th>Reason</th>
									<th>Leave From</th>
									<th>Leave To</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php 
						$sql=mysqli_query($con,"SELECT * FROM apply_leave");
						
						while($row=mysqli_fetch_array($sql)) 
						{
						?>
								<tr>
									<td><?php echo htmlentities($row['id']);?></td>
									<td class="table-plus"><?php echo htmlentities($row['user']);?></td>
									<td><?php echo htmlentities($row['apply_date']);?></td>
									<td><?php echo htmlentities($row['leave_type']);?></td>
									<td><?php echo htmlentities($row['reason']);?></td>
									<td><?php echo htmlentities($row['leave_from']);?></td>
									<td><?php echo htmlentities($row['leave_to']);?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
	
				</div>
						</form>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				<?php include('footer.php');?>
			</div>
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
	<script src="vendors/scripts/datatable-setting.js"></script>
</body>
</html>
<?php } } ?>