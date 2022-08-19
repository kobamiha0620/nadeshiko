<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nadeshiko.css"
		type="text/css" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap"
		rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- js swiperの読み込み -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WDS9Z0L06X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WDS9Z0L06X');
</script>

</head>

<body <?php body_class(); ?>>

	<?php
		wp_body_open();
		?>

	<header id="site-header" class="header-footer-group">

		<div class="header-inner section-inner">

			<div class="header-titles-wrapper">

				<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"
					data-toggle-body-class="showing-menu-modal" aria-expanded="false"
					data-set-focus=".close-nav-toggle">
					<span class="toggle-inner">
						<span class="toggle-icon">
							<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
						</span>
					</span>
				</button><!-- .nav-toggle -->

			</div><!-- .header-titles-wrapper -->

			<div class="header-navigation-wrapper">

				<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

					<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal"
						data-toggle-body-class="showing-menu-modal" aria-expanded="false"
						data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
						</span>
					</button><!-- .nav-toggle -->

				</div><!-- .nav-toggle-wrapper -->





			</div><!-- .header-navigation-wrapper -->

		</div><!-- .header-inner -->


	</header><!-- #site-header -->

	<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );