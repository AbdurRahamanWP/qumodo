<?php 


require QUMODO_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require QUMODO_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require QUMODO_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * qumodo helper 
 */
require QUMODO_THEMEROOT_DIR . '/inc/helper.php';

/**
 * qumodo comment area
*/
require QUMODO_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * qumodo nav walker
*/
require QUMODO_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require QUMODO_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * qumodo Enqueue 
 */

require QUMODO_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * qumodo Admin Enqueue 
 */

require QUMODO_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * qumodo breadcrumbs
 */

require QUMODO_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * qumodo Tgm
 */
require QUMODO_THEMEROOT_DIR . '/inc/tgm/tgm-plugin-registration.php';
require QUMODO_THEMEROOT_DIR . '/inc/tgm/tgm-plugin-activation.php';
require QUMODO_THEMEROOT_DIR . '/inc/tgm/class-plugins.php';


/**
 * qumodo Demo import
 */
require QUMODO_THEMEROOT_DIR . '/inc/one_click_demo_config.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require QUMODO_THEMEROOT_DIR . '/inc/jetpack.php';
}
