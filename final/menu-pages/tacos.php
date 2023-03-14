<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Tacos';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/navbar.php'; ?>

<?php 
    // $menuItem_byId = array(3, 7, 15, 19);
    // $query = 'SELECT * FROM menu WHERE id = 1';
    // $query = "SELECT * FROM menu WHERE id IN (" . implode(",", $menuItem_byId) . ")";
    $query = "SELECT * FROM menu WHERE menu_category = 'tacos'";
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
 echo "<h1 class='category-title'>Tacos</h1>";
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



<!-- <div class='category-page-wrapper'>
    <div class='category-header'>
        <div class='category-container'>
            <div class='back-btn-container'>
                <a href='index.html'>
                    <div class='back-btn'>
                        <h1 class='back-btn-arrow'>&larr;</h1>
                    </div>
                </a>
            </div>
                <h1 class='category-title'>Tacos</h1>
        </div>
    </div>

    <div class='category-item-container'>
        <div class='category-item-imgcontainer'>
            <img src='graphics/photo-tacos__korean.png' alt='taco image' class='category-item-img'> 
        </div>

        <div class='category-item-flexcolumn'>
            <div class='category-item-flexrow'>
                <p class='category-item-title'>Korean BBQ Beef Short Rib Taco</p>
                <img src='graphics/quick-add-btn.png' alt='plus button' class='category-item-btn'>
            </div>

            <p class='category-item-row'>
                <a href='taco-korean-overlay.html'>
                    <span class='category-item-details'>Click for details</span>
                </a>
                <span class='category-item-flexprice'>$5.00</span>
            </p>
        </div>
    </div>
</div> -->


