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
</div>


<?php include_once __DIR__ . '/_components/footer.php'; ?>