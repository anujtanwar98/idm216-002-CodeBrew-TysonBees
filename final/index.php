<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>


<div class="text-center p-2 hours">
  <img src="<?php echo site_url(); ?>/dist/images/bee-back1.png" alt="" width="100%" height="me-auto">
  <span class="overlay-text">Open Until 5:00 P.M.</span>
  <img src="<?php echo site_url(); ?>/dist/images/bee-back2.png" alt="" width="100%" height="me-auto">
</div>
<div class="d-flex wel-box">
  <h2 class="welcome-title">Welcome</h2>
  <div class="filter-image">
    <img src="<?php echo site_url(); ?>/dist/images/filter.png" width="40" height="me-auto" alt="">
  </div>
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