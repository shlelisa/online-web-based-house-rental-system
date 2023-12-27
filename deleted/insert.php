<style type="text/css">
input{
	font-size:20px;
	border-radius:5px;
	width:200px;
	
}
a{
	border-raduis:5px;
}
button{
	border:none;
	border-raduis:5px;
}
</style>

<?php  
  include_once"connection.php";
      $user="";
	  $pass="";
	  $ema="";
 $mess="";
 $message="";
  $umessage="";
   $pmessage="";
    $emessage="";
	 $cpmessage="";
$username="";
$email="";
$password="";
$cpassword="";
  if(isset($_POST['register'])){
	
	     $username=mysqli_real_escape_string($conn,$_POST['username']);
	     $email=mysqli_real_escape_string($conn,$_POST['email']);
		 $password=mysqli_real_escape_string($conn,$_POST['password']);
	     $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);

if(empty(trim($username))){
	$umessage="please write username";
}else{
	if(empty(trim($email))){
		$emessage="please write email";
	}	else{
		if(empty(trim($password))){
			$pmessage="please write password";
		}else{
			if(empty(trim($cpassword))){
				$cpmessage="please confirm password";
			}else{
				if(!($password==$cpassword)){
					$cpmessage="password not match";
				}else{
					$fetchData="SELECT * FROM new_user WHERE username='$username' OR password='$password' OR email='$email'";
					$runfetchData=mysqli_query($conn,$fetchData);
									
	         while($value=mysqli_fetch_assoc($runfetchData)){
			 
			     $user=$value['username'];
				 $pass=$value['password'];
				 $ema=$value['email'];
	              }
					if($user==$username){
						$umessage="Username already exist";
					}else{
						if($ema==$email){
							$emessage="Email already exist";
						}else{
							if($pass==$password){
								$pmessage="Password already exist";
							}else{
                            $insertquery="INSERT INTO new_user(username,email,password) values('$username','$email','$password')";
	                        $runinsertquery=mysqli_query($conn,$insertquery);
		                    if($runinsertquery){
			
		                 	$mess="New User Added";
							$username="";
							$email="";
							$password="";
							$cpassword="";
						echo'<script type="text/javascript">window.location="login.php"; </script>';

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
  }
?>

 <table style="background-image:url(assets/images/appartama.jpg)" border="0">
      <tr>
        <td >
		<center>
        <form method="post" action="insert.php">
          <h1 style="font-style:italic">CREATE NEW ACCOUNT</h1>
          <label  style="font-size:25px;">Username:</label>&nbsp &nbsp
          <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" value="<?php echo $username; ?>"><br>
       <span style="color:red;font-size:18px"><?php echo $umessage; ?></span><br>
          <label  style="font-size:25px; font-weight:bold">E-mail: </label>
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <input type="text" name="email" id="email" placeholder="Email" autocomplete="off" value="<?php echo $email; ?>"><br>
       <span style="color:red;font-size:18px"><?php echo $emessage; ?></span> <br>
          <label  style="font-size:25px; font-weight:bold">Password:</label>&nbsp &nbsp
          <input type="password" name="password" id="password" placeholder="Password" autocomplete="off"value="<?php echo $password; ?>"><br>
       <span style="color:red;font-size:18px"><?php echo $pmessage; ?></span> <br>
		  <label  style="font-size:25px; font-weight:bold">CPassword:</label>
          <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off" value="<?php echo $cpassword; ?>"><br>
		 <span style="color:red;font-size:18px"><?php echo $cpmessage; ?></span><br>
            <input  style="font-size:18px; color:white;width:150px; background-color:green" type="submit" onclick="return validation();" name="register" id="" value="register" /><br>
               Already I have Account! <a style="text-decoration:none;color:blue" href="login.php">login</a><br>
			   <a style="text-decoration:none;color:blue" href="forgotpassword.php">Forgot Password?</a><br>
			    <span style="color:red"><?php echo $message;?></span> <span style="color:green"><?php echo $mess;?></span>
            
            
        </form></td>
		</center>
      </tr>
    </table>
	
	
