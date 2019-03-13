<?php include '../templates/header.php'; 
      include "../addProduct.php";?>







<div class="container-fluid     ">
    <div style="padding: 3%">
        <h1 style="text-align: center"> Products</h1>
        <button type="button" class="btn btn-success add-btn" data-toggle="modal" data-target="#exampleModal">Add Product</button>
    </div>

    <!-- Users Table -->

    <div style="width: 80%; margin: auto">
        <table class="table table-striped table-dark ">
            <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Coffe</th>
                    <td>123</td>
                    <td>
                        <div class="product_inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td>
                        <!--  -->
                        <div class="btn">
                            <input id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" value="Available" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" value="Available">Available</a>
                                <a class="dropdown-item" value="Unvailable">Unvailable</a>
                            </div>
                            <!--  -->
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Tea</th>
                    <td>234</td>
                    <td>
                        <div class="product_inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td>
                         <!--  -->
                         <div class="btn">
                            <input id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" value="Available" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" value="Available">Available</a>
                                <a class="dropdown-item" value="Unvailable">Unvailable</a>
                            </div>
                            <!--  -->
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Shawrma</th>
                    <td>345</td>
                    <td>
                        <div class="product_inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td>
                         <!--  -->
                         <div class="btn">
                            <input id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" value="Available" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" value="Available">Available</a>
                                <a class="dropdown-item" value="Unvailable">Unvailable</a>
                            </div>
                            <!--  -->
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- end of users Table -->

    <!-- add user Form  -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form name="my-form" onsubmit="" action="addProduct.php" method="POST">
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">Product Name</label>
                            <div class="col-md-6">
                                <input type="text" id="product_name" class="form-control" name="pName">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="room_number" class="col-md-4 col-form-label text-md-right">Price </label>
                            <div class="col-md-4">
                                <input type="number" id="room_number" class="form-control" name="pPrice">
                            </div>
                            <label for="room_number" class="col-md-2 col-form-label text-md-right">EGP </label>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
                            <div class="col-md-6">
                                <input type="dropdown" id="category" list="categories" class="form-control" name="pCatID">
                                <datalist id="categories">
                                    <option>food</option>
                                    <option>food</option>
                                    <option>food</option>
                                    <option>food</option>
                                    <option>food</option>
                                    <option>food</option>
                                    <option>food</option>
                                    <option>food</option>
                                    <option>food</option>
                                </datalist>

                            </div>
                        </div>
                </div>

                <div class="form-group row">
                    <label for="product_pics" class="col-md-4 col-form-label text-md-right">Product Picture
                        <div class="col-md-6">
                            <input type="file" name="product_pics" class="btn" accept="image/*">
                        </div>
                </div>

                <div class="col-md-6 offset-md-4">
                    <button type="button" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success">Add Product</button>
                </div>
            </div>
            </form>


        </div>
    </div>
</div>
</div>

<!-- Form end  -->

</div>
</div>
</body>

</html> 