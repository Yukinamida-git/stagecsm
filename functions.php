<?php
add_theme_support('post-thumbnails');

function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );

add_theme_support( 'custom-logo' );

function mon_css_perso() {
    wp_enqueue_style( 'Thème CSM', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'login_enqueue_scripts', 'mon_css_perso' );


// if ( ! function_exists( 'right_sidebar' ) ) {

//     // Register Sidebars
//     function right_sidebar() {
    
//         $args = array(
//             'id'            => 'right_sidebar',
//             'class'         => 'sidebar',
//             'name'          => __( 'ma barre latérale', 'text_domain' ),
//             'description'   => __( 'menu latéral', 'text_domain' ),
//         );
//         register_sidebar( $args );
    
//     }
//     add_action( 'widgets_init', 'right_sidebar' );
    
//     }