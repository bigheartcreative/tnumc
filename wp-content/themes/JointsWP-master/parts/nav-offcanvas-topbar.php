<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar show-for-medium" id="top-bar-menu">
	<div class="row">
		<div class="top-bar-right float-right">
			top bar menu stuff
		</div>
	</div>
</div>
<div class="row" id="logo-bar">
	<div class="logo-row row">
		<div class="top-bar-left float-left">
			<ul class="menu">
				<li class="menu-text"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
			</ul>
		</div>
		<div class="top-bar-right float-right show-for-small-only">
			<ul class="menu">
				<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
				<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="nav-bar" class="show-for-medium">
	<div class="row">
		<div class="top-bar-left row float-left">
			<?php joints_top_nav(); ?>	
		</div>
	</div>	
</div>