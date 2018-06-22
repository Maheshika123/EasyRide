<?php


$rid = $_GET['rid'];
require ('../db.php');



$sql = "delete from driver where `register_id`='$rid'";
$res = mysql_query($sql);
header("Location: driver_details.php"); /* Redirect browser */


























?>