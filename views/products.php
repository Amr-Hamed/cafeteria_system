<?php include '../templates/header.php'; 
require_once('../config.php');

$ADD_EDIT_FLAG="";

if(isset($_GET["id"])){
    $product = new Products();
    $product->id=$_GET["id"];
    $product->delete();
    header('Location:products.php');
}

if(isset($_POST["pSubmit"]) && isset($_POST["pName"]) && isset($_POST["pPrice"]) && isset($_POST["pCatID"]) ){
    $newProduct = new Products();
    $newProduct->product_name=$_POST['pName'];
    $newProduct->price=$_POST['pPrice'];
    $newProduct->category_id=$_POST['pCatID'];

    $im='data:image/jpeg;base64,'.base64_encode(file_get_contents($_FILES['product_pics']['tmp_name']));
    $newProduct->product_picture=$im;
    $newProduct->save();
     header('Location:products.php');
}

$categories = DBModel::read("SELECT * FROM category",null);
$products = DBModel::read("SELECT * FROM products",null);

?>


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
                <?php if(isset($products)) {
                    foreach ($products as $product) {?>
                        <tr>
                            <th scope="row"><?php echo $product['product_name']?></th>
                            <td><?php echo $product['price']?></td>
                            <td>
                                <div class="product_inset">
                                
                                <img class="card-img-top buy-pic" width="150" height="150" src=<?php echo $product['product_picture']; ?>  alt="Card image cap" />
                                    <!-- <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200"> -->
                                    
                                </div>
                            </td>
                            <td>
                                <!--  -->
                                <div class="btn">
                                    <input id=<?php echo "availableBtn".$product['id']?> type="button" class="btn btn-secondary dropdown-toggle" value="Available" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" value="Available">Available</a>
                                        <a class="dropdown-item" value="Unvailable">Unvailable</a>
                                    </div>
                                    <!--  -->
                             
                               
                               <button type="button" class="btn btn-info" name=<?php echo $product['id']?>>Edit</button>
                               <a class="btn btn-info" href="http://localhost/cafeteria/cafeteria_system/views/products.php?id=<?php echo $product['id']?>">Delete</a>
                                
                            </td>
                        </tr>
                                         
                <?php }}?>
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

                    <form name="my-form" onsubmit="" action="products.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">Product Name</label>
                            <div class="col-md-6">
                                <input type="text" id="product_name" class="form-control" name="pName" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="room_number" class="col-md-4 col-form-label text-md-right">Price </label>
                            <div class="col-md-4">
                                <input type="number" id="room_number" class="form-control" name="pPrice" required>
                            </div>
                            <label for="room_number" class="col-md-2 col-form-label text-md-right">EGP </label>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
                            <div class="col-md-6">
                                <select id="category" list="categories" class="form-control" name="pCatID" style="width: 100%;padding-top:2%;margin-top:2%" required>
                                 <option disabled selected>Select Category</option>
                                    <?php if(isset($categories)) {
                                        foreach ($categories as $category) {?>
                                         <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name'];?></option>
                                    <?php }}?>
                                </select>

                            </div>
                        </div>
                </div>

                <div class="form-group row">
                    <label for="product_pics" class="col-md-4 col-form-label text-md-right">Product Picture
                        <div class="col-md-6">
                            <input type="file" name="product_pics" class="btn"> 
                        </div>
                </div>

                <div class="col-md-6 offset-md-4">
                    <button type="button" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success" name="pSubmit">Add Product</button>
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


