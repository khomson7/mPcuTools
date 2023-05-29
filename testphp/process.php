<?php
sleep(3);
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
//echo $appRoot;
// Simulating processing tasks


// Redirect after processing
header("Location:". $appRoot."/index.php");
exit;
?>







