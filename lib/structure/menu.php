<?php
/**
 * menu structure
 */


remove_action( 'genesis_after_header', 'genesis_do_subnav' );


// Reposition the secondary navigation menu.
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );


add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
/**
 * Reduce the secondary navigation menu to one level depth.
 *
 * @since 1.0.0
 *
 * @param array $args
 *
 */
function genesis_sample_secondary_menu_args( array $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}

// Reduce the primary navigation menu to two levels depth.
//add_filter( 'wp_nav_menu_args', 'genesis_sample_primary_menu_args' );
function genesis_sample_primary_menu_args( $args ) {

	if ( 'primary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 2;

	return $args;

}
