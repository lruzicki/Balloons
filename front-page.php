<?php get_header(); ?>

<div class="home_mask"></div>
<div class="home_video">
    <div class="home_video--container">

<div class="video-background">
    <div class="video-foreground">
        <div class="video-container">
  <!-- <iframe src="https://www.youtube.com/embed/2b3iHFkHt84? &autoplay=1&mute=1&playlist=2b3iHFkHt84&loop=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe> -->
        
  <?php

// Load value.
$iframe = get_field('home_video');

// Use preg_match to find iframe src.
preg_match('/src="(.+?)"/', $iframe, $matches);
$src = $matches[1];

$iframe2 = get_field('home_video',false, false);
$linkurl = substr($iframe2,17);

// echo $linkurl;

// Add extra parameters to src and replcae HTML.
$params = array(
    'controls'  => 0,
    'hd'        => 1,
    'autohide'  => 1,
    'showinfo'  => 0,
    'mute'     => 1,
    'autoplay'  => 1,
    'playlist'  => $linkurl,
    'loop'      => 1
);
$new_src = add_query_arg($params, $src);
$iframe = str_replace($src, $new_src, $iframe);

// Add extra attributes to iframe HTML.
$attributes = 'frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"';
$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

// Display customized HTML.
echo $iframe;
?>

        </div>
    </div>
</div>

<!-- SECTION ONE -->

<section class="section-one">

    <div class="section-one__photo">
        <div class="section-one__photo--main">
            <img loading="lazy" src="<?php getField('section_1_photo')?>" alt="Main guy - our pilot">
            <div class="section-one__photo--main--left icon">
                <img loading="lazy" src="<?php getField('section_1_icon_1')?>" alt="Ikona bezpieczenstwa">
            </div>
            <div class="section-one__photo--main--right icon">
                <img loading="lazy" src="<?php getField('section_1_icon_2')?>" alt="Dobra zabawa">
            </div>
        </div>
    </div>

    <div class="section-one__text">
        <div class="section-one__text--title">
            <?php getField('section_1_title')?>
        </div>
        <div class="section-one__text--desc">
            <?php getField('section_1_desc')?>
        </div>

    </div>

</section>

<section class="section-two">

<?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );

            $query = new WP_Query($args);

            while($query->have_posts()) : $query->the_post();
        ?>
        <div class="section-two__one fade-in">
            <div class="section-two__one--imgbox">
                <img loading="lazy" src="<?php getField('post_photo') ?>" alt="#">
            </div>
            <div class="section-two__one--date">
                <?php  the_date();?>
            </div>
            <p class="section-two__one--title"><?php the_title(); ?></p>
            <div class="section-two__one--desc"><?php getField('post_wysiwyg')?>
            <?php the_content(); ?>
            </div>
            <button class="section-two__one--button">
                <p><i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i></p>
            </button>
            
            <div class="section-two__one__stats">
            <div class="section-two__one__stats--info">
                <?php if( have_rows('post_height') ):
                    while ( have_rows('post_height') ) : the_row();
                ?>
                <div class="section-two__one__stats--info--up">
                    <div class="section-two__one__stats--info--number"><?php getSub('number')?></div>
                    <div class="section-two__one__stats--info--metric"><?php getSub('metric')?></div>
                </div>
                <div class="section-two__one__stats--info--type"><?php getSub('type')?></div>
                <?php endwhile; endif ?>   
            </div>

            <div class="section-two__one__stats--info special">
                <?php if( have_rows('post_duration') ):
                    while ( have_rows('post_duration') ) : the_row();
                ?>
                <div class="section-two__one__stats--info--up">
                    <div class="section-two__one__stats--info--number"><?php getSub('number')?></div>
                    <div class="section-two__one__stats--info--metric"><?php getSub('metric')?></div>
                </div>
                <div class="section-two__one__stats--info--type"><?php getSub('type')?></div>
                <?php endwhile; endif ?>   
            </div>

            <div class="section-two__one__stats--info">
                <?php if( have_rows('post_capacity') ):
                    while ( have_rows('post_capacity') ) : the_row();
                ?>
                <div class="section-two__one__stats--info--up">
                    <div class="section-two__one__stats--info--number"><?php getSub('number')?></div>
                    <div class="section-two__one__stats--info--metric"><?php getSub('metric')?></div>
                </div>
                <div class="section-two__one__stats--info--type"><?php getSub('type')?></div>
                <?php endwhile; endif ?>   
            </div>
            </div>
        
        </div>
<?php endwhile; wp_reset_query();  ?>


</section>

<section class="brudnopis">
<div class="contact">
  <div class="contact__top">
    <div class="active">
    &#9814; Company
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
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error neque saepe commodi blanditiis fugiat nisi aliquam ratione porro quibusdam in, eveniet accusantium cumque. Dolore officia reprehenderit perferendis quod libero omnis.</p>
      <p>oooooooooooooo </p>
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
</section>

<?php get_footer(); ?>
