<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage qumodo
 * @since qumodo 1.0
 */

 $opt = get_option( 'qumodo_opt' );
 $post_title_length = isset($opt['post_title_length']) ? $opt['post_title_length'] : '10';

 $post_author = qumodo_opt('is_post_author', 'yes');
 $post_date = qumodo_opt('is_post_date', 'yes');


?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog_post_item zoom_in_effect'); ?>>

    <?php 
        get_template_part( 'template-parts/header/excerpt-header', get_post_format() );
    ?>

	<div class="entry-content media_blog_content mt-0">
        <?php
            if(is_sticky()) {
                printf('<span class="featured_post">%s</span>', esc_html__('Featured', 'qumodo'));
            }
        ?>
        <div class="post-title entry-title">
            <div class="post-meta">
            <?php 
            if($post_date == 'yes'): qumodo_posted_on(); endif;
            //if($post_date == 'yes'){echo qumodo_posted_on();}
            //if($post_author == 'yes'){echo qumodo_posted_by();}
            if($post_author == 'yes'): qumodo_posted_by(); endif;
            ?>
            </div>
            <h2 class="entry-title blog_title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), $post_title_length); ?></a></h2>
        </div>


		<?php get_template_part( 'template-parts/blog/excerpt/excerpt', get_post_format() ); ?>
        <div class="post-footer">
        <?php qumodo_entry_meta_footer(); ?>  
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-${ID} -->