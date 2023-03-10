<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';

// get menu item data from database
$query = "SELECT * FROM menu WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $menu_item variable;
    $menu_item = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Menu Item does not exist';
    // redirect_to('/admin/menu?error=' . $error_message);
}


$page_title = $menu_item['name'];
include_once __DIR__ . '/_components/header.php';
?>


<?php 
    // $site_url = site_url();
    // echo "<main class='main'>";
    // echo "<div class='container text-dark'>";
    // echo "<h1 class='text-center'>{$menu_item['name']}</h1>";
    // echo "<div class='menu-image'>";
    // echo "<img src='{$menu_item['images']}' class='detail-page-image-1'>";
    // echo "</div>";
    // echo "<div class='recipe-detail-description'>";
    // echo "<p>" . price_with_dollar_sign($menu_item['price']) . "</p>";
    // echo "</div>";
    // echo "<div class='recipe-detail-description'>";
    // echo "<p>{$menu_item['description']}</p>";
    // echo "</div>";
    // echo "<div class='recipe-detail-ingredients'>";
    // echo "<div>{$menu_item['allergen_info']}</div>";
    // echo "</div>";
    // echo "<div class='recipe-detail-steps'>";
    // echo "<p>{$menu_item['nutri_facts']}</p>";
    // echo "</div>";
    // echo "</div>";
    // echo "</main>";
?>

<?php 
    $site_url = site_url();
    echo "<div class='overlay'>";
    echo "<section class='overlay-container'>";
    echo "<img class='food-img-overlay' src='{$menu_item['images']}' alt='food image overlay' height='281px'>";
    echo "<div class='yellow-overlay-container'>";
    echo "<div class='yellow-overlay'>";
    echo "<h4 class='overlay-subtitle-row'>";
    echo "<span class='overlay-text overlay-subtitle'>{$menu_item['name']}</span>";
    echo "<span class='overlay-text overlay-subtitle overlay-price-title'>" . price_with_dollar_sign($menu_item['price']) . "</span>";
    echo "</h4>";
    echo "<p class='overlay-text'>{$menu_item['description']}</p>";
    echo "<h4 class='overlay-text overlay-subtitle'>Allergen Information</h4>";
    echo "<p class='overlay-text'>{$menu_item['allergen_info']}</p>";
    echo "<h4 class='overlay-text overlay-subtitle'>Special Instructions</h4>";
    echo "<input class='special-instructions' type='text' placeholder='Type your special instructions here'>";
    echo "<div class='overlay-quantity-container'>";
    echo "<div class='overlay-btns'>";
    echo "<div class='overlay-btn overlay-btn-minus'>";
    echo "<p>-</p>";
    echo "</div>";
    echo "<p class='overlay-quantity'>1</p>";
    echo "<div class='overlay-btn overlay-btn-plus'>";
    echo "<p>+</p>";
    echo "</div>";
    echo "</div>";
    echo "<div class='overlay-total'>";
    echo "<p class='overlay-text'>Total: $5.00</p>";
    echo "</div>";
    echo "</div>";
    echo "<a href='tacos-2.html' class='text-decoration-none'>";
    echo "<button class='add-order-btn'>";
    echo "<p class='overlay-text button-text'>Add to Order</p>";
    echo "</button>";
    echo "</a>";
    echo "</div>";
    echo "</div>";
    echo "</section>";
    echo "<a href='#' class='close-btn-container'>";
    echo "<i class='fas fa-times close-btn'></i>";
    echo "</a>";
    echo "</div>";
?>


