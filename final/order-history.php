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


<?php
    $site_url = site_url();
    // $total_price=0;
while ($item = mysqli_fetch_array($order_items)) {
    // $item_plus_quanity= $item['price']*$item['quantity'];
    // $item_plus_quanity =number_format((float)$item_plus_quanity, 2, '.', '');
//     var_dump($item);
// die;
if($item['items_ordered']!= null){
    // var_dump($item['items_ordered']);
    echo " 
    <div class='container-b mx-auto py-3 px-4 mb-4 d-flex flex-column' >
        <h1 class='big-text text-center my-0'>
            <strong>Order Number= {$item['id']}
            </strong>
        </h1>
        <p class='text-center mb-2'> Status: <strong class='green'>{$item['status']}</strong> </p>

        <div class='heading-border d-flex justify-content-between mb-3'></div>

        <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
            <p>PICKUP TIME</p>
            <p>
                <strong>{$pick_up_time}</strong>
            </p>
        </div>
        

        <div class='order-history-item-box'>
            <div class='order-history-item-order-number'>Order= {$item['id']}</div>
                <hr>
                <div class='order-history-item-food'>
                    <div class='order-history-item-food-name'>
                        <div class='order-history-item-food-name-text'>{$item['items_ordered']}</div>
                    </div>
                    <div class='order-history-item-food-price'>
                    </div>
                </div>
                <hr>
                <div class='order-history-item-total'>
                    <div class='order-history-item-total-text'>Total</div>
                    <div class='order-history-item-total-price'>
                        <div class='order-history-item-total-price-text'>". price_with_dollar_sign($item['final_total']) ."</div>
                    </div>
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