<?php
namespace Block;

class Text
{
	private $title;
	private $body = '<p>This is a default text block with demonstration content. <a href="#">This text is a link.</a> <strong>This text is bold.</strong> <em>This text is italic.</em> Consectetur adipiscing elit. Maecenas massa orci, consectetur et accumsan in, aliquet vitae sapien. Aenean interdum lacus dui, ac auctor justo eleifend ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<blockquote><p>"This is an important quote. Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p><p><em>&mdash;Quote Source</em></p></blockquote>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas massa orci, consectetur et accumsan in, aliquet vitae sapien. Aenean interdum lacus dui, ac auctor justo eleifend ut. Donec eu egestas nisi. Nullam placerat vel justo a bibendum. Vestibulum sed dictum diam, eget commodo erat. Aenean a lacus est. Suspendisse commodo at libero vel euismod. Aenean id magna vel nunc pharetra interdum. Pellentesque molestie convallis sollicitudin. Ut ac dui mattis, posuere massa non, imperdiet nibh.</p>
		<ul><li>Bulleted list</li><li>Bulleted list</li><li>Bulleted list</li></ul>
		<ol><li>Numbered list</li><li>Numbered list</li><li>Numbered list</li></ol>
		<p>Quisque consequat turpis non turpis tincidunt bibendum consequat non eros. Cras et sollicitudin leo, eu ullamcorper neque. Maecenas arcu ante, efficitur quis tristique vulputate, tempus ac ex. Etiam tempus vitae urna sed dignissim.</p>
		<h2>Heading 2</h2>
		<h3>Heading 3</h3>
		<h4>Heading 4</h4>
		<h5>Heading 5</h5>
		<h6>Heading 6</h6>';

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Return the formatted title, if it exists.
	private function renderTitle()
	{
		if ($this->title) {
			return '<h2 class="block-text-title">' . $this->title . '</h2>';
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

	public function setBody($body)
	{
		if (!empty($body)) {
			$this->body = $body;
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
<section class="block-text">
	<div class="container">
		<div class="container-inner">
			<div class="block-text-layout">
				$title
				$this->body
			</div>
		</div>
	</div>
</section>
HTML;
	}
}