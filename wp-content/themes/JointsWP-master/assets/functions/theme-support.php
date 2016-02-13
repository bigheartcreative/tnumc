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

add_action( 'after_setup_theme', 'tnumc_bg_image_mobile' );
function tnumc_bg_image_mobile() {
    add_image_size( 'mobile-bg', 640, 600, array( 'center', 'top' ) ); // Hard crop center top
}

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
			
			echo '</div><div class="small-9 columns"><h5><a href="' . get_permalink() . '">' . get_the_title() . '</a></h5>';
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


//Clean up the excerpt length to 20 words; format updated in functions/cleanup.php
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

