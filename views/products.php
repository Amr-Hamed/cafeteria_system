<?php
    include '../templates/header.php';
    include '../config.php';


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

// Change availability
if(isset($_POST["availability"])){
    $av=(int)$_POST["availability"][0];
    $pID=(int)substr($_POST["availability"],1);
    $p=  DBModel::read("SELECT * FROM products WHERE id= $pID",PDO::FETCH_CLASS,'Products');
    $p->availability=$av;
    $p->save();
}

$categories = DBModel::read("SELECT * FROM category",null);
$products = DBModel::read("SELECT * FROM products",null);
?>

<div class="container-fluid ">
    <div style="padding: 3%">
        <h1 style="text-align: center"> Products</h1>
        <form action="addproduct.php">
            <button type="submit" class="btn btn-success add-btn">Add Product</button>
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

                <?php
            // Find out how many items are in the table
            $total = $dbh->query('SELECT COUNT(*) FROM products')->fetchColumn();
            // How many items to list per page
            $limit = 4;
            // How many pages will there be
            $pages = ceil($total / $limit);
            // What page are we currently on?
            $page = min($pages, filter_input(
                INPUT_GET, 'page',
                FILTER_VALIDATE_INT,
                array('options' => array('default' => 1, 'min_range' => 1,),
            )));
            // Calculate the offset for the query
            $offset = ($page - 1)  * $limit;
            // Some information to display to the user
            $start = $offset + 1;
            $end = min(($offset + $limit), $total);

    // Prepare the paged query
            $stmt = $dbh->prepare('SELECT * FROM products');
            $stmt->execute();

            // Do we have any results?
            if ($stmt->rowCount() > 0) {
                // Define how we want to fetch the results
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $iterator = new IteratorIterator($stmt);
            }
            else {
                echo '<p>No results could be displayed.</p>';
            }
?>

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
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <form action="" method="POST">
                                        <select id="av" list="products" class="form-control" name="availability" style="width:40%" onchange="this.form.submit()" required >
                                                <option <?php if($product['availability']==1) echo "selected";?> value="1<?php echo $product['id'];?>">Available</option>
                                                <option <?php if($product['availability']==0) echo "selected";?> value="0<?php echo $product['id'];?>">Not Available</option>
                                        </select>
                                    </form>
                                </div>
                                <a class="btn btn-info" href="/views/editproduct.php?id=<?php echo $product['id']?>">Edit</a>
                                <a class="btn btn-info" href="/views/products.php?id=<?php echo $product['id']?>">Delete</a>
                                
                            </div> 
                            </td>
                        </tr>
                                         
                <?php }}?>
            </tbody>
        </table>
    </div>

    <?php
    $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';
    //The "forward" link
    $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';
    //Display the paging information
    echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';
    ?>

    <!-- end of users Table -->

    <!-- add user Form  -->


    <!-- Form end  -->

</div>
</div>
</body>

</html>