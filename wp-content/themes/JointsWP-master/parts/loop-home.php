<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
											
    <section class="entry-content" itemprop="articleBody">
    
		<div class="row">
			<div class="homepage-feature-posts medium-6 columns"><?php home_feature_list(); ?></div>
			<div class="medium-6 columns"><?php the_content(); ?></div>
		</div>

	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->