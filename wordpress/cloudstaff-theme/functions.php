<?php
/**
 * Cloudstaff 2026 theme setup.
 *
 * Loads the official Cloudstaff Design System from its versioned CDN
 * (per https://style.stage.cloud.cloudstaff.com/docs/wordpress.html) and
 * the small site-specific CSS layer on top.
 *
 * @package Cloudstaff
 */

const CSDS_VERSION = '2.38.0';
define( 'CSDS_CDN', 'https://style.cloudstaff.com/v' . CSDS_VERSION );

add_action( 'wp_enqueue_scripts', function () {
	// Versioned URLs are immutable — the version in the URL is the cache
	// buster, so WP version params are deliberately null.
	wp_enqueue_style( 'csds-fonts', CSDS_CDN . '/fonts/fonts.css', array(), null );
	wp_enqueue_style( 'csds-ui', CSDS_CDN . '/css/ui.min.css', array( 'csds-fonts' ), null );
	wp_enqueue_style( 'cloudstaff-site', get_template_directory_uri() . '/site.css', array( 'csds-ui' ), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'csds-ui', CSDS_CDN . '/css/ui.min.js', array(), null, true );
} );

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
} );

/**
 * Meta descriptions for the generated marketing pages.
 * Slug => description, mirrored from src/meta.json.
 */
add_action( 'wp_head', function () {
	$descriptions = json_decode( file_get_contents( get_template_directory() . '/page-meta.json' ), true );
	if ( ! $descriptions ) {
		return;
	}
	$slug = is_front_page() ? 'index' : get_post_field( 'post_name', get_queried_object_id() );
	if ( isset( $descriptions[ $slug ] ) ) {
		printf( '<meta name="description" content="%s">' . "\n", esc_attr( $descriptions[ $slug ] ) );
	}
}, 5 );
