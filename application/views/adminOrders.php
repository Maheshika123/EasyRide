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
                        <div class="col-md-10 col-md-offset-1">
                            <table class="table" id="orderTable" style="width:100%;margin-top: 10px;">
                                            <tbody>
                                                <tr>
                                                    <th class="text-center">Order ID</th>
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center">Due Date</th>
                                                    <th class="text-center">Contact Number</th>
                                                    <th class="text-center">Address</th>
                                                </tr>

                                                <?php if (count($records)): ?>

										            <?php foreach ($records as $row): ?>

										            <tr>
										                <td class="text-center"><?php echo $row->or_id; ?></td>
										                <td class="text-center"><?php echo $row->or_date ?></td>
										                <td class="text-center"><?php echo $row->or_duedate ?></td>
										                <td class="text-center"><?php echo $row->or_contact; ?></td>
										                <td class="text-center"><?php echo $row->or_address; ?></td>
										                <th><a href="<?php echo base_url('Admin/viewOrders/'.$row->or_id) ?>"><button type='submit' class='btn btn-warning'>View Order</button></th></a>
										                <th><a href="<?php echo base_url('Admin/markComplete/'.$row->or_id) ?>"><button type='submit' class='btn btn-danger'>Mark Complete</button></th></a>
										            </tr>

										            <?php endforeach; ?>

										        <?php else: ?>
										            <h3 style="margin-bottom: 50px;">No new Orders.</h3>
										        <?php endif ?>
                                               	

                                            </tbody>
                                        </table>


                                        <form action="<?=base_url()?>Login/logout" method="post" style="float: right;">
        <button id="addOrderItem" class='button -alge center'>log out</button></form>

                        </div>   
                    </div>
                </div>
