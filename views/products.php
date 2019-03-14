<?php include '../templates/header.php'; 
require_once('../config.php');



// Delete 
if(isset($_GET["id"])){
    $product = new Products();
    $product->id=$_GET["id"];
    $product->delete();
    header('Location:products.php');
}

//returning from add product page
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
                             
                               
                               
                               <a class="btn btn-info" href="/views/editproduct.php?id=<?php echo $product['id']?>">Edit</a>
                               <a class="btn btn-info" href="/views/products.php?id=<?php echo $product['id']?>">Delete</a>
                                
                            </td>
                        </tr>
                                         
                <?php }}?>
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


