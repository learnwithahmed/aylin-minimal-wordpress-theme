<?php
/**
	* ------------------------------------------------------------------------
	* Theme's Widget Areas
	* ------------------------------------------------------------------------
*/

if ( ! function_exists( 'sidebar_widgets' ) ) :
	function sidebar_widgets() {
		register_sidebar(
			array(
				'id'            => 'sidebar-widgets',
				'name'          => __( 'Sidebar widgets', 'code2gether' ),
				'description'   => __( 'Drag widgets to this sidebar container.', 'code2gether' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widget-left',
				'name'          => __( 'Footer widget left', 'code2gether' ),
				'description'   => __( 'Drag widgets to this footer container', 'code2gether' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'id'            => 'footer-widget-right',
				'name'          => __( 'Footer widget right', 'code2gether' ),
				'description'   => __( 'Drag widgets to this footer container', 'code2gether' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
			)
		);
	}

	add_action( 'widgets_init', 'sidebar_widgets' );
endif;
