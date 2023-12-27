<?php  include('header.php'); ?>



<h1 style="color:green; font-size:30px; font-weight:bold; text-align:center;">All Our Photo Gallery and Vedioes</h>
    <!-- ====== Gallery Area ====== --> 
    <div class="gallery-area">
        <div class="container-fluid">
            <div class="container-large-device">
                <div class="row">
                    <div class="col-md-13">
                        <div class="gallery-left-content">
                            <div class="row">
							
								<?php
								include("connection.php");
				$sql=mysqli_query($conn,"SELECT * FROM rent_home ORDER BY id DESC");
				
				for($i=0; $row=mysqli_fetch_array($sql); $i++){   
               ?>
			
							
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <a class="image-pop-up" style="width:100px; height:50px" href="RentHomePhoto/<?php echo $row['home_image']; ?>">
                                    <?php if($row['home_image']==""){ ?>
   <img  style="width:400px; height:250px" src="RentHomePhoto/noimage.png"><?php } else {?>
   <img   style="width:800px; height:350px" src="RentHomePhoto/<?php echo htmlentities($row['home_image']);?>">
   <?php } ?>
                                    </a>
                                </div><!-- /.col-md-4 -->
									<?php } ?>
							
								
								
                            </div><!-- /.row -->
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-7 -->
                  
                </div><!-- /.row -->
            </div><!-- /.container-large-device  -->
        </div><!-- /.container-fluid-->
    </div><!-- /.gallery-area -->

<?php  include('footer.php'); ?>