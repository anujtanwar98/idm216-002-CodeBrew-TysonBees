<?php
include __DIR__ . '/../app.php';
if (!$_POST) {
    die('Unauthorized');
}
$cart_item_id = sanitize_value($_POST['cart']);
// var_dump($cart_item_id);
// die;
global $db_connection;
    $query = "DELETE FROM cart WHERE id = '{$cart_item_id}'";
    // var_dump($query);
    // die;
    $result = mysqli_query($db_connection, $query);
    redirect_to('/cart.php');
    echo("success");