<?php
namespace Block;

class Cta
{
	private $message = 'CTA Block Message Lorem ipsum dolor sit amet.';
	private $buttonLabel;
	private $buttonUrl;

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Return the button, if the label and URL exist.
	private function renderButton()
	{
		$button = new Button();
		$button->setLabel($this->buttonLabel);
		$button->setUrl($this->buttonUrl);
		return $button->render();
	}

	/*
	|--------------------------------------------------------------------------
	| Public methods for manipulation
	|--------------------------------------------------------------------------
	*/
	public function setMessage($message)
	{
		if (!empty($message)) {
			$this->message = $message;
		}
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
		$button  = $this->renderButton();

		return <<<HTML
<section class="block-cta">
	<div class="container">
		<div class="container-inner">
			<div class="block-cta-layout">
				<p class="block-cta-message">$this->message</p>
				$button
			</div>
		</div>
	</div>
</section>
HTML;
	}
}