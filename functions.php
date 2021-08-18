<?php

/*
|--------------------------------------------------------------------------
| Set up theme.
|--------------------------------------------------------------------------
*/
require(dirname( __FILE__ ) . '/inc/setup.php');

/*
|--------------------------------------------------------------------------
| Add custom menu seperator.
|--------------------------------------------------------------------------
*/
require(dirname( __FILE__ ) . '/inc/menu-separator.php');

/*
|--------------------------------------------------------------------------
| Register widget area.
|--------------------------------------------------------------------------
*/
require(dirname( __FILE__ ) . '/inc/widgets.php');

/*
|--------------------------------------------------------------------------
| Enqueue global styles and scripts.
|--------------------------------------------------------------------------
*/
require(dirname( __FILE__ ) . '/inc/enqueue.php');

/*
|--------------------------------------------------------------------------
| Load the block classes.
|--------------------------------------------------------------------------
*/
require(dirname( __FILE__ ) . '/blocks/block-loader.php');

/**
 * Enqueue blk-logoslider styles and scripts.
 */
//require(dirname( __FILE__ ) . '/inc/enqueue-blk-logoslider.php');

/**
 * Enqueue blk-slideshow styles and scripts.
 */
//require(dirname( __FILE__ ) . '/inc/enqueue-blk-slideshow.php');