<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_rss' );
function theme_enqueue_rss() {

    //Ajout des styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main-style', get_template(). '/style.css');

    //Ajout du js
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/script.js', array(), '1.0.0', true );
}
