<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

	<div id="content">

		<?php woo_main_before(); ?>

		<header class="archive-header">
			<h1><?php _e( 'Projects', 'woothemes' ); ?></h1>
		</header>

		<section id="main">

			<?php woo_loop_before(); ?>

			<?php if ( have_posts() ) : ?>

				<div id="projects-grid" class="fix">
					<?php while ( have_posts() ) : the_post(); ?>

						<article>
							<?php woo_image( 'width=360&height=180&class=thumbnail&alignment=aligncenter' ); ?>

							<header>
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							</header>

							<section class="entry">
								<?php the_excerpt(); ?>
							</section>

							<footer class="post-more">
								<a class="see-more" href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'Continue Reading', 'woothemes' ); ?>"><?php _e( 'See Details', 'woothemes' ); ?></a>
							</footer>
						</article>

					<?php endwhile; ?>
				</div>

			<?php else : ?>

				<article <?php post_class(); ?>>
					<p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
				</article><!-- /.post -->

			<?php endif; ?>

			<?php woo_loop_after(); ?>

			<?php woo_pagenav(); ?>

		</section><!-- /#main -->

		<?php woo_main_after(); ?>

	</div><!-- /#content -->

<?php get_footer(); ?>
