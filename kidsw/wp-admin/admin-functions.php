<?php
/**
 * Administration Functions
 *
 * This file is deprecated, use 'wp-admin/includes/admin.php' instead.
 *
 * @deprecated 2.5.0
 * @package WordPress
 * @subpackage Administration
 */

_deprecated_file( basename( __FILE__ ), '2.5.0', 'wp-admin/includes/admin.php' );

/** WordPress Administration API: Includes all Administration functions. */
require_once( ABSPATH . 'wp-admin/includes/admin.php' );


/* 2017.10.25 - Added to fix the jquery.typeWatch bug in Admin pages */
function fix_typewatch_bug( $hook ) {
  wp_enqueue_script(
  'jquery_typewatch',
  'https://cdnjs.cloudflare.com/ajax/libs/TypeWatch/3.0.0/jquery.typewatch.min.js');
}
add_action('admin_enqueue_scripts', 'fix_typewatch_bug');