<?php
/**
 * The template for displaying all single posts
 */
?>

<?php
/*
|--------------------------------------------------------------------------
| Collect all the variables needed to render the page.
|--------------------------------------------------------------------------
*/
$pageheader_title = get_the_title();

// The WordPress loop
if (have_posts()) {
	while (have_posts()) {
		the_post();
		$page_content = apply_filters('the_content', get_the_content());
	}
}

/*
|--------------------------------------------------------------------------
| Define the blocks composing the page.
|--------------------------------------------------------------------------
*/
$siteheader = new Block\Siteheader();

$pageheader = new Block\Pageheader();
$pageheader->setTitle($pageheader_title);

$text = new Block\Text();
$text->setBody($page_content);

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
	include(locate_template('blocks/block-renderer.php'));
	?>

</main>

<?php
echo $sitefooter->render();
?>

<?php
get_footer();