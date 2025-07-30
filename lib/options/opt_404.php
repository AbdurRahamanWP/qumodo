<?php

Redux::setSection('qumodo_opt', array(
    'title'     => esc_html__('404 Page Settings', 'qumodo'),
    'id'        => '404_0pt',
    'icon'      => 'dashicons dashicons-admin-post',
    'fields'    => array(

        array(
            'id'        => 'page_404_img_upload',
            'type'      => 'media',
            'title'     => __('Upload 404', 'qumodo'),
            'default'   => array(
                'url'   => QUMODO_IMAGES.'/404/404.png',
            ),
        ),

        array(
            'title'     => esc_html__('Title', 'qumodo'),
            'id'        => 'error_title',
            'type'      => 'text',
            'default'   => esc_html__('404 Not Found', 'qumodo'),
        ),

        array(
            'title'     => esc_html__('Subtitle', 'qumodo'),
            'id'        => 'error_subtitle',
            'type'      => 'textarea',
            'default'   => esc_html__('We can’t seem to find the page you’re looking for.', 'qumodo'),
        ),

        array(
            'title'     => esc_html__('Home button label', 'qumodo'),
            'id'        => 'error_home_btn_label',
            'type'      => 'text',
            'default'   => esc_html__('Go Back', 'qumodo'),
            
        ),

        array(
            'id'          => 'title_font_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Title Color', 'qumodo' ),
            'output'      => array(
                'color' => '.content-404 h1',
            ),
        ),

        array(
            'id'          => 'subtitle_font_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Sub Title Color', 'qumodo' ),
            'output'      => array(
                'color' => '.content-404 p',
            ),
        ),

        array(
            'id'          => 'link_font_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Link Color', 'qumodo' ),
            'output'      => array(
                'color' => '.content-404 p a',
            ),
        ),

        array(
            'id'          => 'page_bg_color',
            'type'        => 'background-color',
            'title'       => esc_html__( 'Background Color', 'qumodo' ),
            'output'    => array(
                'background' => '.error-404.not-found',
            ),
            'type'      => 'color',
        ),

    )
));
