<?php
/* Template Name: Blocks Template */
?>

<?php
/*
|--------------------------------------------------------------------------
| Collect all the variables needed to build the blocks.
|--------------------------------------------------------------------------
*/

// Custom template class.
add_filter('body_class', function($classes) {
	return array_merge($classes, array('template-blocks'));
});

/*
|--------------------------------------------------------------------------
| Define the blocks composing the page.
|--------------------------------------------------------------------------
*/
$siteheader = new Block\Siteheader();
$pageheader = new Block\Pageheader();
include(locate_template('blocks/block-acf-collector.php'));
$sitefooter = new Block\Sitefooter();
?>

<?php
/*
|--------------------------------------------------------------------------
| Render the page.
|--------------------------------------------------------------------------
*/
get_header();
?>

<?php
echo $siteheader->render();
?>

<main role="main">

	<?php
	include(locate_template('blocks/block-renderer.php'));
	?>

</main>

<?php
echo $sitefooter->render();
?>

<?php
get_footer();