<?php require_once('../config.php'); 
if(isset($_GET['confirm'])){

    $order = new Orders();
    $order->user_id = $_GET["user"];
    $order->amount = $_GET["total_amount"];
    $order->note = $_GET["note"];
    $order->state = " Processing ";
    $order->date = date("Y-m-d H:i:s");

    $orderId = $order->save();
    if($orderId){
    
        $flag = 0;
        $itemCount = $_GET['itemCount'];
        for($i=1;;$i++){
            if($flag == $itemCount)
                break;
        
            if(isset($_GET["quantity$i"])){
                $orderItem = new OrderItems();
                $orderItem->order_id = $orderId;
                $orderItem->product_id = (int)$_GET["productId$i"];
                $orderItem->quantity = $_GET["quantity$i"];
                $orderItem->product_price = $_GET["item_total_amount$i"];

                $orderItem->save();
                $flag++;
            }
        }
    }

}


?>