<nav class="navbar navbar-expand-lg" style="background-color:#EFC372">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="<?php echo site_url(); ?>/index.php">
      <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="Logo" width="120" height="me-auto" class="d-inline-block align-text-center">
    </a> -->
    <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-icon top-bar"></span>
      <span class="toggler-icon middle-bar"></span>
      <span class="toggler-icon bottom-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url(); ?>/index.php">
      <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="Logo" width="140" height="me-auto" class="d-inline-block align-text-center">
    </a>
    <a href="<?php echo site_url(); ?>/cart.php">
      <i class="fas fa-shopping-cart fa-2x shopping-cart"></i>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/rewards.php">Rewards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/order-history.php.php">Order History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/admin/menu/main.php">Admin</a>
        </li>
        <?php 
        // if (is_user_logged_in()) {
        //   echo '<li class="nav-item">
        //   <a class="nav-link active" aria-current="page" href="' . site_url() . '/auth/logout.php">Logout</a>
        // </li>';
        // } else {
        //   echo '<li class="nav-item">
        //   <a class="nav-link active" aria-current="page" href="' . site_url() . '/auth/login.php">Login</a>
        // </li>';
        // }
        ?>
      </ul>
    </div>
  </div>
</nav>