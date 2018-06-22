<?php
require ('../db.php');

$rid = $_GET['rid'];
$uname = $_GET['uname'];
$name = $_GET['name'];
$date = $_GET['date'];
$rootname = $_GET['rn'];
$rnum = $_GET['rnum'];
$phone_number= $_GET['pn'];
$bus = $_GET['bn'];





$sql1 = "insert into driver(`register_id`,`user_name`,`driver_name`,`phone_number`,`root_number`,`root_name`,`bus_number`)values('".$rid."','".$uname."','".$name."','".$phone_number."','".$rnum."','".$rootname."','".$bus."')";
$result1 = mysql_query($sql1);

$sql2 = "update driver_register set `accepted`=1 where `register_id`='$rid'";
$result2 = mysql_query($sql2);
header("Location: view_driver.php");
























?>