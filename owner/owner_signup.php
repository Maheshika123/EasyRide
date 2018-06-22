<?php
require ('../db.php');

if(isset($_POST['name'])&& isset($_POST['busnum']) && isset($_POST['rnum'])&& isset($_POST['username'])&& isset($_POST['pnum'])&& isset($_POST['password'])&& isset($_POST['repassword'])){


      $name = $_POST['name'];
      $bnum = $_POST['busnum'];
      $rnum = $_POST['rnum'];
      $uname = $_POST['username'];
      $pnum = $_POST['pnum'];
      $password = md5($_POST['password']);
      $repassword = md5($_POST['repassword']);
      $utype = "Owner";
      $date = date("Y/m/d");

      if($password == $repassword){

$sql1 = "insert into owner_register(`owner_name`,`bus_number`,`root_number`,`phone_number`,`user_name`,`password`,`joined_date`)values('".$name."','".$bnum."','".$rnum."','".$pnum."','".$uname."','".$password."','".$date."')";
$result1 = mysql_query($sql1);

$sql2 = "insert into signup(`user_name`,`password`,`User_type`) values('".$uname."','".$password."','".$utype."')";
$res = mysql_query($sql2);
header("Location: ../login/home.php");
}
else{
      
}



}




























?>