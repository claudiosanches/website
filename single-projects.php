<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

global $woo_options;

$settings = array(
	'thumb_single'       => 'true',
	'single_w'           => 200,
	'single_h'           => 200,
	'thumb_single_align' => 'alignright'
);

$settings = woo_get_dynamic_values( $settings );

?>

	<div id="content" class="col-full">

		<?php woo_main_before(); ?>

		<section id="main">

		<?php
			if ( have_posts() ) {
				$count = 0;
				while ( have_posts() ) {
					the_post();
					$count++;

					$github_url   = get_post_meta( $post->ID, '_github_url', true );
					$docs_url     = get_post_meta( $post->ID, '_docs_url', true );
					$download_url = get_post_meta( $post->ID, '_download_url', true );
		?>
			<article <?php post_class( 'post' ); ?>>
				<?php echo woo_embed( 'width=580' ); ?>
				<header <?php if ( $settings['thumb_single'] == 'true' && ! woo_embed( '' ) ) { ?> style="background-image: url(<?php echo woo_image( 'return=true&link=url' ); ?>); background-size: cover; background-position: center center;" <?php } ?>>
					<section id="projects-options" class="header-content">

						<h1><?php the_title(); ?></h1>
						<nav>
							<ul class="fix">
								<?php if ( $github_url ) : ?>
									<li>
										<a href="<?php echo esc_url( $github_url ); ?>" class="woo-sc-button silver">
											<span class="icon icon-github"><?php _e( 'View on Github', 'woothemes' ); ?></span>
										</a>
									</li>
								<?php endif; ?>
								<li>
									<a href="<?php echo esc_url( get_the_permalink( 234 ) ); ?>" class="woo-sc-button orange">
										<span class="icon icon-gift"><?php _e( 'Donate', 'woothemes' ); ?></span>
									</a>
								</li>
								<?php if ( $docs_url ) : ?>
									<li>
										<a href="<?php echo esc_url( $docs_url ); ?>" class="woo-sc-button custom">
											<span class="icon icon-doc"><?php _e( 'Documentation', 'woothemes' ); ?></span>
										</a>
									</li>
								<?php endif; ?>
								<?php if ( $download_url ) : ?>
									<li>
										<a href="<?php echo esc_url( $download_url ); ?>" class="woo-sc-button custom">
											<span class="icon icon-download"><?php _e( 'Download', 'woothemes' ); ?></span>
										</a>
									</li>
								<?php endif; ?>
							</ul>
						</nav>
						<?php the_excerpt(); ?>
					</section>
				</header>

				<section class="entry fix">
					<?php the_content(); ?>

					<?php if ( $download_url ) : ?>
						<p class="ac">
							<a href="<?php echo esc_url( $download_url ); ?>" class="woo-sc-button custom large">
								<span class="icon icon-download"><?php printf( __( 'Download &quot;%s&quot;', 'woothemes' ), get_the_title() ); ?></span>
							</a>
						</p>
					<?php endif; ?>

					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) ); ?>
				</section>

			</article><!-- .post -->

			<?php woo_subscribe_connect(); ?>

			<?php
				} // End WHILE Loop
			} else {
		?>
			<article <?php post_class(); ?>>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
			</article><!-- .post -->
		<?php } ?>

		</section><!-- #main -->

		<?php woo_main_after(); ?>

	</div><!-- #content -->

<?php get_footer(); ?>