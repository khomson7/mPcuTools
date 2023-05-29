
<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="#"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
         
                        <?php /* if(isset($_SESSION['user_id'])){ ?>
                            
                            <?php  
                             session_start();
                             header('Location: login.php');
                             exit;*/
                            ?>
                        <li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> เมนูพื้นฐาน</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" onclick="sendProvisVcctype()"><i class="icon-file-alt"></i><span class="hidden-tablet"> ProvisVccType</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>

                        <?php /*}*/ ?>


						<li><a href="login.php"><i class="icon-off"></i><span class="hidden-tablet"> Logout</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->