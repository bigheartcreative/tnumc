<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(300, 300, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	/* add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); */	
	
} /* end theme support */


//TNUMC Specific Functions
//Return featured image url for homepage and top level pages, if called.
function background_featured_image() {
	global $post;
	$id = $post->ID;
	
	if ( has_post_thumbnail( $id )){
		$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		
		if ( ! empty( $image_url[0] ) ) {
			echo esc_url( $image_url[0] );
		}
	}
}

//Set secondary page and homepage header opacity and size based on whether the Secondary page template is used and if a feature image is set
function secondary_page_setting($arg) {
	global $post;
	$id = $post->ID;
	$light = 'light';
	$dark = 'dark';
	
	if ( $arg = 'opacity' ) {
		if ( ( is_page_template('template-secondary.php') && has_post_thumbnail($id) ) || is_front_page() ) {
			return $light;
		} else {
			return $dark;
		}
	}
}

add_action( 'after_setup_theme', 'tnumc_bg_image_mobile' );
function tnumc_bg_image_mobile() {
    add_image_size( 'mobile-bg', 640, 600, array( 'center', 'top' ) ); // Hard crop center top
}

//function and shortcode for list displayed on homepage; combines newest posts and events, by tag
function home_feature_list() {
	$args = array(
		'tag' => 'home-feature',
		'posts_per_page' => 4,
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
		
	} else {
		echo _e( 'Sorry, no featured posts were found.', 'jointswp' );
	}

	// Collect output
	$feature_string = ob_get_contents();
		
	// End & return result string
	ob_end_clean();
	return $feature_string;
		
	/* Restore original Post Data */
	wp_reset_postdata();
}
add_shortcode('home-feature', 'home_feature_list' );


//function and shortcode for news list, by tag
function news_feature_list() {
	$args = array(
		'tag' => 'news',
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
		
	} else {
		echo _e( 'Sorry, no news posts were found.', 'jointswp' );
	}

	// Collect output
	$feature_string = ob_get_contents();
		
	// End & return result string
	ob_end_clean();
	return $feature_string;
		
	/* Restore original Post Data */
	wp_reset_postdata();
}
add_shortcode('news-feature', 'news_feature_list' );

//function and shortcode for resources list, by tag
function resources_feature_list() {
	$args = array(
		'tag' => 'resources',
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
		
	} else {
		echo _e( 'Sorry, no resource posts were found.', 'jointswp' );
	}

	// Collect output
	$feature_string = ob_get_contents();
		
	// End & return result string
	ob_end_clean();
	return $feature_string;
		
	/* Restore original Post Data */
	wp_reset_postdata();
}
add_shortcode('resources-feature', 'resources_feature_list' );


//Add class name of "excerpt" to the_excerpt()
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="excerpt"', $excerpt);
}

add_filter( "the_excerpt", "add_class_to_excerpt" );


//Clean up the excerpt length to 20 words; format updated in functions/cleanup.php
function wpdocs_custom_excerpt_length( $length ) {
	if ( is_search() ) {
		$length = 50;
	} elseif ( is_archive() ) {
		$length = 50;
	} else {
		$length = 20;
	}	
	
	return $length;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


//

