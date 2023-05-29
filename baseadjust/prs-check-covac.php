<?php
// Create a new MySQLConnection object
include_once('../include/database.php');
$url = _URL_; 
$database_hos = _HOSDB_; 
$arr_con = $data = array();

$sql = "select (select hospitalcode from ".$database_hos.".opdconfig) as hospcode,pt.cid,t.vstdate 
from ".$database_hos.".patient pt
INNER JOIN
(SELECT vn.hn,vn.vstdate FROM ".$database_hos.".ovst_vaccine ov
INNER JOIN ".$database_hos.".vn_stat vn on vn.vn = ov.vn
where vstdate BETWEEN '2019-10-01' AND CURDATE() AND ov.moph_update_result is not null
)t on t.hn = pt.hn";
$result = $connection->query($sql);

$api0 = new API("$url");
$tableName = 'prscheckcovac';

$link = "/configs/$tableName";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $hospcode = $row['hospcode'];
        $vstdate = $row['vstdate'];
        $cid = $row['cid'];

        $curl = curl_init();
       curl_setopt_array($curl, array(
        CURLOPT_URL => "http://127.0.0.1:3011/configs/prscheckcovac",
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>"{\"hospcode\":\"$hospcode\",
          \"vstdate\":\"$vstdate\",
          \"cid\":\"$cid\"
             }", 
        CURLOPT_HTTPHEADER => array(
       //   "Authorization: Bearer $token_hos",
          'Content-Type: application/json'
        ),
      ));
      
      $response = curl_exec($curl);
      
      curl_close($curl);

    }
      
} else {
    echo "No results found.";
}
//echo json_encode($arr);



?>