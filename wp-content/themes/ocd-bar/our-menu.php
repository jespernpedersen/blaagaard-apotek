<?php 
/*
Template Name: Menu
Template Post Type: page
*/


get_header();
?>

<!-- Content -->
<main>
    <div class="container">
        <div class="page-info">
            <p><?php echo the_content(); ?></p>
        </div>

        <div class="featured-banner bordered-grid">
            <div class="banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); ">
                <?php echo get_field("offer"); ?>
            </div>
        </div>

        <div class="grid grid-2 menu">
            <!-- Beer -->
            <div class="grid-large menu beer-menu bordered-grid">
                <h2><?php echo get_field("beer_title"); ?></h2>
                <?php echo get_field("menu_beer"); ?>
            </div>
            <!-- Wine -->
            <div class="wine-menu menu bordered-grid">
                <h2><?php echo get_field("wine_title"); ?></h2>
                <?php echo get_field("menu_wine"); ?>
            </div>

            <!-- Third Category -->
            <div class="misc menu bordered-grid">
                <h2><?php echo get_field("misc_title"); ?></h2>
                <?php echo get_field("menu_misc"); ?>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();