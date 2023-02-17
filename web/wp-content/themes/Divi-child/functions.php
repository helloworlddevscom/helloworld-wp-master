<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// ENQUEUE HELLOWORLD SCRIPTS
function helloworld_scripts() {

    wp_enqueue_script('jquery');
    wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), true);

    wp_register_script('gsap', ("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"), true);
    wp_enqueue_script('gsap');

    wp_register_script('main', ("/helloworld/js/main.js"), true);
    wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'helloworld_scripts' );

//function main_scripts() {
//    wp_register_script('test', get_stylesheet_directory_uri() . '/scripts/test.js', true);
//    wp_enqueue_script('test');
//}
//add_action( 'wp_enqueue_scripts', 'main_scripts' );

if ( !function_exists( 'slider_navigation_styles' ) ):
    function slider_navigation_styles( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/navigation.css' ) )
            $uri = get_template_directory_uri() . '/navigation.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'slider_navigation_styles' );
