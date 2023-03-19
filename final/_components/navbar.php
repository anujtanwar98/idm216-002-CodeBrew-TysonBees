<nav class="navbar navbar-expand-lg my-mob-nav" style="background-color:#EFC372">
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
      <?php
        $cart = getAllCartItems($userOrder['id']);
        if ($cart->num_rows > 0) {
          echo '<i class="fas fa-shopping-cart fa-2x shopping-cart"><div class="red-dot"></div></i>';
        } else {
          echo '<i class="fas fa-shopping-cart fa-2x shopping-cart"></i>';
        }
        ?>
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/index.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/rewards.php">Rewards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/order-history.php">Order History</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/admin/menu/main.php">Admin</a>
        </li> -->
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


<nav class="navbar navbar-expand-lg my-desk-nav" style="background-color:#EFC372">
      <div class="container-fluid my-desk-nav-items">
        <a class="text-decoration-none my-main-title" href="<?php echo site_url(); ?>/index.php">
        <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="Logo" width="180" height="me-auto" class="d-inline-block align-text-center">
        </a>
        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="toggler-icon top-bar"></span>
          <span class="toggler-icon middle-bar"></span>
          <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNav'>
          <ul class='navbar-nav ms-auto'>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/index.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/rewards.php">Rewards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/order-history.php">Order History</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/admin/menu/main.php">Admin</a>
            </li>           -->
          </ul>
        </div>
        <a href="<?php echo site_url(); ?>/cart.php">
          <?php
          $cart = getAllCartItems($userOrder['id']);
          if ($cart->num_rows > 0) {
            echo '<i class="fas fa-shopping-cart fa-2x shopping-cart"><div class="red-dot"></div></i>';
          } else {
            echo '<i class="fas fa-shopping-cart fa-2x shopping-cart"></i>';
          }
          ?>
        </a>
      </div>
    </nav>


    <?php
    // $cart = getAllCartItems($userOrder['id']);
    // if ($cart-> num_rows > 0) {
    //   echo "<div class='red-dot'></div>";
    // }
    ?>

    