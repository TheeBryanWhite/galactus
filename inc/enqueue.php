<?php

function galactus_base_script() {
	// Get current theme version.
	$current_theme = wp_get_theme();
	$theme_version = $current_theme->get('Version');

	/**
	* Web font imports
	*/
	//wp_enqueue_style('galactus-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700');

	/**
	* Theme style imports
	*/
	wp_enqueue_style(
		'galactus-style',
		get_stylesheet_uri(), 
		false, 
		$theme_version
	);

	/**
	* Theme script imports
	*/
	wp_enqueue_script(
		'galactus-script', 
		get_template_directory_uri() . '/script.js', 
		array('jquery'), 
		$theme_version, 
		true
	);
}
add_action('wp_enqueue_scripts', 'galactus_base_script');

// Automatically enqueue the JS in the blocks folder for dev
function galactus_dynamic_js_enqueue() {
	foreach( glob( get_template_directory() . '/blocks/**/*.js' ) as $file ) {
		$fullPath = $file;
		$partialPath = str_replace(get_template_directory(), '', $fullPath);
		wp_enqueue_script( 
			$file, 
			get_template_directory_uri() . $partialPath,
			array('jquery'), 
			$theme_version, 
			true
		);
	}
}
add_action('wp_enqueue_scripts', 'galactus_dynamic_js_enqueue');

// Automatically enqueue the CSS in the blocks folder for dev
function galactus_dynamic_css_enqueue() {
	foreach( glob( get_template_directory() . '/blocks/**/*.css' ) as $file ) {
		$fullPath = $file;
		$partialPath = str_replace(get_template_directory(), '', $fullPath);
		wp_enqueue_style(
			uniqid(), 
			get_template_directory_uri() . $partialPath, 
			false, 
			$theme_version
		);
	}
}
add_action('wp_enqueue_scripts', 'galactus_dynamic_css_enqueue');