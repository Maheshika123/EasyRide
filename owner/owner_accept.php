<?php
require ('../db.php');

$rid = $_GET['rid'];
$uname = $_GET['uname'];
$name = $_GET['name'];
$date = $_GET['date'];
$rnum = $_GET['rnum'];
$phone_number= $_GET['pn'];
$bus = $_GET['bn'];
$date = $_GET['date'];



$sql1 = "insert into owner(`owner_register_id`,`user_name`,`owner_name`,`phone_number`,`root_number`,`bus_number`,`joined_date`)values('".$rid."','".$uname."','".$name."','".$phone_number."','".$rnum."','".$bus."','".$date."')";
$result1 = mysql_query($sql1);

$sql2 = "update owner_register set `accepted`=1 where `register_id`='$rid'";
$result2 = mysql_query($sql2);
header("Location: owner_request.php");
























?>