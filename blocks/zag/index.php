<?php
namespace Block;

class Zag
{
	private $body = '<h2>Lorem ipsum dolor sit amet consectetur.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa orci, consectetur et accumsan in, aliquet vitae sapien. Aenean interdum lacus dui, ac auctor justo eleifend ut. Donec eu egestas nisi. Nullam placerat vel justo a bibendum. Vestibulum sed dictum diam, eget commodo erat. Aenean a lacus est. Suspendisse commodo at libero vel euismod.</p>
		<p><a href="#">Lorem ipsum dolor</a></p>';
	private $imageUrl = '/wp-content/themes/galactus/blocks/zag/placeholder-large-landscape-dark.png';

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
<section class="block-zag">
	<div class="block-zag-layout">
		<div class="block-zag-body-layout">
			<div class="block-zag-body">
				$this->body
			</div>
		</div>
		<div class="block-zag-image-layout">
			<div class="block-zag-image" style="background-image: url($this->imageUrl);"></div>
		</div>
	</div>
</section>
HTML;
	}
}