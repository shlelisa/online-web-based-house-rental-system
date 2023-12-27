<?php
session_start();
  include_once"connection.php";
  
  $message="";

  if(isset($_POST['reset'])){
	   $password=md5($_POST['password']);

        $email=$_SESSION['email'];
		$selectquery="UPDATE new_user SET password='$password' WHERE email='$email'";
		$runselectquery=mysqli_query($conn,$selectquery);
		
		if($runselectquery){
             $message="Password Updated!";
			 header("location:login.php");
				
		}else{
			$message="ERROR! ".mysqli_connect_error();
		}
		}
					
	  
?>
<html>
<head>
<title>Reset Password </title>

<style type="text/css">
body{
	background-color:whitesmoke;

}
input{
	background-color:transparent;
	font-size:20px;
	border-radius:20px;
	width:250px;
	height:40px;
	padding:20px;
	
}
a{
	border-raduis:5px;
}
a:hover{
	color:lightgray;
}
button{
	border-raduis:5px;
}
</style>
<script type="text/javascript">
function validate(){
		     var cpassword=document.getElementById("cpassword");
	          var password=document.getElementById("password");
			  
	           var error1= document.getElementById("error1");
	           var error2= document.getElementById("error2");
			   
				var message="";
				
				

	if(password.value.trim()==""){
           message='password should be filled';
		   error1.innerText=message;
		    password.setAttribute("style","border-color:red");
		  return false;
		   }
		 if(password.value.trim().length<6 ||password.value.trim().length>30 ){
				message="password should be at least six characters ";
				error1.innerHTML=message;
			   password.setAttribute("style","border-color:red");
			   return false;
				}
		   else{
			   message="";
			   error1.innerHTML=message;
			   password.setAttribute("style","border-color:green");
				}
				
if(cpassword.value.trim()==""){
           message='confirm password should be filled';
		   error2.innerText=message;
		    cpassword.setAttribute("style","border-color:red");
		  return false;
		   }
		 if(cpassword.value.trim().length<6 ||cpassword.value.trim().length>30 ){
				message="cpassword should be at least 6 characters ";
				error2.innerHTML=message;
			   cpassword.setAttribute("style","border-color:red");
			   return false;
				}
				
		if(password.value != cpassword.value){
			
           message='password not matched!';
		   error2.innerText=message;
		   cpassword.setAttribute("style","border-color:red");
		    return false;
		    }
		   else{
			   message="";
			   error2.innerHTML=message;
			   cpassword.setAttribute("style","border-color:green");
				}
	
}


</script>
</head>
<body>



<center>
 <table border="10" style="border-color:green;width:500px;height:300px;margin-top:100px">
      <tr>
        <td >
		
        <form autocomplete="off" method="post" enctype="multipart/form-data">
          <h1 style="font-style:italic;text-align:center">Reset Password</h1>
		  <center>
          <label  style="font-size:25px;font-weight:bold">New Password:</label><br>
          <input type="password" name="password" id="password" placeholder="New Password" autocomplete="off" ><br>
		  
		  <span id="error1" style="color:red"></span>
		  <br>
          <label  style="font-size:25px; font-weight:bold">Confirm Password:</label><br>
          <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off"><br>
          
		  <span id="error2" style="color:red"></span>
		  <br><br>		   
           <center> <input  style="padding:0px;margin-bottom:20px;font-size:25px; color:white;width:100px; background-color:green" type="submit" name="reset" onclick="return validate();" value="reset" /></center><br>
			Still I haven't Account? <a style="text-decoration:none;font-size:18px;color:blue;" href="signUp.php"> signup</a><br>
			
            <span style="color:red;font-size:18px"><?php echo $message; ?></span>
		
		
			</center>
            <br />
            
        </form></td>
		
      </tr>
    </table>
</center>
</body>
</html>