<?php require_once('../config.php');
require_once(TEMPLATE_PATH . 'header.php');

?>
<div class="container-fluid">
    <div style="padding: 3%">
        <h1 style="text-align: center">Orders</h1>
    </div>
    <div id="orders">
        <?php 
        $orders = DBModel::read("SELECT orders.*, users.name, users.ext, users.room FROM orders, users WHERE users.id = orders.user_id ORDER BY orders.state DESC");
        $inProcessOrders = Products::read("SELECT o.* FROM orders o WHERE o.state = 'Processing'");
        $inDeliveryOrders = Products::read("SELECT o.* FROM orders o WHERE o.state = 'Delivery'");
var_dump($inProcessOrders);
        ?>
        <!-- Users Table  -->
        <?php if (isset($orders)) {
            foreach ($orders as $order) {
                if ($order['state'] == "Processing" || $order['state'] == "Delivery") { ?>
        <div id="scores" style="width: 80%; margin: auto">
            <table class="table table-striped table-success ">
                <thead>
                    <tr>
                        <th scope="col">Order Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Room</th>
                        <th scope="col">Ext.</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="load">
                    <tr>
                        <td scope="row" class="Date"><?php echo $order['date']; ?></td>
                        <td class="Date"><?php echo $order['name']; ?></td>
                        <td class="Date"><?php echo $order['room']; ?></td>
                        <td class="Date"><?php echo $order['ext']; ?></td>
                        <?php if ($order['state'] == "Delivery") { ?>
                        <td class="Date btn-success" id="deliver" style="text-align:center"><?php echo $order['state']; ?></td>
                    
                    <?php 
                } else if ($order['state'] == "Processing") { ?>
                    <td class="Date btn-danger" id="processing" style="text-align:center"><?php echo $order['state']; ?></td>
                    
                    <?php }?>
                    </tr>
                    <?php
             } 
        }
    } else { ?>
                    <h1>There Is No Orders Yet </h1>
                    <?php 
                } ?>

                    <!-- 
                    <td class="Date">Hesham</td>
                    <td class="Date">110</td>
                    <td class="Date">876</td>
                    <td class="Date btn-success" style="text-align:center">Deliver</td>
                </tr>
                <tr style="-webkit-align-content: center;">
                    <th colspan="5">
                    <div class="container">
                <div class="row">
                    <div class="card col-sm-3 product-card" style="width: 18rem;">
                        <img class="card-img-top buy-pic" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/A_small_cup_of_coffee.JPG/1200px-A_small_cup_of_coffee.JPG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Coffee</h5>
                            <p class="card-text">40 .EGP</p>
                            <div class="order-btn">
                                <input type="submit" value="Order" class="btn btn-info">
                            </div>
                        </div>
                    </div>

                    <div class="card col-sm-3 product-card" style="width: 18rem;">
                        <img class="card-img-top buy-pic" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9bENUAlJR_HLjNjsbRMT8TloLZM1IzmgJ14l8_fX1b08PdbQv_w" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tea</h5>
                            <p class="card-text">50 .EGP</p>
                            <div class="order-btn">
                                <input type="submit" value="Order" class="btn btn-info">
                            </div>
                        </div>
                    </div>

                    <div class="card col-sm-3 product-card" style="width: 18rem;">
                        <img class="card-img-top buy-pic" src="https://canolaeatwell.com/wp-content/uploads/2017/04/Slow-Cooker-Chicken-Shawarma-With-Tomato-Cucumber-Relish-1_WEB-1024x683.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">shawarma</h5>
                            <p class="card-text">10 .EGP</p>
                            <div class="order-btn">
                                <input type="submit" value="Order" class="btn btn-info">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </th>
    </tr>
    </tbody>
<<<<<<< HEAD
    </table> -->
        </div>

        <script>
            $(document).ready(function() {
                var deliver = setInterval(function() {
                    $('#orders').load('AdminHome.php #orders');
                }, 3000)
                $.ajaxSetup({
                    cache: false
                });
            });
        </script>
        <footer>
            <script>
                setInterval(function() {
                    <?php 
                    foreach ($inProcessOrders as $order){
                        $o = new Orders();
                    $o->id = $order['id'];
                    $o->user_id = $order['user_id'];
                    $o->date = $order['date'];
                    $o->note = $order['note'];  
                    $o->amount = $order['amount'];
                    $o->state = 'Delivery';

                    
                    $o.update();
                    }
                    ?>
                }, 30000)
            </script>
        </footer>
        </body>

        </html> 
