<?php
// Create a new MySQLConnection object
include_once('../include/database.php');
$url = _URL_; 

$sql = "select count(*) as cc
from information_schema.`TABLES`
WHERE TABLE_SCHEMA= 'hosxp_pcu03149' AND TABLE_NAME = 'prs_provis_vcctype'";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo $row['cc'];
    }
} else {
    echo "No results found.";
}


?>