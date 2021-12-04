<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Cooper
 */

get_header();
?>
<div class="container" style="padding-top:15vh">
<div class="row justify-content-center">
		<div class="col-md-10">
		<main id="primary" class="site-main">
	<h1 style="font-size:5rem" class="font-monospace text-white">404 :-(</h1>
	<p class="text-muted">HTTP ERROR 404</p>
	<p class="text-white">The page you requested may have been moved or deleted.</p>
	<p><a href="/" class="btn btn-outline-light my-3 btn-lg">Return Home</a></p>
		</main>
</div>
</div>
</div>

<?php
get_footer();
