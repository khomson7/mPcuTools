<?php

require_once './include/SessionManager.php';
//echo json_encode(SessionManager::checkLoginSession());
include_once('./include/database.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

//$chek_ = json_encode($connection->checklogin1($username,$password));

echo $chek_;

if($connection->checklogin1($username,$password)){
  session_start();
  $_SESSION['loginname']=$username;
	header("Location: index.php");
} else {
	header("Location: login.php");
}



/*if(Session::checklogin($connection, $username, $password)){
	header("Location: index.php");
} else {
	header("Location: index.php");
} */

//echo $password;

/*$enpassword = strtoupper(md5($password));

    $result = $connection->query("SELECT *,loginname as username FROM opduser WHERE loginname='$username' AND passweb='$enpassword'");

    if ($result->num_rows == 1) { 
 
  $_SESSION['username0'] = $result->fetch_assoc()['username'];
  $sess = $_SESSION['username0'];


  echo "<script langquage='javascript'>	
  document.write(sessionStorage.setItem('auth_Token', '".$sess."'))	
window.location='index.php';
</script>";  


 exit;

  }  else {
    

} */

/*
if(!$_REQUEST['username']) {
  echo 'No';
} */

//header('Location: index.php',  true,  301);


?>