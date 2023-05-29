<?php 
include_once('./include/database.php');

$tableName = 'opduser';
//$hosxp_pcu_db_name = 'hosxp_pcu';
$database_hos = _HOSDB_; 

$connection->dropTable($tableName);

$connection->createTable($tableName
, 'loginname varchar(250) NOT NULL,
name varchar(250) DEFAULT NULL,
password varchar(250) DEFAULT NULL,
passweb varchar(250) DEFAULT NULL,
accessright text,
department varchar(250) DEFAULT NULL,
departmentposition varchar(250) DEFAULT NULL,
entryposition varchar(250) DEFAULT NULL,
picture longblob,
startfullscreen char(1) DEFAULT NULL,
doctorcode varchar(7) DEFAULT NULL,
drug_access_level tinyint(4) DEFAULT NULL,
groupname varchar(250) DEFAULT NULL,
visible_menu text,
viewallmenu char(1) DEFAULT NULL,
lab_staff char(1) DEFAULT NULL,
hospital_department_id int(11) DEFAULT NULL,
nhso_user varchar(250) DEFAULT NULL,
nhso_password varchar(250) DEFAULT NULL,
max_station int(11) DEFAULT NULL,
show_tip char(1) DEFAULT NULL,
password_expire_date date DEFAULT NULL,
password_recheck_date int(11) DEFAULT NULL,
new_password_date date DEFAULT NULL,
check_lab_password char(1) DEFAULT NULL,
pcu_user char(1) DEFAULT NULL,
account_disable char(1) DEFAULT NULL,
restrict_ward_access char(1) DEFAULT NULL,
real_staff char(1) DEFAULT NULL,
restrict_clinic_access char(1) DEFAULT NULL,
no_lab_result_display char(1) DEFAULT NULL,
no_doctor_consult_display char(1) DEFAULT NULL,
no_announce_display char(1) DEFAULT NULL,
announce_read_count int(11) DEFAULT NULL,
xray_staff char(1) DEFAULT NULL,
hos_guid varchar(38) DEFAULT NULL,
lab_check_password char(1) DEFAULT NULL,
cid varchar(13) DEFAULT NULL,
hos_guid_ext varchar(64) DEFAULT NULL,
auto_logout_minute int(11) DEFAULT NULL,
iclaim_jwt text,
PRIMARY KEY (loginname),
KEY department (department),
KEY groupname (groupname),
KEY name (name),
KEY password (password),
KEY ix_hos_guid (hos_guid),
KEY ix_cid (cid),
KEY ix_hos_guid_ext (hos_guid_ext),
KEY ix_doctorcode (doctorcode)').'ENGINE=InnoDB DEFAULT CHARSET=tis620'; 


$table1 = 'opduser(loginname,name,passweb,entryposition)'; //into table
$table2 = $database_hos.'.opduser h_o'; //select from table
$where = "h_o.entryposition in('admin','administrator')"; //where condition
$columns = "loginname,name,passweb,entryposition"; // columns
$connection->insertFromSelectAll($table1, $table2, $where, $columns); //select all columns

//update
$table = 'opduser';
$setValues = 'passweb = upper(md5(concat("##Pcu",(select hospitalcode from '.$database_hos.'.opdconfig),"##")))';
$where = "loginname = 'admin'"; 
$connection->updateTable($table, $setValues,$where);

$connection->close();

?>