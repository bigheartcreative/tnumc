<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

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
