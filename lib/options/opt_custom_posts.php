<?php
/**
 * Custom Post Types
 */
Redux::set_section( 'qumodo_opt', array(
    'title'     => esc_html__( 'Custom Post Types', 'qumodo' ),
    'id'        => 'cpt_opt',
    'icon'      => 'dashicons dashicons-admin-post',
));

/**
 * Post Types
 */
Redux::set_section( 'qumodo_opt', array(
    'title'     => esc_html__( 'Post Types', 'qumodo' ),
    'id'        => 'cpt',
    'icon'      => '',
    'subsection'=> true,
    'fields'    => array(
        array(
            'id'        => 'cpt_note',
            'type'      => 'info',
            'style'     => 'success',
            'title'     => esc_html__( 'Enable Disable Custom Post Types', 'qumodo' ),
            'icon'      => 'dashicons dashicons-info',
            'desc'      => esc_html__( 'If you want, you can disable any custom post type of qumodo from here.', 'qumodo' )
        ),

        array(
            'id'       => 'is_team_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Team', 'qumodo' ),
            'on'       => esc_html__( 'Enabled', 'qumodo' ),
            'off'      => esc_html__( 'Disabled', 'qumodo' ),
            'default'  => true,
        ),

        array(
            'id'       => 'is_service_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Services', 'qumodo' ),
            'on'       => esc_html__( 'Enabled', 'qumodo' ),
            'off'      => esc_html__( 'Disabled', 'qumodo' ),
            'default'  => true,
        ),

        array(
            'id'       => 'is_portfolio_cpt',
            'type'     => 'switch',
            'title'    => esc_html__('Portfolios', 'qumodo' ),
            'on'       => esc_html__( 'Enabled', 'qumodo' ),
            'off'      => esc_html__( 'Disabled', 'qumodo' ),
            'default'  => true,
        ),

        array(
            'id'       => 'is_faqs_cpt',
            'type'     => 'switch',
            'title'    => esc_html__( 'FAQs', 'qumodo' ),
            'on'       => esc_html__( 'Enabled', 'qumodo' ),
            'off'      => esc_html__( 'Disabled', 'qumodo' ),
            'default'  => true,
        ),

    )
));

/**
 * Slug Re-write
 */
// Redux::set_section( 'qumodo_opt', array(
//     'title'     => esc_html__( 'Post Type Slugs', 'qumodo' ),
//     'id'        => 'qumodo_cp_slugs',
//     'icon'      => '',
//     'subsection'=> true,
//     'fields'    => array(
//         array(
//             'id'        => 'cp_slug_note',
//             'type'      => 'info',
//             'style'     => 'warning',
//             'title'     => esc_html__( 'Slug Re-write:', 'qumodo' ),
//             'icon'      => 'dashicons dashicons-info',
//             'desc'      => sprintf (
//                 '%1$s <a href="%2$s"> %3$s</a> %4$s',
//                 esc_html__( "These are the custom post's slugs offered by qumodo. You can customize the permalink structure (site_domain/post_type_slug/post_slug) by changing the post type slug (post_type_slug) from here. Don't forget to save the permalinks settings from", 'qumodo' ),
//                 get_admin_url( null, 'options-permalink.php' ),
//                 esc_html__( 'Settings > Permalinks', 'qumodo' ),
//                 esc_html__( 'after changing the slug value.', 'qumodo' )
//             )
//         ),
        
//         array(
//             'title'     => esc_html__( 'Service Slug', 'qumodo' ),
//             'id'        => 'service_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_service_cpt', '=', '1' ),
//             'default'   => 'service'
//         ),
        
//         array(
//             'title'     => esc_html__( 'Portfolio Slug', 'qumodo' ),
//             'id'        => 'portfolio_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_portfolio_cpt', '=', '1' ),
//             'default'   => 'portfolio'
//         ),
//         array(
//             'title'     => esc_html__( 'Team Slug', 'qumodo' ),
//             'id'        => 'team_slug',
//             'type'      => 'text',
//             'required'  => array( 'is_team_cpt', '=', '1' ),
//             'default'   => 'team'
//         ),
//     )
// ));