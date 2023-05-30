<?php 
include('MySQLConnection.php');
include('ApiClass.php');
define("_URL_", "http://127.0.0.1:3011" );
define("_TOKEN_", "" );
define("_HOSDB_", "hosxp_pcu" );

$connection = new MySQLConnection("192.168.3.145", "sa", "hos10918", "mpcu");

?>