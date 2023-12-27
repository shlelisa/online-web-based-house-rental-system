<?php
$mess1="";
$mess2="";
 session_start();
 
 $mess2=isset($_SESSION['mess2']);
 
 if(isset($_GET['message1'])){
	$mess1=$_GET['message1'];
 }
?>

<html>
<head>
<title></title>

<style type="text/css">
body{
	background-image:url(assets/images/appartama.jpg);

}
input{
	background-color:transparent;
	font-size:20px;
	border-radius:5px;
	width:200px;
	border:0;
	
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
</head>
<body>
<?php
  include_once"connection.php";
  
  $umessage="";
   $pmessage="";
    $message="";
  $mess="";
  $username="";
  $password="";
  if(isset($_POST['login'])){
	   $username=mysqli_real_escape_string($conn,$_POST['username']);
	    $password=mysqli_real_escape_string($conn,$_POST['password']);

        if(empty(trim($username))){
			$umessage="Please write username";
			
		}else{
		if(empty(trim($password))){
			$pmessage="Please write password";
		}else{
		$selectquery="SELECT * FROM new_user WHERE username='$username' and password='$password'";
		$runselectquery=mysqli_query($conn,$selectquery);
		$numberofrows=mysqli_num_rows($runselectquery);
		
		if($numberofrows>0){
			$mess="login success";
			session_start();
			$_SESSION['user']=$username;
			$_SESSION['pass']=$password;
			
			
			if($mess2=="condominium"){
			echo'<script type="text/javascript">window.location="condominium.php"; </script>';
			}else if($mess2=="realEstate"){
				echo'<script type="text/javascript">window.location="realEstate.php"; </script>';
			}else if($mess2=="oneRoom"){
				echo'<script type="text/javascript">window.location="oneRoom.php"; </script>';
			}else if($mess2=="businessHouse"){
				echo'<script type="text/javascript">window.location="businessHouse.php"; </script>';
			}else if($mess2=="appartama"){
				echo'<script type="text/javascript">window.location="apartment.php"; </script>';
			}else if($mess2==""){
					$_SESSION['user']=$username;
			        $_SESSION['pass']=$password;
				echo'<script type="text/javascript">window.location="index.php"; </script>';
			}else{
				echo'<script type="text/javascript">window.location="login.php"; </script>';
			}
			
			
		}else{
			$message="Incorrect username or password".mysqli_connect_error();
		}
		}
		}
		
				
	  }
?>
<center>
 <table border="0" style="margin-top:100px">
      <tr>
        <td >
		
        <form autocomplete="off" method="post" action="login.php">
          <h1 style="font-style:italic;text-align:center">LOGIN</h1>
          <label  style="font-size:25px;font-weight:bold">Username:</label>&nbsp &nbsp
          <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" value="<?php echo $username; ?>"><br>
		  <span style="color:red;font-size:18px"><?php echo $umessage; ?></span><br>
          <label  style="font-size:25px; font-weight:bold">Password:</label>&nbsp &nbsp
          <input type="text" name="password" id="password" placeholder="Password" autocomplete="off" value="<?php echo $password; ?>"><br>
          <span style="color:red;font-size:18px"><?php echo $pmessage; ?></span><br>

		   <center>
           <center> <input  style="font-size:18px; color:white;width:160px; background-color:green" onclick="validation()" type="submit" name="login" id="login" value="login" /><br></center>
			Still I haven't Account? <a style="text-decoration:none;font-size:18px;color:blue;" href="insert.php"> signup</a><br>
			<a style="text-decoration:none;font-size:18px;color:blue" href="forgotpassword.php">Forgot Password?</a><br>
            <span style="color:red;font-size:18px"><?php echo $message; ?></span>
			<span style="color:green;font-size:18px"><?php echo $mess; ?></span>
			<span style="color:red;font-size:18px"><?php echo $mess1; ?></span>
			</center>
            <br />
            
        </form></td>
		
      </tr>
    </table>
</center>
</body>
</html>