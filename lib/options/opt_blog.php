<?php
Redux::set_section('qumodo_opt', array(
	'title'     => esc_html__( 'Blog', 'qumodo' ),
	'id'        => 'blog_page_opt',
	'icon'      => 'dashicons dashicons-admin-post',
));


/**
 * Blog Archive Settings
 */
Redux::set_section('qumodo_opt', array(
    'title'         => esc_html__( 'Blog Archive', 'qumodo' ),
    'id'            => 'blog_archive_settings_opt',
    'icon'          => '',
    'subsection'    => true,
    'fields'        => array(

        array(
            'id'       => 'blog_layout',
            'type'     => 'image_select',
            'title'    => __('Blog Layout', 'qumodo'),
            'subtitle' => __('Select your blog Layout', 'qumodo'),
            'options'  => array(
                'full'      => array(
                    'alt'   => '1 Column',
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
                'left'      => array(
                    'alt'   => '2 Column Left',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'right'      => array(
                    'alt'    => '2 Column Right',
                    'img'    => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
            ),
            'default' => 'right'
        ),

        array(
            'title'     => esc_html__( 'Blog Format', 'qumodo' ),
            'id'        => 'defult_blog_format',
            'type'      => 'switch',
            'on'        => esc_html__( 'Grid Style', 'qumodo' ),
            'off'       => esc_html__( 'List Style', 'qumodo' ),
            'default'   => 'off',
        ),

        array(
            'id' => 'read_more_text_button',
            'title'    => __('Read More Button Text', 'qumodo'),
            'type' => 'text',
            'default' => 'Read More'
        ),

        array(
            'title'     => esc_html__( 'Post title length', 'qumodo' ),
            'subtitle'  => esc_html__( 'Blog post title length in character', 'qumodo' ),
            'id'        => 'post_title_length',
            'type'      => 'slider',
            'default'   => 6,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text',
        ),
    
        array(
            'title'     => esc_html__( 'Post word excerpt', 'qumodo' ),
            'subtitle'  => esc_html__( 'If post excerpt is empty, the excerpt content will take from the post content. Define here how much word you want to show along with the each posts in the blog page.', 'qumodo' ),
            'id'        => 'blog_excerpt',
            'type'      => 'slider',
            'default'   => 40,
            "min"       => 1,
            "step"      => 1,
            "max"       => 500,
            'display_value' => 'text'
        ),

        array(
            'id'        => 'is_post_date',
            'type'      => 'button_set',
            'title'     => esc_html__('Post author', 'qumodo'),
            'options'   => array(
                'yes'  => esc_html__('Show', 'qumodo'),
                'no'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'yes',
        ),

        array(
            'id'        => 'is_post_dated',
            'type'      => 'button_set',
            'title'     => esc_html__('Post date', 'qumodo'),
            'options'   => array(
                'yes'  => esc_html__('Show', 'qumodo'),
                'no'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'yes',
        ),
    
        )
    ));
    
    
    
    /*** Headers Typography ***/
    Redux::set_section( 'qumodo_opt', array(
        'title'            => esc_html__( 'Blog Single', 'qumodo' ),
        'id'               => 'blog_single_opt',
        'icon'             => '',
        'subsection'       => true,
        'fields'           => array(
            array(
                'id'       => 'qumodo_display_blog_single_tags',
                'type'     => 'button_set',
                'title'    => esc_html__('Display Post Tags', 'qumodo'),
                'options' => array(
                    'yes' => 'Yes', 
                    'no' => 'No', 
                 ), 
                'default' => 'yes'
            ),
            
            array(
                'id'       => 'qumodo_display_blog_share',
                'type'     => 'button_set',
                'title'    => esc_html__('Display Social Share?', 'qumodo'),
                'options' => array(
                    'yes' => 'Yes', 
                    'no' => 'No', 
                 ), 
                'default' => 'yes'
            ),
    
            array( 
                'id' => 'qumodo_social_title_text',
                'title'    => __('Shared Title', 'qumodo'), 
                'type' => 'text',
                'default' => 'Shared'
            ),
    
            array(
                'id'       => 'is_social_share_links',
                'type'     => 'checkbox',
                'title'    => __('Checked Share Links', 'qumodo'),
                'options'  => array(
                    'facebook' => __('Facebook', 'qumodo'),
                    'twitter'  => __('Twitter', 'qumodo'),
                    'pinterest'=> __('Pinterest', 'qumodo'),
                    'linkedin' => __('Linkedin', 'qumodo')
                ),
                'default' => array(
                    'facebook'  => '1', 
                    'twitter'   => '1', 
                    'pinterest' => '0',
                    'linkedin' => '1'
                ),
            ),
    
            array(
                'id'       => 'qumodo_display_blog_comments',
                'type'     => 'button_set',
                'title'    => esc_html__('Display Comments Section', 'qumodo'),
                'options' => array(
                    'yes' => 'Yes', 
                    'no' => 'No', 
                 ), 
                'default' => 'yes'
            ),
    
        )
    ));    


