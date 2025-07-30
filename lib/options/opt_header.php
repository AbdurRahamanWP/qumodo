<?php
// Header Section
Redux::set_section( 'qumodo_opt', array(
    'title'            => esc_html__( 'Header', 'qumodo' ),
    'id'               => 'header_settings_opt',
    'customizer_width' => '400px',
    'icon'             => 'dashicons dashicons-arrow-up-alt2',
));

Redux::set_section( 'qumodo_opt', array(
    'title'            => esc_html__( 'Header Settings', 'qumodo' ),
    'id'               => 'qumodo_header_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(

        array(
            'id'       => 'is_sticky',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Sticky', 'qumodo'),
            'options' => array(
                'yes' => esc_html__('Yes', 'qumodo'), 
                'no' => esc_html__('No', 'qumodo'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'id'        => 'qumodo_header_layout',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Defult Header', 'qumodo'),
            'subtitle'  => esc_html__('Show Website Defult Header Format ', 'qumodo'),
            'options'   => array(
                'container-fluid'  => esc_html__('Full Width', 'qumodo'),
                'container'  => esc_html__('Box Container', 'qumodo'),
            ), 
            'default'   => 'container',
        ),

        array(
            'id'       => 'is_header_bg_color',
            'type'     => 'button_set',
            'title'    => esc_html__('Show Background', 'qumodo'),
            'options' => array(
                'yes' => esc_html__('Yes', 'qumodo'), 
                'no' => esc_html__('No', 'qumodo'), 
             ), 
            'default' => 'yes'
        ),

        array(
            'title'     => esc_html__( 'Background Color Normal', 'qumodo' ),
            'id'        => 'menu_bg_color',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header .navbar' ),
            'required'  => array( 'is_header_bg_color', '=', 'yes' )
        ),

        array(
            'title'     => esc_html__( 'Background Color Sticky', 'qumodo' ),
            'id'        => 'menu_bg_color_sticky',
            'type'      => 'color',
            'mode'      => 'background',
            'output'    => array( '.site-header.sticky_nav.navbar_fixed .navbar' ),
        ),

        array(
            'title'     => esc_html__( 'Header Padding Normal', 'qumodo' ),
            'subtitle'  => esc_html__( 'Padding around the header. Input the padding as clockwise (Top Right Bottom Left)', 'qumodo' ),
            'id'        => 'header_padding',
            'type'      => 'spacing',
            'output'    => array( '.site-header .navbar' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

        array(
            'title'     => esc_html__( 'Header Padding Sticky', 'qumodo' ),
            'subtitle'  => esc_html__( 'Padding around the header. Input the padding as clockwise (Top Right Bottom Left)', 'qumodo' ),
            'id'        => 'header_padding_sticky',
            'type'      => 'spacing',
            'output'    => array( '.site-header.sticky_nav.navbar_fixed .navbar' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),

    )
) );


// Logo
Redux::set_section( 'qumodo_opt', array(
    'title'            => esc_html__( 'Logo', 'qumodo' ),
    'id'               => 'upload_logo_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
        array(
            'title'     => esc_html__( 'Upload logo', 'qumodo' ),
            'subtitle'  => esc_html__( 'Upload here a image file for your logo', 'qumodo' ),
            'id'        => 'logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => QUMODO_IMAGES.'/default_logo/logo.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Sticky header logo', 'qumodo' ),
            'id'        => 'sticky_logo',
            'type'      => 'media',
            'default'   => array(
                'url'   => QUMODO_IMAGES.'/default_logo/logo_sticky.svg'
            )
        ),

        array(
            'title'     => esc_html__( 'Retina Logo', 'qumodo' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'qumodo' ),
            'id'        => 'retina_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Retina Sticky Logo', 'qumodo' ),
            'subtitle'  => esc_html__( 'The retina logo should be double (2x) of your original logo', 'qumodo' ),
            'id'        => 'retina_sticky_logo',
            'type'      => 'media',
        ),

        array(
            'title'     => esc_html__( 'Logo dimensions', 'qumodo' ),
            'subtitle'  => esc_html__( 'Set a custom height width for your upload logo.', 'qumodo' ),
            'id'        => 'logo_dimensions',
            'type'      => 'dimensions',
            'units'     => array( 'em','px','%' ),
            'output'    => '.navbar-brand img'
        ),

        array(
            'title'     => esc_html__( 'Padding', 'qumodo' ),
            'subtitle'  => esc_html__( 'Padding around the logo. Input the padding as clockwise (Top Right Bottom Left)', 'qumodo' ),
            'id'        => 'logo_padding',
            'type'      => 'spacing',
            'output'    => array( '.logo_info .navbar-brand img' ),
            'mode'      => 'padding',
            'units'     => array( 'em', 'px', '%' ),      // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',
        ),
    )
) );


/**
 * Menu Settings
 */
Redux::set_section( 'qumodo_opt', array(
    'title'            => esc_html__( 'Button Styling', 'qumodo' ),
    'id'               => 'button_styling_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

            array(
                'id'       => 'is_menu_btn',
                'type'     => 'button_set',
                'title'    => esc_html__('Show Button', 'qumodo'),
                'options' => array(
                    'yes' => esc_html__('Yes', 'qumodo'), 
                    'no' => esc_html__('No', 'qumodo'), 
                 ), 
                'default' => 'no'
            ),

            array(
                'title'     => esc_html__( 'Button label', 'qumodo' ),
                'subtitle'  => esc_html__( 'Leave the button label field empty to hide the menu action button.', 'qumodo' ),
                'id'        => 'menu_btn_label',
                'type'      => 'text',
                'default'   => esc_html__( 'Get Started', 'qumodo' ),
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
    
            array(
                'title'     => esc_html__( 'Button URL', 'qumodo' ),
                'id'        => 'menu_btn_url',
                'type'      => 'text',
                'default'   => '#',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
            array(
                'title'     => esc_html__( 'Button Target', 'qumodo' ),
                'id'        => 'is_target_blank',
                'type'      => 'switch',
                'on'        => esc_html__( 'On', 'qumodo' ),
                'off'       => esc_html__( 'Off', 'qumodo' ),
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
            array(
                'id'          => 'header_action_btn_typo',
                'type'        => 'typography',
                'title'       => __('Typography', 'qumodo'),
                'google'      => true,
                'font-backup' => true,
                'color'       => false,
                'output'      => array('.btn_get'),
                'units'       => 'px',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),
    
            /**
             * Button colors
             * Style will apply on the Non sticky mode and sticky mode of the header
             */
            array(
                'title'     => esc_html__( 'Button Colors', 'qumodo' ),
                'subtitle'  => esc_html__( 'Button style attributes on normal (non sticky) mode.', 'qumodo' ),
                'id'        => 'button_colors',
                'type'      => 'section',
                'indent'    => true,
                'required'  => array( 'is_menu_btn', '=', 'yes' ),
            ),
    
            array(
                'title'     => esc_html__( 'Font color', 'qumodo' ),
                'id'        => 'menu_btn_font_color',
                'type'      => 'color',
                'output'    => array( '.site-header .navbar .header_area.nav_bar .btn_get' ),
            ),
            
            array(
                'title'     => esc_html__( 'Border Color', 'qumodo' ),
                'id'        => 'menu_btn_border_color',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.site-header .navbar .header_area.nav_bar .btn_get' ),
            ),
            
            array(
                'title'     => esc_html__( 'Background Color', 'qumodo' ),
                'id'        => 'menu_btn_bg_color',
                'type'      => 'color',
                'mode'      => 'background',
                'output'    => array( '.site-header .navbar .header_area.nav_bar .btn_get' ),
            ),
    
            // Button color on hover stats
            array(
                'title'     => esc_html__( 'Hover Font Color', 'qumodo' ),
                'subtitle'  => esc_html__( 'Font color on hover stats.', 'qumodo' ),
                'id'        => 'menu_btn_hover_font_color',
                'type'      => 'color',
                'output'    => array( '.site-header .navbar .header_area.nav_bar .btn_get:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover Border Color', 'qumodo' ),
                'id'        => 'menu_btn_hover_border_color',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.site-header .navbar .header_area.nav_bar .btn_get:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover background color', 'qumodo' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'qumodo' ),
                'id'        => 'menu_btn_hover_bg_color',
                'type'      => 'color',
                'output'    => array(
                    'background' => '.site-header .navbar .header_area.nav_bar .btn_get:hover',
                    'border-color' => '.navbar_fixed .header_area .navbar .btn_get:hover'
                ),
            ),
            array(
                'id'     => 'button_colors-end',
                'type'   => 'section',
                'indent' => false,
            ),
    
            /*
             * Button colors on sticky mode
             */
            array(
                'title'     => esc_html__( 'Sticky Button Style', 'qumodo' ),
                'subtitle'  => esc_html__( 'Button colors on sticky mode.', 'qumodo' ),
                'id'        => 'button_colors_sticky',
                'type'      => 'section',
                'indent'    => true,
                'required'  => array( 'is_menu_btn', '=', 'yes' ),
            ),
            array(
                'title'     => esc_html__( 'Border color', 'qumodo' ),
                'id'        => 'menu_btn_border_color_sticky',
                'type'      => 'color',
                'mode'      => 'border-color',
                'output'    => array( '.site-header.sticky_nav.navbar_fixed .header_area .btn_get' ),
            ),
            array(
                'title'     => esc_html__( 'Font color', 'qumodo' ),
                'id'        => 'menu_btn_font_color_sticky',
                'type'      => 'color',
                'output'    => array( '.site-header.sticky_nav.navbar_fixed .header_area .btn_get' ),
            ),
            array(
                'title'     => esc_html__( 'Background color', 'qumodo' ),
                'id'        => 'menu_btn_bg_color_sticky',
                'type'      => 'color',
                'mode'      => 'background',
                'output'    => array( '.site-header.sticky_nav.navbar_fixed .header_area .btn_get' ),
            ),
    
            // Button color on hover stats
            array(
                'title'     => esc_html__( 'Hover font color', 'qumodo' ),
                'subtitle'  => esc_html__( 'Font color on hover stats.', 'qumodo' ),
                'id'        => 'menu_btn_hover_font_color_sticky',
                'type'      => 'color',
                'output'    => array( '.header_area.navbar_fixed .navbar .btn_get.btn-meta:hover' ),
            ),
            array(
                'title'     => esc_html__( 'Hover background color', 'qumodo' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'qumodo' ),
                'id'        => 'menu_btn_hover_bg_color_sticky',
                'type'      => 'color',
                'output'    => array(
                    'background' => '.site-header.sticky_nav.navbar_fixed .header_area .btn_get.btn-meta:hover',
                ),
            ),
            array(
                'title'     => esc_html__( 'Hover border color', 'qumodo' ),
                'subtitle'  => esc_html__( 'Background color on hover stats.', 'qumodo' ),
                'id'        => 'menu_btn_hover_border_color_sticky',
                'type'      => 'color',
                'output'    => array(
                    'border-color' => '.header_area.navbar_fixed .navbar .btn_get.btn-meta:hover',
                ),
            ),
    
            array(
                'id'     => 'button_colors-sticky-end',
                'type'   => 'section',
                'indent' => false,
            ),
    
            array(
                'title'     => esc_html__( 'Button padding', 'qumodo' ),
                'subtitle'  => esc_html__( 'Padding around the menu action button.', 'qumodo' ),
                'id'        => 'menu_btn_padding',
                'type'      => 'spacing',
                'output'    => array( '.site-header.sticky_nav .header_area .btn_get' ),
                'mode'      => 'padding',
                'units'     => array( 'em', 'px', '%' ), // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',
                'required'  => array( 'is_menu_btn', '=', 'yes' )
            ),

    )
));

