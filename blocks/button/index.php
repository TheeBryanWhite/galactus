<?php
namespace Block;

class Button
{
	private $label = 'Button';
	private $url   = '/';
	private $size  = 'medium';

	/*
	|--------------------------------------------------------------------------
	| Public methods for manipulation
	|--------------------------------------------------------------------------
	*/
	public function setLabel($label)
	{
		if (!empty($label)) {
			$this->label = $label;
		}
	}

	public function setUrl($url)
	{
		if (!empty($url)) {
			$this->url = $url;
		}
	}

	public function setSize($size)
	{
		if (!empty($size)) {
			$this->size = $size;
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
<a class="block-button block-button-$this->size" href="$this->url">$this->label</a>
HTML;
	}
}