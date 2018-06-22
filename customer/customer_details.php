<html>

<?php
session_start();

?>



<head>

    <meta charset="UTF-8">

   <link rel="stylesheet"  href="css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="stylel2.css">
   <script src="js/bootstrap.js"></script>



  

</head>
<style>
.active{
  background-color: black;
}
<style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 80%;
}


</style>

<body>
  <br><br><br>
  <!--<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">EasyRide</a>
        <ul class="nav navbar-nav">
            
            

            
            <li class="active"><a href="#">Customers</a> </li>
            <li><a href="../driver/view_driver.php">Drivers</a> </li>

            


        </ul>
    </div>
</nav>-->

  

<div class="sidenav"  >
  <br>
  <img src="../images/logo.png" style="width: 150px;"/><br><br>
  <ul class="side" style="list-style-type: none; padding: 5px;">
  <li class="active"><a href="#"><span class="glyphicon glyphicon-user">Customers</span></a></li><br><br>
  <li><a href="../driver/view_driver.php"><span class="glyphicon glyphicon-bed">Drivers</span></a></li><br><br>
  <li><a href="../owner/owner_request.php"><span class="glyphicon glyphicon-bed">Owners</span></a></li><br><br>
 </ul>
  
</div><br><br>


 
  <!--<div class="container">
   <ul class="nav nav-tabs">
   
    <li class="active"><a href="#">New Customers</a></li>
    <li><a href="customer_details.php">Customers</a></li>
    
  </ul>
  <br>
 
</div>-->

<nav class="navbar navbar-default navbar-fixed-top" style="margin-left: 200px; background-color: #54C04D;">
    
        
        <div class="container">
        
        <ul class="nav navbar-nav" style="margin-left: -170;">
            
            

            
            <li><a href="customer_req.php">New Customers</a> </li>
            <li class="active"><a href="#">Customers</a> </li>
            
           
            


        </ul>
<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><?php echo "welcome " .$_SESSION['user_name']; ?></a></li>
      <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      
    </ul>
        
    </div>
    
</nav>




  <div class="container">
    <form  class="search" action="customer_search.php" method="post" style="margin: auto;max-width: 300px">
  <input type="text" name="search" placeholder="Filter customers..">
  <button type="submit"><span class='glyphicon glyphicon-search'></span> </button>
</form><br><br>
                                                                       
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Options</th>
        <th>Register Id</th>
        <th>Name</th>
        <th>User Name</th>
        <th>Joined Date</th>
       
        
      </tr>
    </thead>
    <tbody>
      <!--<tr>
        <td><button class="btn btn-default">Delete</button></td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        
      </tr>-->
   
  



 <!-- <form action="#" method="POST">
          <input type="submit" name="submit"></form>

  <p><br/></p>
  <p><br/></p>
  <p><br/></p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-info">
        <div class="panel-heading"></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-2"><b>Action</b></div>
            <div class="col-md-2"><b>Answer</b></div>
            <div class="col-md-2"><b>Question</b></div>
            <div class="col-md-2"><b>Report</div></b>
            <div class="col-md-2"><b>User id</b></div>
            
          </div>
          </div>
          <div id="delete_answer"></div>

          <div class="row">
            <div class="col-md-2">
              <div class="btn-group">
                <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a></div>
            </div>
            <div class="col-md-2">Answer</div>
            <div class="col-md-2">question</div>
            <div class="col-md-2">report</div>
            <div class="col-md-2">user id</div>
            
          </div>
        </div>  

<div class="panel-footer"></div>

        </div>
      </div>
      <div class="col-md-2"></div>


    </div>

  </div>-->
<?php

include "customer_details_process.php";



?>

</tbody>
</table>

</div></div></body>


<div class="footer">
  <p>Copyright@Group No32 2018</p>
</div></div>
 

  </html>
    



  











































</html>