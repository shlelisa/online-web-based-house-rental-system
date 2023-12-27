 <html>
 
 <head>
 <title>House Rental Login Page</title>
 <style type="text/css">
  .content-holder{
	
	  background-color:lightgray;
  }
  input{
	  background-color:transparent;
  }
 
 </style>

 </head>
 <?php  
include('connection.php');
$message="";
$umessage="";
$pmessage="";
if(isset($_POST['login'])){
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=md5($_POST['password']);
	
	if(empty($username)|| empty($password)){
		$message="All Fields are required";
		header("location:loginsignup.php");
	//exit();
	}/*else if(empty(trim($username)).length<3 ||empty(trim($username)).length>30 ){
		$umessage="username should be between 3 to 30 characters";
		header("location:loginsignup.php");
//exit();
	}else if(empty(trim($password)).length<6 ||empty(trim($password)).length>30 ){
		$pmessage="password should be between 6 to 30 characters";
		header("location:loginsignup.php");
		//exit();
	}*/else{
	
	$query="SELECT * FROM new_user WHERE username='$username' AND password='$password' ";
	$runquery=mysqli_query($conn,$query);
	if(mysqli_num_rows($runquery)>0){
		$data=mysqli_fetch_assoc($runquery);
		if($data['role']==='admin'){
			
			$_SESSION['password']=$password;
			header("location:adminHome.php");
		}else{
			
			header("location:info.php");
		}
	}else{
		$message="User not exist, please signUp frist!";
	}
}
}


 ?>
 <body style="background-image:url(assets/images/appartama.jpg);">
 <center>
 <div style="width:500px;margin-top:50px" class="content-holder">
          <center>
              <h2> Well Come To Online House Rental System! </h2>
          	  <form method="post" action="loginsignup.php">
              <h1>Login Form</h1>
              <input style="border-radius:20px;padding:20px;width:200px;height:40px;" type="text" placeholder="Username" id="username" name="username" >
        <span style="color:red"><?php $umessage; ?></span>
              <br><br>
              <input  style="border-radius:20px;padding:20px;width:200px;height:40px;"type="password" placeholder="Password" id="password" name="password">
		<span style="color:red"><?php $pmessage; ?></span>
              <br><br><br>
              <input style="font-size:30px;border-radius:20px;margin-bottom:15px;width:150px;height:40px;background-color:green;color:white"type="submit" name="login" value="login"><br><br>
			  <span style="color:red"><?php $message; ?></span>
			  <a href="forgotPassword.php">Forgot Password?</a>
			  <p>I haven't Account Yet <a href="signup.php">Sign Up?</a></p><br><br>
		  </form>
		  </center>
   </div>
   </center>
</body>
</html>
	  
