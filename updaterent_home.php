<?php
include"header.php";
if(strlen(isset($_SESSION['alogin']))==0){
	echo'<script type="text/javascript">window.location="login.php?page=rentHome"; </script>';
}else{

?>
<!DOCTYPE html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>

    </title>
    <style type="text/css">
form{
	background-color:white;
}
 input{
	 background-color:transparent;
 }

    </style>
	
</head>
	<?php  
	include_once"connection.php";
	$message="";
	if(isset($_POST['updateRent'])){
		$category=$_POST['sel'];
	
		
		$rentingMethod=mysqli_real_escape_string($conn,$_POST['rentingOption']);
		$rentingMoney=mysqli_real_escape_string($conn,$_POST['rentingMoney']);
		
		$bedroom=mysqli_real_escape_string($conn,$_POST['bedroom']);
		$bathroom=mysqli_real_escape_string($conn,$_POST['bathroom']);
		$hlocation=mysqli_real_escape_string($conn,$_POST['hlocation']);
		$hnumber=$_POST['hnumber'];
		$start_date=mysqli_real_escape_string($conn,$_POST['start_date']);
		$end_date=mysqli_real_escape_string($conn,$_POST['end_date']);
	    $himage=$_FILES['himage']['name'];
		
		$bedimage=$_FILES['bedimage']['name'];
		$bathimage=$_FILES['bathimage']['name'];
		$toiletimage=$_FILES['toiletimage']['name'];
		$kitchenimage=$_FILES['kitchenimage']['name'];
		
 $sql=mysqli_query($conn,"select * from rent_home where id='".$_GET['id']."'");
while($row=mysqli_fetch_array($sql))
{

       if($himage==""){
		  $himage= $row['home_image'];
	   }

       if($bedimage==""){
		   $bedimage=$row['bed_image'];
	   }
       if($toiletimage==""){
		   $toiletimage=$row['toilet_image'];
	   }
       if($kitchenimage==""){
		   $kitchenimage=$row['kitchen_image'];
	   }
       if($bathimage==""){
		   $bathimage=$row['bath_image'];
	   }

}
		
	    $hmessage=mysqli_real_escape_string($conn,$_POST['hmessage']);
		  $additional=mysqli_real_escape_string($conn,$_POST['additional']);	
			move_uploaded_file($_FILES["himage"]["tmp_name"],"RentHomePhoto/".$_FILES["himage"]["name"]);
			move_uploaded_file($_FILES["bedimage"]["tmp_name"],"RentHomePhoto/".$_FILES["bedimage"]["name"]);
			move_uploaded_file($_FILES["bathimage"]["tmp_name"],"RentHomePhoto/".$_FILES["bathimage"]["name"]);
			move_uploaded_file($_FILES["toiletimage"]["tmp_name"],"RentHomePhoto/".$_FILES["toiletimage"]["name"]);
			move_uploaded_file($_FILES["kitchenimage"]["tmp_name"],"RentHomePhoto/".$_FILES["kitchenimage"]["name"]);
			
		$selsectQuery=mysqli_query($conn,"SELECT * FROM new_user WHERE id='".$_SESSION['alogin']."'");	
		$row=mysqli_fetch_array($selsectQuery);
		$username=$row['username'];
			
		$query="UPDATE rent_home SET category='$category',rent='$rentingMoney',rentingMethod='$rentingMethod',bedroom='$bedroom',bathroom='$bathroom',home_location='$hlocation',home_number='$hnumber',home_image='$himage',bed_image='$bedimage',bath_image='$bathimage',toilet_image='$toiletimage',kitchen_image='$kitchenimage',start_date='$start_date',end_date='$end_date',about_home='$hmessage',additional_facility='$additional' WHERE id='".$_GET['id']."'";
		$runquery=mysqli_query($conn,$query);
		if($runquery){
			echo'<script type="text/javascript">window.location="profile.php"; </script>';
		}else{
			$message=" ".mysqli_error();
		}
		
	}
	?>


	


<?php 
include("connection.php");
$sql=mysqli_query($conn,"select * from rent_home where id='".$_GET['id']."'");
while($row=mysqli_fetch_array($sql))
{
	?>	
 <form style="background-color:white" class="well form-horizontal" method="post" enctype="multipart/form-data">
<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                  
                      <fieldset style="background-color:white">
                         <div class="form-group">
                            <label class="col-md-4 control-label">Number of Bedroom</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class=""fa fa-star""></i></span><input id="bedroom" name="bedroom" placeholder="Number of bedroom" class="form-control" required="true" value="<?php echo $row['bedroom']; ?>" type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Number of Bathroom</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-number"></i></span><input id="bathroom" name="bathroom" placeholder="Number of bathroom" class="form-control" required="true" value="<?php echo $row['bathroom']; ?>" type="number"></div>
                            </div>
                         </div>
						 
						 
						 
                        <div class="form-group">
                            <label class="col-md-4 control-label">Renting System</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select name="rentingOption"  class="selectpicker form-control">
									<option value="Monthly" <?php if($row['rentingMethod']=="Monthly") echo "selected"; ?>>Monthly</option>
									<option value="Six_Month" <?php if($row['rentingMethod']=="Six_Month") echo "selected"; ?>>Six Month</option>
									<option value="Yearly" <?php if($row['rentingMethod']=="Yearly") echo "selected"; ?>>Yearly</option>
								 </select>
                                </div>
                            </div>
                         </div>
						 
				 
				 
	
	                     <div class="form-group">
                            <label class="col-md-4 control-label">Amount</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="fa fa-star"></i></span><input id="rentingMoney" name="rentingMoney" placeholder="Enter Amount" step="any" class="form-control" required="true" value="<?php echo $row['rent']; ?>" type="number"></div>
                            </div>
                         </div>
				
                      
						
                         <div class="form-group">
                            <label class="col-md-4 control-label">Home Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="hnumber" name="hnumber" placeholder="Home Number" required class="form-control"  value="<?php echo $row['home_number']; ?>" type="text"></div>
                            </div>
                         </div>
						  
                           <div class="form-group">
                            <label class="col-md-4 control-label">Home Location</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><a href="https://www.google.com/maps/"><i class="glyphicon glyphicon-map-marker">Track</i></a></span><input id="hlocation" pattern="https://.*" size="30" name="hlocation" placeholder="Home Location" required class="form-control"  value="<?php echo $row['home_location']; ?>" type="url"></div>
                            </div>

                         </div>
						
                         <div class="form-group">
                            <label class="col-md-4 control-label">Category</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                              <select name="sel" readonly style="border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;background-color:transparent;"  class="selectpicker form-control">
                                    <option value="Apartement" <?php if($row['category']=="Apartement"){echo"selected";} ?>>Apartement</option>
									<option value="Condominium" <?php if($row['category']=="Condominium"){echo"selected";} ?>>Condominium</option>
									<option value="Real Estate" <?php if($row['category']=="Real Estate"){echo"selected";} ?>>Real Estate</option>
									<option value="Normal House" <?php if($row['category']=="Normal House"){echo"selected";} ?>>Normal House</option>
									<option value="One room house" <?php if($row['category']=="One room house"){echo"selected";} ?>>One room house</option>
									<option value="Business house" <?php if($row['category']=="Business house"){echo"selected";} ?>>Business house</option> 
								</select>
                                </div>
                            </div>
                         </div>
						
                         <div class="form-group">
                            <label class="col-md-4 control-label">Home Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="himage" name="himage"  class="form-control"   value="RentHomePhoto/<?php echo $row['home_image']?>" type="file"></div>
                           <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['home_image']?>">
						   </div>
							
                         </div>
						 
                         <div class="form-group">
                            <label class="col-md-4 control-label">Bedroom Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="bedimage" name="bedimage"class="form-control"   value="RentHomePhoto/<?php echo $row['bed_image']?>" type="file"></div>
                            <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['bed_image']?>">
							</div>
                         </div>
						   <div class="form-group">
                            <label class="col-md-4 control-label">Additional facility:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span><textarea style="height:80px" id="additional" name="additional"  placeholder="Additional Facility" required class="form-control"  > <?php echo $row['additional_facility']?></textarea></div>
                            </div>
                      </div>
                      </fieldset>
                  
                </td>
				
                <td colspan="1">
                   <form class="well form-horizontal">
                      <fieldset style="background-color:white">
                         <div class="form-group">
                            <label class="col-md-4 control-label">Bathroom Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="bathimage" name="bathimage"  class="form-control" value="RentHomePhoto/<?php echo $row['bath_image']?>" type="file"></div>
                           <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['bath_image']?>">
						   </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Toilet Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="toiletimage" name="toiletimage" class="form-control"  value="RentHomePhoto/<?php echo $row['toilet_image']?>" type="file"></div>
                             <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['toilet_image']?>">
						   </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Kitchen Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="kitchenimage" name="kitchenimage"  class="form-control" value="RentHomePhoto/<?php echo $row['kitchen_image']?>" type="file"></div>
                             <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['kitchen_image']?>">
						   </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Start Date:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="start_date" name="start_date" class="form-control" required value="<?php echo $row['start_date']?>" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">End Date:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="end_date" name="end_date" class="form-control" required value="<?php echo $row['end_date']?>" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Message:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span><textarea style="height:170px" id="hmessage" name="hmessage" required placeholder="write some message here" class="form-control"  value="" ><?php echo $row['about_home']?></textarea></div>
                            </div>
                      </div>
                       
                       
                      </fieldset>
					    
                   </form>
                </td>
			
             </tr>
			 
          </tbody>
		  
       </table>
	   <div style="text-align:center;" class="form-group mb-0">
		<input style="background-color:green;color:white;font-size:30px;border-radius:20px"type="submit"  class="btn btn-primary" name="updateRent" value="Update and Save"><br>
		<span style="color:red"><?php echo $message; ?></span>
		<br>
	</div>
    </div>
	</form>
<?php } ?>			
	

</html>

<?php  include('footer.php');}?>
