<?php require '../templates/userHeader.php' ?>

<div class="container-fluid">
    <div class="row">
        <form class="col-sm-4 order">
            <h1 class="modal-header"> Order</h1>

            <!-- products  -->

            <div class="row product-row" style="margin: auto;">
                <div class="col-sm-2">Tea</div>
                <div class="col-sm-1">
                    <span class="badge badge-light">4</span>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-success">+</button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-info">-</button>
                </div>
                <div class="col-sm-2">50 .EGP</div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-danger">X</button>
                </div>

            </div>

            <div class="row product-row" style="margin: auto;">
                <div class="col-sm-2">Tea</div>
                <div class="col-sm-1">
                    <span class="badge badge-light">4</span>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-success">+</button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-info">-</button>
                </div>
                <div class="col-sm-2">50 .EGP</div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-danger">X</button>
                </div>

            </div>

            <div class="row product-row" style="margin: auto;">
                <div class="col-sm-2">Tea</div>
                <div class="col-sm-1">
                    <span class="badge badge-light">4</span>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-success">+</button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-info">-</button>
                </div>
                <div class="col-sm-2">50 .EGP</div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-danger">X</button>
                </div>

            </div>

            <!-- End orders -->
            <hr>
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
                    <input type="dropdown" id="room" list="categories" class="form-control" name="full-name">
                    <datalist id="categories">
                        <option>67</option>
                        <option>43</option>
                        <option>98</option>
                    </datalist>

                </div>
            </div>
            <!-- End room number -->
            <hr>
            <!-- End Of Form -->
            <div class="total-cost">
                <h2> Total = 150 .EGP </h2>
            </div>
            <!-- Form Button -->
            <div class="order-btn">
                <input type="submit" value="Confirm" class="btn btn-success">
            </div>
        </form>

        <!-- menu -->
        <div class="col-sm-7 ">
            <div class="add-to-user">
                <div class="form-group row">
                    <label for="user" class="col-md-3 col-form-label text-md-center">
                        <h3>Latest Order :</h3>
                    </label>
                    <div class="col-md-8 card">

<!--  -->

<div class="container">
                <div class="row">
                    <div class="card col-sm-3 product-card" style="width: 18rem;">
                        <img class="card-img-top buy-pic" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/A_small_cup_of_coffee.JPG/1200px-A_small_cup_of_coffee.JPG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Coffee</h5>
                            <p class="card-text">40 .EGP</p>
                        </div>
                    </div>

                    <div class="card col-sm-3 product-card" style="width: 18rem;">
                        <img class="card-img-top buy-pic" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9bENUAlJR_HLjNjsbRMT8TloLZM1IzmgJ14l8_fX1b08PdbQv_w" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tea</h5>
                            <p class="card-text">50 .EGP</p>
                        </div>
                    </div>
                </div>
            </div>

<!--  -->



                    </div>
                </div>
            </div>
            <hr>


            <!-- products -->
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
    </div>
</div>

</body>

</html> 