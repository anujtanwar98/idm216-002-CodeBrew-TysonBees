<?php
include_once __DIR__ . '/app.php';
$page_title = 'Order History';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>

<?php 
$order_items = getOrderItems($user['id']);
?>



<?php include_once __DIR__ . '/_components/footer.php'; ?>