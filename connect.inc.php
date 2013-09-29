<?php
$con_error = 'Does not Compute';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'air_gourmet';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db)){
	die($con_error);
}


?>