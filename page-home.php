<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cooper
 * 
 * Template Name: Home
 */

get_header();
?>
<div class="container">
	<main id="primary" class="site-main">
		<div class="intro h-card ">
			<div class="row justify-content-center">
				<div class="col-md-3 col-6">
					<img src="/wp-content/themes/cooper/images/avatar.jpg" alt="Mark Sutherland" class="avatar u-photo img-fluid" height="306" width="306" />
				</div>
				<div class="col-md-9">
					<h1 class="p-name pt-5 px-0 mx-0">Mark Sutherland</h1>
					<p class="p-note">Web Designer, Developer & Digital Creative</p>
					<ul class="nav nav-pills justify-content-center justify-content-md-start">
						<li class="nav-item"><a data-hint="Website" href="https://marksuth.dev" class="nav-link u-url u-uid" rel="me" title="Website"><i class="fa fa-globe"></i></a></li>
						<li class="nav-item"><a data-hint="Twitter" class="nav-link" href="https://twitter.com/marksuth" rel="me noopener" title="Twitter"><i class="fab fa-twitter"></i></a></li>
						<li class="nav-item"><a data-hint="GitHub" class="nav-link" href="https://github.com/marksuth" rel="me noopener" title="GitHub"><i class="fab fa-github"></i></a></li>
						<li class="nav-item"><a data-hint="Instagram" class="nav-link" href="https://instagram.com/marksuth" rel="me noopener" title="Instagram"><i class="fab fa-instagram"></i></a></li>
						<li class="nav-item"><a data-hint="Linkedin" class="nav-link" href="https://www.linkedin.com/in/marksuth" rel="me noopener" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="nav-item"><a data-hint="Flickr" class="nav-link" href="https://www.flickr.com/people/193011819@N05/" rel="me noopener" title="Flickr"><i class="fab fa-flickr"></i></a></li>
						<li class="nav-item"><a data-hint="Email" class="nav-link u-email" href="mailto:mark@marksuth.dev" rel="me" title="Email"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<?php
				// the query
				$the_query = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 5,
				));
				if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
						<article class="h-entry kind-<?php echo get_post_kind_slug(); ?>">
							<header>
								<span class="text-muted font-monospace"><a href="https://marksuth.dev/kind/<?php echo get_post_kind_slug(); ?>"><?php echo get_post_kind_slug(); ?></a> posted <relative-time datetime="<?php the_date('c'); ?>" day="numeric" month="long" year="numeric" class="text-muted">
										<time class="dt-published"><?php the_date(); ?></time>
									</relative-time></span><br>
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
						<hr />
					<?php endwhile;
					wp_reset_postdata();
				else : ?>
					<p><?php __('No Recent Posts', 'cooper'); ?></p>
				<?php endif; ?>
				<p class="text-end">
					<a href="/posts" class="btn btn-primary"><?php __('View All Posts', 'cooper'); ?> <i class="fa fa-chevron-right fa-fw"></i></a>
				</p>
			</div>
		</div>
	</main><!-- #main -->
</div>
<?php
get_footer();
