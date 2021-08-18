<?php
namespace Block;

class Divider
{
	private $hasMargins = false;

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/
	private function renderMarginClass($margins)
	{
		if ($margins) {
			return 'block-divider-hasmargins';
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Public methods for manipulation
	|--------------------------------------------------------------------------
	*/
	public function setMargins($margins)
	{
		if ($margins) {
			$this->hasMargins = true;
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$class = $this->renderMarginClass($this->hasMargins);

		return <<<HTML
<section class="block-divider $class">
	<div class="container">
		<div class="container-inner">
		</div>
	</div>
</section>
HTML;
	}
}