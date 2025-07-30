<?php
/**
 * Enqueue site scripts and styles
 */
function qumodo_scripts() {

    /**
     * Enqueueing Stylesheets
     */
	wp_enqueue_style( 'qumodo-fonts', qumodo_fonts_url() );
	wp_enqueue_style( 'bootstrap', QUMODO_VEND . '/bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'mediaelementplayer', QUMODO_VEND . '/media-player/mediaelementplayer.css' );
	wp_enqueue_style( 'fontawesome', QUMODO_VEND . '/fontawesome-free-6.0.0-web/css/all.min.css' );
	wp_enqueue_style( 'icomoon-theme', QUMODO_VEND . '/icomoon/style.css' );
	wp_enqueue_style( 'nice-select', QUMODO_VEND . '/nice-select/nice-select.css' );
	wp_enqueue_style( 'qumodo-main-style', get_theme_file_uri('/assets/css/style.min.css'), array(), QUMODO_VERSION );
	wp_enqueue_style( 'qumodo-custom-style', get_theme_file_uri('/assets/css/custom.css'), array(), QUMODO_VERSION );
	wp_enqueue_style( 'qumodo-custom-responsive', get_theme_file_uri('/assets/css/responsive.css'), array(), QUMODO_VERSION );
	wp_enqueue_style( 'qumodo-root', get_stylesheet_uri(), array(), QUMODO_VERSION );
    wp_style_add_data( 'qumodo-root', 'rtl', 'replace' );

	wp_enqueue_style( 'qumodo_woocommerce', get_theme_file_uri('/assets/css/woocommerce.css'), array(), QUMODO_VERSION );

    /**
     * Enqueueing Scripts
     */
	wp_enqueue_script( 'popper', QUMODO_VEND. '/bootstrap/js/popper.min.js', array('jquery'), '2.9.2', true );
	wp_enqueue_script( 'bootstrap-min', QUMODO_VEND. '/bootstrap/js/bootstrap.min.js', array('jquery'), '5.0.2', true );

	wp_enqueue_script( 'mediaelement-and-player', QUMODO_VEND. '/media-player/mediaelement-and-player.min.js', array('jquery'), '4.2.6', true );
	wp_enqueue_script( 'parallaxie', QUMODO_VEND. '/parallax/parallaxie.js', array('jquery'), '0.5', true );
	wp_enqueue_script( 'nice-select', QUMODO_VEND. '/nice-select/jquery.nice-select.min.js', array('jquery'), '0.5', true );
	wp_enqueue_script( 'qumodo-main-js', QUMODO_JS . '/main.js', array('jquery'), QUMODO_VERSION, true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	?>
	<script src="https://unpkg.com/phosphor-icons"></script>
	<?php 
}
add_action( 'wp_enqueue_scripts', 'qumodo_scripts' );