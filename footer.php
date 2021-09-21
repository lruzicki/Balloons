<?php wp_footer();?>

</body>

<nav class="footer">
    
    <div class="footer__menu">
        <div class="footer__menu--right">
            <?php 
            wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'bottom-bar'
                )
            );
            ?>
        </div>
    </div>
    <a href="https://github.com/lukruz" target="blank">    
        <div class="footer__media">
            <div class="footer__media--one">
               <img src="<?php echo get_field('icon_1','option'); ?>" alt="">
            </div>
            <div class="footer__media--one">
                &copy; Łukasz Ruzicki 2021
            </div>
        </div>
    </a>
    <a href="#">    
        <div class="footer__up">
            <div class="balloon">
                <div class="bottom"></div>
                <div class="basket"></div>
                <div class="rope"></div>
                <p><i class="arrow right"></i><i class="arrow right"></i><i class="arrow right"></i></p>
            </div>
        </div>
    </a>

                     

</nav>



</html>