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
                               <div class="input-group"><input id="bedroom" name="bedroom" placeholder="Number of bedroom" class="form-control" readonly style="background-color:transparent;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" value="<?php echo $row['bedroom']; ?>" type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Number of Bathroom</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="bathroom" style="border-top-style: hidden;border-right-style: hidden;background-color:transparent;border-left-style: hidden;border-bottom-style: hidden;" name="bathroom" placeholder="Number of bathroom" class="form-control" readonly value="<?php echo $row['bathroom']; ?>" type="number"></div>
                            </div>
                         </div>
						 
						 
						 
                        <div class="form-group">
                            <label class="col-md-4 control-label">Renting System</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                 
                                  <select name="rentingOption" style="border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;background-color:transparent;border-bottom-style: hidden;"readonly class="selectpicker form-control">
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
                               <div class="input-group"><input id="rentingMoney" name="rentingMoney" placeholder="Enter Amount" step="any" class="form-control" readonly="true" style="background-color:transparent;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" value="<?php echo $row['rent']; ?>" type="number"></div>
                            </div>
                         </div>
				
                      
						
                         <div class="form-group">
                            <label class="col-md-4 control-label">Home Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="hnumber" name="hnumber" placeholder="Home Number" readonly class="form-control" style="border-top-style: hidden;background-color:transparent;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" value="<?php echo $row['home_number']; ?>" type="text"></div>
                            </div>
                         </div>
						  
                           <div class="form-group">
                            <label class="col-md-4 control-label">Home Location</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><a href="<?php echo $row['home_location']; ?>"><i class="glyphicon glyphicon-map-marker">Track</i></a></span><input style="border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;background-color:transparent;"readonly id="hlocation" pattern="https://.*" size="30" name="hlocation" placeholder="Home Location"  class="form-control"  value="<?php echo $row['home_location']; ?>" type="url"></div>
                            </div>

                         </div>
						
                         <div class="form-group">
                            <label class="col-md-4 control-label">Category</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  
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
                           <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['home_image']?>">
						   </div>
							
                         </div>
						 
                         <div class="form-group">
                            <label class="col-md-4 control-label">Bedroom Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                            <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['bed_image']?>">
							</div>
                         </div>
						   <div class="form-group">
                            <label class="col-md-4 control-label">Additional facility:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span><textarea style="height:80px;border-top-style: hidden;border-right-style: hidden;background-color:transparent;border-left-style: hidden;border-bottom-style: hidden;"" id="additional" name="additional"  placeholder="Additional Facility" readonly class="form-control"  > <?php echo $row['additional_facility']?></textarea></div>
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
                            <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['bath_image']?>">
						   </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Toilet Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                             <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['toilet_image']?>">
						   </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Kitchen Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                              <img style="width:200px;height:130px" readonly src="RentHomePhoto/<?php echo $row['kitchen_image']?>">
						   </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Start Date:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input style="border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;background-color:transparent;border-bottom-style: hidden;" id="start_date" name="start_date" class="form-control" readonly value="<?php echo $row['start_date']?>" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">End Date:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input style="border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;background-color:transparent;border-bottom-style: hidden;"id="end_date" name="end_date" class="form-control" readonly value="<?php echo $row['end_date']?>" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Message:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"></span><textarea style="height:170px;  border-top-style: hidden;background-color:transparent;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" id="hmessage" name="hmessage" readonly placeholder="write some message here" class="form-control"  value="" ><?php echo $row['about_home']?></textarea></div>
                            </div>
                      </div>
                       
                       
                      </fieldset>
					    
                   </form>
                </td>
			
             </tr>
			 
          </tbody>
		  
       </table>
	   <div style="text-align:center;" class="form-group mb-0">
		<a style="background-color:green;color:white;font-size:30px;border-radius:20px" href="profile.php" >Back to profile</a><br>
		<br>
	</div>
    </div>
	</form>
<?php } ?>			
	

</html>

<?php  include('footer.php');}?>
