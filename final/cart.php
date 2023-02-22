<?php
include_once __DIR__ . '/app.php';
$page_title = 'Cart';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>

<div class="text-center bg-dark p-2">
  <h1 class="text-light">Open Until 5pm</h1>
</div>
<div class="card text-bg-dark">
  <!-- <img src="<?php echo site_url(); ?>/dist/images/temp-image.jpg" width="400" height="me-auto" class="card-img d-inline-block align-text-center" alt=""> -->
  <div class="card-img-overlay d-flex col">
    <a class="text-white text-center" href="<?php echo site_url(); ?>/admin/menu/index.php" style="text-decoration: none;">
      <button type="button" class="btn btn-light">View Menu</button>
    </a>
    <a class="text-white text-center" href="#" style="text-decoration: none;">
      <button type="button" class="btn btn-light">Login</button>
    </a>
  </div>
</div>
<br>
<br>
<h1>
  This is food ordering app from tyson bees foodtruck
</h1>


<?php include_once __DIR__ . '/_components/footer.php'; ?>