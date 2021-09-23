<!-- Template Name: Contact -->


<?php get_header(); ?>

<section class="main">
  <div class="contact">
    <div class="contact__top">
      <div class="active">
        <span>&#9814; Company</span>
      </div>
      <div>
      &#x2657; Contact
      </div>
      <div>
      &#x265F; Lorem
      </div>
      <div>
      &#x2662; Ipsum
      </div>
    </div>
    <div class="contact__indicator"></div>
    <div class="contact__body">
      <div class="active">
        <h2>Typical info</h2>
        </p>
        
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error neque saepe commodi blanditiis fugiat nisi aliquam ratione porro quibusdam in, eveniet accusantium cumque. Dolore officia reprehenderit perferendis quod libero omnis.</p>
      </div>
      <div>
        <h2>Contact us</h2>
        <p>Form blah blah blah</p>
      </div>
      <div>
        <h2>Lorem ipsum</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus exercitationem vero, id autem fugit assumenda a molestiae numquam at, quisquam cumque. Labore eligendi perspiciatis quia incidunt quaerat ut ducimus?</p>
      </div>
      <div>
        <h2>Lorem ipsum</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi minus exercitationem vero, id autem fugit assumenda a molestiae numquam at, quisquam cumque. Labore eligendi perspiciatis quia incidunt quaerat ut ducimus?</p>
      </div>
    </div>
  </div>
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