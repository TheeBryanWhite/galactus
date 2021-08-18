<?php
namespace Block;

class Siteheader
{
	/*
	|--------------------------------------------------------------------------
	| Private methods
	|--------------------------------------------------------------------------
	*/

	// Render the primary menu.
	private function renderMenuPrimary()
	{
		return wp_nav_menu(array('theme_location' => 'primary-header-menu', 'echo' => false));
	}

	// Render the secondary menu.
	private function renderMenuSecondary()
	{
		return wp_nav_menu(array('theme_location' => 'secondary-header-menu', 'echo' => false));
	}

	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$menuPrimary   = $this->renderMenuPrimary();
		$menuSecondary = $this->renderMenuSecondary();
		$homeurl       = home_url('/');
		$blogname      = get_bloginfo('name');
		$themeuri      = get_stylesheet_directory_uri();

		return <<<HTML
<header class="block-siteheader" role="banner">
	<div class="container">
		<div class="container-inner">
			<div class="block-siteheader-layout">
				<a class="block-siteheader-logolink" href="$homeurl" rel="home">
					<img class="block-siteheader-logo" src="$themeuri/blocks/siteheader/placeholder-logo.svg" alt="$blogname Logo">
				</a>

				<nav class="block-siteheader-nav block-siteheader-nav-hidden" role="navigation">
					$menuPrimary
					$menuSecondary
				</nav>

				<button class="block-siteheader-menutoggle" aria-controls="primary-menu" aria-expanded="false">Primary Menu</button>
			</div>
		</div>
	</div>
</header>
HTML;
	}
}