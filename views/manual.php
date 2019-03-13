<?php require_once('../config.php'); 
require_once(TEMPLATE_PATH . 'header.php');

$products = DBModel::read("SELECT p.* FROM products p WHERE p.availability = 1",null);
$users = DBModel::read("SELECT u.* FROM users u WHERE u.admin = 0",null);
$rooms = DBModel::read("SELECT DISTINCT u.room FROM users u WHERE u.admin = 0",null);

?>

<div class="container-fluid">
    <div class="col-sm-4" style="float:left">
    <div class="row">
        <form>
            <h1 class="modal-header"> Order</h1>

            <!-- OrderItems  -->
            <div id="orderItemContainer">
           
            </div>

            </div>

            <!-- End orders -->
            <hr />
            <!-- start notes -->
            <div class="form-group shadow-textarea">
                <label for="exampleFormControlTextarea6">Notes</label>
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write your notes ..."></textarea>
            </div>

            <!-- end notes -->

            <!-- start room number -->
            <div class="form-group row">
                <label for="room" class="col-md-3 col-form-label text-md-center">Room</label>
                <div class="col-md-8">

                    <select name="room" style="width: 100%;padding-top:2%;margin-top:2%">

                        <option selected>Select Room</option>
                        <?php if(isset($rooms)) {
                            foreach ($rooms as $room) {?>

                                <option value="<?php echo $room['room']; ?>"><?php echo $room['room'];?></option>

                        <?php }}?>

                    </select>            
                </div>
            </div>
            <!-- End room number -->
            <hr>
            <!-- End Of Form -->
            <div class="total-cost">
                <h2 id="orderTotalAmount"> Total = <span>0<span> </h2>
            </div>
            <!-- Form Button -->
            <div class="order-btn">
                <input type="submit" value="Confirm" class="btn btn-success">
            </div>
        </form>

        <!-- menu -->
        </div>
        <div class="col-sm-7 " style="float:left">
            <div class="add-to-user">
                <div class="form-group row">
                    <label for="user" class="col-md-3 col-form-label text-md-center">
                        <h3>Add To User :</h3>
                    </label>
                    <div class="col-md-8">
                        <select name="user" style="width: 100%;padding-top:2%;margin-top:2%">
                            <option selected>Select User</option>
                             <?php if(isset($users)) {
                                foreach ($users as $user) {?>

                                    <option value="<?php echo $user['id']; ?>"><?php echo $user['name'];?></option>

                            <?php }}?>
            
                        </select>
                    </div>
                </div>
            </div>
            <hr />


            <!-- products -->
            <div class="container" style="clear:both">
                <?php if(isset($products)) {
                    foreach ($products as $product) {?>
                    <div class="card col-sm-3 product-card" style="float:left">
                        <img class="card-img-top buy-pic" width="150" height="150" src="<?php echo "data:image/jpeg;base64," . base64_encode($product['product_picture']); ?>" alt="Card image cap" />
                        <div class="card-body">
                            <h5 id="name" class="card-title"><?php echo $product['product_name']; ?></h5>
                            <p id="price" class="card-text"><?php echo $product['price']; ?><span> .EGP</span></p>
                            <input id="pid" type="hidden" value="<?php echo $product['id'] ?>" />
                            <div class="order-btn">
                                <input type="button" value="Order" class="orderTheItem btn btn-info" />
                            </div>
                        </div>
                    </div>

               <?php } } ?>
            </div>

        </div>
    </div>
</div>
<script src="../js/plugin.js" ></script>
</body>

</html> 