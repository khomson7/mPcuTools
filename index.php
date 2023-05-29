<?php 
session_start();
if(!$_SESSION['loginname'])  { 

	header("Location: login.php");
	
	}
include('header.php');

?>


			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div id = "alert">
      <p>API NOT WORK!</p>
      <button id = "close" onclick = "closeDialog()"> Close</button>
   </div>

   <div id="processingModal" class="modal">
    <div class="modal-content">
    <p> processing...</p>
    </div>
  </div>




            <button onclick="sendProvisVcctype()">PROVIS_VCCTYPE</button>
			<button onclick="invokeAlert();">Test</button>
			<button onclick="submitForm()">Submit</button>
			<?php   echo $_SESSION['loginname'] ?>

			<?php /*if(!$_SESSION['loginname'])  { 

header("Location: login.php");

} */
?>

	

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
    
	
<?php 
include('footer.php');
?>