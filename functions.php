<?php
/**
 * Sierra Madre Theme Functions
 *
 * @package SierraMadre
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue theme styles and scripts
 */
function sierra_madre_enqueue_assets() {
    // Enqueue theme's main style.css (required by WordPress)
    wp_enqueue_style(
        'sierra-madre-main',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );
}
add_action('wp_enqueue_scripts', 'sierra_madre_enqueue_assets');

function sierra_madre_add_editor_styles() {
	/**
	 * Main Editor Styles
	 * Applies the main theme CSS to the block editor
	 */
	add_editor_style( 'assets/css/style.css' );
}
add_action( 'after_setup_theme', 'sierra_madre_add_editor_styles' );