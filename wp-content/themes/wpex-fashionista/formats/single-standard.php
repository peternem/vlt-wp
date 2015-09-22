<?php
/**
 * @package WordPress
 * @subpackage WPEX WordPress Framework
 * Standard Post Format
 */

//show featured image if available
if( !of_get_option( 'single_post_thumb' ) ) {
	wpex_post_thumbnail();
}