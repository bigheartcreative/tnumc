<?php
/*
Template Name: Home (Full Width, No Sidebar)
*/
?>

<?php get_header(); ?>
			
	
	<div id="feature" class="responsive-background" style="background-image:url(<?php background_featured_image(); ?>)">
		<div class="slider-container">
			<div class="column row">
				<?php layerslider(1) ?>
			</div>
		</div>
	</div> <!-- end #feature -->
	
	<?php if ( is_active_sidebar( 'homepage_callout' ) ) : ?>
	<div class="homepage-callout lower-shadow">
		<div class="row">
			<?php dynamic_sidebar( 'homepage_callout' ); ?>
		</div>
	</div>
	<?php endif; ?>

	<div id="content">

		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'home' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->		
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
