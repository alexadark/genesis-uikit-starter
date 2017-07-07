<?php
/**
 * Theme initialization
 *
 * @since       1.0.0
 * @author      alexaspalato
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */

/**
 * Initilaize the theme's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_init_constants() {

	$child_theme = wp_get_theme();

	define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
	define( 'CHILD_THEME_URL', $child_theme->get( 'ThemeURI' ) );
	define( 'CHILD_THEME_VERSION', $child_theme->get( 'Version' ) );
	define( 'CHILD_TEXT_DOMAIN', $child_theme->get( 'TextDomain' ) );

	define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
	define( 'CHILD_CONFIG_DIR', CHILD_THEME_DIR . '/config/' );
	define( 'CHILD_LIB', CHILD_THEME_DIR . '/lib/' );
	define( 'CHILD_IMG', CHILD_THEME_DIR . '/assets/images/' );
	define( 'CHILD_JS', CHILD_THEME_DIR . '/assets/js/' );

}


wst_init_constants();