<?php
include_once __DIR__ . '/app.php';
include_once __DIR__ . '/_components/header.php';
?>

<!-- Modal -->
<div class="modal fade" id="exampleModal-<?php echo $menu_item['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      <form class="modal-content modalBackground" action="<?php echo site_url() . '/_includes/addToCart.php'?>" method="POST">
      <div class="overlay">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        <section class="overlay-container">
          <img class="food-img-overlay" src="<?php echo $menu_item['images']?>" alt="food image overlay" height="281px">
          <div class="yellow-overlay-container">
          <div class="yellow-overlay">
              <h4 class="overlay-subtitle-row">
                  <span class="overlay-text overlay-subtitle"><?php echo $menu_item['name']?></span>
                  <span class="overlay-text overlay-subtitle overlay-price-title"><?php echo price_with_dollar_sign($menu_item['price'])?></span>
              </h4>
              <p class="overlay-text">
                <?php echo $menu_item['description']?>
              </p>
              <h4 class="overlay-text overlay-subtitle">Allergen Information</h4>
              <p class="overlay-text"><?php echo $menu_item['allergen_info']?></p>
              <h4 class="overlay-text overlay-subtitle">Special Instructions</h4>
              <input type="text" class="form-control" id="exampleInputEmail1 notes-input-subs" aria-describedby="inputGroup-sizing-default" placeholder="special instructions here" name="note">
              <div class="overlay-quantity-container">
              <div class="overlay-btns">
                <div class="quantity-container">
                  <button class="decrement">-</button>
                  <input onkeydown="return false" type="number" class="quantity-input" value="1" name="quantity">
                  <button class="increment">+</button>
                </div>
              </div>
                <div class="overlay-total">
                    <p class="overlay-text">Total: $5.00</p>
                </div>
              </div>
              <button class="add-order-btn">
                  <p class="overlay-text button-text">Add to Order</p>
              </button>
            </div>
          </div>
        </section>
      </div>
      <input value="<?php echo $userOrder['id']; ?>" name="order_id" type="hidden">
      <input value="<?php echo $menu_item['id']; ?>" name="menu_item_id" type="hidden">
      <!-- <input name="quantity" type="hidden"> -->
      </form>
  </div>
</div>


