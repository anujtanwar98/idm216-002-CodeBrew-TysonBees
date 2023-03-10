<?php
include __DIR__ . '/../app.php';
if (!$_POST) {
    die('Unauthorized');
}

// Storing order data to cart

$note = sanitize_value($_POST['note']);
$quantity = sanitize_value($_POST['quantity']);
$menu_item_id = sanitize_value($_POST['menu_item_id']);
$order_id = sanitize_value($_POST['order_id']);

$query = "INSERT INTO cart";
$query .= "(note, quantity, menu_item_id, order_id)";
$query .= "VALUES('{$note}', '{$quantity}', '{$menu_item_id}', '{$order_id}')";

$result = mysqli_query($db_connection, $query);

if ($result) {
   
    redirect_to('/index.php');
    echo("success");
} 

else {
    $error_message = 'Sorry there was an error creating the user: ' . mysqli_error($db_connection);

    redirect_to('/index/services?error=' . $error_message);
}



?>