<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Login';
include_once __DIR__ . '/../_components/header.php';
?>

<div class="login-main-container">
  <div class="honey-comb-image-top-container">
    <img sticky="top" class="honey-comb-image-top" src="<?php echo site_url(); ?>/dist/images/login-top-honey.png" width="500" height="me-auto" alt="">
  </div>
  <div class='back-btn-container payment-page-back'>
        <a class='text-decoration-none' href='<?php echo site_url()?> /cart.php'>
            <div class='back-btn'>
                <i class='fas fa-arrow-left back-btn-arrow'></i>
            </div>
        </a>
    </div>
  <div class="login-page-honey-title">
    <img src="<?php echo site_url(); ?>/dist/images/logo.png" alt="Logo" width="260" height="me-auto" class="d-inline-block align-text-center">
  </div>
  <!-- <h1 class="login-title">Login</h1> -->
  <div class="login-page-truck-image">
    <img class="truck-image" src="<?php echo site_url(); ?>/dist/images/truck-loading.png" width="400" height="me-auto" alt="">
  </div>
  <div class="login-form-container">
    <form method="POST" action="<?php echo site_url() . '/_includes/process-login.php' ?>">
      <div class="mb-3">
        <label class="email-title" for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1 email-input-subs" aria-describedby="emailHelp" placeholder="email" required name="email">
      </div>
      <div class="mb-3">
        <label class="password-title" for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1 password-input-subs" placeholder="********" required name="password">
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
      <!-- <div class="signup-btn-container">
        <a class="signup-page-btn" href="<?php echo site_url(); ?>/auth/signup.php" style="text-decoration: none;">
          <h3 class="signup-page-title">Sign Up</h3>
        </a>
      </div> -->
    </form>
  </div>
  <a class="signup-btn-container" href="<?php echo site_url(); ?>/auth/signup.php" style="text-decoration: none;">
    <button class="signup-page-btn" >
      <h3 class="signup-page-title">Sign Up</h3>
    </button>
  </a>
  <div class="honey-comb-image-bottom-container">
    <img sticky="bottom" class="honey-comb-image-bottom" src="<?php echo site_url(); ?>/dist/images/login-bottom-honey.png" width="500" height="me-auto" alt="">
  </div>
</div>