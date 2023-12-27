	
<?php
include("adminHeader.php");
include("connection.php");
$message = "";
$mess = "";
if (isset($_POST['addNews']))
{
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $photo = $_FILES['photo']['name'];
    $date = $_POST['date'];

    move_uploaded_file($_FILES["photo"]["tmp_name"], "../NewsPhoto/" . $_FILES["photo"]["name"]);
    $insertq = mysqli_query($conn, "INSERT INTO news (title,detail,photo,date) VALUES('$title','$detail','$photo','$date')");

    if ($insertq)
    {
        $mess = "News succesfully inserted";
    }
    else
    {
        $message = "" . mysqli_connect_errno();
    }
}
else if (isset($_POST['updateNewsInfo']))
{
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $photo = $_FILES['photonews']['name'];
    $date = $_POST['date'];

    if ($photo != "")
    {
        move_uploaded_file($_FILES["photonews"]["tmp_name"], "../NewsPhoto/" . $_FILES["photonews"]["name"]);
    }
	if($photo == ""){
		$selectQuery=mysqli_query($conn,"select * from news where id='$id'");
		$data=mysqli_fetch_array($selectQuery);
		$photo=$data['photo'];
	}
    $updatequery = mysqli_query($conn, "UPDATE news SET title='$title',detail='$detail',photo='$photo',date='$date' WHERE id='$id'");
    if ($updatequery)
    {
        $mess = "News succesfully updated";
    }
    else
    {
        $message = "" . mysqli_connect_errno();
    }
}
if (isset($_GET['id']))
{
    $delid = $_GET['id'];
    $deletequery = "DELETE FROM news WHERE id='$delid'";
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
?>
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Export Datatable start -->
				<br><br><br>
				<div style="margin-left:300px;padding:50px;margin-right:30px;margin-top:30px" class="card-box mb-20">
					
					<div class="pd-2">
						<h4 style="text-align:center" class="text-blue h4">News Detail</h4>
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
						
							<thead>
								<tr>
									<th>Id</th>
									<th>Title</th>
									<th>Detail</th>
									
									<th>Date</th>
								    <th>Action</th>
									
								</tr>
								
							</thead>
							<tbody>
							
<?php
$sql = mysqli_query($conn, "select * from news ");

while ($row = mysqli_fetch_array($sql))
{
?>	
	
								<tr>
								    <td><?php echo htmlentities($row['id']); ?></td>
									<td><?php echo substr($row['title'], 0, 30) . "...";  ?></td>
									<td><?php echo substr($row['detail'], 0, 30) . "..."; ?></td>
									
									
									<td><?php echo htmlentities($row['date']); ?></td>
									<td>
									<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#addnews_modal"><p style="color: royalblue;"><i class="fa fa-plus"></i> AddNews</p></a>
											    <a class="dropdown-item" data-toggle="modal" type="button" data-target="#updateNewsInfo<?php echo $row['id'] ?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> Edit</p></a> 
												<a class="dropdown-item" data-toggle="modal" type="button" data-target="#viewnews_modal<?php echo $row['id'] ?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> View</p></a>
												<a class="dropdown-item" href="?id=<?php echo $row['id'] ?>"><i class="dw dw-delete"></i>Delete</a>
													
											</div>
										</div>
										</td>
								</tr>
																	<!-- modal add class-->
		<div style="margin-left:250px" class="modal fade bs-example-modal-xl" id="addnews_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
						<center><h4><p class="mb-30">Add News Information</p></h4></center>
						</div>
						
						<div class="row">
						<input type="hidden" name="id7" value="21">
					<div class="col-md-12 col-sm-1">
								<div class="form-group">
									<label>Title</label>
									<textarea  style="height:50px" name="title" class="form-control" required placeholder="wrtite News Title" ></textarea>
								</div>
								</div>
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Photo</label><br>
									<input type="file" accept="image/*" name="photo">
								</div>
							</div>	<br>
								<div class="col-md-12 col-sm-8">
								<div class="form-group">
									<label>Detail</label>
									<textarea  name="detail" class="form-control"required placeholder="Write News detail"></textarea>
								</div>
							</div>	
								<div class="col-md-12 col-sm-8">
								<div class="form-group">
									<label>Date</label>
									<input  type="date" name="date" class="form-control"required >
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
				<button type="submit" name="addNews" class="btn btn-primary">Add News</button>
							<span style="color:red"><?php echo $message; ?></span>	
							<span style="color:green"><?php echo $mess; ?></span>	
						</div>
						</div>
							</form>
						
						
						</div>
						</div>
<div style="margin-left:250px" class="modal fade bs-example-modal-xl" id="viewnews_modal<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl modal-dialog-centered">
						<div style="width:800px" class="modal-content">
						
						  <div style="width:800px" class="modal-body">
						  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		                  <div class="container">
			              <div class="row align-items-center">
				<div class="col-md-20">
					<div class="pd-30 card-box mb-30">
					
					<div class="pull-center">
						<center><h4><p class="mb-60">View News Information</p></h4></center>
						</div>
					<form name="dept" method="post" enctype="multipart/form-data">
							<div class="row">
						<input type="hidden" name="id7" value="21">
							

					           <div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Title</label>
									<textarea style="height:50px" name="title" class="form-control"readonly ><?php echo $row['title'] ?></textarea>
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Photo</label><br>
									<img style="width:200px;height:130px" readonly src="../NewsPhoto/<?php if ($row['photo'] == "")
    {
        echo "noimage.png";
    }
    else
    {
        echo $row['photo'];
    } ?>">
								</div>
							</div>	<br>
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Detail</label>
									<textarea  name="detail" class="form-control"readonly ><?php echo $row['detail'] ?></textarea>
								</div>
							</div>	
							<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Date</label>
									<input  name="date" class="form-control"readonly  value="<?php echo $row['date'] ?>">
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
		<div style="margin-left:250px" class="modal fade bs-example-modal-xl" id="updateNewsInfo<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
						<center><h4><p class="mb-30">Update News Information</p></h4></center>
						</div>
						
						<div class="row">
						<input type="hidden" name="id7" value="21">
							

				         	<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Title</label>
									
									<input type="hidden" name="id" class="form-control"readonly value="<?php echo $row['id'] ?>">
									<textarea style="width:600px;height:50px" name="title" class="form-control"required ><?php echo $row['title'] ?></textarea>
								</div>
								</div>
								<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Photo</label><br>
									<img style="width:200px;height:130px" readonly src="../NewsPhoto/<?php if ($row['photo'] == "")
    {
        echo "noimage.png";
    }
    else
    {
        echo $row['photo'];
    } ?>">
	<br>
								    <input type="file" accept="image/*" name="photonews">
								</div>
							</div>	<br>
								<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Detail</label>
									<textarea  name="detail" class="form-control"required ><?php echo $row['detail'] ?></textarea>
								</div>
							</div>	
							<div class="col-md-12 col-sm-4">
								<div class="form-group">
									<label>Date</label>
									<input type="date" name="date" class="form-control" required value="<?php echo $row['date'] ?>" >
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
				<button type="submit" name="updateNewsInfo" class="btn btn-primary">Save changes</button>
								
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
				<?php include("adminfooter.php");?>