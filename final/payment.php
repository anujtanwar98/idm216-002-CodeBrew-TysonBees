<?php
include_once __DIR__ . '/app.php';
$page_title = 'Payment';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>

<?php
($user['guest']==0) ? "success": redirect_to('/auth/login.php') ;
$cart = getAllCartItems($userOrder['id']);
?>

<?php
    $site_url = site_url();
    $total_price=0;
    $tax_cal=0;
    $total_price_tax=0;
while ($result = mysqli_fetch_array($cart)) {
    $total_price += $result['price'] * $result['quantity'];
    $tax_cal = $total_price * 0.1;
    $total_price_tax = $total_price + $tax_cal;
}
?>

<div class="my-payemnt-container">
    <div class="page-title-container">
        <?php $title = 'Payment';?>
        <h1 class="text-center payment-page-title"><?php echo $title; ?></h1>
    </div>
    <div class='back-btn-container payment-page-back'>
        <a class='text-decoration-none' href='<?php echo site_url()?>/cart.php'>
            <div class='back-btn'>
                <i class='fas fa-arrow-left back-btn-arrow'></i>
            </div>
        </a>
    </div>
    <div class="payment-order-summary">
        <h2>Order Summary</h2>
        <?php
        $cart = getAllCartItems($userOrder['id']);
        while ($result = mysqli_fetch_array($cart)) {
            $item_name = $result['name'];
            $item_price = price_with_dollar_sign($result['price'] * $result['quantity']);
        ?>
        <div class="payment-item payment-item-dotted">
            <span class="payment-item-name"><?php echo $item_name; ?></span>
            <span class="payment-item-price"><?php echo $item_price; ?></span>
        </div>
        <?php
        }
        ?>
        <hr class="payment-my-line">
        <div class="payment-subtotal">
            <span>Subtotal:</span>
            <span><?php echo price_with_dollar_sign($total_price); ?></span>
        </div>
        <div class="payment-tax">
            <span>Tax:</span>
            <span><?php echo price_with_dollar_sign($tax_cal); ?></span>
        </div>
        <div class="payment-total">
            <span>Total:</span>
            <span><?php echo price_with_dollar_sign($total_price_tax); ?></span>
        </div>
    </div>

    <!-- <div class="desk-payment-order-summary">
        <h2>Order Summary</h2>
        <?php
        // $cart = getAllCartItems($userOrder['id']);
        // while ($result = mysqli_fetch_array($cart)) {
        //     $item_name = $result['name'];
        //     $item_price = price_with_dollar_sign($result['price'] * $result['quantity']);
        ?>
        <div class="desk-payment-item desk-payment-item-dotted">
            <span class="desk-payment-item-name"><?php echo $item_name; ?></span>
            <span class="desk-payment-item-price"><?php echo $item_price; ?></span>
        </div>
        <?php
        // }
        ?>
        <hr class="desk-payment-my-line">
        <div class="desk-payment-subtotal">
            <span>Subtotal:</span>
            <span><?php echo price_with_dollar_sign($total_price); ?></span>
        </div>
        <div class="desk-payment-tax">
            <span>Tax:</span>
            <span><?php echo price_with_dollar_sign($tax_cal); ?></span>
        </div>
        <div class="desk-payment-total">
            <span>Total:</span>
            <span><?php echo price_with_dollar_sign($total_price_tax); ?></span>
        </div>
    </div> -->


    <div class="payment-screen-main-container">
        <div class="desktop-payment-order-summary">
            <h2>Order Summary</h2>
            <?php
            $cart = getAllCartItems($userOrder['id']);
            while ($result = mysqli_fetch_array($cart)) {
                $item_name = $result['name'];
                $item_price = price_with_dollar_sign($result['price'] * $result['quantity']);
            ?>
            <div class="desk-payment-item desk-payment-item-dotted">
                <span class="desk-payment-item-name"><?php echo $item_name; ?></span>
                <span class="desk-payment-item-price"><?php echo $item_price; ?></span>
            </div>
            <?php
            }
            ?>
                <hr class="desk-payment-my-line">
            <div class="desk-payment-subtotal">
                <span>Subtotal:</span>
                <span><?php echo price_with_dollar_sign($total_price); ?></span>
            </div>
            <div class="desk-payment-tax">
                <span>Tax:</span>
                <span><?php echo price_with_dollar_sign($tax_cal); ?></span>
            </div>
            <div class="desk-payment-total">
                <span>Total:</span>
                <span><?php echo price_with_dollar_sign($total_price_tax); ?></span>
            </div>
        </div>
        <div class="payment-screen-payment-selection" role="group">
            <h3 class="desktop-payment-title">Payment Options</h3>
            <button type="button" id="payment-venmo" class="payment-option payment-method-buttons active">
            Venmo
            <img src="<?php echo site_url(); ?>/dist/images/venmo.png" class="buttons-logo-venmo-cash" alt="venmo logo">
            </button>
            <button type="button" id="payment-cash" class="payment-option payment-method-buttons">
            Pay Cash at Truck
                <img src="<?php echo site_url(); ?>/dist/images/cash.png" class="buttons-logo-venmo-cash" alt="cash image">
            </button>
            <form class="" action="<?php echo site_url();?>/_includes/orderArchive.php" method="POST">
                <input type="hidden" name="order_id" value="<?php echo $userOrder['id']; ?>">
                <input type="hidden" name="total_price_tax" value="<?php echo $total_price_tax; ?>">
                <div class="complete-order-button">
                    <!-- <button button id="complete-order" class="btn btn-success checkout checkout-disabled" disabled> 
                        <span class ='checkout-text button-text'>Complete Order</span>
                    </button> -->
                    <button type="submit" id="complete-order" class="checkout checkout-disabled checkout-enabled" disabled>Complete Order</button>
                </div>
            </form>
        </div>
    </div>



    <!-- <div class="payment-container" role="group">
        <h3 class="payment-title">Payment Options</h3>
        <button type="button" id="payment-venmo" class="payment-option payment-method-buttons active">
            Venmo
            <img src="<?php echo site_url(); ?>/dist/images/venmo.png" class="buttons-logo-venmo-cash" alt="venmo logo">
        </button>
        <button type="button" id="payment-cash" class="payment-option payment-method-buttons">
        Pay Cash at Truck
            <img src="<?php echo site_url(); ?>/dist/images/cash.png" class="buttons-logo-venmo-cash" alt="cash image">
        </button>
        <form class="" action="<?php echo site_url();?>/_includes/orderArchive.php" method="POST">
            <input type="hidden" name="order_id" value="<?php echo $userOrder['id']; ?>">
            <input type="hidden" name="total_price_tax" value="<?php echo $total_price_tax; ?>">
            <div class="complete-order-button">
                <button type="submit" id="complete-order" class="checkout checkout-disabled checkout-enabled" disabled>Complete Order</button>
            </div>
        </form>
    </div> -->
</div>





<?php include_once __DIR__ . '/_components/footer.php'; ?>