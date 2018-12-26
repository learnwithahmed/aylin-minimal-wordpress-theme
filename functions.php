<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Includes
 * ------------------------------------------------------------------------
 * The `function.php` file is should responsible only for including theme's
 * components. Your theme custom logic should be distributed
 * across separate files in the `/src` directory.
 */


	/* ---- Custom scripts  ---- */
	require_once( 'library/enqueue-scripts.php' );
	require_once( 'library/navs.php' );
	require_once( 'library/supports.php' );

	/* ---- Custom post types  ---- */
	require_once( 'library/custom-post-types.php' );
	require_once( 'library/thumbnails.php' );

	/** Create widget areas in sidebar and footer */
	require_once( 'library/widget-areas.php' );

	show_admin_bar(false); // To delete
