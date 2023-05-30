<?php
// Create a new MySQLConnection object
include_once('../include/database.php');
$url = _URL_;

//1.person_anc_preg_week
$curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "$url/configs/person_anc_preg_week",
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

    //แก้ไขส่วนนี้
    $person_anc_preg_week_id = $item['person_anc_preg_week_id'];
    $week_min = $item['week_min'];
    $week_max = $item['week_max'];
    $week_min_quality = $item['week_min_quality'];
    $week_max_quality = $item['week_max_quality'];
   
    $data = array("person_anc_preg_week_id" => $person_anc_preg_week_id,"week_min" => $week_min,"week_max" => $week_max
    ,"week_min_quality" => $week_min_quality,"week_max_quality" => $week_max_quality
      );

      //สิ้นสุด
  
    $connection->insertData("person_anc_preg_week", $data);

   }

   //2.epi_vaccine
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "$url/configs/epi_vaccine",
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

//แก้ไขส่วนนี้
$epi_vaccine_id = $item['epi_vaccine_id'];
$epi_vaccine_name = $item['epi_vaccine_name'];
$vaccine_code = $item['vaccine_code'];
$age_min = $item['age_min'];
$age_max = $item['age_max'];
$export_vaccine_code = $item['export_vaccine_code'];
$vaccine_in_use = $item['vaccine_in_use'];
$icode = $item['icode'];
$combine_vaccine = $item['combine_vaccine'];
$check_code = $item['check_code'];

$data = array("epi_vaccine_id" => $epi_vaccine_id,"epi_vaccine_name" => $epi_vaccine_name,"vaccine_code" => $vaccine_code
,"age_min" => $age_min,"age_max" => $age_max,"export_vaccine_code" => $export_vaccine_code,"vaccine_in_use" => $vaccine_in_use
,"icode" => $icode,"combine_vaccine" => $combine_vaccine,"check_code" => $check_code  
);

//สิ้นสุด

$connection->insertData("epi_vaccine", $data);

}


//3.ovst_community_service_type
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "$url/configs/ovst_community_service_type",
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

//แก้ไขส่วนนี้
$ovst_community_service_type_id = $item['ovst_community_service_type_id'];
$ovst_community_service_type_name = $item['ovst_community_service_type_name'];
$ovst_community_service_type_code = $item['ovst_community_service_type_code'];

$data = array("ovst_community_service_type_id" => $ovst_community_service_type_id,"ovst_community_service_type_name" => $ovst_community_service_type_name
,"ovst_community_service_type_code" => $ovst_community_service_type_code
);

//สิ้นสุด

$connection->insertData("ovst_community_service_type", $data);

}

//4.person_vaccine
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "$url/configs/person_vaccine",
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

//แก้ไขส่วนนี้
$person_vaccine_id = $item['person_vaccine_id'];
$vaccine_name = $item['vaccine_name'];
$vaccine_code = $item['vaccine_code'];
$vaccine_group = $item['vaccine_group'];
$export_vaccine_code = $item['export_vaccine_code'];
$icode = $item['icode'];
$combine_vaccine = $item['combine_vaccine'];
$update_moph_registry = $item['update_moph_registry'];
$require_plan = $item['require_plan'];
$vaccine_route_id = $item['vaccine_route_id'];
$report_name = $item['report_name'];
$active_status = $item['active_status'];
$vaccine_manufacturer = $item['vaccine_manufacturer'];
$dx_icd10 = $item['dx_icd10'];
$auto_treatment_plan = $item['auto_treatment_plan'];
$treatment_plan_type_id = $item['treatment_plan_type_id'];
$use_moph_lot = $item['use_moph_lot'];
$show_serial_lookup = $item['show_serial_lookup'];
$def_dose_qty = $item['def_dose_qty'];
$def_dose_unit = $item['def_dose_unit'];
$vaccine_nickname= $item['vaccine_nickname'];
$multiple_doses= $item['multiple_doses'];
$dose_per_bottle= $item['dose_per_bottle'];

$data = array("person_vaccine_id" => $person_vaccine_id,"vaccine_name" => $vaccine_name,"vaccine_code" => $vaccine_code
,"vaccine_group" => $vaccine_group,"export_vaccine_code" => $export_vaccine_code
,"combine_vaccine" => $combine_vaccine,"icode" => $icode,"update_moph_registry" => $update_moph_registry 
,"require_plan" => $require_plan,"vaccine_route_id" => $vaccine_route_id,"report_name" => $report_name
,"active_status" => $active_status,"vaccine_manufacturer" => $vaccine_manufacturer,"dx_icd10" => $dx_icd10 
,"auto_treatment_plan" => $auto_treatment_plan,"treatment_plan_type_id" => $treatment_plan_type_id
,"use_moph_lot" => $use_moph_lot,"show_serial_lookup" => $show_serial_lookup,"def_dose_qty" => $def_dose_qty
,"def_dose_unit" => $def_dose_unit,"vaccine_nickname" => $vaccine_nickname,"multiple_doses" => $multiple_doses,"dose_per_bottle" => $dose_per_bottle
);

//สิ้นสุด

$connection->insertData("person_vaccine", $data);

}

//5.pp_special_code
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "$url/configs/pp_special_code",
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

//แก้ไขส่วนนี้
$code = $item['code'];
$name = $item['name'];

$data = array("code" => $code,"name" => $name
);

//สิ้นสุด

$connection->insertData("pp_special_code", $data);

}

//5.pp_special_type
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "$url/configs/pp_special_type",
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

//แก้ไขส่วนนี้
$pp_special_type_id = $item['pp_special_type_id'];
$pp_special_type_name = $item['pp_special_type_name'];
$pp_special_code = $item['pp_special_code'];

$data = array("pp_special_type_id" => $pp_special_type_id,"pp_special_type_name" => $pp_special_type_name
,"pp_special_code" => $pp_special_code
);

//สิ้นสุด

$connection->insertData("pp_special_type", $data);

}



   //2.provis_vcctype
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "$url/configs/provis_vcctype",
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

//แก้ไขส่วนนี้
$code = $item['code'];
$hos_guid = $item['hos_guid'];
$name = $item['name'];

$data = array("code" => $code,"name" => $name
);

//สิ้นสุด

$connection->insertData("provis_vcctype", $data);

}