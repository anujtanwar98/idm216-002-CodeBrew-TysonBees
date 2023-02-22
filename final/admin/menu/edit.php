<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Menu Item';
include_once __DIR__ . '/../../_components/header.php';
?>
<?php include_once __DIR__ . '/../../_components/navbar.php'; ?>

<div>
    <?php $title = 'Edit Menu item';?>
    <h1 class="text-center text-dark"><?php echo $title; ?></h1>
</div>


<?php
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

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Edit Menu Item</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-edit-menu-item.php" method="POST">
              <div class="block">
                <label for="">Category</label>
                <input type="text" name="menu_category"
                  value="<?php echo $menu_item['menu_category']?>">
              </div>
              <div class="block">
                <label for="">Image</label>
                <input type="text" name="images"
                  value="<?php echo $menu_item['images']?>">
              </div>
              <div class="block">
                <label for="">Name</label>
                <input type="text" name="name"
                  value="<?php echo $menu_item['name']?>">
              </div>
              <div class="block">
                <label for="">Price</label>
                <input type="text" name="price"
                  value="<?php echo $menu_item['price']?>">
              </div>
              <div class="block">
                <label for="">Description</label>
                <input type="text" name="description"
                  value="<?php echo $menu_item['description']?>">
              </div>
              <div class="block">
                <label for="">Allergen Info</label>
                <input type="text" name="allergen_info"
                  value="<?php echo $menu_item['allergen_info']?>">
              </div>
              <div class="block">
                <label for="">Nutritional Facts</label>
                <input type="text" name="nutri_facts"
                  value="<?php echo $menu_item['nutri_facts']?>">
              </div>
              <div class="block">
                <label for="">Dietary Restrictions</label>
                <input type="text" name="diet_res"
                  value="<?php echo $menu_item['diet_res']?>">
              </div>
              <!-- <div class=" block">
                <label for="">Steps</label>
                <textarea class="js-tinymce" type="text" name="steps"><?php echo $menu_item['steps']?></textarea>
              </div> -->
              <input class="btn btn-primary" type="submit" value="Update Menu Item">

              <input type="hidden" name="id" value="<?php echo $menu_item['id']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once __DIR__ . '/../../_components/footer.php'; ?>