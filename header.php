<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cooper
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="apple-mobile-web-app-title" content="Mark Sutherland">
<meta name="application-name" content="Mark Sutherland">
<meta name="msapplication-TileColor" content="#214154">
<meta name="theme-color" content="#214154"></head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<nav class="navbar navbar-static-top navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">MARK SUTHERLAND</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	  <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="/posts/">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about/">About</a>
        <!-- </li>
		<li class="nav-item">
          <a class="nav-link" href="/contact/">Contact</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>