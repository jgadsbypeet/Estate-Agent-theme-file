<?php 
add_theme_support('post-thumbnails');

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'Slider_properties',
		array(
			'labels' => array(
				'name' => __( 'Featured Properties' ),
				'singular_name' => __( 'Featured Property' ),
			        'add_new' => _x( 'Add New', 'book' ),
      				'add_new_item'       => __( 'Add New Property' ),
			        'edit_item'          => __( 'Edit Property' ),
			        'new_item'           => __( 'New Property' ),
			        'all_items'          => __( 'All Properties' ),
			        'view_item'          => __( 'View Property' )

			),
		'taxonomies' => array('category'),	
		'public' => true,
		'has_archive' => true,
	        'description'   => 'Featured properties that show at the top of each page',
	        'menu_position' => 3,
	        'has_archive'   => true,
		'supports' => array(
		'title',
		'author',
		'excerpt',
		'editor',
		'thumbnail',
		'revisions'
		)

		)
	);
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'slider-mobile-thumb', 300, 110 );
}

register_sidebars(3);

function diww_default_post_content( $content ) {
	$content = '<p>This is the tag line for the property <strong>£PRICE</strong></p>
<p><span style="color: #ff0000;">Status</span></p>
<p>Some more content where you can sell the property</p>
<p><a href="http://www.bbc.co.uk">Find out more >></a></p>
';
	return $content;
}

add_filter( 'default_content', 'diww_default_post_content' );


?>