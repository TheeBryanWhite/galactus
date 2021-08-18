<?php
/* Template Name: Posts Template */
?>

<?php
/*
|--------------------------------------------------------------------------
| Collect all the variables needed to render the page.
|--------------------------------------------------------------------------
*/
// Custom template class.
add_filter('body_class', function($classes) {
	return array_merge($classes, array('template-posts'));
});

$pageheader_title = get_the_title();

$post_args = [
	'post_type'      => 'post',
	'posts_per_page' => 10,
	'paged'          => $paged
	];
$post_query = new WP_Query($post_args);

/*
|--------------------------------------------------------------------------
| Define the blocks composing the page.
|--------------------------------------------------------------------------
*/
$siteheader = new Block\Siteheader();

$pageheader = new Block\Pageheader();
$pageheader->setTitle($pageheader_title);

$text = new Block\Text();
$text->setBody('<p>template-posts is a work in progress...</p>');

$blocks = [
	$pageheader,
	$text
];

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
	/*
	|--------------------------------------------------------------------------
	| Render the collection of blocks.
	|--------------------------------------------------------------------------
	*/
	include(locate_template('blocks/block-renderer.php'));
	?>

</main>

<?php
echo $sitefooter->render();
?>

<?php
get_footer();