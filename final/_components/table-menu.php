<?php
if (!isset($menu)) {
    echo '$menu variable is not defined. Please check the code.';
}
?>
<div class="my-table">
  <table class="table text-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Category</th>
        <th scope="col">Images</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Allergen info</th>
        <th scope="col">Nurti Facts</th>
        <th scope="col">
          <span class="sr-only">Edit</span>
        </th>
        <th scope="col">View menu Item</th>
      </tr>
    </thead>

    <!--  this is for ref -->
    <!-- <td>{$recipe['ingredients']}</td>
    <td>{$recipe['steps']}</td> -->
    
    <tbody>
      <?php
      // Cant combine functions with string so we have to assign the function to a variable here.
      $site_url = site_url();
      while ($menu_item = mysqli_fetch_array($menu)) {
          echo "
            <tr>
              <td>{$menu_item['id']}</td>
              <td>{$menu_item['menu_category']}</td>
              <td><img src='{$menu_item['images']}' alt=''></td>
              <td>{$menu_item['name']}</td>
              <td>{$menu_item['price']}</td>
              <td>{$menu_item['description']}</td>
              <td>{$menu_item['allergen_info']}</td>
              <td>{$menu_item['nutri_facts']}</td>
              
              <td>
                <a class='text-white' href='{$site_url}/admin/menu/edit.php?id={$menu_item['id']}' style='text-decoration: none;'>
                  <button class='btn btn-primary'>Edit</button>
                </a>     
                <a class='text-white' href='{$site_url}/admin/menu/delete.php?id={$menu_item['id']}' style='text-decoration: none;'>
                  <button class='btn btn-danger'>Delete</button>
                </a>
              </td>
              <td>
                <a class='text-white' href='{$site_url}/menu-item-show.php?id={$menu_item['id']}' style='text-decoration: none;'>
                  <button class='btn btn-primary'>View</button>
                </a>
              </td>
            </tr>";
      }
      ?>
    </tbody>
  </table>
</div>