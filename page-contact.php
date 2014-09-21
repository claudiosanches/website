<?php
/**
 * Template Name: Contact Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

?>

	<div id="content" class="col-full">

		<?php woo_main_before(); ?>

		<section id="main">

			<article id="contact-page" class="page">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<header>
							<h1><?php the_title(); ?></h1>
						</header>

						<section class="entry">
							<?php the_content(); ?>

							<div class="woo-sc-box note full" style="display: none;" data-target="woocommerce">Se você precisa de ajuda com o WooCommerce, eu recomendo utilizar o grupo <a href="https://www.facebook.com/groups/woocommerce.brasil/">WooCommerce Brasil</a>. Infelizmente fica muito complicado pra mim ajudar pessoas por e-mail. Além que utilizando o grupo é legal que sua dúvida pode ser a dúvida de outras pessoas e assim a resposta vai ajudar todo mundo :)</div>

							<div class="woo-sc-box note full" style="display: none;" data-target="plugin">Por favor, leia primeiro o guia de instalação e a FAQ do plugin. Eu me dedico muito para adicionar na FAQ de cada plugin a maior quantidade de dúvidas e respostas que eu consigo. Caso você já tenha feito isso e ainda esta com dúvidas, eu lhe peço para publicar sua dúvida no fórum do plugin no WordPress.org ou no Github, você vai encontrar esses fóruns na página do plugin no WordPress.org também :)</div>

							<div class="woo-sc-box note full" style="display: none;" data-target="create-plugin">Estou tentando fazer o máximo de integrações possíveis para o WooCommerce e agradeço desde já o seu interesse em me ter desenvolvendo. Já aviso que não pretendo cobrar nada para desenvolver, tudo que preciso é de acesso a documentação, API e uma conta no serviço. Além de autonomia para construir a integração da forma que eu julgar melhor. Desta forma fazemos uma parceria onde todo mundo vai ganhar, principalmente o usuário final.</div>

							<div class="woo-sc-box note full" style="display: none;" data-target="hire">Estou trabalhando exclusivamente para o <a href="http://woothemes.com/" target="_blank">WooThemes.com</a>. Mas você pode tentar contratar alguém para o seu projeto utilizando o <a href="http://oportunidades.wp-brasil.org/">http://oportunidades.wp-brasil.org/</a></div>
						</section>

					<?php endwhile; ?>

				<?php endif; ?>

			</article><!-- /#contact-page -->
		</section><!-- /#main -->

		<?php woo_main_after(); ?>

	</div><!-- /#content -->

<script>
	jQuery(document).ready(function($) {
		$( '#g14-assunto' ).on( 'change', function() {
			var reason = $( this )[0].selectedIndex,
				fields = $( '#contact-form-14 div:eq(1), #contact-form-14 div:eq(2), #contact-form-14 div:eq(3), #contact-form-14 div:eq(4), #contact-form-14 .contact-submit' );

			$( '.entry .woo-sc-box.note' ).slideUp();
			fields.slideUp();

			if ( 1 === reason ) {
				$( '.entry .woo-sc-box[data-target="woocommerce"]' ).slideDown();
			} else if ( 2 === reason ) {
				$( '.entry .woo-sc-box[data-target="plugin"]' ).slideDown();
			} else if ( 3 === reason ) {
				// $( '.entry .woo-sc-box[data-target="create-plugin"]' ).slideDown();
				fields.slideDown();
			} else if ( 4 === reason ) {
				$( '.entry .woo-sc-box[data-target="hire"]' ).slideDown();
			} else if ( 5 === reason ) {
				fields.slideDown();
			}
		}).change();
	});
</script>

<?php get_footer(); ?>
