<?php
/**
 * Theme - scripts
 *
 * @package   Auspicious
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/auspicious
 */

/**
 * Define namespace
 */
namespace Auspicious;
use Benlumia007\Backdrop\App;
use function Benlumia007\Backdrop\Mix\Manifest\asset;
/**
 * Enqueue Scripts and Styles
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
add_action( 'wp_enqueue_scripts', function() {
	/**
	 * Rather than enqueue the main stylesheet, we are going to enqueue sceen.css since all of the styles will
	 * go here. We only need parse the information for the Theme in style.css so that it can be activated.
	 */
	wp_enqueue_style( 'auspicious-screen', asset( 'assets/css/screen.css' ), null, null );
	wp_enqueue_script( 'auspicious-app', asset( 'assets/js/app.js' ), [ 'jquery' ], null, true );

	/**
	 * This allows users to comment by clicking on reply so that it gets nested.
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );

add_action( 'wp_enqueue_scripts', function() {
	$text_color = get_header_textcolor();
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $text_color ) {
		return;
	}
	$value      = display_header_text() ? sprintf( 'color: #%s', esc_html( $text_color ) ) : 'display: none;';
	$custom_css = "
		.site-branding .site-title a,
		.site-description {
			{$value}
		}
	";
	wp_add_inline_style( 'auspicious-screen', $custom_css );
} );

add_action( 'wp_enqueue_scripts', function() {
	$custom_image = esc_url( get_theme_mod( 'header_image', get_parent_theme_file_uri( '/public/images/header-image.jpg' ) ) );
	
	$custom_css = "      
		.site-header.header-image {
			background: url({$custom_image});
			background-attachment: fixed;
			background-position: center;
		}
	";
	wp_add_inline_style( 'auspicious-screen', $custom_css );
} );

add_action( 'enqueue_block_editor_assets', function() {
	wp_enqueue_style( 'auspicious-custom-fonts', get_parent_theme_file_uri( '/vendor/benlumia007/backdrop-googlefonts/assets/fonts/custom-fonts.css' ), array(), '1.0.0' );
} );