
<?php   
include('adminheader.php');
include_once"connection.php";
// variable declaration
$message="";
$mess="";	
$tit="";
$detail="";
if(isset($_POST['add']))
{
$message="";
$tit=mysqli_real_escape_string($conn,$_POST["tit"]);
$detail=mysqli_real_escape_string($conn,$_POST["detail"]);
$photo=$_FILES['photo']['name'];
$dat=mysqli_real_escape_string($conn,$_POST["dat"]);

	
	move_uploaded_file($_FILES["photo"]["tmp_name"],"NewsPhoto/".$_FILES["photo"]["name"]);
	
    $updateq="INSERT INTO news (news_title,news_detail,photo,date)VALUES('$tit','$detail','$photo','$dat')";
	$run_updateq=mysqli_query($conn,$updateq);
	if($run_updateq)
	{
		$message="Data Added";
		echo'<script type="text/javascript">window.location="news.php"; </script>';
	
	}
	else
	{
		$mess="NOT UPDATE".mysqli_connect_error();
		
	}
	
}
?>



<style type="text/css">
input{
background-color:transparent;
padding:10px;
margin-left:300px;
border: 3px solid #ccc;
}
textarea{
	padding:10px;
	background-color:transparent;
}
</style>
 <table border="1" style="background-color:whitesmoke">
     <tr style="font-size:18px;font-weight:bold">
     <td width="311">
      <form  name="form1" method="post" enctype="multipart/form-data">
     <br><br>
        <input style="width:50%" pattern="^[a-zA-Z]+( [a-zA-Z]+)*$" minlength="3" maxlength="255" type="text"id="title"placeholder="Enter the Title " name="tit" required autocomplete="off"  ><br />
		 <br>
        <textarea  rows="5"  pattern="^[a-zA-Z]+( [a-zA-Z]+)*$" placeholder="Enter Details About News" style="margin-left:300px;border: 3px solid #ccc;width:50%" id="detail"name="detail"  minlength="10"  maxlength="2000" autocomplete="off" required  ></textarea><br>
		<br>          <label for="id" style="margin-left:300px;">Photo : </label><br />
		  
		  <input style="width:50%"type="file" id="photo"name="photo" required ><br>

		 
              <label for="id" style="margin-left:300px;">Date : </label><br />
            <input style="width:50%"type="date" id="date" name="dat" id="dat" autocomplete="off" required ><br /><br>
        
          <p>
         <center>   <input style="border-radius:10px;margin-left:0px;padding:5px;font-size:30px;width:250px;height:50px;background-color:green;color:white"type="submit" name="add"  value="Add News" /></center>
            
            <br /><br>
            <span style="color:green"><?php echo $message;?></span>
			<span style="color:red"><?php echo $mess;?></span> </p>
      </form>
      </td>
      </tr>
      </table>
	  <br /><br>
	  
	  <?php  include('footer.php'); ?>
	  
