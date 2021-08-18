<?php
namespace Block;

class Sitefooter
{
	private $sidebarFirst;
	private $sidebarSecond;
	private $sidebarThird;

	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Render the first footer sidebar.
	private function renderSidebarFirst()
	{
		if (is_active_sidebar('sitefooter-first')) {
			ob_start();
			dynamic_sidebar('sitefooter-first');
			$sidebar = ob_get_contents();
			ob_end_clean();
			return $sidebar;
		}
	}

	// Render the second footer sidebar.
	private function renderSidebarSecond()
	{
		if (is_active_sidebar('sitefooter-second')) {
			ob_start();
			dynamic_sidebar('sitefooter-second');
			$sidebar = ob_get_contents();
			ob_end_clean();
			return $sidebar;
		}
	}

	// Render the third footer sidebar.
	private function renderSidebarThird()
	{
		if (is_active_sidebar('sitefooter-third')) {
			ob_start();
			dynamic_sidebar('sitefooter-third');
			$sidebar = ob_get_contents();
			ob_end_clean();
			return $sidebar;
		}
	}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$sidebarFirst  = $this->renderSidebarFirst();
		$sidebarSecond = $this->renderSidebarSecond();
		$sidebarThird  = $this->renderSidebarThird();
		$date          = date("Y");
		$blogname      = get_bloginfo('name');

		return <<<HTML
<footer class="block-sitefooter" role="contentinfo">
	<div class="block-sitefooter-prefooter">
		<div class="container">
			<div class="container-inner">
				$sidebarFirst
				$sidebarSecond
				$sidebarThird
			</div>
		</div>
	</div>

	<div class="block-sitefooter-subfooter">
		<div class="container">
			<div class="container-inner">
				<p class="block-sitefooter-subfooter-copyright">&copy; $date $blogname</p>
				<p class="block-sitefooter-subfooter-utilitylinks">
					<a href="#">Utility Link 1</a>
					<a href="#">Utility Link 2</a>
					<a href="#">Utility Link 3</a>
				</p>
			</div>
		</div>
	</div>
</footer>
HTML;
	}
}