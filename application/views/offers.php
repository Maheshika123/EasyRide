<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
    

  <meta charset="utf-8">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<section id="breakfast" class="breakfast">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?=asset_url() ?>images/icons/bread_black.png">
            <div class="wrapper">
                
                <div class="container-fluid">

                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">This Sesson Offers</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#breakfast -->


        <section id="bread" class="bread" style="background-image: <?=asset_url() ?>images/bread-bg1.png">
           
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                    </div>
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">
                                Biggest Offer
                            </h2>
                            <div class="section-description">
                                <p class="section-content-para">
                                    <h3>Foods and Drink Promotions, Offers and Discounts
Check out the Best Exclusive Foods and Drinks deals, discounts, offers and promotions in Sri Lanka</h3>
                                </p>
                                <p class="section-content-para">
                                   <h1 style="color: red;"> Get Your Chance!!!<h1>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row" style="margin-bottom:200px">
            <div class="col-md-4">
                <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?=asset_url() ?>images/icons/bread_color.png">

            </div>
            <div class="col-md-4">
                <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?=asset_url() ?>images/icons/bread_color.png">
            </div>
            <div class="col-md-4">
                <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?=asset_url() ?>images/icons/bread_color.png">
            </div>
        </div>
        <div class="row" style="margin-bottom:100px">
            <div class="col-md-4" style="padding-left: 13%;">             
                <button type="button" class="btn btn-success" style="border-radius: 25px;" id="bn1">VIEW DETAILS</button>
            </div>
             <div class="col-md-4" style="padding-left: 13%;">             
                <button type="button" class="btn btn-success" style="border-radius: 25px;" id="bn2">VIEW DETAILS</button>
            </div>
             <div class="col-md-4" style="padding-left: 13%;">             
                <button type="button" class="btn btn-success" style="border-radius: 25px;" id="bn3">VIEW DETAILS</button>
            </div>
        </div>

  </body>      






<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Customize Promotion</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
$(document).ready(function(){
    $("#bn1").click(function(){
        $("#myModal").modal();
    });
});
$(document).ready(function(){
    $("#bn2").click(function(){
        $("#myModal").modal();
    });
});
$(document).ready(function(){
    $("#bn3").click(function(){
        $("#myModal").modal();
    });
});



</script>



