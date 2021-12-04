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
			<article class="col-md-6 h-entry">
				<div class="bg-white p-3 mb-3 row">
				<header div class="col-12 order-last">
						<h1 class="h5 mb-0 text-dark p-name"><?php the_title(); ?></h1>
						<p class="text-muted" class="dt-published"><?php the_date(); ?></p>
				</header>
				<main class="col-12 u-photo order-first">
					<?php the_content(); ?>
				</main>

				</div>
				<footer>
						<p class="text-muted p-category">
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
			<article class="h-entry">
				<header class="py-5">
					<div class="entry-title">
					<h1 class="p-name"><?php the_title(); ?></h1>
					</div>
					<div class="entry-date">
					<p class="dt-published"><?php the_date(); ?></p>
					</div>
				</header>
				<div class="post-surround">
					<main class="e-content">
					<?php the_content(); ?>
					</main>
					<footer>
						<p class="text-muted p-category">
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
				<hr>
				<div class="post-surround">
				<?php 
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
				</div>
			</main>
		</div>
		<?php }; endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>