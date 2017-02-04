<?php

function startwordpress_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

?>