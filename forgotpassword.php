<?php
session_start();
 include_once"connection.php";
  

    $message="";
  if(isset($_POST['forgot'])){
	   $email=mysqli_real_escape_string($conn,$_POST['email']);
	    
        
		$selectquery="SELECT * FROM new_user WHERE email='$email'";
		$runselectquery=mysqli_query($conn,$selectquery);
		$numberofrows=mysqli_num_rows($runselectquery);
				
		if($numberofrows>0){
		 $_SESSION['email']=$email;
         header("location:resetPassword.php");
		 
				
		}else{
			$message="Email doesn't Exist in database ".mysqli_connect_error();
			header("location:forgotpassword.php");
		}
		}
					
	  
?>

<html>
<head>
<title>Forgot Password Page </title>

<style type="text/css">
body{
	background-color:whitesmoke;

}
input{
	background-color:transparent;
	font-size:20px;
	border-radius:20px;
	width:200px;
	height:40px;
	padding:20px;
	
}
a{
	border-radius:5px;
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
		     var email=document.getElementById("email")
	           var error1= document.getElementById("error1");
	           
			   
				var message="";
				
				
if(email.value.trim()==""){
           message='email should be filled';
		   error1.innerText=message;
		    email.setAttribute("style","border-color:red");
		  return false;
		   }
		   else{
			   message="";
			   error1.innerHTML=message;
			   email.setAttribute("style","border-color:green");
				}
		
}


</script>
</head>
<body>



<center>
 <table border="10" style="border-color:green;width:500px;height:300px;margin-top:100px">
      <tr>
        <td >
		
        <form method="post" enctype="multipart/form-data">
          <h1 style="font-style:italic;text-align:center">Forgot Password</h1>
		  <center>
          <label  style="font-size:25px;font-weight:bold">Email:</label><br>
          <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" ><br>
		  
		  <span id="error1" style="color:red"></span>
		 
		  <br><br>		   
           <center> <input  style="padding:0px;margin-bottom:20px;font-size:25px; color:white;width:100px; background-color:green" type="submit" name="forgot" onclick="return validate();" value="forgot" /></center><br>
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