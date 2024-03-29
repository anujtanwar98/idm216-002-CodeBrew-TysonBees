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
<div class=" card card-honey">
  <div class="honey-comb-back">
    <img src="<?php echo site_url(); ?>/dist/images/honeycomb-hero.png" width="500" height="me-auto" alt="">
    <!-- class="card-img d-inline-block align-text-center" -->
  </div>
  <!-- <div class="card-img-overlay text-center">
    <h1 class="card-img-overlay text-center welcome-main-title" style="color:#fff">Welcome to Tyson Bees</h1>
  </div> -->
  <div class="card-img-overlay d-flex col button-links-home">
    <!-- <a href="<?php echo site_url(); ?>/menu.php" style="text-decoration: none;">
      <button class="hero-btn menu-btn">
          <h2>View Menu</h2>
      </button>
    </a> -->
    <div>
        <h1 class="text-center welcome-main-title" style="color:#fff">Welcome to Tyson Bees</h1>
    </div>
    <!-- <a href="<?php echo site_url(); ?>/auth/login.php" style="text-decoration: none;">
      <button class="hero-btn login-btn">
          <h2>Log In / Sign Up</h2>
      </button>
    </a> -->
  </div>
</div>
<div class="welcome-destop-main-title-container">
    <h1 class="welcome-destop-main-title">Welcome to Tyson Bees</h1>
</div>
<?php 
// $order_items = getOrderItems($user['id']);
// $site_url = site_url();
// while ($item = mysqli_fetch_array($order_items)) {
//     if ($item["status"]= "completed"){
//     echo"hello";
// } else {
//     echo "<div></div>";
// }}
?>

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

    <div class="menu-desktop-wrapper">
        <div class="menu-desk-container">
            <div class="menu-desk__item">
                <a href="#tacos-desk" class="text-decoration-none">
                    <div class="menu-row-img">
                        <img src="<?php echo site_url(); ?>/dist/images/icon-taco-group.png" class="icon-hexagon" alt="taco hexagon">
                    </div>
                </a>
                
                <a href="#tacos-desk" class="text-decoration-none">
                    <button class="menu-row-btn">
                        <p class="menu-row-name">Tacos</p>
                    </button>
                </a>
            </div>
            <div class="menu-desk__item">
                <a href="#burritos-desk" class="text-decoration-none">
                    <div class="menu-row-img">
                        <img src="<?php echo site_url(); ?>/dist/images/icon-burrito-group.png" class="icon-hexagon" alt="burrito hexagon">
                    </div>
                </a>

                <a href="#burritos-desk" class="text-decoration-none">
                    <button class="menu-row-btn">
                        <p class="menu-row-name">Burritos</p>
                    </button>
                </a>
            </div>
            <div class="menu-desk__item">
                <a href="#hotdogs-desk" class="text-decoration-none">
                    <div class="menu-row-img">
                        <img src="<?php echo site_url(); ?>/dist/images/icon-hotdog-group.png" class="icon-hexagon" alt="hot dog hexagon">
                    </div>
                </a>

                <a href="#hotdogs-desk" class="text-decoration-none">
                    <button class="menu-row-btn">
                        <p class="menu-row-name">Hot Dogs</p>
                    </button>
                </a>
            </div>
            <div class="menu-desk__item">
                <a href="#wraps-desk" class="text-decoration-none">
                    <div class="menu-row-img">
                        <img src="<?php echo site_url(); ?>/dist/images/icon-wrap-group.png" class="icon-hexagon" alt="wrap hexagon">
                    </div>
                </a>

                <a href="#wraps-desk" class="text-decoration-none">
                    <button class="menu-row-btn">
                        <p class="menu-row-name">Wraps</p>
                    </button>
                </a>
            </div>
            <div class="menu-desk__item">
                <a href="#quesadillas-desk" class="text-decoration-none">
                    <div class="menu-row-img">
                        <img src="<?php echo site_url(); ?>/dist/images/icon-quesadilla-group.png" class="icon-hexagon" alt="quesadilla hexagon">
                    </div>
                </a>

                <a href="#quesadillas-desk" class="text-decoration-none">
                    <button class="menu-row-btn">
                        <p class="menu-row-name">Quesadillas</p>
                    </button>
                </a>
            </div>
            <div class="menu-desk__item">
                <a href="#ricebowls-desk">
                    <div class="menu-row-img">
                        <img src="<?php echo site_url(); ?>/dist/images/icon-rice-group.png" class="icon-hexagon" alt="rice bowl hexagon">
                    </div>
                </a>

                <a href="#ricebowls-desk" class="text-decoration-none">
                    <button class="menu-row-btn">
                        <p class="menu-row-name">Rice Bowls</p>
                    </button>
                </a>
            </div>
            <div class="menu-desk__item">
                <a href="#sandwiches-desk" class="text-decoration-none">
                    <div class="menu-row-img">
                        <img src="<?php echo site_url(); ?>/dist/images/icon-sandwich-group.png" class="icon-hexagon" alt="sandwich hexagon">
                    </div>
                </a>

                <a href="#sandwiches-desk" class="text-decoration-none">
                    <button class="menu-row-btn">
                        <p class="menu-row-name">Sandwich / Buns</p>
                    </button>
                </a>
            </div>
            <div class="menu-desk__item">
                <a href="#drinks-desk" class="text-decoration-none">
                    <div class="menu-row-img">
                        <img src="<?php echo site_url(); ?>/dist/images/icon-drink-group.png" class="icon-hexagon" alt="drinks hexagon">
                    </div>
                </a>

                <a href="#drinks-desk" class="text-decoration-none">
                    <button class="menu-row-btn">
                        <p class="menu-row-name">Drinks</p>
                    </button>
                </a>
            </div>
        </div>
    </div>





<div class="desktop-categories-show">


    <div>
        <?php
            $query = "SELECT * FROM menu WHERE menu_category = 'tacos'";
            $result = mysqli_query($db_connection, $query);
        ?>
    </div>
    <div>

        <?php
        $site_url = site_url();
        echo "<div class='my-food-desk-title-image'>";
        echo "<h1 id='tacos-desk' class=''>Tacos</h1>";
        echo "<img class='my-food-icons-images' src='{$site_url}/dist/images/icon-taco.png' alt='tacos' class='category-img'>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='my-food-display-row'>";
        
        while ($menu_item = mysqli_fetch_assoc($result)) {
            // Display each item as a card or tile
            echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
            echo" <div class='my-food-desktop-container'>";
            echo"<div class='my-food-image'>";
            echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
            echo"</div>";
            echo"<div class='col-md-8 my-food-item-details'>";
            echo"<div class='my-food-item-name'>";
            echo"<p>" . $menu_item['name'] ."</p>";
            echo"</div>";
            echo"<div class='col-md-6 my-food-item-price'>";
            echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo "</div>";
            
            include __DIR__ . '/menu-item-modal.php';
        }
        echo "</div>";
        
        ?>
    </div>




    <div>
        <?php
            $query = "SELECT * FROM menu WHERE menu_category = 'burrito'";
            $result = mysqli_query($db_connection, $query);
        ?>
    </div>
    <div>

        <?php
        $site_url = site_url();
        echo "<div class='my-food-desk-title-image'>";
        echo "<h1 id='burritos-desk' class=''>Burritos</h1>";
        echo "<img class='my-food-icons-images' src='{$site_url}/dist/images/icon-burrito.png' alt='tacos' class='category-img'>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='my-food-display-row'>";
        
        while ($menu_item = mysqli_fetch_assoc($result)) {
            // Display each item as a card or tile
            echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
            echo" <div class='my-food-desktop-container'>";
            echo"<div class='my-food-image'>";
            echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
            echo"</div>";
            echo"<div class='col-md-8 my-food-item-details'>";
            echo"<div class='my-food-item-name'>";
            echo"<p>" . $menu_item['name'] ."</p>";
            echo"</div>";
            echo"<div class='col-md-6 my-food-item-price'>";
            echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo "</div>";
            
            include __DIR__ . '/menu-item-modal.php';
        }
        echo "</div>";
        
        ?>
    </div>




    <div>
        <?php
            $query = "SELECT * FROM menu WHERE menu_category = 'hot dogs'";
            $result = mysqli_query($db_connection, $query);
        ?>
    </div>
    <div>

        <?php
        $site_url = site_url();
        echo "<div class='my-food-desk-title-image'>";
        echo "<h1 id='hotdogs-desk' class=''>Hot Dogs</h1>";
        echo "<img class='my-food-icons-images' src='{$site_url}/dist/images/icon-hotdog.png' alt='tacos' class='category-img'>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='my-food-display-row'>";
        
        while ($menu_item = mysqli_fetch_assoc($result)) {
            // Display each item as a card or tile
            echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
            echo" <div class='my-food-desktop-container'>";
            echo"<div class='my-food-image'>";
            echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
            echo"</div>";
            echo"<div class='col-md-8 my-food-item-details'>";
            echo"<div class='my-food-item-name'>";
            echo"<p>" . $menu_item['name'] ."</p>";
            echo"</div>";
            echo"<div class='col-md-6 my-food-item-price'>";
            echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo "</div>";
            
            include __DIR__ . '/menu-item-modal.php';
        }
        echo "</div>";
        
        ?>
    </div>



    <div>
        <?php
            $query = "SELECT * FROM menu WHERE menu_category = 'wraps'";
            $result = mysqli_query($db_connection, $query);
        ?>
    </div>
    <div>

        <?php
        $site_url = site_url();
        echo "<div class='my-food-desk-title-image'>";
        echo "<h1 id='wraps-desk' class=''>Wraps</h1>";
        echo "<img class='my-food-icons-images' src='{$site_url}/dist/images/icon-wrap.png' alt='tacos' class='category-img'>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='my-food-display-row'>";
        
        while ($menu_item = mysqli_fetch_assoc($result)) {
            // Display each item as a card or tile
            echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
            echo" <div class='my-food-desktop-container'>";
            echo"<div class='my-food-image'>";
            echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
            echo"</div>";
            echo"<div class='col-md-8 my-food-item-details'>";
            echo"<div class='my-food-item-name'>";
            echo"<p>" . $menu_item['name'] ."</p>";
            echo"</div>";
            echo"<div class='col-md-6 my-food-item-price'>";
            echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo "</div>";
            
            include __DIR__ . '/menu-item-modal.php';
        }
        echo "</div>";
        
        ?>
    </div>




    <div>
        <?php
            $query = "SELECT * FROM menu WHERE menu_category = 'quesadilla'";
            $result = mysqli_query($db_connection, $query);
        ?>
    </div>
    <div>

        <?php
        $site_url = site_url();
        echo "<div class='my-food-desk-title-image'>";
        echo "<h1 id='quesadillas-desk' class=''>Quesadillas</h1>";
        echo "<img class='my-food-icons-images' src='{$site_url}/dist/images/icon-quesadilla.png' alt='tacos' class='category-img'>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='my-food-display-row'>";
        
        while ($menu_item = mysqli_fetch_assoc($result)) {
            // Display each item as a card or tile
            echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
            echo" <div class='my-food-desktop-container'>";
            echo"<div class='my-food-image'>";
            echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
            echo"</div>";
            echo"<div class='col-md-8 my-food-item-details'>";
            echo"<div class='my-food-item-name'>";
            echo"<p>" . $menu_item['name'] ."</p>";
            echo"</div>";
            echo"<div class='col-md-6 my-food-item-price'>";
            echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo "</div>";
            
            include __DIR__ . '/menu-item-modal.php';
        }
        echo "</div>";
        
        ?>
    </div>





    <div>
        <?php
            $query = "SELECT * FROM menu WHERE menu_category = 'rice bowls'";
            $result = mysqli_query($db_connection, $query);
        ?>
    </div>
    <div>

        <?php
        $site_url = site_url();
        echo "<div class='my-food-desk-title-image'>";
        echo "<h1 id='ricebowls-desk' class=''>Rice Bowls</h1>";
        echo "<img class='my-food-icons-images' src='{$site_url}/dist/images/icon-ricebowl.png' alt='tacos' class='category-img'>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='my-food-display-row'>";
        
        while ($menu_item = mysqli_fetch_assoc($result)) {
            // Display each item as a card or tile
            echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
            echo" <div class='my-food-desktop-container'>";
            echo"<div class='my-food-image'>";
            echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
            echo"</div>";
            echo"<div class='col-md-8 my-food-item-details'>";
            echo"<div class='my-food-item-name'>";
            echo"<p>" . $menu_item['name'] ."</p>";
            echo"</div>";
            echo"<div class='col-md-6 my-food-item-price'>";
            echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo "</div>";
            
            include __DIR__ . '/menu-item-modal.php';
        }
        echo "</div>";
        
        ?>
    </div>




    <div>
        <?php
            $query = "SELECT * FROM menu WHERE menu_category = 'sandwich/buns'";
            $result = mysqli_query($db_connection, $query);
        ?>
    </div>
    <div>

        <?php
        $site_url = site_url();
        echo "<div class='my-food-desk-title-image'>";
        echo "<h1 id='sandwiches-desk' class=''>Sandwich & Buns</h1>";
        echo "<img class='my-food-icons-images' src='{$site_url}/dist/images/icon-sandwich.png' alt='tacos' class='category-img'>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='my-food-display-row'>";
        
        while ($menu_item = mysqli_fetch_assoc($result)) {
            // Display each item as a card or tile
            echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
            echo" <div class='my-food-desktop-container'>";
            echo"<div class='my-food-image'>";
            echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
            echo"</div>";
            echo"<div class='col-md-8 my-food-item-details'>";
            echo"<div class='my-food-item-name'>";
            echo"<p>" . $menu_item['name'] ."</p>";
            echo"</div>";
            echo"<div class='col-md-6 my-food-item-price'>";
            echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo "</div>";
            
            include __DIR__ . '/menu-item-modal.php';
        }
        echo "</div>";
        
        ?>
    </div>



    <div>
        <?php
            $query = "SELECT * FROM menu WHERE menu_category = 'beverages'";
            $result = mysqli_query($db_connection, $query);
        ?>
    </div>
    <div>

        <?php
        $site_url = site_url();
        echo "<div class='my-food-desk-title-image'>";
        echo "<h1 id='drinks-desk' class=''>Drinks</h1>";
        echo "<img class='my-food-icons-images' src='{$site_url}/dist/images/icon-drink.png' alt='tacos' class='category-img'>";
        echo "</div>";
        echo "<hr>";
        echo "<div class='my-food-display-row'>";
        
        while ($menu_item = mysqli_fetch_assoc($result)) {
            // Display each item as a card or tile
            echo "<div data-bs-toggle='modal' data-bs-target='#exampleModal-{$menu_item['id']}'>";
            echo" <div class='my-food-desktop-container'>";
            echo"<div class='my-food-image'>";
            echo"<img src='" . $menu_item['images'] . "' alt='" . $menu_item['name'] . "'  class='category-item-img'>";
            echo"</div>";
            echo"<div class='col-md-8 my-food-item-details'>";
            echo"<div class='my-food-item-name'>";
            echo"<p>" . $menu_item['name'] ."</p>";
            echo"</div>";
            echo"<div class='col-md-6 my-food-item-price'>";
            echo"<p class='my-food-item-price-value'>" . price_with_dollar_sign($menu_item['price']) . "</p>";
            echo"</div>";
            echo"</div>";
            echo"</div>";
            echo "</div>";
            
            include __DIR__ . '/menu-item-modal.php';
        }
        echo "</div>";
        
        ?>
    </div>
</div>
<br>





<?php include_once __DIR__ . '/_components/footer.php'; ?>