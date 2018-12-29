<?php
/**
 * Template part for displaying sidebar content
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 */
?>

<aside class="sidebar">
	<div class="sidebar__item">
		<h3 class="sidebar__title"><?php echo esc_html( 'Categories', 'vwde' ); ?></h3>

		<?php get_template_part( 'inc/templates/sidebar/sidebar', 'categories' ); ?>
	</div>

	<div class="sidebar__item">
		<h3 class="sidebar__title"><?php echo esc_html( 'Pages', 'vwde' ); ?></h3>

		<?php get_template_part( 'inc/templates/sidebar/sidebar', 'pages' ); ?>
	</div>
</aside>
