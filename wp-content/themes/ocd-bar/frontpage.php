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
        <div class="introduction-section">
        </div>

        <!-- Events -->
        <div class="events-section">
            <div class="container">
                <h2>Events</h2>
                <!-- Featured Events -->
                <section class="events">
                <?php 
                $posts = get_posts( array(
                    'post_type'      => 'event',
                    'order'          => 'DESC',
                    'orderby'        => 'meta_value',
                    'meta_key'       => 'is_post_featured',
                ));

                if( $posts ) {
                    foreach( $posts as $post ) {
                        ?>
                        <div class="event-item">
                            <div class="event-wrapper">
                                <div class="event-bg-image" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID);  ?>')">
                                    <div class="event-content-wrapper">
                                        <h3><?php echo get_the_title($post->ID); ?>
                                        <h4>Host <?php echo get_field("event_host"); ?></h4>
                                        <p>Every <timedate><?php echo get_field("event_date"); ?></timedate></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                </section>
                <a href="/events" title="Here you can see all our events" class="border-button">See All Events</a>
            </div>
        </div>

        <!-- Weekly Deal / Image -->
        <div class="weekly-deal-section">
            <div class="container">
                <div class="grid grid-2">
                    <!-- Weekly Deal -->
                    <div class="weekly-deal">
                        <div class="deal-inner">
                            <h3>Weekly Deal</h3>
                            <div class="deal">
                                <h4>Moscow Mule <br>with a twist</h4>
                                <p>This week's recipe was created by our bartendedr James - give it a try!</p>
                                <p class="price">40 -</p>
                            </div>
                        </div>
                        <a href="#" title="#" class="border-button">See Our Menu</a>
                    </div><!-- end .weekly-deal -->
                    <div class="deal-image">
                        <figure>
                            <img src="/bar/wp-content/uploads/2019/12/woocommerce-placeholder.png" title="#" alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery -->
        <div class="gallery-section">
            <div class="container">
                <h2>Gallery</h2>
                <?php echo do_shortcode('[gallery category="4"]') ?>   
                <a href="#" title="#" class="border-button">See Our Gallery</a>
            </div>
        </div>
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