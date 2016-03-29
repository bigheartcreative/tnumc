<?php
/**
 * Detect plugins.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
	<?php dimox_breadcrumbs(); ?>	

	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php // the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer row">
		<!-- This will be for both categories and tags -->
		<div class="medium-9 columns">
			<p class="tags">
				<span class="tags-title"><?php _e( 'CATEGORIES: ', 'jointswp' ); ?></span><?php the_category(', '); ?>
			</p>
		</div>
		<div class="medium-3 columns">
			<?php if ( is_plugin_active( 'async-social-sharing/async-share.php' ) ) {		
				async_social_display();
			} ?>
		</div>
	</footer> <!-- end article footer -->

	<?php if ( is_plugin_active( 'disqus-comment-system/disqus.php' ) ) {		
		comments_template();
	} ?>
													
</article> <!-- end article -->