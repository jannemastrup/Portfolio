<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
     wp_enqueue_style('lato-font-css', 'http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext'); //Link til Lato font
     wp_enqueue_style('lora-font-css', 'https://fonts.googleapis.com/css?family=Lora&display=swap'); //Link til lora font
      wp_enqueue_style('font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); //Link til fontawesome
       wp_enqueue_style('min-animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'); //Link til animate CSS
      
      
 
    $parent_style = 'parent-style'; //Definition af parent-style
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); //Dette henter parent style Chique ned. 
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', //Dette henter child style.css ned efterfølgende.
        array( $parent_style ),
        wp_get_theme()->get('Version') //Dette henter versionnummeret.
    );
}