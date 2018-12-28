<?php
/**
 * ------------------------------------------------------------------------
 * Theme's CSS and JavaScript Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's scripts. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if ( ! function_exists( 'get_asset_hash_path' ) ) :
	/**
	* Use assets with hashed names.
	*
	* Matches a filename against a hash manifest and returns the hash file name if
	* it exists.
	*
	* @param  string $filename Original name of the file.
	* @return string $filename Hashed name version of a file.
	*/

	function get_asset_hash_path( $filename ) {

		$manifest_path = get_template_directory_uri() . '/build/manifest.json';

		if ( ! empty( $manifest_path ) ) {
				$request  = wp_remote_get( $manifest_path );
				$manifest = json_decode( wp_remote_retrieve_body( $request ) );

				if ( array_key_exists( $filename, $manifest ) ) {
						return '/build/' . $manifest->$filename;
				}
		}

		return $filename;
	}
endif;

if ( ! function_exists( 'aylin_register_scripts' ) ) :
	/**
	 * Registers theme's CSS and JavaScript scripts.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */

	function aylin_register_scripts() {

		// Enqueue the main Stylesheet.
		wp_enqueue_style('theme-css', get_stylesheet_directory_uri() . get_asset_hash_path( 'styles/main.css' ),  false, null);

		// fontawesome 5
		wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.5.0/css/all.css', array(), '5.5.0', 'all' );

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true );

		// Enqueue App custom scripts goes here
		wp_enqueue_script('theme-js', get_template_directory_uri() . get_asset_hash_path( 'scripts/main.js' ), ['jquery'], null, true);

		// Add the comment-reply library on pages where it is necessary
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}

	add_action( 'wp_enqueue_scripts', 'aylin_register_scripts' );
endif;
