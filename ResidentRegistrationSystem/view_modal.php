<tr>
								 <?php
$query=mysqli_query($con,"select * from admin");                                                                                                                                                                                                                       
$cnt=1;
	
while($row=mysqli_fetch_array($query))
{
	
	$sql=mysqli_query($con,"select * from registerresident where username='".$row['username']."'"); 
while($rw=mysqli_fetch_array($sql))
{
?>	<td class="table-plus"><?php echo $cnt;?></td>
									<td><?php echo htmlentities($row['username']);?></td>
									<td><?php echo htmlentities($row['email']);?></td>
									<td><?php echo htmlentities($row['role']);?></td>
									
									<td><?php if($row['status']==0){
								echo'<font style="color: red;">Deactivated</font>';
						}
						else{
							echo' <font style="color: green;">Active';
							}
						 ?></td></font>
								
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												 <a class="dropdown-item" data-toggle="modal" type="button" data-target="#view_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-eye"></i> View</p></a>                   
												<a class="dropdown-item" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><p style="color: royalblue;"><i class="fa fa-edit"></i> Edit</p></a>                   
												<a class="dropdown-item" href="admin-account.php?eid=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to Active the account?')"><i class="dw dw-unlock"></i>Active</a>
												<a class="dropdown-item" href="admin-account-deactive.php?eid=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to Deactivate the account?')"><i class="dw dw-lock"></i>Deactive</a>
											</div>
										</div>
									</td>
								</tr>
								
			<!-- modal class-->
		<div class="modal fade bs-example-modal-lg" id="view_modal<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
						
						  <div class="modal-body">
						  		                 
			              
													
					<div class="pull-center">
						<center><h4><p class="mb-30">Staff Information</p></h4></center>
						</div>
						
							<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			
				<div class="col-md-15 col-lg-12">
				
					<ul class="profile-edit-list row">
					<li class="weight-500 col-md-6">			
					<section>
									<div class="form-wrap max-width-600 mx-auto">
										<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Full Name</div>
													<div class="col-sm-8"><?php echo $rw['full_name'];?></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Birth date</div>
													<div class="col-sm-8"><?php echo $rw['birth_date'];?></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Mother Name</div>
													<div class="col-sm-8"><?php echo $rw['mother_name'];?></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600"> House No</div>
													<div class="col-sm-8"> <?php echo $rw['house_number'];?></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">ECP</div>
													<div class="col-sm-8"><?php echo $rw['ecp'];?></div>
												</div>
											</li>
										</ul>
										
									</div>
									</section>
									</li>
									<li class="weight-500 col-md-6">
									<section>
									<div class="form-wrap max-width-600 mx-auto">
										<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Full Name</div>
													<div class="col-sm-8"><?php echo $rw['full_name'];?></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Birth date</div>
													<div class="col-sm-8"><?php echo $rw['birth_date'];?></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Mother Name</div>
													<div class="col-sm-8"><?php echo $rw['mother_name'];?></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600"> House No</div>
													<div class="col-sm-8"> <?php echo $rw['house_number'];?></div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">ECP</div>
													<div class="col-sm-8"><?php echo $rw['ecp'];?></div>
												</div>
											</li>
										</ul>
										
									</div>
								</section>
							</li>
							</ul>
					
					
				</div>
			
		</div>
	</div>	
										
		
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="update" class="btn btn-primary">Save changes</button>
								
						</div>
						</div>
						</div>
						</div>