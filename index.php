<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cooper
 */

get_header();
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<header>
				<h1 class="page-title py-5">Recent Posts</h1>
			</header>
	<main id="primary" class="my-3">
			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post(); ?>
				<div>
					<?php the_title('<h2 class="h4 py-2 my-0"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
					<div class="text-muted">
						<?php the_date('F j, Y'); ?>
					</div>


					<div class="py-3">
						<?php the_excerpt(); ?>
					</div>
					<div class="d-flex">
					<div class="text-muted font-monospace small">
						<?php the_tags('<i class="fa fa-fw fa-tags"></i> ', ', '); ?>
					</div>
					</div>
					<hr />
				</div>

			<?php endwhile; ?>
	</main><!-- #main -->
		</div>
</div>
<?php
get_footer();
