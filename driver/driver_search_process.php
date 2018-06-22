<?php

require ('../db.php');


if(isset($_POST['search'])){


  $did = $_POST['search'];


  $sql1 = "select * from driver where `driver_id`='$did'";
  $sql2 = "select * from driver where `user_name`='$did'";
  $result1 = mysql_query($sql1);
  $result2 = mysql_query($sql2);

  if($result1){


  	while ($data=mysql_fetch_array($result1)) {

  		$did = $data['driver_id'];
  		$register_id =$data['register_id'];
  		$uname = $data['user_name'];
  		$name = $data['driver_name'];
  		$rname = $data['root_name'];
  		$rnum = $data['root_number'];
  		$bnum = $data['bus_number'];
  		$phone = $data['phone_number'];




     
   echo "
    <tbody>
      <tr>
        <td><a href='driver_delete1.php?rid=$register_id'><button  type='submit' class='btn btn-danger' name='delete' >delete</button></a><a class='details' role='button' rid='$register_id' username='$uname'  name='$name'  phone='$phone' rootname='$rname' rootnum='$rnum'><button  type='submit' class='btn btn-info' name='ok' >view details</button></a></td>
        <td>$did</td>
        
        <td>$uname</td>
        <td>$rname</td>
        <td>$rnum</td>
        <td>$bnum</td>

      
        
      </tr>"
  ;
    



echo "</tr>";


  	}
  }

   if($result2){


  	while ($data=mysql_fetch_array($result2)) {

  		$did = $data['driver_id'];
  		$register_id =$data['register_id'];
  		$uname = $data['user_name'];
  		$name = $data['driver_name'];
  		$rname = $data['root_name'];
  		$rnum = $data['root_number'];
  		$bnum = $data['bus_number'];
  		$phone = $data['phone_number'];




     
   echo "
    <tbody>
      <tr>
        <td><a href='driver_delete1.php?rid=$register_id'><button  type='submit' class='btn btn-danger' name='delete' >delete</button></a><a class='details' role='button' rid='$register_id' username='$uname'  name='$name'  phone='$phone' rootname='$rname' rootnum='$rnum'><button  type='submit' class='btn btn-info' name='ok' >view details</button></a></td>
        <td>$did</td>
        
        <td>$uname</td>
        <td>$rname</td>
        <td>$rnum</td>
        <td>$bnum</td>

      
        
      </tr>"
  ;
    



echo "</tr>";


  	}
  }



}
?>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #54C04D; ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title" style="text-shadow: transparent;">Driver Details
               </h4></center>
      </div>
  <div class="modal-body" style="text-align:left;">
     <div class="container-fluid">

      <div class="form-group input-group">
      <span class="input-group-addon" style="width: 150px;">Register id</span>
      <input type="text" style="width: 350px;" class="form-control" id="erid"></div>


      <div class="form-group input-group">
      <span class="input-group-addon" style="width: 150px;">username</span>
      <input type="text" style="width: 350px;" class="form-control" id="euname"></div>

      <div class="form-group input-group">
      <span class="input-group-addon" style="width: 150px;">Name</span>
      <input type="text" style="width: 350px;" class="form-control" id="ename"></div>

      <div class="form-group input-group">
      <span class="input-group-addon" style="width: 150px;">Phone Number</span>
      <input type="text" style="width: 350px;" class="form-control" id="epn"></div>

      <div class="form-group input-group">
      <span class="input-group-addon" style="width: 150px;">Root Name</span>
      <input type="text" style="width: 350px;" class="form-control" id="ern"></div>
      
  
      
</div> 
   


</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
    $(document).on('click','.details',function(){
      var username = $(this).attr('username')
      var name = $(this).attr('name')
      var date = $(this).attr('date')
      var rid =$(this).attr('rid')
      var root_name =$(this).attr('rootname')
      var phone = $(this).attr('phone')


      $('#myModal').modal('show');
      $('#erid').val(rid);
      $('#euname').val(username);
      $('#ename').val(name);
      $('#edate').val(date);
      $('#epn').val(phone);
      $('#ern').val(root_name);
     


    });
  });
</script>