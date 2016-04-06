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
		if ( ( is_page() && has_post_thumbnail($id) ) || is_front_page() ) {
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
	$today = date("Y-m-d");
	
	$args_for_events = array(
        'post_type' => array('post','tribe_events'),
		'meta_query' => array(
			array(
				'key' => '_EventStartDate',
				'value' => $today,
				'compare' => '>=',
			)
		),
		'tag' => 'home-feature',
		'posts_per_page' => 4,
		'orderby' => 'date',
		'order'   => 'DESC'
	);
	$events_query = new WP_Query( $args_for_events );
	
	$args_for_posts = array(
        'post_type' => array('post'),
		'tag' => 'home-feature',
		'category_name' => 'news,program-resources',
		'posts_per_page' => 4,
		'orderby' => 'date',
		'order'   => 'DESC'
	);
	$regular_posts_query = new WP_Query( $args_for_posts );

	//create new empty query and populate it with the other two
	$feature_posts = new WP_Query(  array('posts_per_page' => 4) );
	$feature_posts->posts = array_merge( $events_query->posts, $regular_posts_query->posts );
	
	//limit count
	$post_count = count( $feature_posts->posts );
	$post_limit = 4;
	
	if ($post_count > $post_limit ) {
		$feature_posts->post_count = $post_limit;
	} else {
		$feature_posts->post_count = $post_count;
	}
	 
	
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
				echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.jpg' . '" />';
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
		$length = 16;
	}	
	
	return $length;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


//Custom RoyalSlider skin
add_filter('new_royalslider_skins', 'new_royalslider_add_custom_skin', 10, 2);
function new_royalslider_add_custom_skin($skins) {
      $skins['myCustomSkin'] = array(
           'label' => 'TNUMC Transparent',
           'path' => get_stylesheet_directory_uri() . '/assets/css/royal_slider/royal_slider_transparent.css'  // get_stylesheet_directory_uri returns path to your theme folder
      );
      return $skins;
}

