<?php
//Helper functions

//flexible widgets


/**
 * Get the widget count.
 *
 * @since 1.0.0
 *
 * @param $id
 *
 * @return int
 */
function wst_count_widgets( $id ) {

	global $sidebars_widgets;

	if ( isset( $sidebars_widgets[ $id ] ) ) {
		return count( $sidebars_widgets[ $id ] );
	}

}

/**
 * Get the class string for a flexible widget. (works with uikit)
 *
 * @since 1.0.0
 *
 * @param $id
 *
 * @return string
 */
function wst_widget_area_class( $id ) {

	$count = wst_count_widgets( $id );

	$class = '';


	if ( 1 === $count ) {
		$class .= ' uk-child-width-1-1';
	} elseif ( 0 === $count % 3 ) {
		$class .= ' uk-child-width-1-3@m';
	} elseif ( 0 === $count % 4 ) {
		$class .= ' uk-child-width-1-4@m';
	} elseif ( 1 === $count % 2 && 7 !== $count ) {
		$class .= ' uk-child-width-1-2@m uneven';
	} elseif (  0 === $count % 7 ) {
		$class .= ' uk-child-width-1-3@m uneven';
	} else {
		$class .= ' uk-child-width-1-2@m';
	}


	return $class;

}
