<?php

$localhost ="127.0.0.1";
$username="root";
$password="";
$errMsg="";

$con= mysql_connect($localhost,$username,$password);
if(! $con){

	die('Could not connect to db'.mysql_error());
}

mysql_select_db("easyride");
















?>