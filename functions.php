<?php

/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'progectorlayouthmf_setup' ) ) {

	function progectorlayouthmf_setup() {

		add_theme_support( "title-tag" );

		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );

		// Enable featured image
		add_theme_support( 'post-thumbnails' );

		// Thumbnail sizes
		add_image_size( 'progectorlayouthmf_single', 800, 493, true ); //(cropped)
		add_image_size( 'progectorlayouthmf_big', 1400, 928, true ); 	//(cropped)

		// Custom menu areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'progectorlayouthmf' ),
		) );

		// Load theme languages
		load_theme_textdomain( 'progectorlayouthmf', get_template_directory().'/languages' );

	}

}
add_action( 'after_setup_theme', 'progectorlayouthmf_setup' );


/*  Include Styles and script
/* ------------------------------------ */
if ( ! function_exists( 'progectorlayouthmf_styles_scripts' ) ) {

	function progectorlayouthmf_style_scripts() {

		wp_enqueue_script('jquery');
		//wp_enqueue_script( 'progectorlayouthmf-scripts', get_template_directory_uri() . '/js/scripts.js', array( 		'jquery' ),'', true );

		wp_enqueue_style( 'progectorlayouthmf-sourcesanspro','//fonts.googleapis.com/css?									family=Source+Sans+Pro:300,400,700');

		wp_enqueue_style( 'progectorlayouthmf-normalize', 																'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css');

		wp_enqueue_style( 'progectorlayouthmf', get_template_directory_uri().'/style.css');

	}

}
add_action( 'wp_enqueue_scripts', 'progectorlayouthmf_style_scripts' );


/*  Oembed Responsive
/* ------------------------------------ */
add_filter( 'embed_oembed_html', 'progectorlayouthmf_oembed_filter', 10, 4 ) ;

function progectorlayouthmf_oembed_filter($html, $url, $attr, $post_ID) {
	$return = '<figure class="video-container">'.$html.'</figure>';
	return $return;
}