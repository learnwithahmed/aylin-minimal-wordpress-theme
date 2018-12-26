<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Custom Image Sizes
 * ------------------------------------------------------------------------
 * This file is for registering custom image
 * sizes for using as for thumbnails.
 */

if ( ! function_exists( 'vwde_register_thumbnails' ) ) {
	/**
	 * Registers theme's additional thumbnail sizes.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function vwde_register_thumbnails() {
		add_image_size( 'custom-thumbnail', 800, 600, true );
	}
}
add_action( 'after_setup_theme', 'vwde_register_thumbnails' );
