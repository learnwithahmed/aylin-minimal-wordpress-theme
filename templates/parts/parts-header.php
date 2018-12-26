<?php
/**
 * <header> content with top-nav content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

$logo   = (string) get_template_directory_uri() . '/dist/images/icons/logo.svg';
?>

<header class="header">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( 'Back to homepage', 'vwde' ); ?>" rel="home">
		<img src="<?php echo $logo ;?>" alt="<?php bloginfo( 'name' ); ?>" />
	</a>

	<?php get_template_part( 'templates/nav/nav', 'top' ); ?>

	<?php get_search_form(); ?>
</header>
