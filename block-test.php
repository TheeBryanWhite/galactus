<?php
/*
|--------------------------------------------------------------------------
| Manual block tester
|--------------------------------------------------------------------------
*/

// Load the block classes.
require_once('blocks/block-loader.php');
?>

<!DOCTYPE html>
<html lang="en-us" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Block Test</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/wp-content/themes/galactus/style.css">
	</head>
	<body>

		<?php
		$hero = new Block\Hero();
		echo $hero->render();

		$button1 = new Block\Button();
		$button1->setSize('small');
		$button1 = $button1->render();

		$button2 = new Block\Button();
		$button2->setSize('medium');
		$button2 = $button2->render();

		$button3 = new Block\Button();
		$button3->setSize('large');
		$button3 = $button3->render();
		?>

		<section>
			<div class="container">
				<div class="container-inner">
					<div class="layout" style="display: flex; flex-direction: row; min-height: 120px; justify-content: space-around; align-items: center; overflow: hidden;">
						<div><?php echo($button1); ?></div>
						<div><?php echo($button2); ?></div>
						<div><?php echo($button3); ?></div>
					</div>
				</div>
			</div>
		</section>

		<?php
		$threeUp = new Block\ThreeUp();
		$threeUp->setFirstImageUrl('/wp-content/themes/galactus/blocks/threeup/block-threeup-image.png');
		$threeUp->setFirstBody('<h2>This is a title</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><ul><li>Lorem ipsum dolor</li><li>Lorem ipsum dolor site amet</li><li>Lorem ipsum</li></ul>');
		$threeUp->setFirstButtonLabel('Download Now');
		$threeUp->setFirstButtonUrl('#');

		$threeUp->setSecondImageUrl('/wp-content/themes/galactus/blocks/threeup/block-threeup-image.png');
		$threeUp->setSecondBody('<h2>This is a title</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.</p>');
		$threeUp->setSecondButtonLabel('Download Now');
		$threeUp->setSecondButtonUrl('#');

		$threeUp->setThirdImageUrl('/wp-content/themes/galactus/blocks/threeup/block-threeup-image.png');
		$threeUp->setThirdBody('<h2>This is a title</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>');
		$threeUp->setThirdButtonLabel('Download Now');
		$threeUp->setThirdButtonUrl('#');
		echo $threeUp->render();

		$zig = new Block\Zig();
		echo $zig->render();

		$zag = new Block\Zag();
		echo $zag->render();

		$divider = new Block\Divider();
		$divider->setMargins(true);
		echo $divider->render();

		$cta = new Block\Cta();
		echo $cta->render();

		$textTwoCol = new Block\TextTwoCol();
		echo $textTwoCol->render();

		$iconList = new Block\IconList();
		$iconList->setTitle('This is the default List Icon block.');
		echo $iconList->render();

		echo $divider->render();

		$iconList = new Block\IconList();
		echo $iconList->render();

		$text = new Block\Text();
		echo $text->render();
		?>

	</body>
</html>