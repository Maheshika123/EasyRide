<?php


$oid = $_GET['oid'];
require ('../db.php');



$sql = "delete from owner where `owner_register_id`='$oid'";
$res = mysql_query($sql);
header("Location: owner_details.php"); /* Redirect browser */






?>