
<div class="header">
		<div class="header-left">
			<div class="menu-icon dw "></div>
			<div class=""></div>
			<div class="header-search">
				
					<div class="form-group mb-0">
						<h3 class="text-blue text-center">Resident Registration System</h3>
						
					</div>
				
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/efi.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
								<?php if($row["image"]==""){ ?>
   <img src="images/noimage.png"><?php } else {?>
   <img src="images/<?php echo htmlentities($row["image"]);?>" >
   <?php } ?>
						</span>
										</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
				
		
						<a class="dropdown-item" href="security/logout.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	
<?php if($row['role']=="admin"){
?>


<div class="left-side-bar">
		
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				
					<li class="dropdown">
					<a href=""  class="dropdown-toggle no-arrow">
					<span class="micon dw" ><img style="width:60px; height:40px; font-color:white; text:bold" src="vendors/images/logo.png" alt=""></span><span class="mtext">RM-SYSTEM</span>
					</a>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
					
						
					<li>
						<a href="postnews.php" class="dropdown-toggle no-arrow" >
				<span class="micon dw" ><img style="width:50px; height:30px" src="vendors/images/admin.png" alt=""></span><span class="mtext">Post News</span>
						</a>
						
					</li>
					<li>
						<a href="instruction.php" class="dropdown-toggle no-arrow">
							<span class="micon dw"><img style="width:50px; height:30px" src="vendors/images/instruction.png" alt=""></span><span class="mtext">Giving Instructions</span>
						</a>
					</li>
					<li>
						
					</li>
				
					<li>
						<a href="givingidcard.php" class="dropdown-toggle no-arrow">
						<span class="micon dw"><img style="width:50px; height:30px" src="vendors/images/id_card.png" alt=""></span><span class="mtext">Issuance Of ID Card</span>
						</a>
					</li>
					<li>
						<a href="BC.php" class="dropdown-toggle no-arrow">
						<span class="micon dw"><img style="width:50px; height:30px" src="vendors/images/birth.png" alt=""></span><span class="mtext">Issuance Of BC Card</span>
						</a>
					</li>
					<li>
						<a href="MC.php" class="dropdown-toggle no-arrow">
							<span class="micon dw"><img style="width:50px; height:30px" src="vendors/images/marriage.png" alt=""></span><span class="mtext">Issuance Of MC Card</span>
						</a>
					</li>
					<li>
						<a href="DC.php" class="dropdown-toggle no-arrow">
							<span class="micon dw"><img style="width:50px; height:30px" src="vendors/images/dedly.png" alt=""></span><span class="mtext">Issuance Of DC Card</span>
						</a>
					</li>
					<li>
						<a href="Complain.php" class="dropdown-toggle no-arrow">
							<span class="micon dw"><img style="width:50px; height:30px" src="vendors/images/complain.png" alt=""></span><span class="mtext">Viewing Complain<br> Of People</span>
						</a>
					</li>
                     <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
					 <span class="micon dw dw-edit2"></span><span class="mtext">Registration</span>
						</a>
						<ul class="submenu">
							<li><a href="createaccount.php">Employee Form</a></li>

						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Information</span>
						</a>
						<ul class="submenu">
						
						<li><a href="datatable.php">Stuff Information</a></li>
							<li><a href="residentinformation.php">Resident Information</a></li>
							<li><a href="finance.html">Finance Info</a></li>
							<li><a href="gallary.php">View Gallary</a></li>
						</ul>
					</li>
                          
		
					

						
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Manage</span>
						</a>
						<ul class="submenu">
							<li><a href="datatable.php">Stuff Information</a></li>
							<li><a href="viewresident.html">Resident Info</a></li>
							<li><a href="#">Finance Info</a></li>
							<li><a href="#">Gallary</a></li>
							<li><a href="news.php">News</a></li>
						</ul>
					</li>
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a href="invoice.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Report</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Getting Started</a></li>
							<li><a href="color-settings.html">Color Settings</a></li>
							<li><a href="third-party-plugins.html">Third Party Plugins</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>

					

	
<?php }elseif($row['role']=="finance"){
?>  	<div class="left-side-bar">
		
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				
					<li class="dropdown">
					<a href=""  class="dropdown-toggle no-arrow">
					<span class="micon dw" ><img style="width:60px; height:40px; font-color:white; text:bold" src="vendors/images/logo.png" alt=""></span><span class="mtext">RM-SYSTEM</span>
					</a>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
				
                     
                      
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
						<span class="micon dw"><img style="width:50px; height:26px" src="vendors/images/mony.png" alt=""></span> <span class="mtext"> Finance </span>
						</a>
						<ul class="submenu">
							<li><a href="#">Collacting Tax</a></li>
							<li><a href="#">Trade And<br> Marketing</a></li>
							
						</ul>
					</li>
						
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">tabels</span>
						</a>
						<ul class="submenu">
							<li><a href="basic-table.html">Basic Tables</a></li>
							<li><a href="datatable.html">DataTables</a></li>
						</ul>
					</li>
					<li>
						<a href="calendar.html" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li>
						<a href="finance.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Report</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Getting Started</a></li>
							<li><a href="color-settings.html">Color Settings</a></li>
							<li><a href="third-party-plugins.html">Third Party Plugins</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>   


					
<?php }elseif($row['role']='registrar'){
?>
    <div class="left-side-bar">
		
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				
					<li class="dropdown">
					<a href=""  class="dropdown-toggle no-arrow">
					<span class="micon dw" ><img style="width:60px; height:40px; font-color:white; text:bold" src="vendors/images/logo.png" alt=""></span><span class="mtext">RM-SYSTEM</span>
					</a>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
					
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
					 <span class="micon dw dw-edit2"></span><span class="mtext">Registration</span>
						</a>
						<ul class="submenu">
							
							<li><a href="registerresident.php">Resident Form</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Information</span>
						</a>
						<ul class="submenu">
						
							<li><a href="residentinformation.php">Resident Information</a></li>
							<li><a href="#">Finance Info</a></li>
							<li><a href="gallary.php">View Gallary</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a href="#" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Report</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.html">Introduction</a></li>
							<li><a href="getting-started.html">Getting Started</a></li>
							<li><a href="color-settings.html">Color Settings</a></li>
							<li><a href="third-party-plugins.html">Third Party Plugins</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
						
					<?php }else{
						echo 'You are not user';
					} ?>