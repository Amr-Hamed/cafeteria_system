<?php require_once('../config.php');

// echo "ID = " . $_GET['id'];

$o = new Orders();
$d = new OrderItems();

$d->order_id = (int)$_GET['id'];

$o->id = (int)$_GET['id'];
$o->user_id = (int)$_GET['user'];

$d->delOrder();
$o->delFromUser();

header("Location: myorders.php");


?>