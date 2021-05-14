<?php
/**
 * AMP compatibility for LiteSpeed Cache.
 *
 * @package   Google\AMP_LiteSpeed_Cache
 * @author    Weston Ruter, Google, milindmore22
 * @license   GPL-2.0-or-later
 * @copyright 2021 Google Inc.
 *
 * @wordpress-plugin
 * Plugin Name: AMP compatibility for LiteSpeed Cache
 * Plugin URI: https://github.com/milindmore22/amp-litespeed-compat
 * Description: Plugin to add <a href="https://wordpress.org/plugins/amp/">AMP plugin</a> compatibility to the <a href="https://wordpress.org/plugins/litespeed-cache/">LiteSpeed Cache</a> plugin.
 * Version: 0.1
 * Author: Weston Ruter, Google, milindmore22
 * Author URI: https://wpindia.co.in/
 * License: GNU General Public License v2 (or later)
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Disabled minification for HTML, CSS and JS.
 */
function amp_litespeed_compat() {

	if ( function_exists( 'amp_is_request' ) && amp_is_request() ) {
		define( 'LITESPEED_BYPASS_OPTM', true );
		add_filter( 'litespeed_can_optm', '__return_false' );
	}

}

add_action( 'wp', 'amp_litespeed_compat' );
