<!-- Template Name: Flight -->

<?php get_header(); ?>



<div class="flight-container">
    

<!-- MAP DISPLAY-->

<div class="acf-map">
    <?php 
    $args = array( 'post_type' => 'flights', 'posts_per_page' => 10 );
    $the_query = new WP_Query( $args ); 
    if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
    

    $mapLocation = get_field('location');?>
    <div class="marker" data-lat='<?php echo $mapLocation['lat'];?>' data-lng='<?php echo $mapLocation['lng'];?>' data-city='<?php the_field('main_city')?>'>

    <h3><?php the_title();?></h3>
    <p><?php echo $mapLocation['address']?></p>
    <p><?php the_content();?></p>
    </div>

    <?php endwhile; else: ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    
    <?php endif; ?>
</div>

</div>

<?php get_footer(); ?>
