<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package qumodo
 */

get_header();

$opt = get_option('qumodo_opt');
$error_title = !empty($opt['error_title']) ? $opt['error_title'] : esc_html__('404 Not Found', 'qumodo');
$error_subtitle = !empty($opt['error_subtitle']) ? $opt['error_subtitle'] : esc_html__("We can’t seem to find the page you’re looking for.", "qumodo");
$error_home_btn_label  =!empty($opt['error_home_btn_label']) ? $opt['error_home_btn_label'] : esc_html__('Go Back', 'qumodo');


$banner_url = qumodo_opt('page_404_img_upload');
$banner_background_url = QUMODO_IMAGES.'/404/404.png';

if ( $banner_url && !empty($banner_url['url']) ) {
    $banner_background_url = $banner_url['url'];
}

if (!class_exists('Redux') ) {
    $banner_background_url = '';
}

?>

	<main id="primary" class="site-main">
	     <?php
		 /**
		 * if active core plugin banner will pull from core plugin
		 * else default load form theme 
		 * @package _qumodo Banner
		 * @since 1.0.0
		 * hook --_qumodo_banner -- 10
		 */	
	 	?>
		<section class="error-404 not-found">
			<div class="container">
				<div class="content-404">
					<img class="" src="<?php echo esc_url($banner_background_url); ?>" alt="404">
					<h1 class="text-center"><?php echo qumodo_kses( $error_title );  ?></h1>
					<p class="text-center"><?php echo qumodo_kses( $error_subtitle );  ?> 
						<a href="<?php echo esc_url(home_url('/')) ?>"><?php echo qumodo_kses( $error_home_btn_label );  ?></a>
					</p>
				</div>
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();
