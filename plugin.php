<?php
/**
 * Plugin Name: AMP non-featured image
 * Description: Disable AMP featured image on your WordPress site.
 * Plugin URI: https://cdk.co.il
 * Author: Dima Minka
 * Author URI: https://dimaminka.com
 * Version: 0.0.1
 * License: GPLv2 or later
 *
 * @package AMP
 */

/**
 * Filter the featured template file on including
 */
function amp_non_featured_image( $file, $type ) {
	return $file = 'featured-image' === $type ? '' : $file;
}
add_filter( 'amp_post_template_file', 'amp_non_featured_image', 10, 3 );
