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
	wp_enqueue_script( CHILD_TEXT_DOMAIN.'-responsive-menu', CHILD_URL . "responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_localize_script(
		CHILD_TEXT_DOMAIN.'-responsive-menu',
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
		'mainMenu'          => __( 'Menu', CHILD_TEXT_DOMAIN ),
		'menuIconClass'     => 'dashicons-before dashicons-menu',
		'subMenu'           => __( 'Submenu', CHILD_TEXT_DOMAIN ),
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
