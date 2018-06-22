<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row" style="margin-top: 80px; margin-bottom: 20px;">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Admin Dashboard</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all"><a href="<?php echo base_url('Admin/adminOrders/') ?>">Orders</a></li>
                                            <li class="filter" data-filter="all"><a href="<?php echo base_url('Admin/adminReservations/') ?>">Reservations</a></li>
                                            <li class="filter" data-filter="all"><a href="<?php echo base_url('Admin/adminUpdate/') ?>">Update System</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>

        <div class="container" style="margin-top: 80px; margin-bottom: 80px; min-height: 204px;">
                    <div class="row">  
                        <div class="col-md-6 col-md-offset-3">

                            <form class="reservation-form" method="post" action="<?php echo base_url('Admin/adminUpdate') ?>">
                                          <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                        <h4>Add New Category</h4><br>
                                                                <div class="form-group">
            <input type="text" class="form-control reserve-form empty iconified" name="categoryName" id="name" required="required" placeholder=" Type Category">
                                                                </div>
                </div>
                <div class="col-md-6 col-sm-6">
                        <a href=""><button type='submit' class='btn btn-success' name="category" style="margin-top: 58px;">ADD</button></a>
                                        </div>
                                            </div>
                                                </form>
                        </div>

                        <div class="col-md-6 col-md-offset-3" style="margin-top: 20px;">
                            <form class="reservation-form" method="post" action="<?php echo base_url('Admin/addItem/') ?>">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4>Add New Item</h4><br>
                                            <div>
                                                <select class="form-control" id="categorySelect" name="cat" style="width:100%;">
                                                    <option value="0">All</option>
                                                    <?php
                                                        foreach($categories as $category) {
                                                        ?>

                                                         <option value="<?=htmlspecialchars($category->cat_id) ?>">
                                                            <?=htmlspecialchars($category->cat_name)?>
                                                         </option>
                                                        <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  Type Item Name">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="price" id="name" required="required" placeholder="  Type Item Price">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control reserve-form empty iconified" name="image" id="image" required="required" placeholder="  Type image name">
                                            </div>

                                       </div>
                                        <div class="col-md-6 col-sm-6">
                                            <a href="<?php echo base_url('Admin/completed/') ?>"><button type='submit' class='btn btn-success' name="item" style="margin-top: 116px;">ADD</button></a>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
        </div>