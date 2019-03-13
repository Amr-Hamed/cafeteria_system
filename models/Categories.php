<?php 

Class Categories extends DBModel {

    public $id;
    public $name;
    
    public $tableName = 'categories';

    public $dbFields  = array(
        'name'
    );
}

?>