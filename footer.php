<?php
require_once("./include/database.php");
$url = _URL_;
?>
<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>

        <script>
          var url = "<?php echo $url; ?>";
		//var url = 'http://127.0.0.1:3011';
function sendAjaxRequest() {
	
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'ajax_handler.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the server
            var response = JSON.parse(res);
            //console.log(response.message); // Output: "Hello, world!
            alert(response.message);
        }
    };
    xhr.send();
}

var alertDiv = document.getElementById("alert");



      function invokeAlert() {
         alertDiv.style.display = "block";
      }
      function closeDialog() {
         alertDiv.style.display = "none";
      }


function sendProvisVcctype() {
	
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'baseadjust/provis_vcctype.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

	fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
    return response.json();
    })

    .then(data => {
		const txt = '{"name":"PROVIS_VCCTYPE OK!"}'
		var obj = JSON.parse(txt);
            alert(obj.name);
    })
    .catch(error => {
		alertDiv.style.display = "block";
    });

       
        }
    };
    //document.getElementById("processingModal").style.display = "block";
    
    xhr.send();
	
}

function submitForm() {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'processajax.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

          document.getElementById("processingModal").style.display = "none";
          // Handle the response from process.php if needed
        } else if (xhr.readyState != 4 && xhr.status != 200) {

          alert(" Error processing!!");
          document.getElementById("processingModal").style.display = "none";
           //exit();
        }

      };

      document.getElementById("processingModal").style.display = "block";
    xhr.send();

      
    }




 function checkApi(url) {
	document.write("<!doctype html><html><head><meta charset=utf-8></head><body><p>You cannot find this in the page source. (Your page needs to be in this document.write argument.)</p></body></html>")
  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
      // API is working
      console.log('API is working');
    })
    .catch(error => {
      console.error('There was a problem with the API:', error);
      // API is not working
      console.log('API is not working');
    });
}



</script>
	<!-- end: JavaScript-->
	
</body>
</html>




