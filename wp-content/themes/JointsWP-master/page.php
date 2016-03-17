<?php get_header(); ?>
			
	<?php if ( has_post_thumbnail() ) { ?>
	<div id="feature" class="responsive-background" style="background-image:url(<?php background_featured_image(); ?>)">
		<div class="column row">
			<h1 class="secondary-header"><?php the_title(); ?></h1>
		</div>
	</div> <!-- end #feature -->
	<? } ?>
	
	<div id="content">

		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'secondary' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->		
	
	</div> <!-- end #content -->

<?php get_footer(); ?>