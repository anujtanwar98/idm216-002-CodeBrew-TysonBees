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
<div class="d-flex card card-honey">
  <div class="honey-comb-back">
    <img src="<?php echo site_url(); ?>/dist/images/honeycomb-hero.png" width="500" height="me-auto" alt="">
    <!-- class="card-img d-inline-block align-text-center" -->
  </div>
  <h1 class="card-img-overlay text-center welcome-main-title" style="color:#fff">Welcome to Tyson Bees</h1>
  <div class="card-img-overlay d-flex col button-links-home">
    <a href="<?php echo site_url(); ?>/menu.php" style="text-decoration: none;">
      <button class="hero-btn menu-btn">
          <h2>View Menu</h2>
      </button>
    </a>
    <a href="#" style="text-decoration: none;">
      <button class="hero-btn login-btn">
          <h2>Log In</h2>
      </button>
    </a>
  </div>
</div>
<br>
<br>
<h1>
  This is food ordering app from tyson bees foodtruck
</h1>


<?php include_once __DIR__ . '/_components/footer.php'; ?>