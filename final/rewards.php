<?php
include_once __DIR__ . '/app.php';
$page_title = 'Rewards';
include_once __DIR__ . '/_components/header.php';
?>
<?php include_once __DIR__ . '/_components/navbar.php'; ?>

<div class="my-rewards-container">
    <div class="page-title-container">
        <?php $title = 'Rewards';?>
        <h1 class="text-center rewards-title"><?php echo $title; ?></h1>
    </div>
    <div class="rewards-page-truck-image">
        <img class="truck-rewards-image" src="<?php echo site_url(); ?>/dist/images/truck-unfilled.png" alt="Food truck rewards page" width="400" height="me-auto">
    </div>

    <!-- when one order gets completed color one circle -->

    <div class="numbers-container">
            <h3 class="number">1</h3>
            <h3 class="number">2</h3>
            <h3 class="number">3</h3>
            <h3 class="number">4</h3>
            <h3 class="number">5</h3>
            <h3 class="number">6</h3>
            <h3 class="number">7</h3>
            <h3 class="number">8</h3>
            <h3 class="number">9</h3>
            <h3 class="number">10</h3>

        </div>

        <div class="circles-container">
            <span class="dot dot1"></span>
            <span class="dot dot2"></span>
            <span class="dot dot3"></span>
            <span class="dot dot4"></span>
            <span class="dot dot5"></span>
            <span class="dot dot6"></span>
            <span class="dot dot7"></span>
            <span class="dot dot8"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="rewards-paragraph-container">
            <p class="rewards-paragraph">
                80% of the truck is painted!
                Order through the app 2 more times and get a free drink!
            </p>
        </div>
</div>


<?php include_once __DIR__ . '/_components/footer.php'; ?>