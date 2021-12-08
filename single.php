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
						<h1 class="h5 pt-3 mb-0 text-dark p-name"><?php the_title(); ?></h1>
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
				<header>
					<h1 class="entry-title py-5 p-name"><?php the_title(); ?></h1>
					<p class="text-muted"><i class="fa fa-user"></i> <a rel="author" class="p-author h-card" href="https://marksuth.dev">Mark Sutherland</a> <i class="fa fa-calendar"></i> <time class="dt-published" datetime="<?php the_time( 'c' ); ?>"><?php the_date(); ?></time> </p>
				</header>
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
						<p class="font-monospace small text-muted">
						Permalink: <a class="u-url" href="<?php echo get_post_permalink(); ?>"><?php echo get_post_permalink(); ?></a>
					</footer>
				</article>
				<hr>
				<?php 
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</main>
		</div>
		<?php }; endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>