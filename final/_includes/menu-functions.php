<?php

/**
 * get all menu from the database
 * @return object - mysqli_result
 */
function get_menu_item()
{
    global $db_connection;
    $query = 'SELECT * FROM menu';
    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a recipe into the database
 * @param  string $menu_category - menu category of the menu item
 * @param  string $images - image of the menu item
 * @param  string $name - name of the menu item
 * @param  string $price - price of the menu item
 * @param  string $description - description of the menu item
 * @param  string $allergen_info - allergen info of the menu item
 * @param  string $nutri_facts - nutri facts of the menu item
 * @param  string $diet_res - diet restrictions of the menu item
 * @return object - mysqli_result
 */
function add_menu_item($menu_category, $images, $name, $price, $description, $allergen_info, $nutri_facts, $diet_res)
{
    global $db_connection;
    $query = 'INSERT INTO menu';
    $query .= ' (menu_category, images, name, price, description, allergen_info, nutri_facts, diet_res)';
    $query .= " VALUES ('$menu_category', '$images', '$name', '$price', '$description', '$allergen_info', '$nutri_facts', '$diet_res')";

    $result = mysqli_query($db_connection, $query);
    return $result;
}