<?php

function load_stylesheets() {
    wp_register_style('font-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap', array(), 1, 'all');
    wp_enqueue_style('font-poppins');

    wp_register_style('font-annie', 'https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap', array(), 1, 'all');
    wp_enqueue_style('font-annie');

    wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

?>