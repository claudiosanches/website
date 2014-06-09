<?php
/**
 * Website logo.
 *
 * @return string
 */
function woo_logo() {
	if ( is_home() || is_front_page() ) {
		echo '<a id="logo" href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'description' ) ) . '">' . get_avatar( get_option( 'admin_email' ), 200 ) . '</a>';
	}
}

/**
 * Social icons
 *
 * @return string
 */
function woo_display_social_icons() {
	$html = '';

	$html .= '<div id="connect">' . "\n";
	$html .= '<div class="social">' . "\n";

	$html .= '<a href="' . esc_url( 'http://twitter.com/claudiosmweb' ) . '" title="' . esc_attr__( 'Siga no Twitter', 'woothemes' ) . '" class="twitter"><span>' . esc_attr__( 'Siga no Twitter', 'woothemes' ) . '</span></a>' . "\n";
	$html .= '<a href="' . esc_url( 'http://github.com/claudiosmweb' ) . '" title="' . esc_attr__( 'Siga no GitHub', 'woothemes' ) . '" class="github"><span>' . esc_attr__( 'Siga no GitHub', 'woothemes' ) . '</span></a>' . "\n";
	$html .= '<a href="' . esc_url( 'http://profiles.wordpress.org/claudiosanches' ) . '" title="' . esc_attr__( 'Meus projetos no WordPress.org', 'woothemes' ) . '" class="wordpress"><span>' . esc_attr__( 'Meus projetos no WordPress.org', 'woothemes' ) . '</span></a>' . "\n";
	$html .= '<a href="' . esc_url( 'http://www.linkedin.com/in/claudiosmweb' ) . '" title="' . esc_attr__( 'Adicione no LinkedIn', 'woothemes' ) . '" class="linkedin"><span>' . esc_attr__( 'Adicione no LinkedIn', 'woothemes' ) . '</span></a>' . "\n";
	$html .= '<a href="' . esc_url( get_feed_link() ) . '" title="' . esc_attr__( 'Assinar Feed RSS', 'woothemes' ) . '" class="subscribe"><span>' . esc_attr__( 'Assinar Feed RSS', 'woothemes' ) . '</span></a>' . "\n";

	$html .= '</div>' . "\n";
	$html .= '</div>' . "\n";

	echo $html;
}
