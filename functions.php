<?php
/**
 * Enqueue parent and child theme styles.
 */
function my_child_theme_enqueue_styles() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array( 'parent-style' ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );

/**
 * Add a custom message to the footer.
 */
function my_child_theme_footer_text() {
    echo '<p style="text-align:center;">&copy; ' . date( 'Y' ) . ' My Child Theme. All rights reserved.</p>';
}
add_action( 'wp_footer', 'my_child_theme_footer_text' );