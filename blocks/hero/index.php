<?php
namespace Block;

class Hero
{
	private $title = 'Default hero block';
	private $subtitle;
	private $buttonLabel;
	private $buttonUrl;
	private $backgroundImageUrl;
	private $imageUrl;
	private $imageAlt;
	private $imageWidth = 600;

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Return the formatted title.
	private function renderTitle()
	{
		return '<h1 class="block-hero-title">' . $this->title . '</h1>';
	}

	// Return the formatted subtitle, if it exists.
	private function renderSubtitle()
	{
		if ($this->subtitle) {
			return '<h2 class="block-hero-subtitle">' . $this->subtitle . '</h2>';
		} else {
			return null;
		}
	}

	// Return the formatted image, if it exists.
	private function renderImage()
	{
		if ($this->imageUrl) {
			return '<h1 class="block-hero-image"><img src="' . $this->imageUrl . '" alt="' . $this->imageAlt . '" width="' . $this->imageWidth . '"></h1>';
		} else {
			return null;
		}
	}

	// Return the button, if the label and URL exist.
	private function renderButton()
	{
		if (($this->buttonLabel) && ($this->buttonUrl)) {
			$button = new Button();
			$button->setLabel($this->buttonLabel);
			$button->setUrl($this->buttonUrl);
			return $button->render();
		} else {
			return null;
		}
	}

	// Return the formatted inline styles, if there's a background image applied.
	private function renderInlineStyles()
	{
		if ($this->backgroundImageUrl) {
			return 'style="background-image: url(' . $this->backgroundImageUrl . ');"';
		} else {
			return 'style="background-size: 100% 100%;"';
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Public methods for manipulation
	|--------------------------------------------------------------------------
	*/
	public function setTitle($title)
	{
		if (!empty($title)) {
			$this->title = $title;
		}
	}

	public function setSubtitle($subtitle)
	{
		$this->subtitle = $subtitle;
	}

	public function setImageUrl($imageUrl)
	{
		$this->imageUrl = $imageUrl;
	}

	public function setImageAlt($imageAlt)
	{
		$this->imageAlt = $imageAlt;
	}

	public function setImageWidth($imageWidth)
	{
		if (!empty($imageWidth)) {
			$this->imageWidth = $imageWidth;
		}
	}

	public function setBackgroundImageUrl($backgroundImageUrl)
	{
		$this->backgroundImageUrl = $backgroundImageUrl;
	}

	public function setButtonLabel($buttonLabel)
	{
		$this->buttonLabel = $buttonLabel;
	}

	public function setButtonUrl($buttonUrl)
	{
		$this->buttonUrl = $buttonUrl;
	}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$title        = $this->renderTitle();
		$subtitle     = $this->renderSubtitle();
		$button       = $this->renderButton();
		$inline_style = $this->renderInlineStyles();
		$image        = $this->renderImage();

		return <<<HTML
<section class="block-hero" $inline_style>
	<div class="container">
		<div class="container-inner">
			$image
			$title
			$subtitle
			$button
		</div>
	</div>
</section>
HTML;
	}
}