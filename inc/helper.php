<?php 

/**
 * helper function for qumodo 
 */

 /**
  * qumodo return 
  */

if ( !function_exists('qumodo_return') ) {

    function qumodo_return( $html ){
        return $html;
    }
}

/**
 * Get editor data 
 */
if ( !function_exists('qumodo_editor_data') ) {

    function qumodo_editor_data( $data ) {
        return wp_kses_post( $data );
    }

}


/*
 * Resize media image 
 * To get instant resize 
 */

if ( !function_exists('qumodo_get_image') ) {

    function qumodo_get_image( $id, $size = 'full', $icon= false,  $attr = '') {
       
       echo  wp_get_attachment_image($id, $size, $icon, $attr);

    }
    
}

/**
 * qumodo kses
 */
if ( !function_exists('qumodo_kses') ) {

    function qumodo_kses ( $data ) {

        $allowed_tags = array(
            'a'								 => array(
                'class'	 => array(),
                'href'	 => array(),
                'rel'	 => array(),
                'title'	 => array(),
            ),
            'abbr'							 => array(
                'title' => array(),
            ),
            'b'								 => array(),
            'blockquote'					 => array(
                'cite' => array(),
            ),
            'cite'							 => array(
                'title' => array(),
            ),
            'code'							 => array(),
            'del'							 => array(
                'datetime'	 => array(),
                'title'		 => array(),
            ),
            'dd'							 => array(),
            'div'							 => array(
                'class'	 => array(),
                'title'	 => array(),
                'style'	 => array(),
            ),
            'dl'							 => array(),
            'dt'							 => array(),
            'em'							 => array(),
            'h1'							 => array(),
            'h2'							 => array(),
            'h3'							 => array(),
            'h4'							 => array(),
            'h5'							 => array(),
            'h6'							 => array(),
            'i'								 => array(
                'class' => array(),
            ),
            'img'							 => array(
                'alt'	 => array(),
                'class'	 => array(),
                'height' => array(),
                'src'	 => array(),
                'width'	 => array(),
            ),
            'li'							 => array(
                'class' => array(),
            ),
            'ol'							 => array(
                'class' => array(),
            ),
            'p'								 => array(
                'class' => array(),
            ),
            'q'								 => array(
                'cite'	 => array(),
                'title'	 => array(),
            ),
            'span'							 => array(
                'class'	 => array(),
                'title'	 => array(),
                'style'	 => array(),
            ),
            'strike'						 => array(),
            'br'							 => array(),
            'strong'						 => array(),
            'data-wow-duration'				 => array(),
            'data-wow-delay'				 => array(),
            'data-wallpaper-options'		 => array(),
            'data-stellar-background-ratio'	 => array(),
            'ul'							 => array(
                'class' => array(),
            ),
        );
       
        return wp_kses($data, $allowed_tags);
    }
}

/**
 * get qumodo option 
 */

if ( !function_exists('qumodo_opt') ) {

    function qumodo_opt ( $section_id, $default = '' ) {

        $qumodo_option_data = $default;

        if ( class_exists( 'Redux' ) ) {

            global $qumodo_opt;
            $qumodo_option_data = (isset($qumodo_opt[$section_id]) && (!empty($qumodo_opt[$section_id]))) ? $qumodo_opt[$section_id] : $default;

        }

        return $qumodo_option_data;

    }

 }

 /**
 * get qumodo option 
 */

if(!function_exists('qumodo_page_meta')){

    function qumodo_page_meta ( $meta_id, $id, $default = '' ) {

       $metadata =  $default; 

       if(function_exists('get_field')) {
         $metadata = (get_field($meta_id, $id) != '') ? get_field($meta_id, $id): $default;
       }
      
       return $metadata;

    }

 }

/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function qumodo_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = '';

    /* Body font */
    if (  'off' !== 'on'  ) { 
        $fonts[] = "Archivo:400,500,600,700,800,900";
        $fonts[] = "Arimo:400,500,600,700,800,900";
        $fonts[] = "Fraunces:400,500,600,700,800,900";
        $fonts[] = "FrauncesP:400,500,600,700,800,900";
        $fonts[] = "Roboto:400,500,600,700,800,900";
        $fonts[] = "Inter:400,500,600,700,800,900";
        $fonts[] = "Space Grotesk:400,500,600,700,800,900";
        $fonts[] = "Montserrat:400,500,600,700,800,900";
        $fonts[] = "Literata:400,500,600,700,800,900";
        $fonts[] = "Manrope:400,500,600,700,800,900";
        $fonts[] = "Sora:400,500,600,700,800,900";
        $fonts[] = "DM Sans:400,500,600,700,800,900";
    }

    $is_ssl = is_ssl() ? 'https' : 'http';

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts  ) ),
            'subset' => urlencode( $subsets ),
        ), "$is_ssl://fonts.googleapis.com/css" );
    }

    return $fonts_url;
}