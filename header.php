<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<?php wp_head();?>


</head>
<body <?php body_class();?>>
<header class="header_main">
    <nav class="header_main__nav">
        
        <div class="header_main__nav__logo">
            <img loading="lazy" class="" src="http://localhost/baloons/wp-content/uploads/2021/09/party-balloon.png" alt="" >
            <div class="header_main__nav__logo">
            FLOWER BALLOONS
            </div>
            <!-- due to problems with ACF admin's side bar it's not possible to add extra fields and use get_Field(logo); -->
        </div>
        <div class="header_main__nav__menu">
            <div class="header_main__nav__menu--left">
            <?php 
                wp_nav_menu(
                        array(

                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-bar'
                        )
                    );
                ?>
            </div>

        </div>
        <!-- menu icon - mobile -->
        <div class="menu_mobile">
            <a href="#">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            </a>
        </div>

        


    </nav>
</header>   

