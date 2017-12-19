<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
  	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<header class="main-header clear" role="banner">

			<a href="<?php echo home_url(); ?>" class="main-header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="HyBuilt Logo">
				<p>HOME</p>
			</a>

			<button tabindex="0" class="main-header__hamburger">

				<div class="hamburger-lines">
					<span class="hamburger-lines__line"></span>
					<span class="hamburger-lines__line"></span>
				</div>

			</button>
		<?php /*
			<!-- nav -->
			<nav class="nav" role="navigation">
				<?php html5blank_nav(); ?>
			</nav>
			<!-- /nav -->
			*/ ?>

		</header>
		<!-- /header -->

		<a href="tel:<?php echo the_field('hybuilt-main-tel-no', 'option');?>" class="call-us">
			<i>
				<svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
					<path fill="#0F7394" d="M76.9,97.8c-3.3,0-6.7-0.9-9.6-2.9C42.8,78.7,21.3,57.2,5,32.7c-4.5-6.9-3.6-16,2.2-21.9l5.5-5.5
						c4.9-4.9,13-4.9,17.9,0l10,10c4.9,4.9,4.9,13,0,17.9l-1.3,1.3c7.9,9.3,16.8,18.3,26.1,26.1l1.3-1.3c2.4-2.4,5.6-3.7,8.9-3.7
						c3.4,0,6.6,1.3,8.9,3.7l10,10c4.9,4.9,4.9,13,0,17.9l-5.5,5.5C85.8,96.1,81.4,97.8,76.9,97.8z M21.7,8.1c-1.6,0-3.2,0.6-4.4,1.8
						l-5.5,5.5c-3.7,3.7-4.2,9.5-1.4,13.8C26.1,53,47,73.9,70.8,89.6c4.3,2.9,10.1,2.3,13.8-1.4l5.5-5.5c2.4-2.4,2.4-6.4,0-8.8l-10-10
						c-2.4-2.4-6.5-2.4-8.8,0L68,67.2c-1.2,1.2-3,1.3-4.3,0.2c-11.2-9.2-22-19.9-31.1-31.1c-1-1.3-1-3.1,0.2-4.3l3.3-3.3
						c2.4-2.4,2.4-6.4,0-8.8l-10-10C24.9,8.7,23.3,8.1,21.7,8.1z"/>
				</svg>
			</i>
			<p><?php the_field('hybuilt-main-tel-no', 'option');?></p>
		</a>
