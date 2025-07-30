<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package qumodo
 */

get_header();

$opt = get_option('qumodo_opt');
$blog_sidebar = qumodo_opt('blog_layout');
$defult_blog_format  = isset( $opt['defult_blog_format']) ? $opt['defult_blog_format'] : '';

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
		  * hook --_qumodo_banner -- 10
		  */
		 do_action('qumodo_banner_content', $banner_id, 'blog');
		 
		qumodo_wrapper_start($blog_sidebar);
		
		$defult_blog_format;

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			if($defult_blog_format == '0'){
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				
				get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );

			endwhile;

			}else{
				?>
				<div  class="blog_grid">
				<?php 
					while ( have_posts() ) :
						the_post();
		
						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						
						get_template_part( 'template-parts/blog/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
		
					endwhile;
				?>
				</div>
				
				<?php
			}

			qumodo_pagination();

			else :

			get_template_part( 'template-parts/content', 'none' );

			endif;
			qumodo_wrapper_end( $blog_sidebar );
		 ?>
		 
	</main><!-- #main -->

<?php

get_footer();
