<?php
namespace Block;

class Pageheader
{
	private $title;

	/*
	|--------------------------------------------------------------------------
	| Public methods for manipulation
	|--------------------------------------------------------------------------
	*/
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		return <<<HTML
<header class="block-pageheader">
	<div class="container">
		<div class="container-inner">
			<h1 class="block-pageheader-title">$this->title</h1>
		</div>
	</div>
</header>
HTML;
	}
}