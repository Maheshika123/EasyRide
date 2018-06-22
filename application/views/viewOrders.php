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
                                            <li class="filter" data-filter="all">Reservations</li>
                                            <li class="filter" data-filter="all">Update System</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>

        <div class="container" style="margin-top: 50px;">
                    <div class="row">  
                        <div class="col-md-8 col-md-offset-2">
                            <center><h3 style="margin-bottom: 65px;">Order ID - <?php echo $records[0]->oi_orderid; ?></h3></center>

                            <table class="table" id="orderTable" style="width:100%;margin-bottom: 50px;">
                                            <tbody>
                                                <tr>
                                                    <th class="text-center">Item ID</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Quantity</th>
                                                </tr>

                                                <?php if (count($records)): ?>

                                                    <?php foreach ($records as $row): ?>

                                                    <tr>
                                                        <td class="text-center"><?php echo $row->oi_itemid ?></td>
                                                        <td class="text-center"><?php echo $row->it_name ?></td>
                                                        <td class="text-center"><?php echo $row->oi_quantity ?></td>
                                                        
                                                    </tr>

                                                    <?php endforeach; ?>

                                                <?php else: ?>
                                                    <h3 style="margin-bottom: 50px;">No new Orders.</h3>
                                                <?php endif ?>
                                                

                                            </tbody>
                                        </table>
                        </div>   
                    </div>
                </div>
