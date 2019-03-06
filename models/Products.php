<?php 

Class Products {

    public $id;
    public $product_name;
    public $price;
    public $category_id;
    public $availability;
    public $product_picture;

    public $tableName = 'products';

    public $dbFields  = array(
        'product_name',
        'price',
        'category_id',
        'availability',
        'product_picture'
    );
}

?>