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
	the_post(); 
	?>
<div class="container">
	<div class="row justify-content-center">
	<?php if ( has_post_format('image') ) { ?>
			<article class="col-md-6">
				<div class="bg-white p-3 mb-3">
				<main>
					<?php the_content(); ?>
				</main>
				<header>
						<h1 class="h5 pt-3 mb-0 text-dark"><?php the_title(); ?></h1>
						<p class="text-muted"><?php the_date(); ?></p>
				</header>
				</div>
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
		<?php } else { ?>
		<div class="col-md-8">
		<main id="primary" class="site-main">
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
			</main>
		</div>
		<?php }; endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>