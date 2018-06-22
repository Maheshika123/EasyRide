<?php

$rid = $_GET['rid'];
require ('../db.php');
 



 $sql = "delete from customer_register where `Register_id`='$rid'";
 $res = mysql_query($sql);
header("Location: customer_req.php"); /* Redirect browser */




?>