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
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>MYTOOLS</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	</script>
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
		
<script>
  function showProcessing() {
    document.getElementById("processingModal").style.display = "block";
  }
</script>
</head>

<body>

<form id="myForm" action="process.php" method="POST">
  <!-- Add your form fields here -->
  <input type="submit" value="Submit" onclick="showProcessing()">
  
  <!-- Modal HTML -->
  <div id="processingModal" class="modal">
    <div class="modal-content">
      <p>Processing...</p>
    </div>
  </div>
</form>

    </body>