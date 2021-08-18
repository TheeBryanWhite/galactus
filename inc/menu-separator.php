<?php

/**
 * Replaces items with '-' as title with li class="menu_separator".
 * Taken from https://wordpress.stackexchange.com/questions/189788/replacing-a-specific-menu-item
 */
function ecc_base_menu_separator($item_output, $item) {
	$separator = substr($item->title, 0, 3);
	if ('---' === $separator) {
		$label = substr($item->title, 3);
		return '<p class="block-siteheader-nav-separator">' . $label . '</p>';
	}
	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'ecc_base_menu_separator', 10, 2);