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
$id = sanitize_value($_POST['id']);

// Create a SQL statement to insert the data into the database
$query = "UPDATE menu SET menu_category = '{$menu_category}', images = '{$images}', name = '{$name}', price = '{$price}', description = '{$description}', allergen_info = '{$allergen_info}', nutri_facts = '{$nutri_facts}' WHERE id = {$id}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/menu');
} else {
    $error_message = 'menu item was not updated';
    redirect_to('/admin/menu?error=' . $error_message);
}