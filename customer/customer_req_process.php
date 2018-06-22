<?php

require ('../db.php');

$sql1 = "select * from customer_register";
$resul = mysql_query($sql1);

if($resul){
  while ($data = mysql_fetch_array($resul)) {

    $register_id= $data['Register_id'];
    $user_name= $data['user_name'];
    $name= $data['customer_name'];
    $accept = $data['accepted'];
    $joined_date = $data['Date'];

    


   echo "
    <tbody>
      <tr>
        <td><a href='admin_action.php?rid=$register_id'><button  type='submit' class='btn btn-danger' name='delete' >delete</button></a><a href='admin_action1.php?rid=$register_id & uname=$user_name & name=$name & date=$joined_date><button  type='submit' class='btn btn-success' name='ok' >accept</button></a><a class='details'  rid= '$register_id' username='$user_name' name='$name' date='$joined_date'><button  type='submit' class='btn btn-info' name='ok' >view details</button></a></td>
        <td>$register_id</td>
        <td>$joined_date</td>
        <td>$accept</td>
      
        
      </tr>"
  ;
    



echo "</tr>";
  }
}

?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #54C04D; ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h4 class="modal-title" style="text-shadow: transparent;">customer details
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
      <span class="input-group-addon" style="width: 150px;">date</span>
      <input type="text" style="width: 350px;" class="form-control" id="edate"></div>
      
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


      $('#myModal').modal('show');
      $('#erid').val(rid);
      $('#euname').val(username);
      $('#ename').val(name);
      $('#edate').val(date);


    });
  });
</script>