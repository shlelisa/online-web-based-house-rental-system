<?php include"adminheader.php";
  ?>


<?php   
include_once"connection.php";
//$un="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$deletequery="DELETE FROM rent_home WHERE id='$id'";
	$rundeletequery=mysqli_query($conn,$deletequery);
	if($rundeletequery){
	  echo"deleted";
	}else{
		 echo"not deleted";
		}
}
?>

<table border="1" align="center">
  <caption style="font-size:30px;font-weight:bold">

 <center> Data of Rented Home</center>
</caption>
  <tr style="font-size:18px;font-weight:bold">
    <th>Id</th>
    <th>Category</th>
    <th>Rent</th>
	<th>Residence</th>
    <th>Bedroom</th>
    <th>Bathroom</th>
    <th>Home Location</th>
    <th>Home Number</th>
    <th>Home Image</th>
	<th>Bedroom Image</th>
	<th>Bathroom Image</th>
	<th>Toilet Image</th>
	<th>Kitchen Image</th>
	<th>Description</th>
	<th>Email</th>
	<th>Status</th>
    <th colspan="2" style="text-align:center">Actions</th>
  </tr>
  <?php
  include_once"connection.php";
  
  $selectquery="SELECT * FROM rent_home WHERE status='rented'";
  $runselectquery=mysqli_query($conn,$selectquery);
  
  $result=mysqli_num_rows($runselectquery);
  if($result>0){
	  while($value=mysqli_fetch_assoc($runselectquery)){
		    echo"
			 <tr>
			    <td>".$value['id']."</td>
				 <td>".$value['category']."</td>
				     <td>".$value['rent']."</td>
					 <td>".$value['how_long']."</td>
				       <td>".$value['bedroom']."</td>
					   <td>".$value['bathroom']."</td>
					    <td>".$value['home_location']."</td>
	                <td>".$value['home_number']."</td>
				    <td>".$value['home_image']."</td>
				     <td>".$value['bed_image']."</td>
				       <td>".$value['bath_image']."</td>
					   <td>".$value['toilet_image']."</td>
					    <td>".$value['kitchen_image']."</td>
						<td>".$value['about_home']."</td>
					    <td>".$value['email']."</td>
						<td>".$value['status']."</td>
						<td> <a href='?id=".$value['id']."'>Delete</a></td>
						<td><a href='updateadmindata.php?id=".$value['id']."'>update</a></td>
			 </tr>
			"; 
		  }
	  }
?>
</table>

<?php include"footer.php"; ?>