<?php

require ('../db.php');

$customer_id = $_GET['cid'];



$sql = "delete from customer where `customer_id`='$customer_id'";
$result = mysql_query($sql);
header("Location: customer_details.php"); /* Redirect browser */























?>