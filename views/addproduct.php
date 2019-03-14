<?php include '../templates/header.php'; ?>

<div class="container addProduct">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
        </div>
        <div class="modal-body">

            <form name="my-form" onsubmit="" action="" method="">
                <div class="form-group row">
                    <label for="product_name" class="col-md-4 col-form-label text-md-right">Product Name</label>
                    <div class="col-md-6">
                        <input type="text" id="product_name" class="form-control" name="full-name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="room_number" class="col-md-4 col-form-label text-md-right">Price </label>
                    <div class="col-md-4">
                        <input type="number" id="room_number" class="form-control">
                    </div>
                    <label for="room_number" class="col-md-2 col-form-label text-md-right">EGP </label>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
                    <div class="col-md-6">
                        <input type="dropdown" id="category" list="categories" class="form-control" name="full-name">
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

                    <!-- add category start  -->

                    <div>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addModal">Add Category</button>
                    </div>
                    <!-- add category END  -->

                </div>

        </div>

        <div class="form-group row">
            <label for="product_pics" class="col-md-4 col-form-label text-md-right">Product Picture
                <div class="col-md-1 addPics">
                    <input type="file" name="product_pics" class="btn" accept="image/*">
                </div>
        </div>

        <div class="col-md-8 offset-md-4" style="padding-bottom:5%;">
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-success">Add Product</button>
            <button type="" class="btn btn-secondary">
                < Back</button> </div> <div class="col-md-6 offset-md-4">

        </div>
    </div>
    </form>

</div>
</div>
</div>


<!-- modal for add category  -->

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="my-form" onsubmit="" action="" method="">
                    <div class="form-group row">
                        <label for="cat_name" class="col-md-4 col-form-label text-md-right">Category Name</label>
                        <div class="col-md-6">
                            <input type="text" id="cat_name" class="form-control" name="cat-name">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">ADD</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for add category  -->
</body>

</html> 