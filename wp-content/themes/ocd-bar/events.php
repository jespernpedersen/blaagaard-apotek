<?php 
/*
Template Name: Events
Template Post Type: page
*/


get_header();
?>

<!-- Content -->
<main>
    <div class="container">
    <div class="page-info">
        <p><?php echo the_content(); ?></p>
        <div class="filter">
            Filter (WIP)
        </div>
    </div>
    <!-- All Events -->

    <!-- Query Info: 
        Category
        Title
        Date
        Button Link to Facebook
        Image

        Should sort by date first
    -->
    <section class="events">
                <?php 
                $posts = get_posts( array(
                    'post_type'      => 'event',
                    'order'          => 'DESC',
                    'orderby'        => 'meta_value',
                    'meta_key'       => 'event_date',
                    'meta_type'      => 'DATETIME',
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
</main>


<?php
get_footer();