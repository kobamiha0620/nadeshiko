<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<?php $cat = get_the_category(); ?>

	<!-- ディスコグラフィー -->
    <?php if (in_category(array('discography','single','album','blueray', 'streaming', 'other'))): ?>
		<?php get_template_part( 'template-parts/category-discography' ); ?>

	<?php else: ?>

		<?php

		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );
			}
		}

		?>
	<?php endif; ?>

	
<?php #get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>


