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


<!-- <?php include_once __DIR__ . '/_components/footer.php'; ?> -->