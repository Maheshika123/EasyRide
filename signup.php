<!DOCTYPE html>
<html>
<head>
	<title>SignIn</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
   <link rel="stylesheet"  href="css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" type="text/css" href="style/Style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="js/bootstrap.js"></script>
</head>

<body>
	<div id="frm">

	<form action="admin_signin.php" method="POST">
     <center><img src="images/user.png" class="use" width="50px;">
     	</center>

	<p>
		<lable>User Name :</lable>
		<input type="text" name="username" id="username" required />
	</p>

	<p>
		<lable>Password   : </lable>
		<input type="Password" name="Password" id="Password" required />
	</p>
	<p>
		<input type="submit" id="btn" value="Login" />
	</p>
	
</form>
</div>

</body>
</html>