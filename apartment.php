<?php  include('header.php');?>

    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">                
                    <h2 class="page-title">House</h2>
                    <p class="page-description">All apartment List</p>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->
	
	

					<?php
												include"connection.php";
				$sql=mysqli_query($conn,"SELECT * FROM rent_home WHERE category='Apartement' AND payment ='0' AND status='active' ORDER BY id DESC");
				$cnt=1;
				for($i=0; $row=mysqli_fetch_array($sql); $i++){   
               ?>   
                              					
									<div style="background-color:white" class='col-md-4 col-sm-6 col-xs-6'>
				 
				
                                        <div class='apartments-content'>
                                            <div class='image-content'>
											
                                               <a href='apartment-single.php?id=<?php echo $row['id'];?>'>
  <?php if($row['home_image']==""){ ?>
  <img   src="RentHomePhoto/noimage.png"><?php } else {?>
   <img   style="width:700px;height:350px"src="RentHomePhoto/<?php echo htmlentities($row['home_image']);?>">
   <?php } ?>
											   
											   
											  </a>
                                            </div>
                                        
                                            <div class='text-content'>
                                                <div class='top-content'>
                                                    <h3>
                                                        <a href='apartment-single.php?id=<?php echo $row['id'];?>'>apartment</a>
													   
                                                    </h3>
                                                   <span>
                                                       <a href="<?php echo $row['home_location'] ?>"><i class='fa fa-map-marker'></i></a>
                                                   </span> 
                                                </div>
                                                <div class='bottom-content clearfix'>
                                                    <div class='meta-bed-room'>
                                                        <i class='fa fa-bed'></i><?php echo $row['bedroom'] ?> bedroom
                                                    </div>
                                                    <div class='meta-bath-room'>
                                                        <i class='fa fa-bath'></i><?php echo $row['bathroom'] ?>bathroom;
                                                    </div>
                                                    <span class='clearfix'></span>
                                                   <div class='rent-price pull-left'>
                                                       <?php echo $row['rent'] ?>/month
                                                    </div>
                                                   
                                                 </div>
                                             </div>
                                         </div>
										 
                                     </div>
									 </div>
									  <?php } ?>

	<?php  include('footer.php');?>
								


