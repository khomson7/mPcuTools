
<form method="POST" action="updatetable.php">
    <label for="tablename">Name:</label>
    <select name="dropdown">

<?php

$url = 'http://127.0.0.1:3011/configs/prsdbcommand';
$data = file_get_contents($url);
$dataArray = json_decode($data, true);
//echo $dataArray;
//$options = array_column($dataArray, 'name');

//echo '<select name="dropdown">';
foreach ($dataArray as $key => $option) {
   // $aa =  $option['table_names'];
    echo '<option value="' . '">' . $option['table_names'] .  '</option>';
}
echo '</select>';

?>
/*
  <input type="text" id="tablenames" name="tablename" required>
*/
    <input type="submit" value="Submit">
</form>




<script language="javascript">
function submitForm(){
    var val = document.myform.category.value;
    if(val!=-1){
        document.myform.submit();
    }
}
</script>


<form method="post" name="myform" action="<?php echo $_SERVER['PHP_SELF']  ?>" >

    <table class="form">

            <select name="table_names" class="formfield" id="table_names" onchange="submitForm();">
                <option value="-1"> table_names </option>
                <?php
                   $url = 'http://127.0.0.1:3011/configs/prsdbcommand';
                   $data = file_get_contents($url);
                   $dataArray = json_decode($data, true);
         
                   foreach ($dataArray as $key => $option) {
                       echo '<option value="' . '">' . $option['table_names'] .  '</option>';
                   }
                  

                    /*$sql_contry = "SELECT * FROM category";
                    $rs_c = mysql_query($sql_contry);
                    while ($row_c = mysql_fetch_array($rs_c)) {
                        echo '<option value="'.$row_c['category'].'">'.$row_c['category'].'</option>';  
                    }*/
                ?>
             </select>

    </table>

</form>



<?php
//require_once("../include/database.php");
      include_once('../include/database.php');
      $url = _URL_;

//update table person_anc_preg_week
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $tableName  = $_POST["tablename"];
//$tableName = 'prs_person_anc_preg_week';

$curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "$url/configs/command/$tableName",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

$response = curl_exec($curl);
curl_close($curl);
$array2 = json_decode($response, true);

foreach ($array2["data"] as $key => $item) {

//echo $item['feild_name'];
$table0 = $item['table1'];
$table0_1 = $item['table2'];
$joinCondition = $item['join_condition'];
$setValues = $item['set_values'];
$connection->updateTableWithJoin($table0, $table0_1, $joinCondition, $setValues);
/*
$table0 = 'person_anc_preg_week';
$table0_1 = 'prs_person_anc_preg_week';
$joinCondition = 'person_anc_preg_week.person_anc_preg_week_id = prs_person_anc_preg_week.person_anc_preg_week_id';
$setValues = 'person_anc_preg_week.week_min = prs_person_anc_preg_week.week_min , person_anc_preg_week.week_max = prs_person_anc_preg_week.week_max
    , person_anc_preg_week.week_min_quality = prs_person_anc_preg_week.week_min_quality, person_anc_preg_week.week_max_quality = prs_person_anc_preg_week.week_max_quality';
$connection->updateTableWithJoin($table0, $table0_1, $joinCondition, $setValues);

*/
}

}
$connection->close();

      ?>