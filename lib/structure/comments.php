<?php
/**
 * Comments structure handling.
 *
 * @since       1.0.0
 * @author      alexaspalato
 * @link        https://alexandraspalato.com
 * @license     GNU General Public License 2.0+
 */

function wst_unregister_comments_callbacks() {

}

add_filter( 'genesis_comment_list_args', 'wst_setup_comments_gravatar' );
/**
 *  Modify size of the Gravatar in the entry comments.
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 * @return mixed
 */
function wst_setup_comments_gravatar( array $args ) {

	$args['avatar_size'] = 60;

	return $args;

}
