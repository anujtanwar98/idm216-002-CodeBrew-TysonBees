<?php
include_once __DIR__ . '/app.php';
$page_title = 'Order Confirmation';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>

<?php 
$order_items = getOrderItems($user['id']);
$order_id = "";
?>
<?php
                $site_url = site_url();
            while ($item = mysqli_fetch_array($order_items)) {
                $order_id = $item['id'];
            }
                ?>

<div>
    <div class="page-title-container">
        <?php $title = 'Order Confirmation';?>
        <h1 class="text-center payment-page-title"><?php echo $title; ?></h1>
    </div>
    <div class="mobile-order-confirm-container">
        <div class="order-number-text">
            <h1 class="text-center">
            <!-- Order Number: 123456 -->
            <?php
            //     $site_url = site_url();
            // while ($item = mysqli_fetch_array($order_items)) {
            //     $order_id = $item['id'];
            //     echo "Order Number: $order_id";
            echo "Order Number: $order_id"
            // }
                ?>
            </h1>
        </div>
        <div class="order-confirm-page-truck">
            <img class="order-confirm-truck-rewards-image" src="<?php echo site_url(); ?>/dist/images/truck-loading.png" alt="Food truck rewards page" width="200" height="me-auto">
        </div>
        <div class="tracking-box">
            <div class="tracking-box-progress-bar"></div>
            <div class="tracking-box-progress-info">
                <div class="tracking-box-received-time">                
                    <?php
                    date_default_timezone_set("America/New_York");
                    $current_time = date("h:i A");
                    echo "Received: 
                    <br>
                    $current_time";
                    ?>
                </div>
                <div class="tracking-box-pick-up-time">
                    <?php
                    date_default_timezone_set("America/New_York");
                    $current_time = date("h:i A");
                    $pick_up_time = date("h:i A", strtotime('+10 minutes'));
                    echo "Pick Up:
                    <br>
                    $pick_up_time";
                    ?>
                </div>
            </div>
        </div>
        <div class="order-confirm-location-box">
            <div class="order-confirm-location-box-title">
                <h2>Tyson Bees Truck</h2>
            </div>
            <p>13260 Spruce St., Philadelphia, PA 19104</p>
            <a href="<?php echo site_url(); ?>/order-history.php" class="order-confirm-back-home-btn">Check Order History</a>
        </div>
    </div>

    <div class="desktop-order-confirm-truck-image-main">
        <img class="desktop-order-confirm-truck-image" src="<?php echo site_url(); ?>/dist/images/truck-loading.png" alt="Food Truck">
    </div>
    <div class="desktop-order-confirm-container">
        <div class="desktop-order-confirm-left-box">
            <div class="desktop-order-confirm-order-info">
                <h2>Order Confirmation</h2>
                <p><span id="desk-order-number">
                <!-- Order Number: 123456 -->
                <strong>
                <?php
                echo "Order Number: $order_id"
                ?>
                </strong>
                </span></p>
            </div>
            <div class="desktop-order-confirm-progress-bar">
                <div class="desktop-order-confirm-progress-bar-track">
                    <div class="desktop-order-confirm-progress-bar-fill"></div>
                </div>
                <div class="desktop-order-confirm-progress-bar-time">
                    <p>
                        <span id="desktop-order-confirm-received-time">
                        <?php
                        date_default_timezone_set("America/New_York");
                        $current_time = date("h:i A");
                        echo "Received: 
                        <br>
                        $current_time";
                        ?>
                    </span></p>
                    <p>
                        <span id="desktop-order-confirm-pickup-time">
                        <?php
                        date_default_timezone_set("America/New_York");
                        $current_time = date("h:i A");
                        $pick_up_time = date("h:i A", strtotime('+10 minutes'));
                        echo "Pick Up:
                        <br>
                        $pick_up_time";
                        ?>
                    </span></p>
                </div>
            </div>
        </div>
        <div class="desktop-order-confirm-right-box">
            <div class="desktop-order-confirm-food-truck-info">
                <h2>Tyson Bees Truck</h2>
                <p>13260 Spruce St., Philadelphia, PA 19104</p>
            </div>
        </div>
    </div>
    <div class="desktop-order-confirm-back-home-btn">
        <a href="<?php echo site_url(); ?>/order-history.php" class="order-confirm-back-home-btn">Check Order History</a>
    </div>
</div>


<?php include_once __DIR__ . '/_components/footer.php'; ?>