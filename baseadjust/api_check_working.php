<?php
include_once('../include/database.php');
$url = _URL_;

$url = $url;
$api0 = new API("$url");
//$data0 = $api0->getData();
if ($api0->checkApi($url)) {
  echo "The API is working";
} else {
  echo "The API is not working";
}
?>