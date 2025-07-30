<?php
/**
 * Theme Banner Settings
 */
Redux::set_section('qumodo_opt', array(
    'title'            => esc_html__( 'Banner Setting', 'qumodo' ),
    'id'               => 'banner_settings_opt',
    'icon'             => 'el el-picture',
));

// Page Banner
Redux::set_section('qumodo_opt', array(
    'title'            => esc_html__( 'Page Banner', 'qumodo' ),
    'id'               => 'page_banner_opt',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'        => 'page_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Banner', 'qumodo'),
            'subtitle'  => esc_html__('Show Hide Page Banner Globally ', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'qumodo'),
                'hide'  => esc_html__('Hide Banner', 'qumodo'),
            ), 
            'default'   => 'show',
        ),

        array(
            'id'        => 'page_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Breadcrumb', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show', 'qumodo'),
                'hide'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'page_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Title', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show', 'qumodo'),
                'hide'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
			'title'         => esc_html__( 'Page Title', 'qumodo' ),
			'id'            => 'page_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.page .breadcrumb_content .page_title' ),
            'required'  => array('page_banner_title', '=', 'show')
		),

        array(
			'title'         => esc_html__( 'Breadcrumb Text', 'qumodo' ),
			'id'            => 'breadcrumb_page_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.page .breadcrumbs span a, .page .breadcrumbs span' ),
            'required'  => array('page_banner_title', '=', 'show')
		),

        array(
            'id'        => 'page_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'qumodo'),
            'default'   => array(
                'url'   => QUMODO_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('page_banner_toggle', '=', 'show')

        ),
        array(
            'id'        => 'page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.page .blog_breadcrumbs_area_two .overlay_bg' ), 
            'required'  => array('page_banner_toggle', '=', 'show')
        ),
      )
));


// Blog Banner
Redux::set_section('qumodo_opt', array(
    'title'            => esc_html__( 'Blog Banner', 'qumodo' ),
    'id'               => 'blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Banner', 'qumodo'),
            'subtitle'  => esc_html__('Show Hide Blog Banner Globally ', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'qumodo'),
                'hide'  => esc_html__('Hide Banner', 'qumodo'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'is_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Title', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show', 'qumodo'),
                'hide'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'show',
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array( 
            'title'     => esc_html__('Blog title text', 'qumodo'),
            'id'        => 'blog_banner_title',
            'type'      => 'text',
            'default'   => 'Blog List',
            'required'  => array('is_blog_banner_title', '=' , 'show')
        ),

        array(
			'title'         => esc_html__( 'Blog title style', 'qumodo' ),
			'id'            => 'blog_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.blog .breadcrumb_content .page_title' ),
            'required'  => array('is_blog_banner_title', '=' , 'show')
		),

        array(
            'id'        => 'blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'qumodo'),
            'default'   => array(
                'url'   => QUMODO_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog .blog_breadcrumbs_area_two .overlay_bg' ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),
      )
));


// Single page Banner
Redux::set_section('qumodo_opt', array(
    'title'            => esc_html__( 'Single Blog Banner', 'qumodo' ),
    'id'               => 'single_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'single_blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Single Blog Banner', 'qumodo'),
            'subtitle'  => esc_html__('Show Hide Banner Globally ', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'qumodo'),
                'hide'  => esc_html__('Hide Banner', 'qumodo'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'single_blog_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show', 'qumodo'),
                'hide'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_single_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Title', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show', 'qumodo'),
                'hide'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
			'title'         => esc_html__( 'Single Title', 'qumodo' ),
			'id'            => 'single_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.single .breadcrumb_content .page_title' ),
            'required'  => array('is_single_blog_banner_title', '=', 'show')
		),

        array(
			'title'         => esc_html__( 'Date and Author Text', 'qumodo' ),
			'id'            => 'date_author_single_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.single .breadcrumb_content span a, .single .breadcrumb_content span' ),
            'required'  => array('is_single_blog_banner_title', '=', 'show')
		),

        array(
            'id'        => 'single_blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'qumodo'),
            'default'   => array(
                'url'   => QUMODO_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.single .blog_breadcrumbs_area_two .overlay_bg' ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),
      )
));


//  Archive page Banner
Redux::set_section('qumodo_opt', array(
    'title'            => esc_html__( 'Archive Banner', 'qumodo' ),
    'id'               => 'archive_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'archive_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive  Banner', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'qumodo'),
                'hide'  => esc_html__('Hide Banner', 'qumodo'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'archive_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show', 'qumodo'),
                'hide'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_archive_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Title', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show', 'qumodo'),
                'hide'  => esc_html__('Hide', 'qumodo'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_breadcrumb', '=', 'show')
        ),

        array(
			'title'         => esc_html__( 'Archive Title', 'qumodo' ),
			'id'            => 'archive_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.archive .breadcrumb_content .page-title' ),
            'required'  => array('is_archive_title', '=', 'show')
		),

        array(
			'title'         => esc_html__( 'Archive Breadcrumb', 'qumodo' ),
			'id'            => 'breadcrumbs_archive_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.archive .breadcrumb_content .breadcrumbs span' ),
            'required'  => array('is_archive_title', '=', 'show')
		),

        array(
            'id'        => 'archive_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', 'qumodo'),
            'default'   => array(
                'url'   => QUMODO_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Background Color',
            'mode'      => 'background',
            'output'    => array( '.archive .blog_breadcrumbs_area_two .overlay_bg' ),
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),
      )
));

// search page Banner
// Redux::set_section('qumodo_opt', array(
//     'title'            => esc_html__( 'Search Banner', 'qumodo' ),
//     'id'               => 'search_blog_banner_opt',
//     'icon'             => '',
//     'subsection'       => true,
//     'fields'           => array(

//         array(
//             'id'        => 'search_banner_img_upload',
//             'type'      => 'media',
//             'title'     => __('Upload Banner', 'qumodo'),
//             'default'   => array(
//                 'url'   => QUMODO_IMAGES.'/blog/banner/blog_details_img.jpg',
//             ),
//         ),

//         array(
//             'id'        => 'search_banner_overly',
//             'type'      => 'color_rgba',
//             'title'     => 'Banner Background Color',
//             'mode'      => 'background',
//             'output'    => array( '.blog_breadcrumbs_area_two.archive-banner .overlay_bg' ),
//             'default'   => array(
//                 'color'     => '#EEECF8'
//             ),
//         ),
//     )
// ));


// // 404 Error page
// Redux::set_section('qumodo_opt', array(
//     'title'            => esc_html__( '404 Banner', 'qumodo' ),
//     'id'               => 'error_banner_opt',
//     'icon'             => '',
//     'subsection'       => true,
//     'fields'           => array(

//         array(
//             'id'        => 'error_banner_toggle',
//             'type'      => 'button_set',
//             'title'     => esc_html__('Show 404  Banner', 'qumodo'),
//             'options'   => array(
//                 'show'  => esc_html__('Show Banner', 'qumodo'),
//                 'hide'  => esc_html__('Hide Banner', 'qumodo'),
//             ),
//             'default'   => 'show'
//         ),

//         array(
//             'id'        => 'is_error_banner_title',
//             'type'      => 'button_set',
//             'title'     => esc_html__('Show Title', 'qumodo'),
//             'options'   => array(
//                 'show'  => esc_html__('Show', 'qumodo'),
//                 'hide'  => esc_html__('Hide', 'qumodo'),
//             ),
//             'default'   => 'show',
//             'required'  => array('error_banner_toggle', '=', 'show')
//         ),

//         array(
//             'title'         => esc_html__('404 Banner Title', 'qumodo'),
//             'type'          => 'text',
//             'id'            => 'error_banner_title',
//             'default'       => '404',
//             'required'      => array('is_error_banner_title', '=', 'show')
//         ),

//         array(
//             'id'        => 'error_banner_breadcrumb',
//             'type'      => 'button_set',
//             'title'     => esc_html__('Show Breadcrumb', 'qumodo'),
//             'options'   => array(
//                 'show'  => esc_html__('Show', 'qumodo'),
//                 'hide'  => esc_html__('Hide', 'qumodo'),
//             ),
//             'default'   => 'show',
//             'required'  => array('error_banner_toggle', '=', 'show')
//         ),

//         array(
//             'id'        => 'error_banner_img_upload',
//             'type'      => 'media',
//             'title'     => __('Upload Banner', 'qumodo'),
//             'default'   => array(
//                 'url'   => QUMODO_IMAGES.'/blog/banner/blog_details_img.jpg',
//             ),
//             'required'  => array('error_banner_toggle', '=', 'show')
//         ),

//         array(
//             'id'        => '404_banner_overly',
//             'type'      => 'color_rgba',
//             'title'     => 'Banner Background Color',
//             'mode'      => 'background',
//             'output'    => array( '.error404 .blog_breadcrumbs_area_two:before' ),
//             'default'   => array(
//                 'color'     => '#EEECF8',
//             ),
//             'required'  => array('error_banner_toggle', '=', 'show')
//         ),
//     )
// ));

// Shop Banner 
Redux::set_section('qumodo_opt', array(
    'title'            => esc_html__( 'Shop Banner', 'qumodo' ),
    'desc'            => esc_html__( 'This banner show in shop page , shop single , Shop category', 'qumodo' ),
    'id'               => 'shop_banner',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(

        array(
            'id'        => 'shop_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Shop Banner', 'qumodo'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', 'qumodo'),
                'hide'  => esc_html__('Hide Banner', 'qumodo'),
            ),
            'default'   => 'show'
        ),

        array(
			'title'         => esc_html__( 'Shop Title', 'qumodo' ),
			'id'            => 'shop_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.woocommerce .breadcrumb_content .page_title' ),
		),

        array(
			'title'         => esc_html__( 'Shop Single Breadcrumb', 'qumodo' ),
			'id'            => 'shop_breadcrumb_typo',
			'type'          => 'typography',
			'google'        => true,
			'text-align'    => true,
			'output'        => array( '.woocommerce .breadcrumb_content .breadcrumbs span, .shop .breadcrumb_content .breadcrumbs span a' ),
		),

        array(
            'id'       => 'qumodo_shop_banner_upload',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Upload Banner', 'qumodo'),
            'default'  => array(
                'url'=> QUMODO_IMAGES.'/woocommerce/banner/banner.png',
            ),
            'url'      => false

        ),
        array(
            'id'        => 'shop_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Background Color',
            'mode'      => 'background',
            'output'    => array( '.woocommerce .blog_breadcrumbs_area_two .overlay_bg' ),
            'required'  => array('shop_banner_toggle', '=', 'show')
        ),
      )
));