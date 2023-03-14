<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Beverages';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/navbar.php'; ?>

<?php 
    // $menuItem_byId = array(3, 7, 15, 19);
    // $query = 'SELECT * FROM menu WHERE id = 1';
    // $query = "SELECT * FROM menu WHERE id IN (" . implode(",", $menuItem_byId) . ")";
    $query = "SELECT * FROM menu WHERE menu_category = 'beverages'";
    $result = mysqli_query($db_connection, $query);
?>

<?php
$site_url = site_url();
 echo "<div class='category-page-wrapper'>";
 echo "<div class='category-header'>";
 echo "<div class='category-container'>";
 echo "<div class='back-btn-container'>";
 echo "<a class='text-decoration-none' href='{$site_url}/index.php'>";
 echo "<div class='back-btn'>";
 echo "<i class='fas fa-arrow-left back-btn-arrow'></i>";
 echo "</div>";
 echo "</a>";
 echo "</div>";
 echo "<h1 class='category-title'>Beverages</h1>";
 echo "</div>";
 echo "</div>";
 
 while ($menu_item = mysqli_fetch_assoc($result)) {
    // Display each item as a card or tile
   echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
   echo" <div class='my-food-item-container'>";
   echo"<div class='my-food-image'>";
   echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
   echo"</div>";
   echo"<div class='col-md-8 my-food-item-details'>";
   echo"<div class='my-food-item-name'>";
   echo"<p>" . $menu_item['name'] ."</p>";
   echo"</div>";
   echo"<div class='col-md-6 my-food-item-price'>";
   echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
   echo"</div>";
   echo"</div>";
   echo"</div>";
   echo "</div>";
    
    include __DIR__ . '/../menu-item-modal.php';
}

?>

<?php include_once __DIR__ . '/../_components/footer.php'; ?>