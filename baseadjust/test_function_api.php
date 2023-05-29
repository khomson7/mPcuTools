<?php
include_once('../include/database.php');
$url = _URL_;
$api0 = new API("$url");
$tableName = 'provis_vcctype';
$connection->truncateTable($tableName);
$link = "/configs/$tableName";

$arrays = array("");

$arr['rest'] = json_decode($api0->cURL_Bearer(
    _TOKEN_,
    _URL_,
    $link,
    'GET',
    json_encode($arrays)
));

$arr2 = json_encode($arr);
$array2 = json_decode($arr2, true);

//echo json_encode($array2);

foreach ($array2["rest"]["data"] as $key => $item) {

    //แก้ไขส่วนนี้
    $code = $item['code'];
    $hos_guid = $item['hos_guid'];
    $name = $item['name'];

    //echo $code ;
    $data = array("code" => $code,"name" => $name);
    //$data = array($code,$name);
   // echo json_encode($data);


    $connection->insertData("$tableName", $data);

      //สิ้นสุด
  
    
   }

?>