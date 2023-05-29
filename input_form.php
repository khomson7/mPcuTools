<?php
include_once('./include/database.php');

$result = $connection->query("SELECT * FROM template_report_form where id = 1");

foreach( $result as $value ) {

     echo $value['table_on'];
     echo  $value['tr_td_head'];
     echo  $value['report_header'];

     $tr_td_body = $value['tr_td_body'];
 $result1 = $connection->query("SELECT * FROM template_report_form");
foreach( $result1 as $value ) {
   
    echo ($tr_td_body);

   // echo "<tr>";
     // echo "'<td>' .$value[\"id\"] .'</td>'";
     // echo "<td>" .$value['form_name'] .  "</td> ";
   // echo "</tr>";

    }
    echo  $value['table_close'];
}

 


   // echo "</table>";

  //5. close connection
 

?>