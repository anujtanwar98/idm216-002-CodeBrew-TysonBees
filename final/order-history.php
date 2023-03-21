<?php
include_once __DIR__ . '/app.php';
$page_title = 'Order History';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>
<?php
$order_items = getOrderItems($user['id']);


?>
<?php
    date_default_timezone_set("America/New_York");
    $current_time = date("h:i A");
    $pick_up_time = date("h:i A", strtotime('+10 minutes'));
?>

<div class="page-title-container">
    <?php $title = 'Order History';?>
    <h1 class="text-center cart-title"><?php echo $title; ?></h1>
  </div>
<?php
    $site_url = site_url();
    // $total_price=0;
while ($item = mysqli_fetch_array($order_items)) {
    // $item_plus_quanity= $item['price']*$item['quantity'];
    // $item_plus_quanity =number_format((float)$item_plus_quanity, 2, '.', '');
//     var_dump($item);
// die;
if($item['items_ordered']!= null){
    // var_dump($item);
    echo " 
    <div class='container-b mx-auto py-3 px-4 mb-4 d-flex flex-column' >
        <h1 class='big-text text-center my-0'>
            <strong>Order Number:</strong> {$item['id']}
            
        </h1>
        <p class='text-center mb-2'><strong class='green'>Status:</strong> {$item['status']}</p>

        <div class='heading-border d-flex justify-content-between mb-3'></div>

        <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
            <p><strong>PICKUP TIME</strong></p>
            <p>
                {$pick_up_time}
            </p>
        </div>
        

        <div class='order-history-item-box'>
            <div class='total-paid'>
            <p><strong>TOTAL PAID:</strong> ". price_with_dollar_sign($item['final_total']) ."</p>
            </div>
                <hr>";
                include __DIR__ . '/_components/orderConfirm.php';
                // var_dump($item);
                echo"
                
                <hr>
                
            </div>
        </div>


        <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
            
        </div>";
        // include __DIR__ . '/_components/orderConfirm.php';
        echo "
        
    </div>
    
    ";
}}?>







<?php include_once __DIR__ . '/_components/footer.php'; ?>