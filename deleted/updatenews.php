<?php   
include('adminheader.php');

include_once"connection.php";
// variable declaration
$message="";
$mess="";
$id="";
    $title="";
	$detail="";
	$photo="";
	$date="";
	
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$slectq="SELECT * FROM news WHERE id='$id'";
	$run_selectq=mysqli_query($conn,$slectq);
	$info=mysqli_fetch_assoc($run_selectq);
	
	$title=$info['news_title'];
	$detail=$info['news_detail'];
	$photo=$info['photo'];
	$date=$info['date'];

}
if(isset($_POST['update']))
{
	$message="";
$tit=mysqli_real_escape_string($conn,$_POST["tit"]);
$det=mysqli_real_escape_string($conn,$_POST["det"]);
$phot=$_FILES['phot']['name'];
if($phot==""){
	$phot=$photo;
}
$dat=mysqli_real_escape_string($conn,$_POST["dat"]);


	move_uploaded_file($_FILES["phot"]["tmp_name"],"NewsPhoto/".$_FILES["phot"]["name"]);
$updateq="UPDATE news SET news_title='$tit',news_detail='$det',photo='$phot',date='$dat' WHERE id='$id'";
	$run_updateq=mysqli_query($conn,$updateq);
	if($run_updateq)
	{
		$message="UPDATED";
		
		echo'<script type="text/javascript">window.location="news.php"; </script>';
	}
	else
	{
		$mess="NOT UPDATE".mysqli_connect_error($run_updateq);
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
      <form name="form1" method="post" enctype="multipart/form-data">
     <br><br>
            <label style="margin-left:300px">Title:</label>
            <input  style="width:50%" pattern="^[a-zA-Z]+( [a-zA-Z]+)*$" minlength="3" maxlength="255" type="text" name="tit" id="title" autocomplete="off" required value="<?php echo $title?>" /><br />
        <br>
		 <label style="margin-left:300px">Detail:</label>
           <textarea rows="5"  pattern="^[a-zA-Z]+( [a-zA-Z]+)*$"style="margin-left:300px;border: 3px solid #ccc;width:50%" name="det" id="detail" autocomplete="off" required ><?php echo $detail?></textarea><br>
		   
          
          <label style="margin-left:300px;"for="id">Photo : </label><br />
		  
		
		  <input style="width:50%" type="file" name="phot" id="photo"><br>
	
		  <br>
		  <div style="margin-left:350px;">
		     <img  style="width:400px;height:200px" src="NewsPhoto/<?php echo htmlentities($photo);?>">
		  </div>
		  
		<br><br>
          <label for="id" style="margin-left:300px;">Date : </label><br />
            <input style="width:50%;height:40px"type="date" name="dat" id="date" required value="<?php echo $date ?>"/><br />
			
			<br>

          <p>
             <center>   <input style="border-radius:10px;margin-left:0px;padding:5px;font-size:30px;width:250px;height:50px;background-color:green;color:white"type="submit" name="update"  value="update" /></center>
            <br /><br>
            <span style="color:green"><?php echo $message;?></span> 
			<span style="color:red"><?php echo $mess;?></span> </p>
      </form>
      </td>
      </tr>
      </table>
	  <br /><br>
	  
	  <?php  include('footer.php'); ?>