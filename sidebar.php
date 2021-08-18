<?php
/**
 * The sidebar containing the main widget area
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<h2>sidebar.php</h2>

<aside>
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->