<?php
include('adminheader.php');?>
<?php
include_once"connection.php";
$message="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM new_user WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $message="deleted";
	}else{
		$message="not deleted";
		}
}
?>

 <table border="10" style="background-color:white;width:800px;margin-left:100px" align="center">
 <caption style="text-align:center;font-size:30px;font-size:bold">Details About User</caption>
  <tr style="font-size:18px;font-weight:bold">
    <td>Id</td>
    <td>Username</td>
    <td>Email</td>
    <td>Password</td>
	 <td>Phone</td>
    <td>Address</td>
	 <td>Photo</td>
    <td>Role</td>
	 <th colspan="2" style="text-align:center">Actions</th>
  </tr>
  <?php
  include_once"connection.php";
      $message="";
	  $selectquery="SELECT * FROM new_user";
	  $runselectquery=mysqli_query($conn,$selectquery);
	  $numberofrows=mysqli_num_rows($runselectquery);
		if($numberofrows>0){
	  while( $value=mysqli_fetch_assoc($runselectquery)){
		    echo"
			 <tr>
			    <td>".$value['id']."</td>
				 <td>".$value['username']."</td>
				  <td>".$value['email']."</td>
				   <td>".$value['password']."</td>
				   <td>".$value['phone']."</td>
				   <td>".$value['address']."</td>
                    <td>".$value['photo']."</td>
				    <td>".$value['role']."</td>

					<td> <a href='?id=".$value['id']."'>Delete</a></td>
				
						<td><a href='updateuserdata.php?id=".$value['id']."'>update</a></td>
	                       </tr> ";
		
	    }
		}else{
			$message="No user is Available !";
		}
	?>

</table>
<center><button  style="background-color:green;border-radius:20px;"> <a style="text-decoration:none;color:color:white;font-size:30px" href="signUp.php">Add User</a></button></center>
<center><span style="color:red;font-size:18px"><?php echo $message; ?></span></center>

<?php  include('footer.php'); ?>