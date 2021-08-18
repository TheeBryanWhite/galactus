<?php
namespace Block;

class Favicon
{
	/*
	|--------------------------------------------------------------------------
	| Main render method to return HTML
	|--------------------------------------------------------------------------
	*/
	public function render()
	{
		$faviconUri    = get_stylesheet_directory_uri() . '/blocks/favicon/';
		$themeColorHex = '#DE4E34';

		return <<<HTML
<link rel="apple-touch-icon" sizes="57x57" href="{$faviconUri}apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="76x76" href="{$faviconUri}apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="{$faviconUri}apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="{$faviconUri}apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="167x167" href="{$faviconUri}apple-touch-icon-167x167.png">
<link rel="apple-touch-icon" sizes="180x180" href="{$faviconUri}apple-touch-icon-180x180.png">
<link rel="icon" sizes="192x192" href="{$faviconUri}icon-hd.png">
<link rel="icon" sizes="128x128" href="{$faviconUri}icon.png">
<link rel="icon" type="image/png" href="{$faviconUri}favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="{$faviconUri}favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="{$faviconUri}favicon-96x96.png" sizes="96x96">
<link rel="mask-icon" href="{$faviconUri}safari-pinned-tab.svg" color="$themeColorHex">
<meta name="msapplication-TileColor" content="$themeColorHex">
<meta name="theme-color" content="$themeColorHex">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
HTML;
	}
}