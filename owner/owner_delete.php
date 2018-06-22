<?php


$rid = $_GET['rid'];
require ('../db.php');



$sql = "delete from owner_register where `register_id`='$rid'";
$res = mysql_query($sql);
header("Location: owner_request.php");