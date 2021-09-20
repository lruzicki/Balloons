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

                     

</nav>



</html>