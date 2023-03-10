<?php
    $site_url = site_url();
    $total_price=0;
while ($result = mysqli_fetch_array($cart)) {
    $total_price += $result['price'] * $result['quantity'];
    echo" <div class='category-item-container'>";
    echo"<div class='category-item-imgcontainer'>";
    echo"<img src='" . $result['images'] . "' alt='" . $result['name'] . "' alt='taco image' class='category-item-img'>";
    echo"</div>";
    echo"<div class='category-item-flexcolumn'>";
    echo"<div class='category-item-flexrow'>";
    echo"<p class='category-item-title'>" . $result['name'] ."</p>";
    echo"<img src='#' alt='x button' class='category-item-btn'>";
    echo"</div>";
    echo"<div class='category-item-row'>";
    echo"<div class='category-cart'>";
    echo "<div class='quantity-container'>";
    echo "<button class='decrement'>-</button>";
    echo "<input onkeydown='return false' type='number' class='quantity-input' value='1'>";
    echo "<button class='increment'>+</button>";
    echo "</div>";
    echo"</div>";
    echo"<p class='category-item-flexprice'>". price_with_dollar_sign($result['price']) ."</p>";
    echo"</div>";
    echo" </div>";
    echo"</div>";
}

?>

