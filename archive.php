<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cooper
 */

get_header();
?>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
		<header class="py-5">
					<div class="entry-title">
			<?php
			the_archive_title( '<h1>', '</h1>' );
			?>
					</div>
			</header>
	<main id="primary" class="my-3">
		<div class="row">
			<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();
				if ( has_post_format('image') ) { 
				?>
				<div class="col-4 p-1">
					<div class="bg-white p-1 text-dark">
					<a href="<?php the_permalink(); ?>">
						<?php the_content(); ?>
					</a>
					<div class="text-dark small">
					<?php the_tags('<i class="fa fa-fw fa-tags"></i> ', ', '); ?></div>
						<div class="row">
<div class="col-6">						<small class="text-muted">
<relative-time datetime="<?php the_date('c'); ?>" day="numeric" month="long" year="numeric">
						<?php the_date(); ?>
					</relative-time>
				</small></div>
<div class="col-6 text-muted text-end small">
	<i class="fa fa-comment"> <?php comments_number('0', '1', '%'); ?></i>
</div>
</div>
												
					</a>
					</div>
				</div>

					<?php
				} else { ?>
						<article class="h-entry">
							<div class="post-surround">
							<header><?php the_title('<h2 class="h4 pt-2 my-0 p-name"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?></header>
							<main>
							<relative-time datetime="<?php the_date('c'); ?>" day="numeric" month="long" year="numeric" class="text-muted">
						<time class="dt-published"><?php the_date(); ?></time>
					</relative-time>
							<div class="py-3 p-summary">
								<?php the_excerpt(); ?>
								<p class="text-end">
									<a href="<?php the_permalink(); ?>" class="btn btn-info u-url">View Post ></a>
								</p>
							</div>
							</main>
							</div>
							<footer>
							<div class="d-flex">

								<div class="text-muted font-monospace small p-category">
									<?php the_tags('<i class="fa fa-fw fa-tags"></i> ', ', '); ?>
									<i class="fa fa-comment"> <?php comments_number('0', '1', '%'); ?></i>
								</div>
							</div>
							</footer>
						</article>
							<hr />
			<?php 
				};
		endwhile; ?>
		</div>
		<div class="text-end"><?php the_posts_pagination(); ?></div>


	</main><!-- #main -->
		</div>
</div>
</div>

<?php
get_footer();
