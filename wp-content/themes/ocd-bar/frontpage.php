<?php 
/*
Template Name: Frontpage
Template Post Type: post, page, event
*/


get_header();
?>

<!-- Content -->
<main>

<?php 
    if(!wp_is_mobile()) {
        // Is Desktop
    ?>
    <!-- Desktop -->
    
        <!-- Full Height Video -->

        <!-- Events -->

        <!-- Weekly Deal / Image -->

        <!-- Gallery -->

    <?php 
        }
    else {
        // Is Mobile
    ?>
    <!-- Mobile --> 




    <?php } ?>
</main>


<?php
get_footer();