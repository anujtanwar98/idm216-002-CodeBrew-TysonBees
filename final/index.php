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
<!-- <div class="d-flex wel-box">
  <h2 class="welcome-title">Welcome</h2>
  <div class="filter-image">
    <img src="<?php echo site_url(); ?>/dist/images/filter.png" width="40" height="me-auto" alt="">
  </div>
</div> -->
<div class="d-flex card card-honey">
  <div class="honey-comb-back">
    <img src="<?php echo site_url(); ?>/dist/images/honeycomb-hero1.png" width="500" height="me-auto" alt="">
    <!-- class="card-img d-inline-block align-text-center" -->
  </div>
  <div class="card-img-overlay text-center">
    <h1 class="card-img-overlay text-center welcome-main-title" style="color:#fff">Welcome to Tyson Bees</h1>
  </div>
  <div class="card-img-overlay d-flex col button-links-home">
    <!-- <a href="<?php echo site_url(); ?>/menu.php" style="text-decoration: none;">
      <button class="hero-btn menu-btn">
          <h2>View Menu</h2>
      </button>
    </a> -->
    <a href="<?php echo site_url(); ?>/auth/login.php" style="text-decoration: none;">
      <button class="hero-btn login-btn">
          <h2>Log In / Sign Up</h2>
      </button>
    </a>
  </div>
</div>
<!-- <br>
<br>
<h1>
  This is food ordering app from tyson bees foodtruck
</h1> -->

<div class="menu-container">
        <h2 class="menu-title">Our Menu Categories</h2>

        <div class="menu-row-wrapper">
            <div class="menu-row-container">

                <div class="menu-row__item">
                    <a href="<?php echo site_url(); ?>/menu-pages/tacos.php" class="text-decoration-none">
                        <div class="menu-row-img">
                            <img src="<?php echo site_url(); ?>/dist/images/icon-taco-group.png" class="icon-hexagon" alt="taco hexagon">
                        </div>
                    </a>
                    
                    <a href="<?php echo site_url(); ?>/menu-pages/tacos.php" class="text-decoration-none">
                        <button class="menu-row-btn">
                            <p class="menu-row-name">Tacos</p>
                        </button>
                    </a>
                </div>

                <div class="menu-row__item">
                    <a href="<?php echo site_url(); ?>/menu-pages/burritos.php" class="text-decoration-none">
                        <div class="menu-row-img">
                            <img src="<?php echo site_url(); ?>/dist/images/icon-burrito-group.png" class="icon-hexagon" alt="burrito hexagon">
                        </div>
                    </a>

                    <a href="<?php echo site_url(); ?>/menu-pages/burritos.php" class="text-decoration-none">
                        <button class="menu-row-btn">
                            <p class="menu-row-name">Burritos</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="menu-row-wrapper">
            <div class="menu-row-container">

                <div class="menu-row__item">
                    <a href="<?php echo site_url(); ?>/menu-pages/hot-dogs.php" class="text-decoration-none">
                        <div class="menu-row-img">
                            <img src="<?php echo site_url(); ?>/dist/images/icon-hotdog-group.png" class="icon-hexagon" alt="hot dog hexagon">
                        </div>
                    </a>

                    <a href="<?php echo site_url(); ?>/menu-pages/hot-dogs.php" class="text-decoration-none">
                        <button class="menu-row-btn">
                            <p class="menu-row-name">Hot Dogs</p>
                        </button>
                    </a>
                </div>

                <div class="menu-row__item">
                    <a href="<?php echo site_url(); ?>/menu-pages/wraps.php" class="text-decoration-none">
                        <div class="menu-row-img">
                            <img src="<?php echo site_url(); ?>/dist/images/icon-wrap-group.png" class="icon-hexagon" alt="wrap hexagon">
                        </div>
                    </a>

                    <a href="<?php echo site_url(); ?>/menu-pages/wraps.php" class="text-decoration-none">
                        <button class="menu-row-btn">
                            <p class="menu-row-name">Wraps</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="menu-row-wrapper">
            <div class="menu-row-container">

                <div class="menu-row__item">
                    <a href="<?php echo site_url(); ?>/menu-pages/quesadillas.php" class="text-decoration-none">
                        <div class="menu-row-img">
                            <img src="<?php echo site_url(); ?>/dist/images/icon-quesadilla-group.png" class="icon-hexagon" alt="quesadilla hexagon">
                        </div>
                    </a>

                    <a href="<?php echo site_url(); ?>/menu-pages/quesadillas.php" class="text-decoration-none">
                        <button class="menu-row-btn">
                            <p class="menu-row-name">Quesadillas</p>
                        </button>
                    </a>
                </div>

                <div class="menu-row__item" class="text-decoration-none">
                    <a href="<?php echo site_url(); ?>/menu-pages/rice-bowls.php">
                        <div class="menu-row-img">
                            <img src="<?php echo site_url(); ?>/dist/images/icon-rice-group.png" class="icon-hexagon" alt="rice bowl hexagon">
                        </div>
                    </a>

                    <a href="<?php echo site_url(); ?>/menu-pages/rice-bowls.php" class="text-decoration-none">
                        <button class="menu-row-btn">
                            <p class="menu-row-name">Rice Bowls</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="menu-row-wrapper">
            <div class="menu-row-container">

                <div class="menu-row__item">
                    <a href="<?php echo site_url(); ?>/menu-pages/sandwich-buns.php" class="text-decoration-none">
                        <div class="menu-row-img">
                            <img src="<?php echo site_url(); ?>/dist/images/icon-sandwich-group.png" class="icon-hexagon" alt="sandwich hexagon">
                        </div>
                    </a>

                    <a href="<?php echo site_url(); ?>/menu-pages/sandwich-buns.php" class="text-decoration-none">
                        <button class="menu-row-btn">
                            <p class="menu-row-name">Sandwich / Buns</p>
                        </button>
                    </a>
                </div>

                <div class="menu-row__item">
                    <a href="<?php echo site_url(); ?>/menu-pages/drinks.php" class="text-decoration-none">
                        <div class="menu-row-img">
                            <img src="<?php echo site_url(); ?>/dist/images/icon-drink-group.png" class="icon-hexagon" alt="drinks hexagon">
                        </div>
                    </a>

                    <a href="<?php echo site_url(); ?>/menu-pages/drinks.php" class="text-decoration-none">
                        <button class="menu-row-btn">
                            <p class="menu-row-name">Drinks</p>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>





<?php include_once __DIR__ . '/_components/footer.php'; ?>