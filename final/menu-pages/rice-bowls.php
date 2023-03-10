<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Rice Bowls';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/navbar.php'; ?>

<?php 
    // $menuItem_byId = array(3, 7, 15, 19);
    // $query = 'SELECT * FROM menu WHERE id = 1';
    // $query = "SELECT * FROM menu WHERE id IN (" . implode(",", $menuItem_byId) . ")";
    $query = "SELECT * FROM menu WHERE menu_category = 'rice bowls'";
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
 echo "<h1 class='category-title'>Rice Bowls</h1>";
 echo "</div>";
 echo "</div>";
 
 while ($menu_item = mysqli_fetch_assoc($result)) {
     // Display each item as a card or tile
     echo "<div class='category-item-container'>";
     echo "<div class='category-item-imgcontainer'>";
     echo "<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'> ";
     echo "</div>";

     echo "<div class='category-item-flexcolumn'>";
     echo "<div class='category-item-flexrow'>";
     echo "<p class='category-item-title'>" . $menu_item['name'] ."</p>";
     echo "<i class='fas fa-plus category-item-btn'></i>";
     echo "</div>";

     echo "<p class='category-item-row'>";
     echo "<a href='{$site_url}/menu-item-show.php?id={$menu_item['id']}'>";
     echo "<span class='category-item-details'>Click for details</span>";
     echo "</a>";
     echo "<span class='category-item-flexprice'>" . price_with_dollar_sign($menu_item['price']) . "</span>";
     echo "</p>";
     echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>Click for details</button>";
     echo "</div>";
     echo "</div>";
     
     include __DIR__ . '/../menu-item-modal.php';
 }
 
 echo "</div>";
?>

<?php include_once __DIR__ . '/../_components/footer.php'; ?>