<?php
include_once __DIR__ . '/app.php';
$page_title = 'Cart';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>

<?php
$cart = getAllCartItems($userOrder['id']);
?>






<!-- <div class="category-page-wrapper">
  <div class="page-title-container">
    <?php $title = 'Cart';?>
    <h1 class="text-center cart-title"><?php echo $title; ?></h1>
  </div>
  <div class ="total"> 
    <div class ="flex">
        <div class="description"><p class="total-text">Subtotal</p></div>
        <div class="price-cart"><p class="total-text"><?php echo price_with_dollar_sign($total_price); ?></p></div>
    </div>
    <div class ="flex">
        <div class="description"><p class="total-text">Tax</p></div>
        <div class="price-cart"><p class="total-text"><?php echo price_with_dollar_sign($tax_cal); ?></p></div>
    </div>
    <div class ="flex">
        <div class="description"><p class="total-text">Total</p></div>
        <div class="price-cart"><p class="total-text"><?php echo price_with_dollar_sign($total_price_tax); ?></p></div>
    </div>
  </div>
  <div>
    <a href="<?php echo site_url(); ?>/auth/login.php" class="text-decoration-none">
        <button class = "checkout"> 
            <span class ="checkout-text button-text">Checkout</span>
        </button>
    </a>
  </div>
</div> -->

<div class="page-title-container">
    <?php $title = 'Cart';?>
    <h1 class="text-center cart-title"><?php echo $title; ?></h1>
  </div>


<div class="desk-cart-container">
  <div class="desk-cart-items">
    <?php include_once __DIR__ . '/_components/cartItems.php'; ?>
  </div>
  <div class="desk-cart-summary">
    <h2>Order Summary</h2>
    <table>
      <tr>
        <td>Subtotal:</td>
        <td><?php echo price_with_dollar_sign($total_price); ?></td>
      </tr>
      <tr>
        <td>Tax:</td>
        <td><?php echo price_with_dollar_sign($tax_cal); ?></td>
      </tr>
      <tr>
        <td>Total:</td>
        <td><?php echo price_with_dollar_sign($total_price_tax); ?></td>
      </tr>
    </table>
    <a href="<?php echo site_url(); ?>/payment.php" class="text-decoration-none">
        <button class = "checkout"> 
            <span class ="checkout-text button-text">Checkout</span>
        </button>
    </a>
  </div>
</div>

<div class ="total"> 
    <div class ="flex">
        <div class="description"><p class="total-text">Subtotal:</p></div>
        <div class="price-cart"><p class="total-text"><?php echo price_with_dollar_sign($total_price); ?></p></div>
    </div>
    <div class ="flex">
        <div class="description"><p class="total-text">Tax:</p></div>
        <div class="price-cart"><p class="total-text"><?php echo price_with_dollar_sign($tax_cal); ?></p></div>
    </div>
    <div class ="flex">
        <div class="description"><p class="total-text">Total:</p></div>
        <div class="price-cart"><p class="total-text"><?php echo price_with_dollar_sign($total_price_tax); ?></p></div>
    </div>
  </div>
  <div class="phone-check-button">
    <a href="<?php echo site_url(); ?>/payment.php" class="text-decoration-none">
        <button class = "checkout"> 
            <span class ="checkout-text button-text">Checkout</span>
        </button>
    </a>
  </div>



<?php include_once __DIR__ . '/_components/footer.php'; ?>