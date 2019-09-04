<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

function loadAssets() {
	wp_enqueue_style('style', get_stylesheet_directory_uri().'/dist/style.css', '', '1.0', 'all');
	wp_enqueue_script('general', get_stylesheet_directory_uri().'/dist/index.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'loadAssets');

function registerMenus() {
  register_nav_menu('main', 'Main Menu');
}

//ACF
if(function_exists('acf_add_options_page')) {
  acf_add_options_page();
}
?>
