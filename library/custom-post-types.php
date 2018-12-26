<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Post Types
 * ------------------------------------------------------------------------
 * This file is for registering your theme post types. Custom post types
 * allow users to easily create and manage various types of content.
 */

if ( ! function_exists( 'products_post_type' ) ) {
	/**
	 * Registers a `Product` custom post type.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function products_post_type() {
		$lables = [
			'name'                  => _x( 'Products', 'Post Type General name', 'vwde' ),
			'singular_name'         => _x( 'Product', 'Post Type Singular name', 'vwde' ),
			'menu_name'             => _x( 'Products', 'Admin Menu', 'vwde' ),
			'name_admin_bar'        => _x( 'Product', 'Add New on Admin Bar', 'vwde' ),
			'archives'              => __( 'Products Archives', 'vwde' ),
			'attributes'            => __( 'Products Attributes', 'vwde' ),
			'update_item'           => __( 'Update', 'vwde' ),
			'add_new'               => _x( 'Add New', 'Product', 'vwde' ),
			'add_new_item'          => __( 'Add New Product', 'vwde' ),
			'new_item'              => __( 'New Product', 'vwde' ),
			'edit_item'             => __( 'Edit Product', 'vwde' ),
			'view_item'             => __( 'View Product', 'vwde' ),
			'view_items'            => __( 'View Products', 'vwde' ),
			'all_items'             => __( 'All Products', 'vwde' ),
			'search_items'          => __( 'Search Products', 'vwde' ),
			'parent_item_colon'     => __( 'Parent Products: ', 'vwde' ),
			'not_found'             => __( 'No products found.', 'vwde' ),
			'not_found_in_trash'    => __( 'No products found in Trash.', 'vwde' ),
			'featured_image'        => __( 'Featured Image', 'vwde' ),
			'set_featured_image'    => __( 'Set featured image', 'vwde' ),
			'remove_featured_image' => __( 'Remove featured image', 'vwde' ),
			'use_featured_image'    => __( 'Use as featured image', 'vwde' ),
			'insert_into_item'      => __( 'Insert into item', 'vwde' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'vwde' ),
			'items_list'            => __( 'Items list', 'vwde' ),
			'items_list_navigation' => __( 'Items list navigation', 'vwde' ),
			'filter_items_list'     => __( 'Filter items list', 'vwde' ),
		];

		$args = array(
			'label'                 => __( 'Product', 'vwde' ),
			'description'           => __( 'Post Type Description', 'vwde' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail'),
			'taxonomies'            => array(),
			'hierarchical'          => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-format-status',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'public'                => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			);

		register_post_type( 'product', $args );
	}
}
add_action( 'init', 'products_post_type' );

if (! function_exists( 'testimonials_post_type' ) ) {
		/**
	 * Registers a `Testimonial` custom post type.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function testimonials_post_type() {

		$labels = [
			'name'                  => _x( 'Testimonials', 'Post Type General Name', 'starter' ),
			'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'starter' ),
			'menu_name'             => __( 'Testimonials', 'starter' ),
			'name_admin_bar'        => __( 'Testimonials', 'starter' ),
			'archives'              => __( 'Testimonial Archives', 'starter' ),
			'attributes'            => __( 'Testimonials Attributes', 'starter' ),
			'parent_item_colon'     => __( 'Parent Testimonials:', 'starter' ),
			'all_items'             => __( 'All items', 'starter' ),
			'add_new_item'          => __( 'Add new', 'starter' ),
			'add_new'               => __( 'Add new', 'starter' ),
			'new_item'              => __( 'New item', 'starter' ),
			'edit_item'             => __( 'Edit', 'starter' ),
			'update_item'           => __( 'Update', 'starter' ),
			'view_item'             => __( 'View item', 'starter' ),
			'view_items'            => __( 'View items', 'starter' ),
			'search_items'          => __( 'Search items', 'starter' ),
			'not_found'             => __( 'Not found', 'starter' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'starter' ),
			'featured_image'        => __( 'Featured Image', 'starter' ),
			'set_featured_image'    => __( 'Set featured image', 'starter' ),
			'remove_featured_image' => __( 'Remove featured image', 'starter' ),
			'use_featured_image'    => __( 'Use as featured image', 'starter' ),
			'insert_into_item'      => __( 'Insert into item', 'starter' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'starter' ),
			'items_list'            => __( 'Items list', 'starter' ),
			'items_list_navigation' => __( 'Items list navigation', 'starter' ),
			'filter_items_list'     => __( 'Filter items list', 'starter' ),
		];

		$args = [
			'label'                 => __( 'Testimonial', 'starter' ),
			'description'           => __( 'Post Type Description', 'starter' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'author'),
			'taxonomies'            => array(),
			'hierarchical'          => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-format-status',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'public'                => false,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		];

		register_post_type( 'testimonials_post_type', $args );

	}
}
add_action( 'init', 'testimonials_post_type', 0 );
