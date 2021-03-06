<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
<div class="search-bar" id="search-header" data-toggler=".expanded">
	<form role="search" method="get" class="search-form" action="<?php bloginfo('url'); ?>">
		<div class="column row">
			<div class="input-group">
				<input type="search"class="search-field input-group-field" placeholder="Search TNUMC.org" value="" name="s" title="Search for:" type="search">
				<div class="input-group-button">
					<input type="submit" class="search-submit button" value="Search">
				</div>
			</div>
		</div>
	</form>
</div>
<div class="logo-bar row show-for-small-only <?php echo secondary_page_setting('opacity'); ?>" id="logo-bar-menu-mobile">
	<div class="small-5 columns">
		<a class="logo" href="<?php echo home_url(); ?>">
			<svg class="logo-icon Icon">
				<use xlink:href="#icon-logo"></use>
			</svg>
		</a>
	</div>
	<div class="small-5 small-offset-2 columns">
		<div class="mobile-control-box">
			<a href="#" class="float-left search-trigger" data-toggle="search-header">
				<svg class="search-icon Icon">
					<use xlink:href="#icon-search"></use>
				</svg>
			</a>	
			<ul class="menu float-right">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a href="#" class="menu-trigger" type="button" data-toggle="off-canvas">
					<svg class="menu-icon Icon">
						<use xlink:href="#icon-menu"></use>
					</svg>
				</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="top-bar show-for-medium" id="top-bar-menu">
	<div class="row">
		<div class="column top-bar-right">
			<a class="float-right search-trigger" data-toggle="search-header">
				<svg class="search-icon Icon">
					<use xlink:href="#icon-search"></use>
				</svg>
			</a>
			<div class="language float-right" id="google_translate_element"></div>
			
			<?php joints_topnav_links(); ?>

		</div>
	</div>
</div>
<div class="logo-bar show-for-medium <?php echo secondary_page_setting('opacity'); ?>" id="logo-bar-menu">
	<div class="logo-row row align-middle">
		<div class="medium-3 columns">
			<a class="logo" href="<?php echo home_url(); ?>">
				<svg class="logo-icon Icon">
					<use xlink:href="#icon-logo"></use>
				</svg>
			</a>
		</div>
		<div class="medium-9 columns text-right button-block show-for-medium">
			<?php if ( is_active_sidebar( 'header_feature' ) ) : ?>
				<?php dynamic_sidebar( 'header_feature' ); ?>
			<?php endif; ?>
		</div>
	</div>	
</div>
<div class="show-for-medium nav-bar" id="nav-bar-menu">
	<div class="row">
			<?php joints_top_nav(); ?>	
	</div>
</div>