<?php
    include '../templates/header.php';
    include '../config.php';
    ?>
<div class="container-fluid">
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
            $limit = 2;
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

                <?php foreach ($iterator as $row){ ?>
                <tr>
                    <th scope="row"><?= $row['product_name'];?></th>
                    <td><?= $row['price']; ?></td>
                    <td>
                        <div class="product_inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td>
                        <!--  -->
                        <div class="btn">
                            <input id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                value="Available" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" value="Available">Available</a>
                                <a class="dropdown-item" value="Unvailable">Unvailable</a>
                            </div>
                            <!--  -->
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <?php } ?>

                <!-- <tr>
                    <th scope="row">Tea</th>
                    <td>234</td>
                    <td>
                        <div class="product_inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td> -->
                <!--  -->
                <!-- <div class="btn">
                            <input id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" value="Available" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" value="Available">Available</a>
                                <a class="dropdown-item" value="Unvailable">Unvailable</a>
                            </div> -->
                <!--  -->
                <!-- <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr> -->

                <!-- <tr>
                    <th scope="row">Shawrma</th>
                    <td>345</td>
                    <td>
                        <div class="product_inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td> -->
                <!--  -->
                <!-- <div class="btn">
                            <input id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" value="Available" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" value="Available">Available</a>
                                <a class="dropdown-item" value="Unvailable">Unvailable</a>
                            </div> -->
                <!--  -->
                <!-- <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr> -->

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