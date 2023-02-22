<?php
include_once __DIR__ . '/../../app.php';
$page_title = 'Create menu Item';
include_once __DIR__ . '/../../_components/header.php';
?>
<?php include_once __DIR__ . '/../../_components/navbar.php'; ?>

<!-- <main class="main"> -->
    <div>
        <?php $title = 'Create Menu Item';?>
        <h1 class="text-center text-white"><?php echo $title; ?></h1>
    </div>

    <?php
    // get menu ietms data from database
    $query = 'SELECT * FROM menu';
    $result = mysqli_query($db_connection, $query);

    ?>

    <div>
        <div>
            <div>
                <div>
                    <h1>Create menu item</h1>
                </div>
            </div>
            <div>
                <div>
                    <div>
                    <div>
                        <form action="<?php echo site_url(); ?>/_includes/process-create-menu-item.php" method="POST">
                            <div class="block">
                                <label for="">Category</label>
                                <input type="text" name="menu_category">
                            </div>
                            <div class="block">
                                <label for="">Image</label>
                                <input type="text" name="images">
                            </div>
                            <div class="block">
                                <label for="">Name</label>
                                <input type="text" name="name">
                            </div>
                            <div class="block">
                                <label for="">Price</label>
                                <input type="text" name="price">
                            </div>
                            <div class="block">
                                <label for="">Description</label>
                                <input type="text" name="description">
                            </div>
                            <div class="block">
                                <label for="">Allergen Info</label>
                                <input type="text" name="allergen_info">
                            </div>
                            <div class="block">
                                <label for="">Nutritional Facts</label>
                                <input type="text" name="nutri_facts">
                            </div>
                            <div class="block">
                                <label for="">Dietary Restrictions</label>
                                <input type="text" name="diet_res">
                            </div>
                            <!-- <div class="block">
                                <label for="">Steps</label>
                                <textarea class="js-tinymce" name="steps" id="" cols="30" rows="10"></textarea>
                            </div> -->
                            <input class="btn btn-primary" type="submit" value="submit">
                        </form>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    </div>

<!-- </main> -->
<?php include_once __DIR__ . '/../../_components/footer.php'; ?>