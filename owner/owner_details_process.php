<?php

require ('../db.php');

$sql1 = "select * from owner";
$resul = mysql_query($sql1);

if($resul){
  while ($data = mysql_fetch_array($resul)) {

    $owner_id= $data['owner_id'];
    $register_id = $data['owner_register_id'];
    $user_name= $data['user_name'];
    $phone = $data['phone_number'];
    $rnum = $data['root_number'];
    $bnum = $data['bus_number'];
    $name= $data['owner_name'];
    $joined_date = $data['joined_date'];

    


   echo "
    <tbody>
      <tr>
        <td><a href='admin_owner_delete.php?oid=$owner_id'><button  type='submit' class='btn btn-danger' name='delete' >delete</button></a><a class='details' role='button' rid='$register_id' username='$user_name'  name='$name' phone='$phone'  date='$joined_date'><button  type='submit' class='btn btn-info' name='ok' >view details</button></a></td>
        <td>$register_id</td>
        <td>$name</td>
        <td>$rnum</td>
        <td>$bnum</td>
        <td>$joined_date</td>
      
        
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
        <center><h4 class="modal-title" style="text-shadow: transparent;">Owner details
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
      <input type="text" style="width: 350px;" class="form-control" id="epnum"></div>
      
      <div class="form-group input-group">
      <span class="input-group-addon" style="width: 150px;">Joined date</span>
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
      var pn = $(this).attr('phone');
      var rid =$(this).attr('rid')


      $('#myModal').modal('show');
      $('#erid').val(rid);
      $('#euname').val(username);
      $('#epnum').val(pn);
      $('#ename').val(name);
      $('#edate').val(date);


    });
  });
</script>