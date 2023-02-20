

<?php

function wktAddThemeScripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() ); 
    // wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' )) {
        wp_enqueue_script( 'comment-reply' );
    }
}


// style css i style slidera
  function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'splide', get_template_directory_uri() . '/assets/js/splide-4.1.3/dist/css/splide.min.css' );
  }
  add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// splide js slider
function splidejs_sldiers() {
    wp_enqueue_script('cool-sliders', get_stylesheet_directory_uri() . '/assets/js/splide-4.1.3/dist/js/splide.min.js');
    wp_enqueue_script('double-sliders', get_stylesheet_directory_uri() . '/assets/js/twoslide.js', [], false, true);
  }
  add_action('wp_enqueue_scripts', 'splidejs_sldiers');


// ustawienia loga
function rekrutacjaCustomLogoSetup() {
    $args = [
        'height' => 260,
        'width' => 260,
        'flex-width'    => false,
        'flex-height'    => true,
        'unlink-homepage-logo' => true
    ];

    add_theme_support('custom-logo', $args);
}

//menu
function rekrutacjaRegesterMenus() {
    register_nav_menus( [
        'main-menu' => 'Menu Główne',
        'footer-menu' => 'Menu w stopce'
    ] );
}

// add arrows to menu parent 
function oenology_add_menu_parent_class( $items ) {
 
 $parents = array();
 foreach ( $items as $item ) {
 if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
 $parents[] = $item->menu_item_parent;
 }
 }
 
 foreach ( $items as $item ) {
 if ( in_array( $item->ID, $parents ) ) {
 $item->classes[] = 'has-children';
 }
 }
 return $items;
}

add_filter( 'wp_nav_menu_objects', 'oenology_add_menu_parent_class' );

add_action( 'init', 'rekrutacjaRegesterMenus' );

add_action( 'after_setup_theme', 'rekrutacjaCustomLogoSetup');


//options page ACF
if( function_exists('acf_add_options_page') ) {

     acf_add_options_page(
        array(
         'page_title'    => 'Ustawienia witryny',
         'menu_title'    => 'Ustawienia witryny',
         'menu_slug'     => 'website-settings',
         'capability'    => 'edit_posts',
         'icon_url' => 'website-settings',
         'redirect' => false
     ));

     acf_add_options_sub_page(
        array(
         'page_title'    => 'Siatka linków',
         'menu_title'    => 'Siatka linków',
         'parent_slug'     => 'website-settings',
     ));

     acf_add_options_sub_page(
        array(
         'page_title'    => 'CTA',
         'menu_title'    => 'CTA',
         'parent_slug'     => 'website-settings',
     ));

     acf_add_options_sub_page(
        array(
         'page_title'    => 'Opinie',
         'menu_title'    => 'Opinie',
         'parent_slug'     => 'website-settings',
     ));

     acf_add_options_sub_page(
        array(
         'page_title'    => 'Stopka',
         'menu_title'    => 'Stopka',
         'parent_slug'     => 'website-settings',
     ));
    }

 