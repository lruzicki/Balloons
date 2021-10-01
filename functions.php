<?php
function strona_content() {
    if(have_posts()):while(have_posts()) : the_post();

     the_content();

     endwhile; endif;
}

?>

<?php
/*
 * Include scripts and styles from dist folder to wp_footer
*/
function include_scripts()
{
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/dist/main.js', '', '1.0', true);
    wp_enqueue_script('googleMap','//maps.googleapis.com/maps/api/js?key=AIzaSyAAWYDBsp9Aoot8wuRIaOdXRhi5bigiv9w', NULL, '1.0', true);
}
add_action('wp_footer', 'include_scripts');

add_theme_support('menus');

//Usuniecie marginu od admina
// add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

//Menus
register_nav_menus(

    array(
        'top-menu' => 'Top Menu',
        'mobile-menu' => 'Top Menu Mobile',
        
    )

);

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


//Get Field
function getField($fieldName, $option = null)
{
    if ($option == 'op') {
        echo get_field($fieldName, 'option');
    } else {
        echo get_field($fieldName);
    }
}
// Get sub field
function getSub($fieldName, $option = null)
{
    if ($option == 'op') {
        echo the_sub_field($fieldName, 'option');
    } else {
        echo the_sub_field($fieldName);
    }
}

//Photos - array
function aImage($field, $option = null)
{

    $image = get_field($field);
    if (!$image) {
        $image = get_sub_field($field);
    }

    if ($option == 'option') {
        $image = get_field($field, 'option');
    }

    echo $image['url'];
}

// if (function_exists('acf_add_options_page')) {
//     acf_add_options_page(array(
//         'page_title' => 'Ogólne',
//         'menu_title' => 'Ogólne',
//         'redirect' => false
//     ));
// }

if( function_exists('acf_add_options_page') ) {
    // Adds ACF Pro options page for Global Options
    $globalOptions = acf_add_options_page(array(
        'page_title'  => 'Global Options',
        'menu_title' => 'Global Options',
        'menu_slug'  => 'global-options',
        'capability' => 'edit_posts',
        'redirect'  => false
    ));
  
    // Adds ACF Pro sub options page for Header
    acf_add_options_sub_page(array(
      'page_title'  => 'Header Settings',
      'menu_title'  => 'Header',
      'parent_slug'   => $globalOptions['menu_slug'],
    ));
    // Adds ACF Pro sub options page for Footer
    acf_add_options_sub_page(array(
      'page_title'  => 'Footer Settings',
      'menu_title'  => 'Footer',
      'parent_slug'   => $globalOptions['menu_slug'],
    ));
  }

// DATE MODIFY - X days ago for posts

// GOOGLE MAPS ACF + api key

function balloons_post_type(){
    //Flights Post type
    register_post_type('flights', array(
        'supports' => array('title','editor','excerpt'),
        'rewrite' => array('slug' => 'flights'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Flights',
            'add_new_item' => 'Add Flight',
            'edit_item' => 'Edit Flight',
            'all_items' => 'All flights',
            'singular_name' => 'Flight' 
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));
}

add_action('init', 'balloons_post_type');

//api key

function balloonMapKey($api) {
    $api['key']='AIzaSyAAWYDBsp9Aoot8wuRIaOdXRhi5bigiv9w';
    return $api;
}

add_filter('acf/fields/google_map/api','balloonMapKey');

// maps query, like daddy pig, it must be out

// add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
// function add_my_post_types_to_query( $query ) {
//     if ( is_home() && $query->is_main_query() )
//         $query->set( 'post_type', array( 'post', 'flights' ) );
//     return $query;
// }
