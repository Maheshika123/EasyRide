<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


    <div class="row">

        <div class="col-md-4 col-sm-12"></div>
        <div class="col-md-4 col-sm-12">

     
<?php  echo validation_errors();     ?>
        <form action="<?=base_url()?>Login/loginUser" method="post">
            <table class="table" style="width: 100%; margin-top: 175px; margin-bottom: 50px">
                <thead class="thead-inverse">
                    <tr>
                        <th colspan="2"><center><h3>Login</h3></center></th>
                        
                    </tr>

                </thead>

                <tr>
                    <td>User Name:</td>
                    <td>
                        <input class="form-control" type="text" name="user_name" style="width:100%;" required>

                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td>
                        <input class="form-control" type="password" name="password" style="width:100%;" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2"><center><button id="addOrderItem" class='button -alge center'>Sign In</button></center></td>
                </tr>
            </table>
        </form>

         <?php
  if ($this->session->flashdata('errmsg')){

    echo "<h3>".$this->session->flashdata('errmsg')."</h3>";
    
  } ?>

        
        

        </div>
    </div>