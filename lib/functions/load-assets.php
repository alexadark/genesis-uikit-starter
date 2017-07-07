<?php
/**
 * Assets loader handler
 */

add_action( 'wp_enqueue_scripts', 'wst_enqueue_scripts_styles' );
/**
 * Enqueue Scripts and Styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_enqueue_scripts_styles() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN.'-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_register_script('uikit-js',get_stylesheet_directory_uri(). '/assets/js/uikit/min/uikit-min.js', array('jquery'), '2.27.2', true);
	wp_enqueue_script('uikit-js');
	wp_register_script('uikit-comps-js',get_stylesheet_directory_uri(). '/assets/js/uikit/min/uikit-comps-min.js', array('uikit-js'),
		'1', true);
	wp_enqueue_script('uikit-comps-js');
	wp_enqueue_script( 'genesis-sample-responsive-menu', get_stylesheet_directory_uri() . "/assets/js/responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_localize_script(
		'genesis-sample-responsive-menu',
		'genesis_responsive_menu',
		wst_responsive_menu_settings()
	);


}

/**
 * Define our responsive menu settings.
 *
 * @since 1.0.0
 *
 * @return array
 */
function wst_responsive_menu_settings() {


	$settings = array(
		'mainMenu'          => __( 'Menu', 'genesis-sample' ),
		'menuIconClass'     => 'dashicons-before dashicons-menu',
		'subMenu'           => __( 'Submenu', 'genesis-sample' ),
		'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'       => array(
			'combine' => array(
				'.nav-primary',
				'.nav-header',
			),
			'others'  => array(),
		),
	);

	return $settings;
}
