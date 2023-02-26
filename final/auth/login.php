<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Login';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/navbar.php'; ?>

<div class="login-main-container">
  <div class="honey-comb-image-top-container">
    <img sticky="top" class="honey-comb-image-top" src="<?php echo site_url(); ?>/dist/images/login-top-honey.png" width="500" height="me-auto" alt="">
  </div>
  <div class="login-page-honey-title">
    <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="Logo" width="260" height="me-auto" class="d-inline-block align-text-center">
  </div>
  <!-- <h1 class="login-title">Login</h1> -->
  <div class="login-page-truck-image">
    <img class="truck-image" src="<?php echo site_url(); ?>/dist/images/truck-loading.png" width="400" height="me-auto" alt="">
  </div>
  <div class="login-form-container">
    <form method="POST" action="<?php echo site_url() . '/_includes/login-process.php' ?>">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required>
      </div>
      <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <div class="login-btn-container">
        <button class="login-page-btn" type="submit">
          <h3 class="login-page-title">Login</h3>
        </button>
      </div>
    </form>
    <!-- <form class="login-form-wrapper" method="POST" action="<?php echo site_url(); ?>/auth/login.php">
        <div>
          <label class="label-title">Username:</label>
        </div>
        <div>
          <input class="input-text" type="text" name="username" required>
        </div>
        <div>
          <label class="label-title">Password:</label>
        </div>
        <div>
          <input class="input-text" type="password" name="password" required>
        </div>

        <div class="login-btn-container">
          <button class="hero-btn menu-btn" type="submit">
            <h3>Login</h3>
          </button>
        </div>
    </form> -->
  </div>
  <div class="honey-comb-image-bottom-container">
    <img sticky="bottom" class="honey-comb-image-bottom" src="<?php echo site_url(); ?>/dist/images/login-bottom-honey.png" width="500" height="me-auto" alt="">
  </div>
</div>