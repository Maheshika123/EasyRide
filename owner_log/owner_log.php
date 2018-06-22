<html>

<?php
session_start();

?>



<head>

    <meta charset="UTF-8">

   <link rel="stylesheet"  href="css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="stylel.css">
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
    width: 50%;
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
  <li class="active"><a href="#"><span class="glyphicon glyphicon-search">Search Buses</span></a></li><br><br><br>
  <li><a href="../driver/view_driver.php"><span class="glyphicon glyphicon-bed">Statistics</span></a></li><br><br>
 
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
        
        <ul class="nav navbar-nav" style="margin-left: -184;">
            
            

                        
           
            


        </ul>
<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><?php echo "welcome " .$_SESSION['user_name']; ?></a></li>
      <li><a href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      
    </ul>
        
    </div>
    
</nav>




  <div class="container">
   <br><br>
       <div class="gps">
        <script async defer>
          
<src ="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlASSdyCKZv0Xw_zJ7c5OZIx4dyqcW9BA&callback=initMap"/>

        </script>
       </div>
  </div></body>


<div class="footer">
  <p>Copyright@Group No32 2018</p>
</div></div>
 

  </html>
    



  











































</html>