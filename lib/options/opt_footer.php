<?php

// page Title Bar
Redux::set_section('qumodo_opt', array(
	'title'         => esc_html__( 'Footer', 'qumodo' ),
	'id'            => 'footer_contents_opt',
	'icon'          => 'dashicons dashicons-admin-post',
	'fields'        => array(

        array(
            'id'       => 'is_defult_footer',
            'type'     => 'button_set',
            'title'    => esc_html__('Use Defult footer', 'qumodo'),
            'options' => array(
                'yes' => esc_html__('Yes', 'qumodo'), 
                'no' => esc_html__('No', 'qumodo'), 
             ), 
            'default' => 'yes'
        ),

	    array(
            'title'     => esc_html__('Copyright Text', 'qumodo'),
            'id'        => 'footer_copyright_txt',
            'type'      => 'editor',
            'default'   => 'Copyright &copy; 2025 <a href="https://qumodoSoft.com/">qumodoSoft</a> | All rights reserved',
            'args'      => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
            ),
            'required'  => array( 'is_defult_footer', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Background Color', 'qumodo' ),
            'id'        => 'footer_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-footer' ),
        ),
        
        array(
            'id'          => 'footer_typo',
            'type'        => 'typography',
            'title'       => __('Typography', 'qumodo'),
            'google'      => true,
            'font-backup' => true,
            'color'       => false,
            'output'      => array('.site-footer .site-info'),
            'units'       => 'px',
        ),
        array(
            'title'     => esc_html__( 'Font color', 'qumodo' ),
            'id'        => 'footer_font_color',
            'type'      => 'color',
            'output'    => array( '.site-footer .site-info' ),
        ),
        array(
            'title'     => esc_html__( 'Font Link color', 'qumodo' ),
            'id'        => 'footer_link_font_color',
            'type'      => 'color',
            'output'    => array( '.site-footer .site-info a' ),
        ),
        array(
            'title'     => esc_html__( 'Footer padding', 'qumodo' ),
            'subtitle'  => esc_html__( 'Padding around the menu action button.', 'qumodo' ),
            'id'        => 'footer_padding',
            'type'      => 'spacing',
            'output'    => array( '.site-footer' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
	)
));



