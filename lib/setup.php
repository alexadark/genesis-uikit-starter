<?php
/**
 * Setup your child theme
 *
 * @since       1.0.3
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */


/**
 * Set up child theme.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_setup_child_theme() {

// Set Localization (do not remove).
	load_child_theme_textdomain( CHILD_TEXT_DOMAIN, apply_filters( 'child_theme_textdomain', CHILD_THEME_DIR . '/languages', CHILD_TEXT_DOMAIN ) );

	wst_register_widget_areas();

	wst_add_theme_supports();
	wst_add_new_image_sizes();
	wst_unregister_layouts();
}

wst_setup_child_theme();

/**
 * Register widget areas
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_register_widget_areas() {

	$widget_areas = array(
		array(
			'id'          => 'utility-bar',
			'name'        => __( 'Utility Bar', CHILD_TEXT_DOMAIN ),
			'description' => __( 'This is the utility bar across the top of page.', CHILD_TEXT_DOMAIN ),
		),
		array(
			'id'          => 'call-to-action',
			'name'        => __( 'Call to Action', CHILD_TEXT_DOMAIN ),
			'description' => __( 'This is the Call to Action section on the home page.', CHILD_TEXT_DOMAIN ),
		),
		array(
			'id'          => 'flex-footer',
			'name'        => __( 'Flexible footer', CHILD_TEXT_DOMAIN ),
			'description' => __( 'This is the footer flexible widgets section', CHILD_TEXT_DOMAIN ),
		),
	);

	foreach ( $widget_areas as $widget_area ) {
		genesis_register_sidebar( $widget_area );
	}
}


function wst_add_theme_supports() {

	$config = array(
		'html5'                           => array(
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form'
		),
		'genesis-accessibility'           => array(
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links'
		),
		'genesis-responsive-viewport'     => null,
		'custom-header'                   => array(
			'width'           => 600,
			'height'          => 160,
			'header-selector' => '.site-title a',
			'header-text'     => false,
			'flex-height'     => true,
		),
		'custom-background'               => null,
		'genesis-after-entry-widget-area' => null,
//		'genesis-footer-widgets'          => 1,
		'genesis-menus'                   => array(
			'primary'   => __( 'After Header Menu', CHILD_TEXT_DOMAIN ),
			'secondary' => __( 'Footer Menu', CHILD_TEXT_DOMAIN )
		),
		'genesis-structural-wraps'        => array(
			'header',
			'nav',
			'subnav',
			'site-inner',
			'footer-widgets',
			'footer'
		),
//		'woocommerce'                     => null
	);

	foreach ( $config as $feature => $args ) {
		add_theme_support( $feature, $args );

	}


}

/**
 * Add new image sizes
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_add_new_image_sizes() {
	$config = array(
		'featured-image' => array(
			'width'  => 840,
			'height' => 400,
			'crop'   => true,
		),

	);

	foreach ( $config as $name => $args ) {
		$crop = array_key_exists( 'crop', $args ) ? $args['crop'] : false;

		add_image_size( $name, $args['width'], $args['height'], $crop );
	}
}


add_filter( 'genesis_theme_settings_defaults', 'wst_set_theme_settings_defaults' );
/**
 * Set theme settings defaults.
 *
 * @since 1.0.0
 *
 * @param array $defaults
 *
 * @return array
 */
function wst_set_theme_settings_defaults( array $defaults ) {
	$config = wst_get_theme_settings_defaults();

	$defaults = wp_parse_args( $config, $defaults );

	return $defaults;
}

add_action( 'after_switch_theme', 'wst_update_theme_settings_defaults' );
/**
 * Sets the theme setting defaults.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_update_theme_settings_defaults() {
	$config = wst_get_theme_settings_defaults();

	if ( function_exists( 'genesis_update_settings' ) ) {
		genesis_update_settings( $config );
	}

	update_option( 'posts_per_page', $config['blog_cat_num'] );
}

/**
 * Get the theme settings defaults.
 *
 * @since 1.0.0
 *
 * @return array
 */
function wst_get_theme_settings_defaults() {
	return array(
		'blog_cat_num'              => 12,
		'content_archive'           => 'full',
		'content_archive_limit'     => 0,
		'content_archive_thumbnail' => 0,
		'posts_nav'                 => 'numeric',
		'site_layout'               => 'content-sidebar',
	);
}

function wst_unregister_layouts(){
	$layouts = array(
		'content-sidebar-sidebar',
		'sidebar-content-sidebar',
		'sidebar-sidebar-content'
	);
	foreach ( $layouts as $layout ) {
		genesis_unregister_layout($layout);
	}
}



// Remove site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Change order of main stylesheet to override plugin styles.
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
add_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet', 99 );

add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}





