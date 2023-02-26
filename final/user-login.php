<?php
include_once __DIR__ . '/app.php';
$page_title = 'Login';
include_once __DIR__ . '/_components/header.php';
?>
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
    <form method="POST" action="<?php echo site_url(); ?>/auth/login.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
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








  <!-- <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      <form class="space-y-6" action="<?php echo site_url() . '/_includes/process-login.php' ?>" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
          <div class="mt-1">
            <input id="email" name="email" type="text" autocomplete="email" required
              class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          </div>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox"
              class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
          </div>

          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
          </div>
        </div>

        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign
            in</button>
        </div>
      </form>
    </div>
  </div>
</div> -->