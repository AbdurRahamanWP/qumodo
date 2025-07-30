<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qumodo
 */

if ( ! is_active_sidebar( 'blog_sidebar' ) ) {
	return;
}
// shop_sidebar

$sidebar = 'blog_sidebar';
$sidbar_class = 'widget-area col-lg-4 sidebar_right blog';

?>
<aside id="secondary" class="<?php echo esc_attr($sidbar_class,'qumodo'); ?>">
	<?php dynamic_sidebar( $sidebar ); ?>
</aside><!-- #secondary -->
