<?php
session_start();
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}else{	
$msg="";
$query=mysqli_query($con,"SELECT * FROM admin WHERE id='".$_SESSION['id']."'");

$num=mysqli_fetch_array($query);

$rol=$num['role'];


if($rol=="registrar"){
	
	
	
if(isset($_POST['submit']))
{
	
require_once('vendor/autoload.php');

$barcode='images/'.time().".png";
$barimage=time().".png";
$color = [0,0,0];
	
$id_no="J/M/".rand(10000000, 99999999);	



$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
file_put_contents($barcode, $generator->getBarcode($id_no, $generator::TYPE_CODE_128, 3, 50, $color));	


	

	
	
$today = date("Y-m-d");
//dreamcrack  5577 2023

	$full_name=mysqli_real_escape_string($con,$_POST['full_name']);	
	$birth_date=mysqli_real_escape_string($con,$_POST['birth_date']);
	$diff = date_diff(date_create($birth_date), date_create($today));
	$age=$diff->format('%y');	
	$Blood_Group =mysqli_real_escape_string($con,$_POST['Blood_Group']);		
	$mother_name=mysqli_real_escape_string($con,$_POST['mother_name']);		
	$house_number=mysqli_real_escape_string($con,$_POST['house_number']);	
	$email=mysqli_real_escape_string($con,$_POST['email']);		
	$username=mysqli_real_escape_string($con,$_POST['username']);	
	$password=md5($_POST['password']);		
	$ecp=mysqli_real_escape_string($con,$_POST['ecp']);		
	$regstration_no="B/M/".rand(100000, 999999);	
	$phone=$_POST['phone'];		
	$address_of_resident=mysqli_real_escape_string($con,$_POST['address_of_resident']);	
		
	$ephone=mysqli_real_escape_string($con,$_POST['ephone']);		
	$kebele=mysqli_real_escape_string($con,$_POST['kebele']);
    $image=$_FILES["image"]["name"];
	$gender=mysqli_real_escape_string($con,$_POST['gender']);
	 
$query=mysqli_query($con,"SELECT * FROM registerresident");

while($unique=mysqli_fetch_array($query)){
	if($unique['mother_name']== $mother_name && $unique['full_name']==$full_name && $unique['image']==$image){
		
		echo"alredy exist!";
	}
	
}
		
$s = ucfirst($full_name);
$bar = ucwords(strtolower($s));
$data = preg_replace('/\s+/', '', $bar);

$temp = explode(".", $_FILES["image"]["name"]);
$newfilename = $data.'.'. end($temp);
move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $newfilename);
// check email validation and save information
$ret=mysqli_query($con,"INSERT INTO registerresident (full_name,birth_date,age,Blood_Group,mother_name,house_number,email,username,password,ecp,regstration_no,id_no,idbarcode,phone,address_of_resident,ephone,kebele,image,gender)
 VALUES ('$full_name','$birth_date','$age','$Blood_Group','$mother_name','$house_number','$email','$username','$password','$ecp','$regstration_no','$id_no','$barimage','$phone','$address_of_resident','$ephone','$kebele','$newfilename','$gender')");
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
	<title>Jirata Galmesuu</title>
	<!-- Mobile Specific Metas -->
	<meta birth_date="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<style type="text/css">
#month::-webkit-outer-spin-button,
#month::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0; 
	
}
#month[type=number] {
    -moz-appearance:textfield; 
}
</style>	
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
			
				<!-- Default Basic Forms Start -->
				
				

				<!-- Form grid Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-center">
							<center><h4 class="text-blue h4">REGISTERATION FORM</h4></center>
							
						</div>
					</div>
					<form name="dept" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" autocomplete="off" class="form-control" minlength="5" pattern="^.* .*$" id="full_name" name="full_name" value="" placeholder="Full Name" required><span id="error1" style="color:red"></span>
								</div>
							</div> 
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Mother Name</label>
									<input type="text" class="form-control" id="mother_name" name="mother_name" value="" placeholder="Mother Name" required pattern="\D\S+(\s+\D\S+)+" autocomplete="off" ><span id="error3" style="color:red"></span>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
								
									<label>Date Of Birth</label>
									<input type="date" class="form-control" id="birth_date" name="birth_date" max="<?php echo htmlentities(date("Y-m-d"));?>" value="" placeholder="Birth Date" autocomplete="off" required><span id="error2" style="color:red"></span>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Blood Group </label>
									<input type="text" class="form-control" id="Blood_Group" name="Blood_Group" value="" placeholder="Blood Group" autocomplete="off"><span id="error3" style="color:red"></span>
								</div>
							</div>

							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Phone</label>
									<input type="text" class="form-control"   id="phone" name="phone"  value="+251" required pattern="[+251][0-9]{12}" title="+251 must be include" autocomplete="off">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" id="address_of_resident" name="address_of_resident" value="" placeholder="Address" required autocomplete="off">
								</div>
							</div>
							
						</div>
						
						<div class="row">
						<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="off">
								</div>                                                           
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" id="username" name="username" value="" placeholder="Username" required autocomplete="off">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control"  id="myInput" name="password" value="" placeholder="Password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">
                                    
								</div>
							</div>
						</div>
						<div class="row">
				           <div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>House Number</label>
									<input type="text" class="form-control" id="house_number" name="house_number" value="" required placeholder="House Number"autocomplete="off" >
								</div>
							</div>
							
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Emeregcy Contact Person</label>
									<input type="text" class="form-control" name="ecp" value="" placeholder="Emeregcy Contact Person" required pattern="\D\S+(\s+\D\S+)+" autocomplete="off">
								</div>
							</div>
						
							<div class="col-md-4 col-sm-12">
								<div clasSs="form-group">
							<label> Emergcy Phone Number</label>
							<input class="form-control form-control" type="text"id="ephone" name="ephone" value="+251" required pattern="[+251][0-9]{12}" title="+251 must be include" autocomplete="off"><span id="errorphone" style="color:red"></span>
						</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Marital Status</label>
									<input type="text" class="form-control" id="mariage_status" name="mariage_status" value="" placeholder="marital status" required autocomplete="off">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Kebele</label>
									<input type="text" class="form-control" id="kebele" name="kebele" value="" placeholder="Kebele" required autocomplete="off">
								</div>
							</div>
							
							<div class="col-md-4 col-sm-12">
						<div class="form-group">
						<label>Upload Profile Picture</label>
						<input type="file" class="form-control form-control-lg" id="image" name="image" class="form-control"  value="selected" required  accept="image/*" autocomplete="off"/>
						</div>
						</div>
						</div>
<!--						 
 <div>   
<label>Date OF Birth: </label> 
        <input style="padding: 10px 20px;width: 10%;display: inline-block;"type="number" placeholder="DD" name="dd" id="month" required pattern="^(?=.*[0-9]).{1,2}$">
        <input style="padding: 10px 20px;width: 10%"type="text" placeholder="MM" name="mm" id="date"  required pattern="^(?=.*[0-9]).{1,2}$">
        <input style="padding: 10px 20px;width: 10%" type="text" placeholder="YYYY" name="yyy" id="year" required pattern="^(?=.*[0-9]).{4}$">
<span id="t" style="color:red;font-size:24px"> </span>
	</div>-->
			
						
					<div class="form-group">
						<label>Gender</label>
						<div class="d-flex"> 
						<div class="custom-control custom-radio mb-5 mr-20">
							<input type="radio" id="customRadio4" class="custom-control-input"  name="gender" value="Male" required>
							<label class="custom-control-label weight-400" for="customRadio4">Male</label>
						</div>
						<div class="custom-control custom-radio mb-5">
							<input type="radio" id="customRadio5" class="custom-control-input"  name="gender" value="Female" required>
							<label class="custom-control-label weight-400" for="customRadio5">Female</label>
						</div>
						
						<div class="custom-control custom-radio mb-5">
							<input type="radio" id="customRadio6" class="custom-control-input"  name="gender" value="Other" required>
							<label class="custom-control-label weight-400" for="customRadio6">Other</label>
						</div>
						</div>
						
						
					</div> 			
<input type="submit" class="btn btn-primary"  name="submit"  value="Save Information">
					
              </form>
					
				</div>
					
				</div>
				
				
				<!-- Input Validation End -->

			</div>
			<?php include('includes/footer.php'); ?> 
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>
<?php } ?><?php }else{
	header('location:index.php');
}} ?>