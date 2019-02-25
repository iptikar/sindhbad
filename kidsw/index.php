<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/*
require 'Translator.php';

$lan = 'ar';

if(isset($lan) && $lan === 'ar') {

$translate = new Translator('ar');

} else {

	$translate = new Translator('en');
}


    
echo $translate->__('Repeat email');
*/


/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
