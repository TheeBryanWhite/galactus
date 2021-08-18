<?php
namespace Block;

class Newdefault
{
	private $title = 'Default block';
	private $subtitle;

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Return the formatted title.
	private function renderTitle()
	{
		return '<h1 class="block-new-title">' . $this->title . '</h1>';
	}

	// Return the formatted subtitle, if it exists.
	private function renderSubtitle()
	{
		if ($this->subtitle) {
			return '<h2 class="block-new-subtitle">' . $this->subtitle . '</h2>';
		} else {
			return null;
		}
	}

	// Return another block class.
	private function renderNew()
	{
		$new = new Newdefault();
		$new->setTitle($this->new_title);
		return $new->render();
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

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$title    = $this->renderTitle();
		$subtitle = $this->renderSubtitle();
		$new      = $this->renderNew();

		return <<<HTML
<section class="block-new">
	<div class="container">
		<div class="container-inner">
			<div class="block-new-layout">
				$title
				$subtitle
				$new
			</div>
		</div>
	</div>
</section>
HTML;
	}
}