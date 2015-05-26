<?php

/*
Plugin Name: Genesis Sidebars Defaults Plugin
Description: Modifies the Genesis Sidebar Defaults
Version: 1.0.0
Author: Sheelah Brennan
Author URI: http://sheelahb.com
*/

add_action( 'genesis_register_sidebar_defaults', 'sandia_register_sidebar_defaults' );
/**
 * Modify the Genesis sidebar defaults to use an H2 instead of H4 heading
 *
 * @param  array $defaults Genesis defaults.
 * @return array           Modified Genesis defaults.
 */
function sandia_register_sidebar_defaults( $defaults ) {
	return array(
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => "</h2>\n",
	);
}
