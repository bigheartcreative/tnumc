<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
											
    <section class="entry-content" itemprop="articleBody">
    
		<div class="row">
			<?php the_content('',FALSE,''); ?>
		</div>

	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

<!--No Article Footer			
	<footer class="article-footer">
		
	</footer> <!-- end article footer 
						    
	<?php // comments_template(); ?>

No Article Footer-->
		
</article> <!-- end article -->