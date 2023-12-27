<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}else{	
$msg="";	
if(isset($_POST['submit']))
{
	
	
	$title=mysqli_real_escape_string($con,$_POST['title']);			
	$description =mysqli_real_escape_string($con,$_POST['description']);
	$date=date('Y-m-d');
    $image=$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);



$ret=mysqli_query($con,"INSERT INTO  news (title,description,date,image) VALUES ('$title','$description','$date','$image')");
if($ret)
{
$_SESSION['msg']="Sent Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Not Register";
}
}
?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic Page Info -->
      <meta charset="utf-8">
      <title>Post Information</title>
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
      <?php $query=mysqli_query($con,"select * from admin where id='".$_SESSION['id']."'");
         $cnt=1;
         while($row=mysqli_fetch_array($query))
         { ?>
      <?php include('includes/header.php'); ?>
      <div class="mobile-menu-overlay"></div>
	  
      <div class="main-container">
         <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
              
               <!-- horizontal Basic Forms Start -->
               <div class="pd-20 card-box mb-30">
			   <div class="clearfix">
						<div class="pull-center">
							<center><h4 class="text-blue h4">POST INFORMATION FORM</h4></center>
							<span><?php echo $_SESSION['msg'];?></span>
						</div>
					</div>
                  <form name="dept" method="post" enctype="multipart/form-data">
                    
                       <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required  >
                     
                     </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" required ></textarea>
                     </div>
                  
                     <div class="form-group">
                        <label>Atech Photo</label>
                        <input type="file" name="image" class="form-control-file form-control height-auto" required>
                     </div>
                     <div class="form-group">
                      <input type="submit" class="btn btn-primary"  name="submit"  value="Post Information">
                     </div>
					 
                  </form>
              
               </div>
               <!-- horizontal Basic Forms End -->
            </div>
         
         </div>
         <?php include('includes/footer.php'); ?>
      </div>
      </div>
      <?php }?>
      <!-- js -->
      <script src="vendors/scripts/core.js"></script>
      <script src="vendors/scripts/script.min.js"></script>
      <script src="vendors/scripts/process.js"></script>
      <script src="vendors/scripts/layout-settings.js"></script>
   </body>
</html>
<?php 
} ?>