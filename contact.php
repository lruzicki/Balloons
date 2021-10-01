<!-- Template Name: Contact -->


<?php get_header(); ?>

<section class="main">
  <div class="form">
    <?php $posts = get_field('contact_form');
    if( $posts ): 
      foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
        $cf7_id= $p->ID;
        echo do_shortcode( '[contact-form-7 id="'.$cf7_id.'" ]' ); 
      endforeach;
  endif; ?>
  </div>

</section>


<?php get_footer(); ?>