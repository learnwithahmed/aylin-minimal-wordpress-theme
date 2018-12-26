<?php
/**
 * ------------------------------------------------------------------------
 * Theme's CSS and JavaScript Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's scripts. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */


if ( ! function_exists( 'vwde_register_scripts' ) ) :
	/**
	 * Registers theme's CSS and JavaScript scripts.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */

	function vwde_register_scripts() {

		// Enqueue the main Stylesheet.
		wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/dist/styles/main.css', array(), '2.10.4', false);

		// fontawesome 5
		wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.5.0/css/all.css', array(), '5.5.0', 'all' );

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true );

		// Enqueue App custom scripts goes here
		wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/scripts/main.js', array('jquery'), '2.10.4', true);

		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}

	add_action( 'wp_enqueue_scripts', 'vwde_register_scripts' );
endif;
