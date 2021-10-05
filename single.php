<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cooper
 */

get_header();
?>
<?php
while (have_posts()) :
	the_post(); ?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<article>
				<header>
					<h1 class="entry-title py-5"><?php the_title(); ?></h1>
					<p class="text-muted"><?php the_date(); ?></p>
				</header>
					<main>
					<?php the_content(); ?>
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
				</article>
<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>