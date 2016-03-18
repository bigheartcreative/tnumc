<?php 
if(get_field('author_onoff'))
{ ?>
	<p class="byline author">
		By <?php the_author_posts_link(); ?>
	</p>	
<?php 
} ?>

<p class="byline post_info">
	<?php the_time('F j, Y') ?> | Nashville, TN
</p>