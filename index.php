<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */
?>

<?php
/*
|--------------------------------------------------------------------------
| Define the blocks composing the page.
|--------------------------------------------------------------------------
*/
$siteheader = new Block\Siteheader();
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
</main>

<?php
echo $sitefooter->render();
?>

<?php
get_footer();
