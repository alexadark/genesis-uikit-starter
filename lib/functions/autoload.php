<?php
/**
 * File autoloader
 *
 * @since       1.0.0
 * @author      alexaspalato
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */


/**
 * Loads non admin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_load_nonadmin_files() {
	$filenames = array(
		'setup.php',
		'components/customizer/css-handler.php',
		'components/customizer/helpers.php',
//		'functions/formatting.php',
		'functions/load-assets.php',
//		'functions/markup.php',
//		'structure/archive.php',
		'structure/comments.php',
//		'structure/footer.php',
//		'structure/header.php',
		'structure/menu.php',
		'structure/post.php',
//		'structure/sidebar.php',
		'woocommerce/woocommerce-setup.php',
		'woocommerce/woocommerce-output.php',
		'woocommerce/woocommerce-notice.php'

	);
	wst_load_specified_files($filenames);
}
/**
 * Load admin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_load_admin_files(){
	$filenames = array(
		'components/customizer/customizer.php',

	);
	wst_load_specified_files($filenames);
}
/**
 * Load each of the specified files.
 *
 * @since 1.0.0
 *
 * @param array $filenames
 * @param string $folder_root
 *
 * @return void
 */
function wst_load_specified_files (array $filenames, $folder_root = ''){
	$folder_root = $folder_root ? : CHILD_LIB;
	foreach ( $filenames as $filename ) {
		include ($folder_root . $filename);
	}
}

wst_load_nonadmin_files();
wst_load_admin_files();