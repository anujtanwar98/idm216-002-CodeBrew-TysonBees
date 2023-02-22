<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$menu_category = sanitize_value($_POST['menu_category']);
$images = sanitize_value($_POST['images']);
$name = sanitize_value($_POST['name']);
$price = sanitize_value($_POST['price']);
$description = sanitize_value($_POST['description']);
$allergen_info = sanitize_value($_POST['allergen_info']);
$nutri_facts = sanitize_value($_POST['nutri_facts']);
$diet_res = sanitize_value($_POST['diet_res']);

$result = add_menu_item(
    $menu_category,
    $images,
    $name,
    $price,
    $description,
    $allergen_info,
    $nutri_facts,
    $diet_res
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/menu');
} else {
    $error_message = 'Sorry there was an error creating the menu item';
    redirect_to('/admin/menu?error=' . $error_message);
}