<?php

require ('db.php');

if(isset($_POST['username'])&& isset($_POST['Password'])){



	$username = $_POST['username'];
	$Password = $_POST['Password'];


	$sql = "select * from login where `user_name` = '$username' and `password`='$Password'";
	$result = mysql_query($sql);
	while($data = mysql_fetch_array($result)){
  if($data['user_name'] == $username && $data['password']== $Password){


 	echo "2";
 }

 else{

     
 }





}}


















?>
















