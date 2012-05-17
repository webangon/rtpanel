<?php
/**
 * rtPanel sidebars
 *
 * @package rtPanel
 *
 * @since rtPanel 2.0
 */

/**
 * Registers sidebars
 *
 * @since rtPanel 2.0
 */
function rtp_widgets_init() {
    global $rtp_general;

    // Sidebar Widget
    register_sidebar( array(
        'name' => __( 'Sidebar Widgets', 'rtPanel' ),
        'id' => 'sidebar-widgets',
        'before_widget' => '<aside id="%1$s" class="widget rtp-grid-4 rtp-alpha rtp-omega sidebar-widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ) );

    // Footer Widget
    if ( $rtp_general['footer_sidebar'] ) {
         register_sidebar( array(
            'name' => __( 'Footer Widgets', 'rtPanel' ),
            'id' => "footer-widgets",
            'before_widget' => '<aside id="%1$s" class="widget rtp-grid-4 footerbar-widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>',
        ) );
    }
}
add_action( 'widgets_init', 'rtp_widgets_init' );