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
<div class="top-bar show-for-medium" id="top-bar-menu">
	<div class="row">
		<div class="top-bar-right float-right">
			<a class="float-right search-trigger" data-toggle="search-header">
				<svg class="search-icon Icon">
					<use xlink:href="#icon-search"></use>
				</svg>
			</a>
			<a class="language float-right" data-toggle="lang-dropdown">English</a>
			<ul class="dropdown-pane" id="lang-dropdown" data-dropdown data-hover="true">
				<li><a><?php _e( 'English', 'jointswp' ); ?></a></li>
				<li><a><?php _e( 'Korean', 'jointswp' ); ?></a></li>
				<li><a><?php _e( 'French', 'jointswp' ); ?></a></li>
				<li><a><?php _e( 'Portuguese', 'jointswp' ); ?></a></li>
				<li><a><?php _e( 'Spanish', 'jointswp' ); ?></a></li>
			</ul>
			<a class="first float-right"><?php _e( 'Staff', 'jointswp' ); ?></a>
			<a class="float-right"><?php _e( 'Menu', 'Districts', 'jointswp' ); ?></a>
			<a class="float-right"><?php _e( 'Menu', 'Bishop', 'jointswp' ); ?></a>
			<a class="float-right"><?php _e( 'Menu', 'Churches', 'jointswp' ); ?></a>
		</div>
	</div>
</div>
<div class="logo-bar show-for-medium <?php echo secondary_page_setting('opacity'); ?>" id="logo-bar-menu">
	<div class="logo-row row align-middle">
		<div class="medium-4 columns">
			<a class="logo" href="<?php echo home_url(); ?>">
				<svg class="logo-icon Icon">
					<use xlink:href="#icon-logo"></use>
				</svg>
			</a>
		</div>
		<div class="medium-8 columns text-right button-block show-for-medium">
			<a class="light-blue button" href="#"><?php _e( 'About Us', 'jointswp' ); ?></a>
			<a class="light-blue button" href="#"><?php _e( 'Communications', 'jointswp' ); ?></a>
			<a class="light-blue button" href="#"><?php _e( 'Forms', 'jointswp' ); ?></a>
		</div>
	</div>	
</div>
<div class="logo-bar row show-for-small-only <?php echo secondary_page_setting('opacity'); ?>" id="logo-bar-menu-mobile">
	<div class="small-7 columns">
		<a class="logo" href="<?php echo home_url(); ?>">
			<svg class="logo-icon Icon">
				<use xlink:href="#icon-logo"></use>
			</svg>
		</a>
	</div>
	<div class="small-5 columns">
		<div class="mobile-control-box">
			<a class="float-left search-trigger" data-toggle="search-header">
				<svg class="search-icon Icon">
					<use xlink:href="#icon-search"></use>
				</svg>
			</a>			
			<ul class="menu float-right">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a class="menu-trigger" data-toggle="off-canvas">
					<svg class="logo-menu Icon">
						<use xlink:href="#icon-menu"></use>
					</svg>
				</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="show-for-medium nav-bar" id="nav-bar-menu">
	<div class="row">
		<div class="top-bar-left row float-left">
			<?php joints_top_nav(); ?>	
		</div>
	</div>	
</div>