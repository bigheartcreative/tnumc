<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar show-for-medium" id="top-bar-menu">
	<div class="row">
		<div class="top-bar-right float-right">
			top bar menu stuff
		</div>
	</div>
</div>
<div class="logo-bar" id="logo-bar-menu">
	<div class="logo-row row align-middle">
		<div class="large-4 columns">
			<a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/umclogo.png" alt="<?php bloginfo('name'); ?>" /></a>
		</div>
		<div class="large-8 columns text-right button-block">
			<a class="light-blue button" href="#">About Us</a>
			<a class="light-blue button" href="#">Communications</a>
			<a class="light-blue button" href="#">Forms</a>
		</div>
	</div>	
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>
<div class="show-for-medium nav-bar" id="nav-bar-menu">
	<div class="row">
		<div class="top-bar-left row float-left">
			<?php joints_top_nav(); ?>	
		</div>
	</div>	
</div>