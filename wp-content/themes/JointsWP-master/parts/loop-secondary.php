<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<?php dimox_breadcrumbs(); ?>	

	<?php if ( !has_post_thumbnail() ) { ?>
	<header>
		<h1 class="black"><?php the_title(); ?></h1>
	</header>
	<?php } ?>
											
    <section class="entry-content" itemprop="articleBody">    	
    	
    	<?php if ( $post->post_content!=="" ) { ?>
    	
			<div class="row">
				<div class="medium-12 columns pad-bottom">		
					<?php the_content('',FALSE,''); ?>
				</div>
			</div>
			
		<?php }


		// check if the flexible content field has rows of data
		if( have_rows('secondary_page_layout') ):
		
		 	// loop through the rows of data
		    while ( have_rows('secondary_page_layout') ) : the_row();
		
				// get layout
				$layout = get_row_layout();// check current row layout
				
				// 1 Column Row Layout
		        if( get_row_layout() == '1-col-row' ):
		
					$col_fw = get_sub_field('full-width-col');
					
				?>
					<div class="row">
						<div class="medium-12 columns pad-bottom">
							<?php echo $col_fw; ?>
						</div>
					</div>
				<?php
					
		        endif;

				// 2 Column Row Layout
		        if( get_row_layout() == '2-col-row' ):
		
					$col_1 = get_sub_field('2col-1');
					$col_2 = get_sub_field('2col-2');
					
				?>
					<div class="row">
						<div class="medium-6 columns pad-bottom">
							<?php echo $col_1; ?>
						</div>
						<div class="medium-6 columns pad-bottom">
							<?php echo $col_2; ?>
						</div>
					</div>
				<?php
					
		        endif;
		
		    endwhile;
		
		else :
		
		    // no layouts found
		
		endif;

	    wp_link_pages(); ?>
	</section> <!-- end article section -->

<!-- Remove footer section for tags, categories & social buttons			
	<footer class="article-footer">
		
	</footer> <!-- end article footer 
						    
	<?php // comments_template(); ?>
-->
								
</article> <!-- end article -->