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

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( 'uikit-js', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.27/js/uikit.min.js', array( 'jquery' ), '3.0.0-beta.27', true );

	wp_enqueue_script('uikit-icons-js', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.27/js/uikit-icons.min.js',
		array( 'uikit-js' ),
		'3.0.0-beta.27', true);
wp_enqueue_script('theme-js',CHILD_JS. 'theme.js'. array('jquery'), CHILD_THEME_VERSION, true);

	wp_enqueue_script( 'genesis-sample-responsive-menu', CHILD_JS . "responsive-menus{$suffix}.js", array( 'jquery' ), CHILD_THEME_VERSION, true );
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
