<?php
/**
 * Check exist dynamic_sidebar() function.
 *
 * @package Laletheme.
 * @param string $name_function
 */

if ( function_exists( 'dynamic_sidebar' ) ) {
	dynamic_sidebar( 'sidebar-blog' ); // Id de nuestro widget.
}
