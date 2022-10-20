<?php
function azwa_css() {
	$parent_style = 'conceptly-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'azwa-style', get_stylesheet_uri(), array( $parent_style ));
	
	wp_enqueue_style('azwa-color-default',get_stylesheet_directory_uri() .'/assets/css/colors/default.css');
	wp_dequeue_style('conceptly-color-default');
	
	wp_enqueue_style('azwa-responsive',get_stylesheet_directory_uri().'/assets/css/responsive.css');
	wp_dequeue_style('conceptly-responsive');
	wp_dequeue_style('conceptly-fonts');

}
add_action( 'wp_enqueue_scripts', 'azwa_css',999);
   	

function azwa_setup()	{	
	add_editor_style( array( 'assets/css/editor-style.css', azwa_google_font() ) );
}
add_action( 'after_setup_theme', 'azwa_setup' );
	
/**
 * Register Google fonts for StartBiz.
 */
function azwa_google_font() {
	
   $get_fonts_url = '';
		
    $font_families = array();
 
	$font_families = array('Open Sans:300,400,600,700,800', 'Raleway:400,700');
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

    return $get_fonts_url;
}

function azwa_scripts_styles() {
    wp_enqueue_style( 'azwa-fonts', azwa_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'azwa_scripts_styles' );

function azwa_remove_parent_setting( $wp_customize ) {
	$wp_customize->remove_control('hide_show_breadcrumb');
}
add_action( 'customize_register', 'azwa_remove_parent_setting',99 );

require( get_stylesheet_directory() . '/template-parts/sections/section-blog.php');

/**
 * Called all the Customize file.
 */
require( get_stylesheet_directory() . '/inc/customize/azwa-premium.php');


/**
 * Import Options From Parent Theme
 *
 */
function azwa_parent_theme_options() {
	$conceptly_mods = get_option( 'theme_mods_conceptly' );
	if ( ! empty( $conceptly_mods ) ) {
		foreach ( $conceptly_mods as $conceptly_mod_k => $conceptly_mod_v ) {
			set_theme_mod( $conceptly_mod_k, $conceptly_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'azwa_parent_theme_options' );