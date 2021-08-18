<?php
namespace Block;

class Threeup
{
	private $firstImageUrl;
	private $firstBody = '<h2>Lorem ipsum dolor sit amet</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa orci, consectetur et accumsan in, aliquet vitae sapien.</p>';
	private $firstButtonLabel;
	private $firstButtonUrl;
	private $secondImageUrl;
	private $secondBody = '<h2>Lorem ipsum dolor sit amet</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa orci, consectetur et accumsan in, aliquet vitae sapien.</p>';
	private $secondButtonLabel;
	private $secondButtonUrl;
	private $thirdImageUrl;
	private $thirdBody = '<h2>Lorem ipsum dolor sit amet</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa orci, consectetur et accumsan in, aliquet vitae sapien.</p>';
	private $thirdButtonLabel;
	private $thirdButtonUrl;

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Return the button, if the label and URL exist.
	private function renderButton($buttonLabel, $buttonUrl)
	{
		if (($buttonLabel) && ($buttonUrl)) {
			$button = new Button();
			$button->setLabel($buttonLabel);
			$button->setUrl($buttonUrl);
			return $button->render();
		} else {
			return null;
		}
	}

	// Return the image, if it exists.
	private function renderImage($imageUrl)
	{
		if ($imageUrl) {
			return '<img src="' . $imageUrl . '">';
		} else {
			null;
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Public methods for manipulation
	|--------------------------------------------------------------------------
	*/
	public function setFirstImageUrl($firstImageUrl) {$this->firstImageUrl = $firstImageUrl;}
	public function setFirstBody($firstBody) {if(!empty($firstBody)) {$this->firstBody = $firstBody;}}
	public function setFirstButtonLabel($firstButtonLabel) {$this->firstButtonLabel = $firstButtonLabel;}
	public function setFirstButtonUrl($firstButtonUrl) {$this->firstButtonUrl = $firstButtonUrl;}
	public function setSecondImageUrl($secondImageUrl) {$this->secondImageUrl = $secondImageUrl;}
	public function setSecondBody($secondBody) {if(!empty($secondBody)) {$this->secondBody = $secondBody;}}
	public function setSecondButtonLabel($secondButtonLabel) {$this->secondButtonLabel = $secondButtonLabel;}
	public function setSecondButtonUrl($secondButtonUrl) {$this->secondButtonUrl = $secondButtonUrl;}
	public function setThirdImageUrl($thirdImageUrl) {$this->thirdImageUrl = $thirdImageUrl;}
	public function setThirdBody($thirdBody) {if(!empty($thirdBody)) {$this->thirdBody = $thirdBody;}}
	public function setThirdButtonLabel($thirdButtonLabel) {$this->thirdButtonLabel = $thirdButtonLabel;}
	public function setThirdButtonUrl($thirdButtonUrl) {$this->thirdButtonUrl = $thirdButtonUrl;}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$image1  = $this->renderImage($this->firstImageUrl);
		$button1 = $this->renderButton($this->firstButtonLabel, $this->firstButtonUrl);
		$image2  = $this->renderImage($this->secondImageUrl);
		$button2 = $this->renderButton($this->secondButtonLabel, $this->secondButtonUrl);
		$image3  = $this->renderImage($this->thirdImageUrl);
		$button3 = $this->renderButton($this->thirdButtonLabel, $this->thirdButtonUrl);

		return <<<HTML
<section class="block-threeup">
	<div class="container">
		<div class="container-inner">
			<div class="block-threeup-layout">

				<div class="block-threeup-column-layout">
					<div class="block-threeup-image">$image1</div>
					<div class="block-threeup-body">$this->firstBody</div>
					<div class="block-threeup-button">$button1</div>
				</div>

				<div class="block-threeup-column-layout">
					<div class="block-threeup-image">$image2</div>
					<div class="block-threeup-body">$this->secondBody</div>
					<div class="block-threeup-button">$button2</div>
				</div>

				<div class="block-threeup-column-layout">
					<div class="block-threeup-image">$image3</div>
					<div class="block-threeup-body">$this->thirdBody</div>
					<div class="block-threeup-button">$button3</div>
				</div>

			</div>
		</div>
	</div>
</section>
HTML;
	}
}