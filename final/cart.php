<?php
include_once __DIR__ . '/app.php';
$page_title = 'Cart';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>

<?php
$cart = getAllCartItems($userOrder['id']);
?>





<div class="category-page-wrapper">
  <div class="page-title-container">
    <?php $title = 'Cart';?>
    <h1 class="text-center cart-title"><?php echo $title; ?></h1>
  </div>
  <?php include_once __DIR__ . '/_components/cartItems.php'; ?>
  <div class ="total"> 
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
  <div>
    <a href="<?php echo site_url(); ?>/auth/login.php" class="text-decoration-none">
        <button class = "checkout"> 
            <span class ="checkout-text button-text">Checkout</span>
        </button>
    </a>
  </div>
</div>