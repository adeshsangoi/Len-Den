<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "aadi2912";
$db_name = "lenden";
$con = new mysqli($host, $user, $pass, $db_name);
function formatDate($date){
	return date('g:i a', strtotime($date));
}
?>
