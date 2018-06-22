<?php


$rid = $_GET['rid'];
$name = $_GET['name'];
$user_name = $_GET['uname'];
$date = $_GET['date'];


require ('../db.php');

$sql1 = "insert into customer(`Register_id`,`Name`,`Joined_date`,`User_name`)values('".$rid."','".$name."','".$date."','".$user_name."')";
$result1 = mysql_query($sql1);

$sql2 = "update customer_register set `accepted`=1 where `Register_id`='$rid'";
$result2 = mysql_query($sql2);
header("Location: customer_req.php");

















?>