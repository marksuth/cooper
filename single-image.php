<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cooper
 * 
 * Template post type: image
 */

get_header();
?>
<?php
while (have_posts()) :
	the_post(); ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
		<main id="primary" class="site-main">
			<article>
				<header>

				</header>
					<main>
						<div class="bg-white p-2">
					<?php the_content(); ?>
					<h1 class="entry-title py-5"><?php the_title(); ?></h1>
					<p class="text-muted"><?php the_date(); ?></p>
					</main>
					<footer>
						<p class="text-muted">
							<?php the_tags(); 
							
							wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__('Pages:', 'cooper'),
							'after'  => '</div>',
						)
					);
					?>
						</p>
					</footer>
				</div>
				</article>
			</main>
<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>