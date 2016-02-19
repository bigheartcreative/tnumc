<?php 

//Advanced Custom Fields: Populate news and resources custom select values (subcategories) dynamically
function acf_load_news_field_choices( $field ) {

	// get the values & establish class
	$idObj = get_category_by_slug('news'); 
	$id = $idObj->term_id;
	$cats = get_categories( array('hide_empty' => 0, 'parent' => $id, 'fields' => 'id=>name' ));
	
	//Establish the target array
	$field['choices'] = $cats;
	
	
    // return the field
    return $field;
}
add_filter('acf/load_field/name=news_feed', 'acf_load_news_field_choices');

function acf_load_resource_field_choices( $field ) {

	// get the values & establish class
	$idObj = get_category_by_slug('program-resources');
	$id = $idObj->term_id;
	$cats = get_categories( array('hide_empty' => 0, 'parent' => $id, 'fields' => 'id=>name' ));

	//Establish the target array
	$field['choices'] = $cats;
	
	
    // return the field
    return $field;
}
add_filter('acf/load_field/name=resource_feed', 'acf_load_resource_field_choices');


//function and shortcode for news list by advanced custom field (post category ID)
function news_feature_list() {
	global $post;
	
	if(get_field('news_feed')) {
		
		$category = get_field('news_feed');
		$args = array(
			'cat' => $category,
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order'   => 'DESC'
		);
	
		$feature_posts = new WP_Query( $args );
		
		// Start output buffer
		ob_start();
							
		if ( $feature_posts->have_posts() ) {
	
			while ( $feature_posts->have_posts() ) {
				$feature_posts->the_post();
							
				echo '<div class="item row">';
				echo '<div class="small-3 columns">';
	
				echo '<a class="feature-thumb" href="' . get_permalink() . '">';
				if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail( $feature_posts->ID, 'thumbnail' );
				} else {
					echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.png' . '" />';
				}
				echo '</a>';
				
				echo '</div><div class="small-9 columns"><h6 class="feature-list"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h6>';
				echo '<p><strong>' . get_the_date('M j, Y') . '</strong> - ';
				echo get_the_excerpt() . '</p>';
				echo '</div></div>';
			}

			/* Restore original Post Data */
			wp_reset_postdata();
			
		} else {
			echo '<div class="callout warning">';
			echo '<p>' . _e( 'Sorry, no news posts were found.', 'jointswp' ) . '</p>';
			echo '</div>';
		}
	
		// Collect output
		$feature_string = ob_get_contents();
			
		// End & return result string
		ob_end_clean();
		return $feature_string;
			

	} else {
	
	ob_start(); 
	
	echo '<div class="callout warning">';
	echo '<p>' . _e( "A news category does not seem to be set") . '</p>';
	echo '</div>';
	
	$warning = ob_get_contents();
	
	// End & return result string
	ob_end_clean();
	return $warning;
	
	}

}
add_shortcode('news-feature', 'news_feature_list' );

//function and shortcode for resources list by advanced custom field (post category ID)
function resources_feature_list() {	
	if(get_field('resource_feed')) {

		$category = get_field('resource_feed');
		$args = array(
			'cat' => $category,
			'posts_per_page' => 3,
			'orderby' => 'date',
			'order'   => 'DESC'
		);
	
		$feature_posts = new WP_Query( $args );
		
		// Start output buffer
		ob_start();
							
		if ( $feature_posts->have_posts() ) {
	
			while ( $feature_posts->have_posts() ) {
				$feature_posts->the_post();
							
				echo '<div class="item row">';
				echo '<div class="small-3 columns">';
	
				echo '<a class="feature-thumb" href="' . get_permalink() . '">';
				if ( has_post_thumbnail() ) {
					echo get_the_post_thumbnail( $feature_posts->ID, 'thumbnail' );
				} else {
					echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.png' . '" />';
				}
				echo '</a>';
				
				echo '</div><div class="small-9 columns"><h6 class="feature-list"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h6>';
				echo the_excerpt();
				echo '</div></div>';
			}

			/* Restore original Post Data */
			wp_reset_postdata();
			
		} else {
			echo '<div class="callout warning">';
			echo '<p>' . _e( 'Sorry, no resource posts were found.', 'jointswp' ) . '</p>';
			echo '</div>';
		}
	
		// Collect output
		$feature_string = ob_get_contents();
			
		// End & return result string
		ob_end_clean();
		return $feature_string;
	
	} else {
	
	ob_start(); 
	
	echo '<div class="callout warning">';
	echo '<p>' . _e( "A resource category does not seem to be set") . '</p>';
	echo '</div>';
	
	$warning = ob_get_contents();
	
	// End & return result string
	ob_end_clean();
	return $warning;
	
	}
}

add_shortcode('resources-feature', 'resources_feature_list' );

