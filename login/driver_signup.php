<?php

require ('../db.php');



if(isset($_POST['name'])&& isset($_POST['pnum'])&& isset($_POST['rootnum'])&& isset($_POST['rootname'])&& isset($_POST['busnum'])&& isset($_POST['username'])&& isset($_POST['password']) ){
      
      $name = $_POST['name'];
      $pnum = $_POST['pnum'];
      $rnum = $_POST['rootnum'];
      $rname = $_POST['rootname'];
      $bnum = $_POST['busnum'];
      $uname = $_POST['username'];
      $password = md5($_POST['password']);
      $repassword =md5( $_POST['repassword']);
      $utype ="Driver";
      $date = date("Y/m/d");


if($password == $repassword){


	$sql1 = "insert into driver_register(`driver_name`,`user_name`,`phone_number`,`root_number`,`root_name`,`bus_number`,`joined_date`,`password`) values('".$name."','".$uname."','".$pnum."','".$rnum."','".$rname."','".$bnum."','".$date."','".$password."') ";
	$result = mysql_query($sql1);
	$sql2 = "insert into signup(`user_name`,`password`,`User_type`) values('".$uname."','".$password."','".$utype."')";
	$res = mysql_query($sql2);
	header("Location: home.php");

}

else{

	
  
  
  echo "<script> 
    
</script></script>";

}





}

















?>