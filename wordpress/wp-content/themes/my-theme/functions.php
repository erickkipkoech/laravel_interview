<?php

function your_theme_enqueue_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    // Enqueue custom JavaScript file
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', ['jquery'], null, true);
    // Localize script to pass data from PHP to JavaScript
    wp_localize_script('main-js', 'appData', [
        'apiUrl' => 'http://localhost:5173/api'
    ]);
    // Enqueue custom CSS file
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');