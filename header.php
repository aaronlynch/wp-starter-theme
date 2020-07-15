<!DOCTYPE html>
<html lang="en-US">

<head itemscope itemtype="https://schema.org/WebSite">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="referrer" content="always" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png" rel="icon" sizes="192x192" type="image/png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

	<!-- Site container -->
	<div class="site-container">

		<!-- Skip link -->
		<a href="#content" class="screen-reader-shortcut"> Skip to content</a>

		<!-- Header -->
		<header class="site-header" itemscope itemtype="https://schema.org/WPHeader">

			<!-- Logo -->
			<div class="site-logo" itemprop="headline">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>

			<!-- Navigation -->
			<nav class="site-nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'menu_class'     => 'site-menu',
						'menu_id'        => '',
					)
				); ?>
			</nav>

			<!-- Mobile Nav -->
			<div class="mobile-menu-toggle">
				<div class="toggle-container">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>

		</header>

		<!-- Site inner -->
		<div class="site-inner">

			<!-- Content wrapper -->
			<div class="content-wrap">
