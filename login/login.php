<?php

require ('../db.php');



if(isset($_POST['username'])&& isset($_POST['password']) ){
      
      
      $uname = $_POST['username'];
      $password = md5($_POST['password']);
      


$sql = "select * from  signup where `user_name`='$uname'";
$result = mysql_query($sql);

if($result){

while ($data = mysql_fetch_array($result)) {

  $utype = $data['User_type'];
  $pass = $data['password'];
  $user_name = $data['user_name'];


 

if($pass == $password){
 
 session_start();
 $_SESSION['user_name'] =$user_name;
 $_SESSION['user_type'] = $utype;


 if( $_SESSION['user_type'] == "Admin"){
 	header("location:../customer/customer_req.php");
 }

else if($_SESSION['user_type'] == "Owner"){

	header("location:../owner_log/owner_log.php");


}


}


else{ 

echo "<script> $(document).ready(function(){ $('#myModal').modal('show'); }); </script>";
	

}

 
}





}







}
else{
  
	
}


?>