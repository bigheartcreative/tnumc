<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	<header class="article-header">
		<h2 class="search-result"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php // get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="articleBody">
		<!-- <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a> -->
		<?php the_excerpt(); ?>
		
	</section> <!-- end article section -->
						
	<footer class="article-footer row">
		<!-- This will be for both categories and tags -->
		<div class="medium-9 columns">
			<p class="tags">
				<span class="tags-title"><?php _e( 'CATEGORIES: ', 'jointswp' ); ?></span><?php the_category(', '); ?>
			</p>
		</div>
	</footer> <!-- end article footer -->				    						
</article> <!-- end article -->