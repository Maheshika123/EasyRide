<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="home_style.css">
   <link rel="stylesheet"  href="css/bootstrap.min.css">
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
   <script src="js/bootstrap.js"></script>

</head>
<ul>
    <li><a href="./home.php">Home</a></li>
    <li><a>About</a></li>
    <li><a href="index.php">Things to do</a></li>
    <li><a>Contact</a></li>
    <li><a>Register</a>

  <ul>
    
    <li><a class="registerd" role="button">Driver</a></li>
    <li><a class="registero" role="button">Owner</a></li>
  </ul> 

    </li>
    <li><a class="login" role="button">Login</a></li>



</ul>
 

<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">


        <div class="avatar">
          <img src="image/user.png" alt="Avatar">
        </div>        
        <h4 class="modal-title">Login</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
       
        <form action="login.php" method="post">
          <div class="form-group">

            <input type="text" class="form-control" name="username" placeholder="Username" required="required">   
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
          </div>
        </form>
       
      </div>
      
      <div class="modal-footer">
        <a href="#">Forgot Password?</a>
      </div>
    </div>
  </div>
</div>     

<script type="text/javascript">
    $(document).ready(function(){
    $(document).on('click','.login',function(){
      

      $('#myModal').modal('show');
      


    });
  });
</script>
<div id="myModald" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="image/user.png" alt="Avatar">
        </div>        
        <h4 class="modal-title">Signup</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="driver_signup.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="name" required="required">   
          </div>


   


         <div class="form-group">
            <input type="text" class="form-control" name="pnum" placeholder="Phone Number" required="required">   
          </div>


          <div class="form-group">
            <input type="text" class="form-control" name="rootnum" placeholder="Root Number" required="required">   
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="rootname" placeholder="Root Name" required="required">   
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="busnum" placeholder="Bus Number" required="required">   
          </div>




        
          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">   
          </div>






          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
          </div> 
          <div class="form-group">
            <input type="password" class="form-control" name="repassword" placeholder="Re Enter Password" required="required"> 
          </div> 

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Signup</button>
          </div>
        </form>


      </div>

      <div class="modal-dialog">
          <p id="alert"></p>
        </div>
      <div class="modal-footer">
        remember me?<input type="checkbox" name="remember">
      </div>
    </div>
  </div>
</div>     


<script type="text/javascript">
    $(document).ready(function(){
    $(document).on('click','.registerd',function(){
      

      $('#myModald').modal('show');
      


    });
  });
</script>
<div id="myModal1" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">
        <div class="avatar">
          <img src="image/user.png" alt="Avatar">
        </div>        
        <h4 class="modal-title">Signup</h4> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="../owner/owner_signup.php" method="post">


         <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="name" required="required">   
          </div>

         <div class="form-group">
            <input type="text" class="form-control" name="busnum" placeholder="Busnumber" required="required">   
          </div>
        
       <div class="form-group">
            <input type="text" class="form-control" name="rnum" placeholder="Rootnumber" required="required">   
          </div>


          <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">   
          </div>


<div class="form-group">
            <input type="text" class="form-control" name="pnum" placeholder="Phonenumber" required="required">   
          </div>




          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required"> 
          </div> 
          <div class="form-group">
            <input type="password" class="form-control" name="repassword" placeholder="Re Enter Password" required="required"> 
          </div> 

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Signup</button>
          </div>
        </form>


      </div>

      <div class="modal-dialog">
          <p id="alert"></p>
        </div>
      <div class="modal-footer">
        remember me?<input type="checkbox" name="remember">
      </div>
    </div>
  </div>
</div>     


<script type="text/javascript">
    $(document).ready(function(){
    $(document).on('click','.registero',function(){
      

      $('#myModal1').modal('show');
      


    });
  });
</script>

</html>