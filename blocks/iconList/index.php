<?php
namespace Block;

class Iconlist
{
	private $title;
	private $listItems = [];

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

	public function addItem($image, $body)
	{
		$item = [];

		if (!empty($image)) {
			$item[0] = $image;
		} else {
			$item[0] = '';
		}

		if (!empty($body)) {
			$item[1] = $body;
		} else {
			$item[1] = '';
		}
		$this->listItems[] = $item;
	}

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Return the formatted title.
	private function renderTitle()
	{
		if ($this->title)
		{
			return '<h2 class="block-iconlist-title">' . $this->title . '</h2>';
		}
	}

	// Return the main list HTML.
	private function renderList()
	{
		// If there aren't any items, place placeholder content.
		if (count($this->listItems) == 0) {
			$this->listItems = [['', '<h3>Use heading 3 for item titles</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'],
			['', '<h3>Lorem ipsum dolor sit amet</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur adipiscing elit.</p>'],
			['', '<h3>Lorem ipsum dolor sit amet</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'],
			['', '<h3>Lorem ipsum dolor sit amet</h3><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing elit</p>']];
		}

		$listHtml = '<ul class="block-iconlist-list">';
		foreach($this->listItems as $listItem) {
			$listHtml .= '<li class="block-iconlist-item">';

			if ($listItem[0] !== '') {
				$listHtml .= '<img class="block-iconlist-image" src="' . $listItem[0] . '">';
			} else {
				$listHtml .= '<img class="block-iconlist-image" src="/wp-content/themes/galactus/blocks/iconlist/block-iconlist-image.png">';
			}

			$listHtml .= $listItem[1];
			$listHtml .= '</li>';
		}
		$listHtml .= '</ul>';

		return $listHtml;
	}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$title = $this->renderTitle();
		$list  = $this->renderList();

		return <<<HTML
<section class="block-iconlist">
	<div class="container">
		<div class="container-inner">
			$title
			$list
		</div>
	</div>
</section>
HTML;
	}
}