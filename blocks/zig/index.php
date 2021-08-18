<?php
namespace Block;

class Zig
{
	private $body = '<h2>Lorem ipsum dolor sit amet consectetur.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa orci, consectetur et accumsan in, aliquet vitae sapien. Aenean interdum lacus dui, ac auctor justo eleifend ut. Donec eu egestas nisi. Nullam placerat vel justo a bibendum. Vestibulum sed dictum diam, eget commodo erat. Aenean a lacus est. Suspendisse commodo at libero vel euismod.</p>
		<p><a href="#">Lorem ipsum dolor</a></p>';
	private $imageUrl = '/wp-content/themes/galactus/blocks/zig/placeholder-large-landscape-dark.png';

	/*
	|--------------------------------------------------------------------------
	| Public methods for manipulation
	|--------------------------------------------------------------------------
	*/
	public function setBody($body)
	{
		if (!empty($body)) {
			$this->body = $body;
		}
	}

	public function setImageUrl($imageUrl)
	{
		if (!empty($imageUrl)) {
			$this->imageUrl = $imageUrl;
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		return <<<HTML
<section class="block-zig">
	<div class="block-zig-layout">
		<div class="block-zig-body-layout">
			<div class="block-zig-body">
				$this->body
			</div>
		</div>
		<div class="block-zig-image-layout">
			<div class="block-zig-image" style="background-image: url($this->imageUrl);"></div>
		</div>
	</div>
</section>
HTML;
	}
}