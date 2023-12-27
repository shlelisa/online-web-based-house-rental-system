<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
		
$sql=mysqli_query($con,"SELECT * FROM gallery WHERE id='$id'");
while($r=mysqli_fetch_array($sql))
{
if(empty($image)){
	$image=$r['image'];
}
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
	
$image=mysqli_real_escape_string($con, $_POST['image']);
$note=mysqli_real_escape_string($con, $_POST['note']);
$query=mysqli_query($con,"INSERT INTO gallery (image,note) VALUES ('$image','$note'");
if($query)
{
$_SESSION['msg']="image inserted Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Not inserted";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title> Image Insert</title>
	<script src="includes/sweetalert.min.js"></script>
	

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


</head>
<body>
<?php if($_SESSION['id']!="");?>
<?php $sql=mysqli_query($con,"select * from gallery where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{ ?>

<?php include('includes/header.php');?>
<div class="mobile-menu-overlay"></div>
<!--<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">-->
			
	<div  class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="main-container">
			<div class="row align-items-center">
			
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Gallery Form</h2>
						</div>
						<form name="dept" method="post" enctype="multipart/form-data">
						
								<div class="col-md-4 col-sm-12">
						<div class="form-group">
						<label>Upload Profile Picture</label>
						<input type="hidden" name="id" value="<?php echo $rw['id']?>"/>
						<input type="file" class="form-control form-control-lg" id="image" name="image" class="form-control"  value="selected"  autocomplete="off"/>
						</div>
						</div>
							<div class="input-group custom">

								<input type="text" class="form-control form-control-lg" name="note "placeholder="Note" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
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
		<script src="sweetalert.min.js"></script>
	<?php
if(isset($_POST['submit']))
{
?> <script>
	swal({
  title: "Good job!",
  text: "<?php echo htmlentities($_SESSION['msg']);?>",
  icon: "success",
	});
	</script>
	<?php 
   echo htmlentities($_SESSION['msgerror']="");
 } ?>
	</div>
	
				<?php include('includes/footer.php');?>
		
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
<?php }} ?>