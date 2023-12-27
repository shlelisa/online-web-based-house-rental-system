<?php   include('header.php');

include_once"connection.php";
// variable declaration
$message="";
$mess="";
    $username="";
	$email="";
	$password="";
	$photo="";
	$role="";
	
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$slectq="SELECT * FROM new_user WHERE id='$id'";
	$run_selectq=mysqli_query($conn,$slectq);
	$info=mysqli_fetch_assoc($run_selectq);
	
	$username=$info['username'];
	$email=$info['email'];
	$password=$info['password'];
	$photo=$info['photo'];
	$role=$info['role'];

}
if(isset($_POST['update']))
{
$message="";
$user=mysqli_real_escape_string($conn,$_POST["user"]);
$ema=mysqli_real_escape_string($conn,$_POST["ema"]);
$pass=md5($_POST["pass"]);
$rol=mysqli_real_escape_string($conn,$_POST["rol"]);
$phot=$_FILES['phot']['name'];

if(empty(trim($user)) ||empty(trim($ema)) ||empty(trim($pass)) ||empty(trim($rol)) ){
	$mess="Al fields required";
	#header("location:updateuserdata.php");
	echo'<script type="text/javascript">window.location="updateuserdata.php"; </script>';
}else{
	move_uploaded_file($_FILES["phot"]["tmp_name"],"NewsPhoto/".$_FILES["phot"]["name"]);
$updateq="UPDATE new_user SET username='$user',email='$ema',password='$pass',role='$rol',photo='$phot' WHERE id='$id'";
	$run_updateq=mysqli_query($conn,$updateq);
	if($run_updateq)
	{
		$message="UPDATED";
		#header("location:userAccount.php");
		echo'<script type="text/javascript">window.location="info.php"; </script>';
	}
	else
	{
		$mess="NOT UPDATE".mysqli_connect_error($run_updateq);
		header("location:updateyourinfo.php");
	}
	}
}

//mysqli_close($conn);

?>
<style type="text/css">
input{
	border-radius:20px;
	padding:10px;
}
</style>
 <table border="1" style="background-color:whitesmoke">
     <tr style="font-size:18px;font-weight:bold">
     <td width="311">
      <form style="text-align:center" method="post" enctype="multipart/form-data" action="updateyourinfo.php">
     <br><br>
          <label for="fname2">Username: </label><br />
            <input style="width:300px;height:30px" type="text" name="user" id="user" value="<?php echo $username?>" /><br />
         <br>
          <label for="lname">E-mail:</label><br />
            <input style="width:300px;height:30px"type="email" name="ema" id="ema" value="<?php echo $email ?>"/><br /><br>
          
          <label for="id">Password: </label><br />
           <input style="width:300px;height:30px" type="password" name="pass" id="pass" value="<?php echo $password;?>"/><br /><br>

         <label for="id">Photo : </label><br />
		  
		  <center>
		  <input style="width:300px;height:30px" type="file" name="phot" ><br><br>
		  <div>
		     <img  style="width:300px;height:150px" src="NewsPhoto/<?php echo htmlentities($photo);?>">
		  </div>
		  
		  </center><br><br>
          <label for="id">Role: </label><br />
            <input style="width:300px;height:30px"type="text" name="rol" id="role"  readonly  value="<?php echo $role ?>"/><br /><br>

          <p>
            <input style="font-size:20px;width:200px;height:40px;background-color:green;color:white"type="submit" name="update" id="update" value="update" />
            
            <br /><br>
            <span style="color:green"><?php echo $message;?></span> <span style="color:red"><?php echo $mess;?></span> </p>
      </form>
      </td>
      </tr>
      </table>
	  <br /><br>
	  
	  <?php  include('footer.php'); ?>