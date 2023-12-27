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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
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
	error_reporting(0);
	$message="";
	if(isset($_POST['rent'])){
		$category=$_POST['sel'];
	
		
		$rentingMethod=mysqli_real_escape_string($conn,$_POST['rentingOption']);
		$rentingMoney=mysqli_real_escape_string($conn,$_POST['rentingMoney']);
		
		$size=mysqli_real_escape_string($conn,$_POST['size']);
		$bedroom=mysqli_real_escape_string($conn,$_POST['bedroom']);
		$bathroom=mysqli_real_escape_string($conn,$_POST['bathroom']);
		$hlocation=mysqli_real_escape_string($conn,$_POST['hlocation']);
		$hnumber=$_POST['hnumber'];
		$start_date=mysqli_real_escape_string($conn,$_POST['start_date']);
		$end_date=mysqli_real_escape_string($conn,$_POST['end_date']);
	    $himage=$_FILES['himage']['name'];
		
		$identityCard=$_FILES['identityCard']['name'];
		$homeOwnership=$_FILES['homeOwnership']['name'];
		
		$bedimage=$_FILES['bedimage']['name'];
		$bathimage=$_FILES['bathimage']['name'];
		$toiletimage=$_FILES['toiletimage']['name'];
		$kitchenimage=$_FILES['kitchenimage']['name'];
        


  $img = $_POST['image'];
    $folderPath = "NewsPhoto/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
  
    $file = $folderPath . $fileName;
    
  


		
	      $hmessage=mysqli_real_escape_string($conn,$_POST['hmessage']);
		  $additional=mysqli_real_escape_string($conn,$_POST['additional']);	
		  
			move_uploaded_file($_FILES["homeOwnership"]["tmp_name"],"NewsPhoto/".$_FILES["homeOwnership"]["name"]);
			move_uploaded_file($_FILES["identityCard"]["tmp_name"],"RentHomePhoto/".$_FILES["identityCard"]["name"]);
			file_put_contents($file, $image_base64);
			move_uploaded_file($_FILES["fileName"]["tmp_name"],"NewsPhoto/".$_FILES["fileName"]["name"]);
			move_uploaded_file($_FILES["himage"]["tmp_name"],"RentHomePhoto/".$_FILES["himage"]["name"]);
			move_uploaded_file($_FILES["bedimage"]["tmp_name"],"RentHomePhoto/".$_FILES["bedimage"]["name"]);
			move_uploaded_file($_FILES["bathimage"]["tmp_name"],"RentHomePhoto/".$_FILES["bathimage"]["name"]);
			move_uploaded_file($_FILES["toiletimage"]["tmp_name"],"RentHomePhoto/".$_FILES["toiletimage"]["name"]);
			move_uploaded_file($_FILES["kitchenimage"]["tmp_name"],"RentHomePhoto/".$_FILES["kitchenimage"]["name"]);
			
		$selsectQuery=mysqli_query($conn,"SELECT * FROM new_user WHERE id='".$_SESSION['alogin']."'");	
		$row=mysqli_fetch_array($selsectQuery);
		$username=$row['username'];
			
		$query="INSERT INTO rent_home(category,rent,size,rentingMethod,bedroom,bathroom,home_location,home_number,home_image,bed_image,bath_image,toilet_image,kitchen_image,start_date,end_date,about_home,additional_facility,status,payment,identityCard,homeOwnership,OwnerPhoto,username,see)
		VALUES('$category','$rentingMoney','$size','$rentingMethod','$bedroom','$bathroom','$hlocation','$hnumber','$himage','$bedimage','$bathimage','$toiletimage','$kitchenimage','$start_date','$end_date','$hmessage','$additional','deactive','0','$identityCard','$homeOwnership','$fileName','$username','no')";
		$runquery=mysqli_query($conn,$query);
		if($runquery){
			echo'<script>if(alert("added succesfully wait until admin approve it")){
				window.location="profile.php";
			};</script>';
			#echo'<script type="text/javascript">window.location="profile.php"; </script>';
		}else{
			$message=" ".mysqli_error();
		}
		
	}
	?>


																															
 <form style="background-color:white" class="well form-horizontal" method="post" enctype="multipart/form-data">
<div style="width:100%"class="container">
       <table  class="table table-striped">
          <tbody>
             <tr>
                <td style="width:600px"colspan="1">
                  
                      <fieldset style="background-color:white">
                         <div class="form-group">
                            <label class="col-md-4 control-label">Number of Bedroom</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="fa fa-star"></i></span><input id="bedroom" name="bedroom" style="height:40px;font-size:18px" placeholder="Number of bedroom" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Number of Bathroom</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="fa fa-star"></i></span><input id="bathroom" name="bathroom" style="height:40px;font-size:18px" placeholder="Number of bathroom" class="form-control" required="true" value="" type="number"></div>
                            </div>
                         </div>
						 
						 
						 
                        <div class="form-group">
                            <label class="col-md-4 control-label">Renting System</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select style="height:40px;font-size:18px"  name="rentingOption" class="selectpicker form-control">
									<option value="Monthly">Monthly</option>
									<option value="Six_Month">Six Month</option>
									<option value="Yearly">Yearly</option>
								 </select>
                                </div>
                            </div>
                         </div>
						 
				 
				 
	
	                     <div class="form-group">
                            <label class="col-md-4 control-label">Amount</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="fa fa-star"></i></span> <input id="rentingMoney" name="rentingMoney" placeholder="Enter Amount" step="0.0001" style="height:40px;font-size:18px" class="form-control" required="true" type="number"></div>
                            </div>
                         </div>
				
                      
						
                         <div class="form-group">
                            <label class="col-md-4 control-label">Home Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="hnumber" style="height:40px;font-size:18px" name="hnumber" placeholder="Home Number" required class="form-control"  value="" type="text"></div>
                            </div>
                         </div>
						  <div class="form-group">
                            <label class="col-md-4 control-label">Home Size</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="size" name="size" placeholder="Home Size" required class="form-control" style="height:40px;font-size:18px" value="" type="text"></div>
                            </div>
                         </div>
                           <div class="form-group">
                            <label class="col-md-4 control-label">Home Location</label>
                            <div class="col-md-8 inputGroupContainer">
							
                               <div class="input-group"><span class="input-group-addon"><a href="https://www.google.com/maps/"><i class="glyphicon glyphicon-map-marker">Track</i></a></span><input id="hlocation" pattern="https://.*" size="30" style="height:40px;font-size:18px" name="hlocation" placeholder="Home Location" required class="form-control"  value="" type="url"></div>
                            </div>

                         </div>
						
                         <div class="form-group">
                            <label class="col-md-4 control-label">Category</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select name="sel" style="height:40px;font-size:18px" class="selectpicker form-control">
                                    <option style="height:40px;font-size:18px">Apartement</option>
									<option style="height:40px;font-size:18px">Condominium</option>
									<option style="height:40px;font-size:18px">Real Estate</option>
									<option style="height:40px;font-size:18px">Normal House</option>
									<option style="height:40px;font-size:18px">One room house</option>
									<option style="height:40px;font-size:18px">Business house</option> </select>
                                </div>
                            </div>
                         </div>
						
                         <div class="form-group">
                            <label class="col-md-4 control-label">Home Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input style="height:40px;font-size:18px" id="himage" name="himage"  accept="image/*" class="form-control" required  value="" type="file"></div>
                            </div>
                         </div>
						 
                         <div class="form-group">
                            <label class="col-md-4 control-label">Bedroom Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input style="height:40px;font-size:18px" id="bedimage" accept="image/*"name="bedimage"class="form-control" required  value="" type="file"></div>
                            </div>
                         </div>
						   <div class="form-group">
                            <label class="col-md-4 control-label">Additional facility:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span><textarea style="font-size:18px;height:80px" id="additional" name="additional"  placeholder="Additional Facility" class="form-control"  value="" ></textarea></div>
                            </div>
                      </div>
					                           <div class="form-group">
                            <label class="col-md-4 control-label">Upload Identity Card:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input style="height:40px;font-size:18px" id="identityCard" accept="image/*"name="identityCard"class="form-control" required  value="" type="file"></div>
                            </div>
                         </div>
						                          <div class="form-group">
                            <label class="col-md-4 control-label">Upload Home Ownership:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input style="height:40px;font-size:18px" id="homeOwnership" accept="image/*"name="homeOwnership"class="form-control" required  value="" type="file"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Message:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span><textarea style="font-size:18px;height:170px" id="hmessage" name="hmessage" required placeholder="write some message here" class="form-control"  value="" ></textarea></div>
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input style="height:40px;font-size:18px" id="bathimage"accept="image/*" name="bathimage"  class="form-control"required value="" type="file"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Toilet Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="toiletimage"accept="image/*" style="height:40px;font-size:18px"name="toiletimage" class="form-control"required  value="" type="file"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Kitchen Image:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="kitchenimage"accept="image/*"style="height:40px;font-size:18px" name="kitchenimage"  class="form-control"required value="" type="file"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Start Date:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input id="start_date" style="height:40px;font-size:18px"name="start_date" class="form-control" required value="" type="date"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">End Date:</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span><input style="height:40px;font-size:18px" id="end_date" name="end_date" class="form-control" required value="" type="date"></div>
                            </div>
                         </div>
						 
						 
						  <div style="margin-left:200px" class="form-group">
                            <div class="col-md-4 inputGroupContainer">
                               <div class="input-group">
							   <div id="my_camera"></div>
							   <span class="input-group-addon">
							   <i class="glyphicon glyphicon-camera"></i><button onclick="take_snapshot()" required style="color:black">Take your photo</button></span>
							   <input type="hidden" name="image" class="image-tag" required></div>
                            </div>
                         </div>
     			  
		      
                            <div style="margin-left:200px"class="form-group">
                            <div id="results"></div>
                           </div>
						 

                       
                      </fieldset>
					    
                   </form>
                </td>
			
             </tr>
			 
          </tbody>
		  
       </table>
	   <div style="text-align:center;" class="form-group mb-0">
		<input style="background-color:green;color:white;font-size:30px;border-radius:20px"type="submit"  class="btn btn-primary" name="rent" value="Rent Your Home"><br>
		<span style="color:red"><?php echo $message; ?></span>
		<br>
	</div>
    </div>
	</form>
					
	

</html>
<script language="JavaScript">
    Webcam.set({
        width: 350,
        height: 250,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
<?php  include('footer.php');}?>
