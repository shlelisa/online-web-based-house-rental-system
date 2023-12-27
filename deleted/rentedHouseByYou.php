<?php 
include("header.php"); 
include("connection.php");
$mess="";
if(isset($_GET['id'])){
	$deleteQuery=mysqli_query($conn,"delete from rentProcess WHERE id='".$_GET['id']."'");
	if($deleteQuery){
		
	}else{
		$mess=" ".mysqli_connect_error($deleteQuery);
	}
}
$selectQuery=mysqli_query($conn,"SELECT * FROM rentProcess WHERE username='".$_SESSION['ausername']."' ");
while($row=mysqli_fetch_array($selectQuery)){
	
?>

 <form style="background-color:white" class="well form-horizontal" method="post" enctype="multipart/form-data">
<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
       <td colspan="1">
                  
                      <fieldset style="background-color:white">
	                     <div class="form-group">
                            <label class="col-md-4 control-label">Price</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="rentingMoney" name="rentingMoney" placeholder="Enter Amount" step="0.0001" class="form-control" readonly="true" style="background-color:transparent;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" value="<?php echo $row['price']; ?>" type="number"></div>
                            </div>
                         </div>
				
                      	     <div class="form-group">
                            <label class="col-md-4 control-label">Delivery Fee</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="rentingMoney" name="rentingMoney" placeholder="Enter Amount" step="0.0001" class="form-control" readonly="true" style="background-color:transparent;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" value="<?php echo $row['deliveryFee']; ?>" type="number"></div>
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
                            <label class="col-md-4 control-label">Start Date</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="rentingMoney" name="rentingMoney" placeholder="Enter Amount" step="0.0001" class="form-control" readonly="true" style="background-color:transparent;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" value="<?php echo $row['start_date']; ?>" type="date"></div>
                            </div>
                         </div>
						 	<div class="form-group">
                            <label class="col-md-4 control-label">End Date</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><input id="rentingMoney" name="rentingMoney" placeholder="Enter Amount" step="0.0001" class="form-control" readonly="true" style="background-color:transparent;border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;" value="<?php echo $row['end_date']; ?>" type="date"></div>
                            </div>
                         </div>
						  <div class="form-group">
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span><?php echo $mess; ?></span></div>
                            </div>
                         </div>
                           
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><a href="?id=<?php echo $row['id'];?>"><i class="fa fa-remove" style="margin-left:1000px;font-size:18px;color:red"> delete</i></div>
                            </div>
                        
                      </fieldset>
                </td>
             </tr>
			 
          </tbody>
       </table>
       </div>
	</form>
<?php } ?>			
	   <div style="text-align:center;" class="form-group mb-0">
		<a style="background-color:green;color:white;font-size:30px;border-radius:20px" href="profile.php" >Back to profile</a><br>
		<br>
	</div>	

<?php include("footer.php"); ?>