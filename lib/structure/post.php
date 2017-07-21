<?php
/**
 * Post structure
 *
 * @since       1.0.0
 * @author      alexaspalato
 * @link        https://alexaspalato
 * @license     GNU General Public License 2.0+
 */

/**
 * Unregister post callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_unregister_post_callbacks() {

}



add_filter( 'genesis_author_box_gravatar_size', 'wst_setup_sample_author_box_gravatar' );
/**
 *  Modify size of the Gravatar in the author box.
 *
 * @since 1.0.0
 *
 * @param $size
 *
 * @return int
 */
function wst_setup_sample_author_box_gravatar( $size ) {
	return 90;
}
