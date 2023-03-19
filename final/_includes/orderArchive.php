<?php

include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}
$order_id_value = sanitize_value($_POST['order_id']);
$total_price_tax = sanitize_value($_POST['total_price_tax']);

    $query = "UPDATE orders SET status = 'completed', final_total = $total_price_tax WHERE id = $order_id_value";
    // var_dump($query);
    // die;
    $result = mysqli_query($db_connection, $query);
    if ($result){
        redirect_to('/order-confirmation.php');   
    } else{
        redirect_to('/payment.php');
    }
    

?>