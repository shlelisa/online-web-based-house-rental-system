<?php   
include"adminheader.php";
include_once"connection.php";
$message="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM news WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  $message="deleted";
	}else{
		 $message="not deleted";
		}
}
?>

 <table border="10" style="background-color:white;width:800px;margin-left:100px" align="center">
 <caption style="text-align:center;font-size:30px;font-size:bold">Details About News</caption>
  <tr style="font-size:18px;font-weight:bold">
    <td>Id</td>
    <td>Title</td>
    <td>Detail</td>
    <td>Photo</td>
    <td>Date</td>
	 <th colspan="2" style="text-align:center">Actions</th>
  </tr>
  <?php
  include_once"connection.php";

	  $selectquery="SELECT * FROM news";
	  $runselectquery=mysqli_query($conn,$selectquery);
	  $numberofrows=mysqli_num_rows($runselectquery);
		if($numberofrows>0){
	  while( $value=mysqli_fetch_assoc($runselectquery)){
		    echo"
			 <tr>
			    <td>".$value['id']."</td>
				 <td>".$value['news_title']."</td>
				  <td>".$value['news_detail']."</td>
				   <td>".$value['photo']."</td>
				    <td>".$value['date']."</td>
					<td> <a href='?id=".$value['id']."'>Delete</a></td>
					 <td><a href='updatenews.php?id=".$value['id']."'>update</a></td>
			 </tr>";
		
	    }
		}
	?>

</table>
<center><button  style="background-color:green;border-radius:20px;"> <a style="text-decoration:none;color:color:white;font-size:30px" href="addNews.php">Add News</a></button></center>
<center><span style="color:red;font-size:18px"><?php echo $message; ?></span></center>


<?php include"footer.php";?>