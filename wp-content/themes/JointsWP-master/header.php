<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>
		<!--Super fast-loading SVG's -->
		<div style="display:none">
			<svg xmlns="http://www.w3.org/2000/svg">
				<symbol id="icon-search" viewBox="52.4 233.4 109.6 109.5">
					<path d="M159,328.2l-22.4-22.4c5.4-7.8,8.1-16.4,8.1-26 c0-6.2-1.2-12.2-3.6-17.8c-2.4-5.7-5.7-10.6-9.8-14.7c-4.1-4.1-9-7.4-14.7-9.8c-5.7-2.4-11.6-3.6-17.8-3.6s-12.2,1.2-17.8,3.6 c-5.7,2.4-10.6,5.7-14.7,9.8s-7.4,9-9.8,14.7c-2.4,5.7-3.6,11.6-3.6,17.8c0,6.2,1.2,12.2,3.6,17.8c2.4,5.7,5.7,10.6,9.8,14.7 s9,7.4,14.7,9.8s11.6,3.6,17.8,3.6c9.6,0,18.2-2.7,26-8.1l22.4,22.3c1.6,1.6,3.5,2.5,5.9,2.5c2.3,0,4.2-0.8,5.9-2.5 s2.5-3.6,2.5-5.9C161.5,331.8,160.7,329.9,159,328.2L159,328.2z M119.5,300.5c-5.7,5.7-12.6,8.6-20.6,8.6s-14.9-2.9-20.6-8.6 s-8.6-12.6-8.6-20.6s2.9-14.9,8.6-20.6c5.7-5.7,12.6-8.6,20.6-8.6s14.9,2.9,20.6,8.6s8.6,12.6,8.6,20.6S125.2,294.8,119.5,300.5 L119.5,300.5z"></path>
				</symbol>
			</svg>
		</div>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
		 	
					</header> <!-- end .header -->