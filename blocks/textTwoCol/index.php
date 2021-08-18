<?php
namespace Block;

class Texttwocol
{
	private $title;
	private $bodyOne = '<h2>Lorem ipsum dolor sit amet.</h2><p><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small></p>';
	private $bodyTwo = '<p>This is a default text block with demonstration content. <a href="#">This text is a link.</a> <strong>This text is bold.</strong> <em>This text is italic.</em> Consectetur adipiscing elit. Maecenas massa orci, consectetur et accumsan in, aliquet vitae sapien. Aenean interdum lacus dui, ac auctor justo eleifend ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	<p>Quisque consequat turpis non turpis tincidunt bibendum consequat non eros. Cras et sollicitudin leo, eu ullamcorper neque. Maecenas arcu ante, efficitur quis tristique vulputate, tempus ac ex. Etiam tempus vitae urna sed dignissim.</p>';

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Return the formatted title, if it exists.
	private function renderTitle()
	{
		if ($this->title) {
			return '<h2 class="block-texttwocol-title">' . $this->title . '</h2>';
		} else {
			return null;
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Public methods for manipulation
	|--------------------------------------------------------------------------
	*/
	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function setBodyOne($bodyOne)
	{
		if (!empty($bodyOne)) {
			$this->bodyOne = $bodyOne;
		}
	}

	public function setBodyTwo($bodyTwo)
	{
		if (!empty($bodyTwo)) {
			$this->bodyTwo = $bodyTwo;
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$title = $this->renderTitle();

		return <<<HTML
<section class="block-texttwocol">
	<div class="container">
		<div class="container-inner">
			<div class="block-texttwocol-layout">
				$title
				<div class="block-texttwocol-one">
					$this->bodyOne
				</div>
				<div class="block-texttwocol-two">
					$this->bodyTwo
				</div>
			</div>
		</div>
	</div>
</section>
HTML;
	}
}