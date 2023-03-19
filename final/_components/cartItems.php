<?php
    $site_url = site_url();
    $total_price=0;
    $tax_cal=0;
    $total_price_tax=0;
while ($result = mysqli_fetch_array($cart)) {
    $total_price += $result['price'] * $result['quantity'];
    $tax_cal = $total_price * 0.1;
    $total_price_tax = $total_price + $tax_cal;

    // echo" <div class='category-item-container'>";
    // echo"<div class='category-item-imgcontainer'>";
    // echo"<img src='" . $result['images'] . "' alt='" . $result['name'] . "' alt='taco image' class='category-item-img'>";
    // echo"</div>";
    // echo"<div class='category-item-flexcolumn'>";
    // echo"<div class='category-item-flexrow'>";
    // echo"<p class='category-item-title'>" . $result['name'] ."</p>";
    // echo "<form action='{$site_url}/_includes/delete_cart_item.php' method='POST''>";
    // echo"<input name='cart' value=". $result ['cart_item_id'] . " type='hidden'>";
    // echo "<button type='submit' class='fas fa-trash-alt category-item-btn'></button>";
    // echo"</form>";
    // echo"</div>";
    // echo"<div class='category-item-row'>";
    // echo"<div class='category-cart'>";
    // echo "<div class='quantity-container'>";
    // echo "<button class='decrement'>-</button>";
    // echo "<input onkeydown='return false' type='number' class='quantity-input' value=". $result ['quantity'] . ">";
    // echo "<button class='increment'>+</button>";
    // echo "</div>";
    // echo"</div>";
    // echo"<div class='cart-category-item-price'>";
    // echo"<p class='category-item-flexprice'>". price_with_dollar_sign($result['price']) ."</p>";
    // echo"</div>";
    // echo"</div>";
    // echo" </div>";
    // echo"</div>";



    echo"<div class='product-box'>";
    echo"<img src='" . $result['images'] . "' alt='" . $result['name'] . "' alt='food image'>";
    echo"<div class='product-info'>";
    echo"<div class='product-header'>";
    echo"<p class='product-name'>" . $result['name'] ."</p>";
    echo "<form action='{$site_url}/_includes/delete_cart_item.php' method='POST''>";
    echo"<input name='cart' value=". $result ['cart_item_id'] . " type='hidden'>";
    // echo"<button type='submit' class='fas fa-trash-alt cart-delete-button category-item-btn'></button>";
    echo"<button type='submit' class='desktop-delete-wrapper'>";
    echo"<div class='lid'></div>";
    echo"<div class='can'></div>";
    echo"</button>";
    echo"</form>";
    echo"</div>";
    echo"<div class='product-footer'>";
    echo "<button class='decrement cart-minus-button'>-</button>";
    echo"<input onkeydown='return false' type='number' class='product-quantity' value=". $result ['quantity'] . ">";
    echo "<button class='increment cart-plus-button'>+</button>";
    echo"<span class='product-price'>". price_with_dollar_sign($result['price']) ."</span>";
    echo"</div>";
    echo"</div>";
    echo"</div>";





    echo"<div class='desk-product-box'>";
    echo"<img src='" . $result['images'] . "' alt='" . $result['name'] . "' alt='food image'>";
    echo"<div class='desk-product-info'>";
    echo"<div class='desk-product-header'>";
    echo"<p class='desk-product-name'>" . $result['name'] ."</p>";
    echo "<form action='{$site_url}/_includes/delete_cart_item.php' method='POST''>";
    echo"<input name='cart' value=". $result ['cart_item_id'] . " type='hidden'>";
    // echo"<button type='submit' class='fas fa-trash-alt cart-delete-button category-item-btn'></button>";
    echo"<button type='submit' class='desktop-delete-wrapper'>";
    echo"<div class='lid'></div>";
    echo"<div class='can'></div>";
    echo"</button>";
    echo"</form>";
    echo"</div>";
    echo"<div class='desk-product-footer'>";
    echo "<button class='decrement cart-minus-button'>-</button>";
    echo"<input onkeydown='return false' type='number' class='product-quantity' value=". $result ['quantity'] . ">";
    echo "<button class='increment cart-plus-button'>+</button>";
    echo"<span class='desk-product-price'>". price_with_dollar_sign($result['price']) ."</span>";
    echo"</div>";
    echo"</div>";
    echo"</div>";

}

?>

