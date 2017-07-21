<?php
/**
 * Footer HTML markup structure
 *
 * @since       1.0.0
 * @author      alexspalato
 * @link        https://alexandraspalato.com
 * @license     GNU General Public License 2.0+
 */


add_action( 'genesis_before_footer', 'wst_footer_widgets' );
/**
 *  Add the flexible footer widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_footer_widgets() {

	genesis_widget_area( 'flex-footer', array(
		'before' => '<div id="footer" class="flex-footer footer-widgets">
<h2 class="genesis-sidebar-title screen-reader-text">
' . __( 'Footer', CHILD_TEXT_DOMAIN ) . '</h2>
<div class="flexible-widgets widget-area wrap' . wst_widget_area_class( 'flex-footer' ) . '" uk-grid>',

		'after'  => '</div></div>',
	) );

}
