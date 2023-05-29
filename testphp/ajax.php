<?php 

// Get the document root directory
$documentRoot = $_SERVER['DOCUMENT_ROOT'];

// Get the current script's directory
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);

$scriptDir = '/mPcuTools';
// Combine the document root and script directory to get the application root path
$appRoot = $documentRoot . $scriptDir;

// Normalize the path by removing trailing slashes
//$appRoot = rtrim($appRoot, '/');

// Output the application root path
echo $appRoot;

?>

<!DOCTYPE html>
<html>
<head>
  <title>Processing Modal Example</title>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 200px;
      text-align: center;
    }
  </style>
</head>
<body>
  <button onclick="submitForm()">Submit</button>

  <!-- Modal HTML -->
  <div id="processingModal" class="modal">
    <div class="modal-content">
    <p> processing...</p>
    </div>
  </div>

  <div id="NoprocessingModal" class="modal">
    <div class="modal-content">
    <p> Noprocessing...</p>
    </div>
  </div>

  <script>
    function submitForm() {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'processaja.php', true);
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
/*
      var x = document.getElementById('processingModal');
  if (xhr.readyState === 4 && xhr.status === 200) {
    document.getElementById("processingModal").style.display = "block";
    xhr.send();
  } else {
    x.style.display = 'none';
  }
*/

      // Show the processing modal before sending the request
      document.getElementById("processingModal").style.display = "block";
    xhr.send();

      
    }
  </script>
</body>
</html>