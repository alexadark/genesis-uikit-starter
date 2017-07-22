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

//Reposition featured image in archive.

remove_action('genesis_entry_content','genesis_do_post_image', 8);
add_action('genesis_entry_header','genesis_do_post_image', 5);

add_action( 'genesis_entry_header', 'wst_show_featured_image_single_post', 5  );
/**
 * Show featured image on single posts.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_show_featured_image_single_post(){
	if(!is_singular('post')){
		return;
	}
	$args = array(
		'size'=>'featured-image',
		'attr'=> array(
			'class'=>'featured-image',
		),
	);
	genesis_image($args);

}


