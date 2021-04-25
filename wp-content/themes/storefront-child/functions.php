<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_rss' );
function theme_enqueue_rss() {

    //CDN
    wp_register_style( 'AOS_css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null );
    wp_register_script( 'AOS_script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null);

    

    //Ajout des styles
    wp_enqueue_style( 'AOS_css');
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), null);
    wp_enqueue_style( 'main-style', get_template(). '/style.css', array(), null);

    //Ajout du js
    wp_enqueue_script( 'AOS_script');
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/script.js', array(), '1.0.0', true );
}
