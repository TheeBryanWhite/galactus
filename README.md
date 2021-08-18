# Introduction

**v9.1.0**

This project's goal is to provide a WordPress theme that standardizes the blocks used in our wireframes, as well as present an assortment of best practices to build and maintain client websites.

## Usage with client sites

This theme is a constantly evolving base theme. Duplicate it at fixed points in time for new client sites. Once it is duplicated, the client site is on a separate development track, disconnected from the base theme. For example, the base theme might be duplicated for a client website at "version 8". Later, the base theme advances to "version 9" by adding an additional block, but the client site is not affected.

## Site setup checklist

1. Install and activate **Classic Editor** and **Advanced Custom Fields Pro** plugins.
2. Replace all references in the Galactus theme code to the new client name.
	1. `Galactus`
	2. `galactus`
3. Generate new favicons with the associated Sketch file.
	3. Save all favicon images to the `/blocks/favicon/` folder.
	2. Manually generate and include `favicon.ico` in the site root for old versions of Internet Explorer.
	3. Update the `$themeColorHex` variable in `/blocks/favicon/index.php`.
4. Replace the `screenshot.png` file with client logo.

## General structure

The theme root contains the WordPress files required to respond to requests, e.g. `page.php`, `archive-events.php`, `404.php`. They serve as routers; they catch all requests, find all the necessary variables, and pull in the required template.

The theme root contains the following folders.

- `/blocks` contains site-specific reusable parts. Each block folder contains all the JS, SASS, and images necessary for the default representation.
- `/global` contains site-specific styles and branding configuration.
- `/inc` contains php files that are included by the theme's `functions.php`.
- `/node_modules` is populated by NPM, and should not be edited manually.
- `/templates` contains site-specific page templates.
- `/vendor` is for manually-placed third-party scripts and styles.

## Global styles

Site styles are compiled with the `gulp sass` command. When the command is run, the following files are processed, in order:

1. `style.scss`, which imports all the files below.
2. `/global/branding.scss` This file has the main project branding details, such as breakpoint sizes, fonts, and colors.
3. `/global/defaults.scss` This file has boilerplate resets.
4. All block styles.
5. All template styles.

## Breakpoints and screen widths

Each block and template can use SASS breakpoint variables for the three target screen width ranges: mobile, tablet, and desktop. The browser widths that trigger the breakpoints are configurable in the `/global/branding.scss` file, and are set to the following defaults:

- Mobile - meant for small screens
- Tablet - meant for medium screens
- Desktop - meant for large screens
- Wide - rarely-used helper to apply styles on wide screens

The maximum site content width is also configurable in `/global/branding.scss`.

## Serialized content

Serialized content are collections of structured data, usually organized into a time order, or by categories. Blog posts are the obvious example. Other good ones are resources, solutions, and clients. **TODO: Formalize how serialized content is handled.**

## Fonts

Adding web fonts is easy. Use WordPress's native "enqueue" functions to add the appropriate font files in `/inc/enqueue.php`. Then, update the fonts used in `/global/branding.scss`.

## Plugins

The `/plugins` folder is not version controlled. Go ahead and experiment with plugins to your heart's content.

## Git

There is a Git repository set up in the root `/www` folder. The `.gitignore` is taken from WP Engine, and _excludes_ the core WordPress files and plugins. It also excludes the `/node_modules` folder, and a few generated files.

## Gulp

Gulp tasks do the heavy lifting of minifying SASS and JS, and running Livereload. The following tasks are defined:

- `gulp` runs all development build tasks and starts watching for changes.
- `gulp build` runs the final production build and compression tasks.

## Blocks

Every stackable area of the site is called a "block". Every page is made up of a list of blocks from top to bottom. They can be applied to templates either in code, or through a CMS, like WordPress with the ACF plugin. Since blocks are defined as basic PHP classes, it's relatively simple to instantiate new blocks, and even include blocks within blocks.

All files that support a block are placed into _one folder_, including HTML, images, scripts, and SASS. It should always be obvious which scripts and styles are being used for which purpose.

### Example instantiation and HTML rendering

```PHP
// Instantiate a new button.
$block = new Block\Button();

// Set values on the new button.
$block->setLabel('Download Now');
$block->setUrl('/download-whitepaper/');

// Render the HTML of the button to the page.
$block->render();
```

### To create a new block

1. The block titled `block-new` is a blank block, ready to be duplicated when starting work.
2. Namespace your new block, and its CSS.
3. Include the block's `index.php` file in the `block-loader.php` file.
5. All JS and styles in the block folder will be concatenated together, minified by the `gulp` command.
8. If the block has ACF fields, sync up the ACF-JSON fields in the WordPress dashboard.

### Favicon

This block is only added in code. It holds all markup and images for browser icons and tiles.

### Site header

The site header is only added by us in the code, not by the client in the CMS. It includes the WordPress "Primary Header Menu" and "Secondary Header Menu".

The Primary menu is the large main menu. It's designed to handle one level of drop-down menu items. To make a button-style highlighted link in the Primary Header Menu, add a `block-siteheader-item-highlight` class to the menu item.

To add a menu separator in the Primary menu, add a custom link with the title pattern "---Title Text".

The Secondary menu is the smaller menu above the Primary menu.

### Page header

The page header is only added by us in the code, not by the client in the CMS. It's a horizontal bar showing the WordPress page title.

### Text

The text block provides a full-width blank area to add HTML using the default WordPress WYSIWYG editor. The list of tags that have default styles are:

- Paragraphs `<p>`
- Headers `<h1>`... `<h6>`
- Bulleted & numbered lists `<ul>`, `<ol>`
- Quotes `<blockquote>`
- Links `<a href="">`
- Tables `<table>`

### Text Two Col

The text two col block is almost identical to the text block, but provides two WYSIWYG fields to be presented one next to the other.

### Hero

The hero block can function as the main element on a page, or can be shrunk down to the size of labeled page divider. The only required field is the title. The remaining fields are optional: subtitle, background image, icon image, button label, and button URL destination.

The hero block has a div called `block-hero-overlay`, that is commented out by default. It can be revelead to provide a color overlay above the background image, and below the text and button.

### Icon List

The icon list block allows for an arbitrary number of short text messages each with an associated icon image.

### Call to Action (CTA)

The CTA block has message text, and required button label and URL destination.

### Zig and Zag

The Zig and Zag blocks have a required image, and HTML message. They are meant to be stacked in groups, but can be used individually if desired.

### Three Up

The Three Up block takes three sets of image urls, HTML bodies, and button information.

### Divider and Spacer

These blocks are simply blank space and horizontal rule blocks to assist in block layout.

### Site footer

The site footer is only added by us in the code, not by the client in the CMS. The site footer is populated by three footer widgets to show text content, and lists of links.

The copyright line is called the "subfooter", and is hard-coded to show the current year, site title, and utility links.