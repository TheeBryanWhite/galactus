<?php
/*
|--------------------------------------------------------------------------
| Collect all the variables needed to build the blocks.
|--------------------------------------------------------------------------
*/

// Prevent direct loading.
if (!defined('ABSPATH')) {die('-1');}
?>

<?php
if (have_rows('blocks_content')) {
	while (have_rows('blocks_content')) {
		the_row();

		if (get_row_layout() == 'block_text') {
			$block = new Block\Text();
			$block->setTitle(get_sub_field('block_text_title'));
			$block->setBody(get_sub_field('block_text_body'));
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_texttwocol') {
			$block = new Block\Texttwocol();
			$block->setTitle(get_sub_field('block_texttwocol_title'));
			$block->setBodyOne(get_sub_field('block_texttwocol_body_one'));
			$block->setBodyTwo(get_sub_field('block_texttwocol_body_two'));
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_cta') {
			$block = new Block\Cta();
			$block->setMessage(get_sub_field('block_cta_message'));
			$block->setButtonLabel(get_sub_field('block_cta_button_label'));
			$block->setButtonUrl(get_sub_field('block_cta_button_url'));
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_hero') {
			$block = new Block\Hero();
			$block->setTitle(get_sub_field('block_hero_title'));
			$block->setSubtitle(get_sub_field('block_hero_subtitle'));
			$block->setButtonLabel(get_sub_field('block_hero_button_label'));
			$block->setButtonUrl(get_sub_field('block_hero_button_url'));
			$block_image_id = get_sub_field('block_hero_image_id');

			if (!empty($block_image_id)) {
				$block_image_url = wp_get_attachment_url($block_image_id);
				$block->setImageUrl($block_image_url);
				$block_image_meta = wp_get_attachment_metadata($block_image_id);
				// Halve the image width for sharpness.
				$block_image_width = $block_image_meta['width'] / 2;
				$block->setImageWidth($block_image_width);
				$block_image_alt = get_post_meta($block_image_id, '_wp_attachment_image_alt', true);
				$block->setImageAlt($block_image_alt);
			}

			$block->setBackgroundImageUrl(get_sub_field('block_hero_background_image_url'));
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_zig') {
			$block = new Block\Zig();
			$block->setBody(get_sub_field('block_zig_body'));
			$block->setImageUrl(get_sub_field('block_zig_image_url'));
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_zag') {
			$block = new Block\Zag();
			$block->setBody(get_sub_field('block_zag_body'));
			$block->setImageUrl(get_sub_field('block_zag_image_url'));
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_threeup') {
			$block = new Block\Threeup();
			$block->setFirstImageUrl(get_sub_field('block_threeup_first_image_url'));
			$block->setFirstBody(get_sub_field('block_threeup_first_body'));
			$block->setFirstButtonLabel(get_sub_field('block_threeup_first_button_label'));
			$block->setFirstButtonUrl(get_sub_field('block_threeup_first_button_url'));
			$block->setSecondImageUrl(get_sub_field('block_threeup_second_image_url'));
			$block->setSecondBody(get_sub_field('block_threeup_second_body'));
			$block->setSecondButtonLabel(get_sub_field('block_threeup_second_button_label'));
			$block->setSecondButtonUrl(get_sub_field('block_threeup_second_button_url'));
			$block->setThirdImageUrl(get_sub_field('block_threeup_third_image_url'));
			$block->setThirdBody(get_sub_field('block_threeup_third_body'));
			$block->setThirdButtonLabel(get_sub_field('block_threeup_third_button_label'));
			$block->setThirdButtonUrl(get_sub_field('block_threeup_third_button_url'));
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_iconlist') {
			$block = new Block\Iconlist();
			$block->setTitle(get_sub_field('block_iconlist_title'));
			$items = get_sub_field('block_iconlist_items');
			if ($items) {
				foreach ($items as $item) {
					$block->addItem($item['block_iconlist_items_image'], $item['block_iconlist_items_body']);
				}
			}
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_spacer') {
			$block = new Block\Spacer();
			$blocks[] = $block;

		} else if (get_row_layout() == 'block_divider') {
			$block = new Block\Divider();
			$block->setMargins(get_sub_field('block_divider_margins'));
			$blocks[] = $block;
		}
	}
}

/*
|--------------------------------------------------------------------------
| Push onto the blocks array here manually to test new blocks.
|--------------------------------------------------------------------------
*/
// $block_new = new Block\Text();
// $blocks[] = $block_new;
// array_splice($blocks, 0, 0, [$block_new]);

/*
|--------------------------------------------------------------------------
| Collect information on which blocks are used.
|--------------------------------------------------------------------------
*/
// if (isset($blocks)) {
// 	$block_last = end($blocks);

// 	if (get_class($block_last) == 'Block\Text') {
// 		//
// 	}
// }