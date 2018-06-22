<?php

require ('../db.php');



if(isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['repassword'])  ){
      

      $uname = $_POST['username'];
      
      $password = md5($_POST['password']);
      $repassword =md5( $_POST['repassword']);


if($password == $repassword){


	$sql = "insert into signup(`user_name`,`password`,`User_type`) values('".$uname."','".$password."') ";
	$result = mysql_query($sql);

}

else{

	
  
  
  echo "<script> 
    
</script></script>";

}





}

















?>