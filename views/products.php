<?php include '../templates/header.php'; ?>
<div class="container-fluid">
    <div style="padding: 3%">
        <h1 style="text-align: center"> Products</h1>
        <form action="addproduct.php">
        <button type="submit" class="btn btn-success add-btn" >Add Product</button>
        </form>
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

    
<!-- Form end  -->

</div>
</div>
</body>

</html> 