<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Admin';
include_once __DIR__ . '/../../_components/header.php';
?>
<?php include_once __DIR__ . '/../../_components/navbar.php'; 
$menu = get_menu_item();
?>

<main class="main">
    <div>
        <?php $title = 'Admin';?>
        <h1 class="text-center text-dark"><?php echo $title; ?></h1>
    </div>

  <div class="mx-auto my-16 max-w-7xl px-4">
    <div class="px-4 sm:px-6 lg:px-8">
      <div class="sm:flex sm:items-center">
        <div class="text-dark">
          <h1>Menu Items</h1>
          <p>It shows all the menu items for admin side</p>
          <?php
            // If error query param exist, show error message
              if (isset($_GET['error'])) {
                  echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
              }
          ?>
        </div>
        <div>
        <a class="text-white" href="<?php echo site_url(); ?>/admin/menu/create.php" style="text-decoration: none;">
          <button class="btn btn-primary">Add menu Item</button>
        </a>
        </div>
      </div>
      <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
              <?php include __DIR__ . '/../../_components/table-menu.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>


<?php include_once __DIR__ . '/../../_components/footer.php'; ?>