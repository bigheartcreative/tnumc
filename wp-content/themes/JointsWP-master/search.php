<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="row">
	
			<main id="main" class="large-12 medium-12 columns first" role="main">

				<?php dimox_breadcrumbs(); ?>

				<header>
					<h1 class="archive-title"><?php _e( 'Search Results', 'jointswp' ); ?></h1>
					<h2 class="search-query">You searched for: "<?php echo esc_attr(get_search_query()); ?>"</h2>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<div class="search-results">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="search-results_title"><?php the_title(); ?></a></h3>
						<?php get_template_part( 'parts/content', 'byline' ); ?>
						<?php the_excerpt(); ?>
					</div>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
				
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
			    <?php endif; ?>
	
		    </main> <!-- end #main -->
		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>