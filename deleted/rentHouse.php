<?php include('header.php');  ?>
<style type="text/css">
input{
	border:orange;
	border-radius:5px;
}
.form1{
background-color:whitesmoke;
}
</style>
<?php  
include_once"connection.php";
$password="";
 $password=$_SESSION['pass'];	
 $mess="";
 $message="";
 
  $fmessage="";
   $phmessage="";
    $emessage="";
	 $rmessage="";
	  $hlmessage="";
       $hamessage="";
        $hnmessage="";
	     
$fullname="";
$email="";
$phone="";
$rent="";
$hlocation="";
$himage="";
$selection="";
$icard="";
$hmessage="";
$hnumber="";
  if(isset($_POST['renting'])){
	
	     $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
	     $phone=mysqli_real_escape_string($conn,$_POST['phone']);
		 $email=mysqli_real_escape_string($conn,$_POST['email']);
		 $rent=$_POST['rent'];
	     $hlocation=mysqli_real_escape_string($conn,$_POST['hlocation']);
		 
		 $himage=$_FILES['himage']['name'];
		 
	     $selection=mysqli_real_escape_string($conn,$_POST['selection']);
	     $icard=$_FILES['icard'];
		 $hmessage=mysqli_real_escape_string($conn,$_POST['hmessage']);
	     $hnumber=mysqli_real_escape_string($conn,$_POST['hnumber']);

if(empty(trim($fullname))){
	$fmessage="please write fullname";
}else{
	if(empty(trim($phone))){
		$phmessage="please write phone number";
	}	else{
		if(empty(trim($email))){
			$emessage="please write email address";
		}else{
			if(empty(trim($rent))){
				$rmessage="please write rent/month";
			}else{
				if(empty(trim($hlocation))){
					$hlmessage="please write your home location";
				}else{
					if(empty(trim($hnumber))){
						$hnmessage="please write your home number";	
						}else{
					     if(empty(trim($hmessage))){
						$hamessage="please write your home information";
					}else{
                            $insertquery="INSERT INTO rent_home(fullname,email,phone,category,rent,home_location,home_number,home_image,identification_card,about_home,password)
							values('$fullname','$email','$phone','$selection','$rent','$hlocation','$hnumber','$himage','$icard','$hmessage','$password')";
	                        $runinsertquery=mysqli_query($conn,$insertquery);
		                    if($runinsertquery){
			move_uploaded_file($_FILES['himage']['tmp_name'],"$himage");
		                 	$mess="please be patient untill the admin is confirm your upload home";
						$fullname="";
						$email="";
						$phone="";
						$rent="";
						$hlocation="";
						$himage="";
						$selection="";
						$icard="";
						$hmessage="";
						$hnumber="";
						echo'<script type="text/javascript">window.location="rentHouse.php"; </script>';

			              }else{
			          	    $message="NOT REGISTERED".mysqli_connect_error();
				 
			                }
				         	}
					}
				}
			}
		}
	}
}
  }
?>

							
							<div class="form1">
        						<form enctype="multipart/form-data" style="margin-left:500;" action="rentHouse.php" method="post">
                                            <h1 style="font-size:40px;color:green"><b>Rent Your House</b></h1>
											
        									   <label style="font-size:20px">Full Name</label><br>
        									   <input style="width:250px;height:40px" type="text" name="fullname" placeholder="Full name" autocomplete="off" value="<?php echo $fullname;?>"><span style="color:red;font-size:18px"><?php echo $fmessage; ?></span>
        									<br>
        							
                            					<label style="font-size:20px">Phone Number</label><br>
                                                <input style="width:250px;height:40px"type="tel" name="phone" placeholder="phone number" autocomplete="off" value="<?php echo $phone;?>"><span style="color:red;font-size:18px"><?php echo $phmessage; ?></span>
        									<br>
        									
        										<label style="font-size:20px">Email Address</label><br>
        										<input style="width:250px;height:40px"type="email" name="email"  placeholder="houserent@gmail.com"autocomplete="off" value="<?php echo $email;?>"><span style="color:red;font-size:18px"><?php echo $emessage; ?></span>
        								    <br>
											<label style="font-size:20px">Choose Your House</label><br>
        									  <select style="width:250px;height:40px" name="selection" required>
												 <option style="font-size:20px">Appartama</option>
												 <option style="font-size:20px">Condominium</option>
												 <option style="font-size:20px">Real Estate</option>
												 <option style="font-size:20px">Business House</option>
												 <option style="font-size:20px">One House</option>
												 <option style="font-size:20px">One Room House</option>
											   <select>
											 
											<br>
											    <label style="font-size:20px">Rent/Monthly</label><br>
                                                <input style="width:250px;height:40px" type="number" name="rent"  placeholder="write rent/month" autocomplete="off" value="<?php echo $rent;?>"><span style="color:red;font-size:18px"><?php echo $rmessage; ?></span>
        									<br>
        									    <label style="font-size:20px">Home Location</label><br>
                                                <input style="width:250px;height:40px"type="text" name="hlocation"  placeholder="location of your home"autocomplete="off"value="<?php echo $hlocation;?>" ><span style="color:red;font-size:18px"><?php echo $hlmessage; ?></span>
        									<br>
                                            
                                                <label style="font-size:20px">Home Number</label><br>
                                                <input style="width:250px;height:40px"type="number" name="hnumber"  placeholder="4320"autocomplete="off" value="<?php echo $hnumber;?>"><span style="color:red;font-size:18px"><?php echo $hnmessage; ?></span>
                                            <br>
        									    <label style="font-size:20px">Home Image</label><br>
                                                <input style="width:250px;height:40px"type="file"  name="himage" >
        									
											    <label style="font-size:20px">Identification Card</label><br>
                                                <input style="width:250px;height:40px" type="file" name="icard"  >
        									
        									    <label style="font-size:18px">Your Message</label><br>
        		                                <textarea style="width:250px;height:100px" placeholder="Write About Your Home" name="hmessage" autocomplete="off" class="form-controller"value="<?php echo $hmessage;?>" ></textarea><span style="color:red;font-size:18px"><?php echo $hamessage; ?></span>
        									<br>
        									
        										<button style="font-size:20px;width:250px;height:50px;background-color:green;color:white" name="renting" type="submit" >Rent House</button>
        									<br><br>
        								 <span style="color:red"><?php echo $message;?></span> <span style="color:green"><?php echo $mess;?></span>
        							
        						</form> <!-- /.advance_search_query -->
							</div>
<?php include('footer.php');  ?>