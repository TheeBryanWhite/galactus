<?php

/**
 * Registers the sitefooter widgets.
 */
function ecc_base_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__('Site Footer First', 'galactus'),
		'id'            => 'sitefooter-first',
		'description'   => esc_html__('Add widgets here.', 'galactus'),
		'before_widget' => '<section class="block-sitefooter-prefooter-widget-first">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="block-sitefooter-prefooter-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Site Footer Second', 'galactus'),
		'id'            => 'sitefooter-second',
		'description'   => esc_html__('Add widgets here.', 'galactus'),
		'before_widget' => '<section class="block-sitefooter-prefooter-widget-second">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="block-sitefooter-prefooter-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => esc_html__('Site Footer Third', 'galactus'),
		'id'            => 'sitefooter-third',
		'description'   => esc_html__('Add widgets here.', 'galactus'),
		'before_widget' => '<section class="block-sitefooter-prefooter-widget-third">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="block-sitefooter-prefooter-title">',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'ecc_base_widgets_init');