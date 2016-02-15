<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<?php dimox_breadcrumbs(); ?>
	
	<header>
		<h1 class="black"><?php the_title(); ?></h1>
	</header>
					
    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->


<!-- Remove footer section for tags, categories & social buttons			
	<footer class="article-footer">
		
	</footer> <!-- end article footer 
						    
	<?php // comments_template(); ?>
-->


</article> <!-- end article -->