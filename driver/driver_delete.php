<?php


$rid = $_GET['rid'];
require ('../db.php');



$sql = "delete from driver_register where `register_id`='$rid'";
$res = mysql_query($sql);
header("Location: view_driver.php"); /* Redirect browser */


























?>