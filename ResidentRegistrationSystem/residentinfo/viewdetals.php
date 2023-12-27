<?php
session_start();
include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}else{	
if(isset($_GET['id'])){
 
            $id=$_GET['id']; 
			
           
		
}	
?>


<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.templateflip.com/creative-cv/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jan 2023 13:07:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Individual Person Information</title>

<link href="css/person.css" rel="stylesheet">
<link href="/css/font-awesome.min.css" rel="stylesheet">
<link href="css/aosf488.css?ver=1.1.0" rel="stylesheet">
<link href="css/bootstrap.minf488.css?ver=1.1.0" rel="stylesheet">
<link href="css/mainf488.css?ver=1.1.0" rel="stylesheet">



	<!-- Google Font -->
	
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css"> 

	
<noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
</head>
<body id="top"><?php if($_SESSION['id']!="");?>
<?php $query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ ?>
<?php include('../includes/header.php');}?>
<div class="page-content">
<div class="main-container">
<div>
<div class="profile-page">
<div class="page-header page-header-small" filter-color="transparent">
<div class="container">
<div class="content-center">
<?php
$query=mysqli_query($con," SELECT *FROM registerresident WHERE id='$id'");
$cnt=1;
	while($row=mysqli_fetch_array($query))
{?>
<div class="cc-profile-image"><a href="#"><?php if($row['image']==""){ ?>
   <img id="image" src="../images/noimage.png"><?php } else {?>
   <img id="image" src="../images/<?php echo htmlentities($row['image']);?>" class="avatar-image">
   <?php } ?></a></div>
<div class="h2 title"><?php echo htmlentities($row['full_name']); ?></div>
<a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
</div>

</div>
</div>
</div>


<div class="container">

<div class="card" data-aos="fade-up" data-aos-offset="20">
<div class="h4 mt-0 title" style="padding-left:300px">Basic Information</div>
<div class="row">

<div class="col-lg-6 col-md-12">
<div class="card-body">

<div class="row">
<div class="col-sm-4"><strong class="text-uppercase">Full Name:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['full_name']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">Birth Date:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['birth_date']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">Blood Group:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['Blood_Group']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">Mother Name:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['mother_name']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">House Number:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['house_number']); ?> </div>
</div>
<div class="row">
<div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['email']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">Username:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['username']); ?></div>
</div>

<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">Password:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['password']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4" style="width: 75%;"><strong class="text-uppercase">Emergcy Call person:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['ecp']); ?></div>
</div>



</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="card-body">

<div class="row">
<div class="col-sm-4"><strong class="text-uppercase">Regstration No:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['regstration_no']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">Id No:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['id_no']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">phone:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['phone']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4" style="width: 75%;"><strong class="text-uppercase">address of resident:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['address_of_resident']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">ephone:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['ephone']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">kebele:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['kebele']); ?> </div>
</div>
<div class="row">
<div class="col-sm-4"><strong class="text-uppercase">image:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['image']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4"><strong class="text-uppercase">gender:</strong></div>
<div class="col-sm-8"><?php echo htmlentities($row['gender']); ?></div>
</div>
<div class="row mt-3">
<div class="col-sm-4" style="width: 75%;"><strong class="text-uppercase">status:</strong></div>
<div class="col-sm-8"><?php if($row['status']== 1){echo "Activate"; }else{
echo "Deactivate";	
} ?></div>
</div>

</div>


</div>
</div>
</div>
</div>

<?php  $cnt++;}?>
</div>
</div>


<?php include('../includes/footer.php');?>
</div>
<script data-cfasync="false" src="js/email-decode.min.js"></script>
<script src="js/jquery.3.2.1.minf488.js?ver=1.1.0"></script>
<script src="js/popper.minf488.js?ver=1.1.0"></script>
<script src="js/bootstrap.minf488.js?ver=1.1.0"></script>
<script src="js/now-ui-kitf488.js?ver=1.1.0"></script>
<script src="js/aosf488.js?ver=1.1.0"></script>
<script src="js/mainf488.js?ver=1.1.0"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78f978f58c630dc0","version":"2022.11.3","r":1,"token":"9b7e49e3e22049349b96a4d30f3c83ad","si":100}' crossorigin="anonymous"></script>

<!-- js -->
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="../src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="../src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="../src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="../vendors/scripts/datatable-setting.js"></script>
</body>

<!-- Mirrored from demo.templateflip.com/creative-cv/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Jan 2023 13:07:56 GMT -->
</html>
<?php } ?> 