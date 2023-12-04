<?php

function cxllective_load_scripts()
{
    wp_enqueue_style('cxllective-css', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('cxllective-scss', get_template_directory_uri() . '/src/styles/style.css', array(), '0.1', 'all');
}
add_action('wp_enqueue_scripts', 'cxllective_load_scripts');
