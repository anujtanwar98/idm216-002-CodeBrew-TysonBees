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
<?php include_once __DIR__ . '/_components/navbar.php'; 
// $menu = get_menu_item();
?>


   
          
<?php
    $site_url = site_url();
        echo "
        <main class='main'>
        <div class='container text-dark'>
            <h1 class='text-center'>{$menu_item['name']}</h1>
            <div class='menu-image'>
                <img src='{$menu_item['images']}' class='detail-page-image-1'>
            </div>
            <div class='recipe-detail-description'>
                <p>{$menu_item['price']}</p>
            </div>
            <div class='recipe-detail-description'>
                <p>{$menu_item['description']}</p>
            </div>
            <div class='recipe-detail-ingredients'>
                <div>{$menu_item['allergen_info']}</div>
            </div>
            <div class='recipe-detail-steps'>
                <p>{$menu_item['nutri_facts']}</p>
            </div>
        </div>
    </main>
        ";
    
?>

<?php include_once __DIR__ . '/_components/footer.php'; ?>