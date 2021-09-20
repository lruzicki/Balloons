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
    'muted'     => 1,
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
            <img loading="lazy" src="<?php getField('section_1_main_photo')?>" alt="Main guy - our pilot">
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
    dasdasd
</section>

<?php get_footer(); ?>
