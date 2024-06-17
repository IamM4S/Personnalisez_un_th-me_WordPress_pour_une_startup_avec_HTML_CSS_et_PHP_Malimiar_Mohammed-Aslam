<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
	if (is_user_logged_in() && $args->menu === 4) {
		$items .= '<li class="wt_menu_item_user_avatar"><a href="/my-account">' . get_avatar( $current_user->ID, 32 ) . '</a></li>';
	}
	return $items;
}