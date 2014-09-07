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

							<?php echo do_shortcode( '[contact-form]
								<select class="contact-form-subject-selector">
									<option value="">Quero entrar em contato com você porque...</option>
									<option value="woocommerce">Preciso de ajuda com o WooCommerce</option>
									<option value="plugin">Preciso de ajuda com um plugin seu</option>
									<option value="create-plugin">Represento uma empresa que tem alguma solução para e-commerce e quero integrar com o WooCommerce</option>
									<option value="hire">Quero contratar você para um projeto, mas não represento nenhuma empresa e/ou não tenho nenhuma solução para integrar com o WooCommerce</option>
									<option value="contact">Desejo apenas entrar em contato com você sobre qualquer outra coisa</option>
								</select>

								<div class="woo-sc-box note full no-display" data-target="woocommerce">Se você precisa de ajuda com o WooCommerce, eu recomendo utilizar o grupo <a href="https://www.facebook.com/groups/woocommerce.brasil/">WooCommerce Brasil</a>. Infelizmente fica muito complicado pra mim ajudar pessoas por e-mail. Além que utilizando o grupo é legal que sua dúvida pode ser a dúvida de outras pessoas e assim a resposta vai ajudar todo mundo :)</div>

								<div class="woo-sc-box note full no-display" data-target="plugin">Por favor, leia primeiro o guia de instalação e a FAQ do plugin. Eu me dedico muito para adicionar na FAQ de cada plugin a maior quantidade de dúvidas e respostas que eu consigo. Caso você já tenha feito isso e ainda esta com dúvidas, eu lhe peço para publicar sua dúvida no fórum do plugin no WordPress.org ou no Github, você vai encontrar esses fóruns na página do plugin no WordPress.org também :)</div>

								<div class="woo-sc-box note full no-display" data-target="create-plugin">Estou tentando fazer o máximo de integrações possíveis para o WooCommerce e agradeço desde já o seu interesse em me ter desenvolvendo. Já aviso que não pretendo cobrar nada para desenvolver, tudo que preciso é de acesso a documentação, API e uma conta no serviço. Além de autonomia para construir a integração da forma que eu julgar melhor. Desta forma fazemos uma parceria onde todo mundo vai ganhar, principalmente o usuário final.</div>

								<div class="woo-sc-box note full no-display" data-target="hire">Estou trabalhando exclusivamente para o <a href="http://woothemes.com/" target="_blank">WooThemes.com</a>. Mas você pode tentar contratar alguém para o seu projeto utilizando o <a href="http://oportunidades.wp-brasil.org/">http://oportunidades.wp-brasil.org/</a></div>

								<div class="contact-form-fields-wrap">[contact-field label="Nome" type="name" required="1"/][contact-field label="Email" type="email" required="1"/][contact-field label="Site" type="url"/][contact-field label="Assunto" type="text" required="1"/][contact-field label="Mensagem" type="textarea" required="1"/]</div>[/contact-form]' ); ?>
						</section>

					<?php endwhile; ?>

				<?php endif; ?>

			</article><!-- /#contact-page -->
		</section><!-- /#main -->

		<?php woo_main_after(); ?>

	</div><!-- /#content -->

<script>
	jQuery(document).ready(function($) {
		$( '.contact-form-subject-selector' ).on( 'change', function() {
			var reason = $( this ).val(),
				fields = $( '.contact-form .contact-form-fields-wrap' );

			$( '.contact-form .woo-sc-box.note' ).slideUp();
			fields.slideUp();

			if ( 'woocommerce' === reason ) {
				$( '.contact-form .woo-sc-box[data-target="woocommerce"]' ).slideDown();
			} else if ( 'plugin' === reason ) {
				$( '.contact-form .woo-sc-box[data-target="plugin"]' ).slideDown();
			} else if ( 'create-plugin' === reason ) {
				$( '.contact-form .woo-sc-box[data-target="create-plugin"]' ).slideDown();
				fields.slideDown();
			} else if ( 'hire' === reason ) {
				$( '.contact-form .woo-sc-box[data-target="hire"]' ).slideDown();
			} else if ( 'contact' === reason ) {
				fields.slideDown();
			}
		}).change();
	});
</script>

<?php get_footer(); ?>
