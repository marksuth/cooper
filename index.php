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
		<div class="col-md-10">
			<header>
				<h1 class="page-title py-5">Recent Posts</h1>
			</header>
			<main id="primary" class="my-3">
				<div class="row">
					<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();
						if (has_post_format('image')) {
					?>
							<div class="col-4 p-1">
								<div class="bg-white p-1 text-dark">
									<a href="<?php the_permalink(); ?>">
										<?php the_content(); ?>
									</a>
									<div class="text-dark small">
										<?php the_tags('<i class="fa fa-fw fa-tags"></i> ', ', '); ?></div>
									<div class="row">
										<div class="col-6"> <small class="text-muted">
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
							<article class="h-entry kind-<?php echo get_post_kind_slug(); ?>">
								<header>
									<span class="text-muted font-monospace"><a href="https://marksuth.dev/kind/<?php echo get_post_kind_slug(); ?>"><?php echo get_post_kind_slug(); ?></a> posted <relative-time datetime="<?php the_date('c'); ?>" day="numeric" month="long" year="numeric" class="text-muted">
											<time class="dt-published"><?php the_date(); ?></time>
										</relative-time></span>
									<br>
									<?php the_title('<h2 class="h4 pt-2 my-0 p-name"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
								</header>
								<main>

									<div class="pt-3 p-summary">
										<?php the_excerpt(); ?>

									</div>
								</main>
								<footer>
									<p class="text-end">
										<a href="<?php the_permalink(); ?>" class="btn btn-primary u-url">View Post ></a>
									</p>
								</footer>
							</article>

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
