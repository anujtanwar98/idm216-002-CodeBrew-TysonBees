<?php
include_once __DIR__ . '/app.php';
$page_title = 'Payment';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>


<div class="my-payemnt-container">
    <div class="page-title-container">
        <?php $title = 'Payment';?>
        <h1 class="text-center payment-page-title"><?php echo $title; ?></h1>
    </div>
    <div class ="total total-payment"> 
      <div class ="flex">
          <div class="description description-thinner"><p class="total-text">Thai Basil Chicken Taco (2)</p></div>
          <div class="price-cart description-thinner"><p class="total-text">$10.00</p></div>
      </div>

      <div class="dashed-line"></div>

      <div class ="flex">
          <div class="description"><p class="total-text">Subtotal</p></div>
          <div class="price-cart"><p class="total-text">$10.00</p></div>
      </div>
      <div class ="flex">
          <div class="description"><p class="total-text">Tax</p></div>
          <div class="price-cart"><p class="total-text">$0.60</p></div>
      </div>
      <div class ="flex">
          <div class="description"><p class="total-text">Total</p></div>
          <div class="price-cart"><p class="total-text">$10.60</p></div>
      </div>
  </div>
  <div class="payment-container" role="group">
        <h3 class="payment-title">Payment Options</h3>
        <!-- <button id="payment-venmo" type="button" class="btn btn-light active payment-method my-payment-btn payment-method-enable">
            <p class="payment-method-text">Venmo</p>
            <img src="<?php echo site_url(); ?>/dist/images/vectorvenmo.png" class="payment-method-image" alt="venmo logo">
        </button>

        <button id="payment-cash" type="button" class=" btn btn-light payment-method my-payment-btn payment-method-enable">
            <p class="payment-method-text">Pay Cash at Truck</p>
            <img src="<?php echo site_url(); ?>/dist/images/mdi_cashcash.png" class="payment-method-image payment-cash" alt="cash image">
        </button> -->
        <button type="button" id="payment-venmo" class="payment-option payment-method-buttons active">
            Venmo
            <img src="<?php echo site_url(); ?>/dist/images/venmo.png" class="buttons-logo-venmo-cash" alt="venmo logo">
        </button>
        <button type="button" id="payment-cash" class="payment-option payment-method-buttons">
        Pay Cash at Truck
            <img src="<?php echo site_url(); ?>/dist/images/cash.png" class="buttons-logo-venmo-cash" alt="cash image">
        </button>
        <div class="complete-order-button">
            <!-- <button button id="complete-order" class="btn btn-success checkout checkout-disabled" disabled> 
                <span class ='checkout-text button-text'>Complete Order</span>
            </button> -->
            <button id="complete-order" class="checkout checkout-disabled checkout-enabled" disabled>Complete Order</button>
        </div>
    </div>
</div>





<?php include_once __DIR__ . '/_components/footer.php'; ?>