<?php
/**
 * The template for displaying archive pages
 */
?>

<?php
/*
|--------------------------------------------------------------------------
| Define the blocks composing the page.
|--------------------------------------------------------------------------
*/
$siteheader = new Block\Siteheader();

$hero = new Block\Hero();
$hero->setTitle('404 Page not found');

$blocks = [
	$hero
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