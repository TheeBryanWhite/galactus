<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	$favicon = new Block\Favicon();
	echo $favicon->render();
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>