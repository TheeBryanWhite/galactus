<?php
/*
|--------------------------------------------------------------------------
| Render all the blocks requested.
|--------------------------------------------------------------------------
*/
?>

<?php
if (isset($blocks)) {
	foreach ($blocks as $block) {
		echo $block->render();
	}
}