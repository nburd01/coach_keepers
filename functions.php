<?php

// Add app.css to head
function enqueue_theme_style()
{
    wp_enqueue_style('app', get_stylesheet_directory_uri() . '/assets/css/app.css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_style');
