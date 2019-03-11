<?php 

Class Users {

    public $id;
    public $name;
    public $email;
    public $password;
    public $room;
    public $ext;
    public $picture;
    public $admin;

    public $tableName = 'users';

    public $dbFields  = array(
        'name',
        'email',
        'password',
        'room',
        'ext',
        'picture',
        'admin'
    );
}

?>