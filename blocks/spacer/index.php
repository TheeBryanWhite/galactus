<?php
namespace Block;

class Spacer
{
	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		return <<<HTML
<section class="block-spacer"></section>
HTML;
	}
}