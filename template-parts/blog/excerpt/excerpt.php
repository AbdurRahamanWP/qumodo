<?php
/**
 * Show the excerpt.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage qumodo
 * @since qumodo 1.0
 */

 $opt = get_option( 'qumodo_opt' );
 $blog_excerpt = isset($opt['blog_excerpt']) ? $opt['blog_excerpt'] : '50';
 
 echo wp_trim_words(get_the_excerpt(), $blog_excerpt);
