<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package qumodo
 */
get_header();

?>
<main id="primary" class="site-main">
	<?php 
	/**
	 * if active core plugin banner will pull from core plugin
	 * else default load form theme 
	 * @package _qumodo Banner
	 * @since 1.0.0
	 */
	
		$banner_id = get_themebuilder_Id(get_the_ID(), 'banner');
		/**
		 * display Page Banner 
		* hook --_qumodo_banner -- 10
		*/
		do_action('qumodo_banner_content', $banner_id, 'shop');
	?>
		<div class="container woo">
		<div class="row justify-content-center">
			<?php   woocommerce_content(); ?>
		</div>
		</div>
	?>
</main><!-- #main -->
<?php
get_footer();
