<?php 
/**
 * qumodo admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', 'qumodo_admin_enqueues');

function qumodo_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if ( $screen->base == 'toplevel_page_qumodo_options' ) {
            wp_enqueue_style( 'qumodo-redux-style', QUMODO_CSS.'/redux-style.css' );
        }
    }
    
}
