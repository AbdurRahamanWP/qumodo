<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'qumodo_opt';


    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Settings', 'qumodo' ),
        'customizer'           => true,
		'dev_mode'             => false,
		'forced_dev_mode_off'  => true,
        'admin_bar_priority'   => 50,
        'page_priority'        => 58,
        'save_defaults'        => true,
        'show_import_export'   => true,
        'transient_time'   => 60 * MINUTE_IN_SECONDS,
        'async_typography'   => false,
        'menu_type'   => 'menu',
        'allow_sub_menu'   => true,
    );


    // Add content after the form.
    $args['footer_text'] = '<br>'.esc_html__( 'Copyright qumodo &copy; 2022', 'qumodo' );

    Redux::set_args( $opt_name, $args );

    require QUMODO_THEMEROOT_DIR . '/lib/options/opt_header.php';
	require QUMODO_THEMEROOT_DIR . '/lib/options/opt_banner.php';
    require QUMODO_THEMEROOT_DIR . '/lib/options/opt_menu.php';
	require QUMODO_THEMEROOT_DIR . '/lib/options/opt_colors.php';
    require QUMODO_THEMEROOT_DIR . '/lib/options/opt_typo.php';
	require QUMODO_THEMEROOT_DIR . '/lib/options/opt_blog.php';
    // require QUMODO_THEMEROOT_DIR . '/lib/options/opt_page.php';
    require QUMODO_THEMEROOT_DIR . '/lib/options/opt_footer.php';
    require QUMODO_THEMEROOT_DIR . '/lib/options/opt_custom_posts.php';
    require QUMODO_THEMEROOT_DIR . '/lib/options/opt_404.php';

