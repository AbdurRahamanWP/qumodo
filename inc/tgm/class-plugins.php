<?php
defined( 'ABSPATH' ) || exit;

/**
 * Plugin installation and activation for WordPress themes
 */
class qumodo_Register_Plugins {

	public function __construct() {
		add_filter( 'insight_core_tgm_plugins', [ $this, 'register_required_plugins' ] );

		//add_filter( 'insight_core_compatible_plugins', [ $this, 'register_compatible_plugins' ] );
	}

	public function register_required_plugins( $plugins ) {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$new_plugins = array(
	
			array(
				'name'      => esc_html__( 'Elementor', 'qumodo' ),
				'slug'      => 'elementor',
				'required'  => true,
			),
	
			array(
				'name'               => esc_html__( 'Advanced Custom Fields', 'qumodo' ),
				'slug'               => 'advanced-custom-fields',
				'required'           => true,
			),
	
			array(
				'name'               => esc_html__( 'Redux Framework', 'qumodo' ),
				'slug'               => 'redux-framework',
				'required'           => true,
			),
	
			array(
				'name'      => esc_html__( 'Contact Form 7', 'qumodo' ),
				'slug'      => 'contact-form-7',
				'required'  => true,
			),
	
			array(
				'name'      => esc_html__( 'One Click Demo Import', 'qumodo' ),
				'slug'      => 'one-click-demo-import',
				'required'  => true,
			),
	
			array(
				'name'               => esc_html__( 'woocommerce', 'qumodo' ),
				'slug'               => 'woocommerce',
				'required'           => true,
			),
		);

		return array_merge( $plugins, $new_plugins );
	}
}

new qumodo_Register_Plugins();
