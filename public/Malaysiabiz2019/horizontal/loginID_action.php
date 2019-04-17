<?php
extract($_REQUEST);
error_reporting(0);
include ('../../Connection/pg_connection.php');

$system_name = $_POST['system_name'];
$agency_name = $_POST['agency_name'];
$login_id = $_POST['login_id'];
$login_id_type = $_POST['login_id_type'];
$help_desk = $_POST['help_desk'];


$query = "INSERT INTO  \"public\".\"login_id_directory\" (id_lid,system_name,agency_name,login_id,login_id_type,help_desk) "
        . "VALUES (nextval('loginIDSeq'),'$system_name','$agency_name', '$login_id', '$login_id_type', '$help_desk')";
//echo $query;
$result = pg_query($query);  

header( "Location: login-id-directory.php" ); 

?>
