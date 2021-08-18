<?php

function ecc_base_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support('title-tag');

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu().
	register_nav_menus(array(
		'primary-header-menu' => esc_html__('Primary Header Menu'),
		'secondary-header-menu' => esc_html__('Secondary Header Menu'),
	));

	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	));

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'ecc_base_setup');

/**
 * Remove the wp-embed.js script from all pages. From https://wordpress.stackexchange.com/questions/211701/what-does-wp-embed-min-js-do-in-wordpress-4-4.
 */
function my_deregister_scripts(){
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

/**
 * Remove the default upload image sizes.
 */
function prefix_remove_default_images( $sizes ) {
	unset($sizes['small']); // 150px
	unset($sizes['medium']); // 300px
	unset($sizes['large']); // 1024px
	unset($sizes['medium_large']); // 768px
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'prefix_remove_default_images');

/*
|--------------------------------------------------------------------------
| Unqueue and enqueue jQuery to place it in the footer.
| https://stackoverflow.com/questions/35663927/wordpress-jquery-on-footer
|--------------------------------------------------------------------------
*/
function aeryondefense_jquery_footer() {
	wp_dequeue_script('jquery');
	wp_dequeue_script('jquery-core');
	wp_dequeue_script('jquery-migrate');
	wp_enqueue_script('jquery', false, array(), false, true);
	wp_enqueue_script('jquery-core', false, array(), false, true);
	wp_enqueue_script('jquery-migrate', false, array(), false, true);
}
add_action('wp_enqueue_scripts', 'aeryondefense_jquery_footer');