<?php

define( 'FS_METHOD', 'direct' );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kids' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x=Q8=I9q%1und+!I>sR_RP!Ug#G|5)4$2i6$xsaV?4(}Q He0uA7E,c>&sjldHT|' );
define( 'SECURE_AUTH_KEY',  'h^MdLxy<6*WS3>_b^V hx%9?V@{o$jVa(fEu?ikW3w*]j}AU>.VYV7$;n((_}Bch' );
define( 'LOGGED_IN_KEY',    '*IboD`1wmM8t 9(t>#]CB{L% AR:6gs4n:SDnl@ZFo,$Oc`*k[JMg;K8P)AKjH;*' );
define( 'NONCE_KEY',        'VuS]?3H!>SF9++-R2YI*3+H|L>LUGP&zfOB8q$6!{?M}(q`Lo~eh$/wj#=Fb6V*#' );
define( 'AUTH_SALT',        'HM3c(wKGg,yZ{k|(d>BDRh7nm+Bj1}usJ{o<d!wBRM:fu8|E1g_0hS2Dndh3hR)u' );
define( 'SECURE_AUTH_SALT', 'xLFq*>Gu+]VReZ!=X)&4yQe5[vu53Ck!rgq657K0xbJ[dy$u-b.voy=o9`1R/FIg' );
define( 'LOGGED_IN_SALT',   'e)_a~umpw?cP}tE.~P3cU7,LJ/K+G`~t6k3,`|K}3nv2<A_YyLo6/__a_^I[a.0R' );
define( 'NONCE_SALT',       '|4y[h-UM5a+NEp_BDW~*EK%}2W3f4HLI>rQiEp@s-dvX|#&/9QJ5hT[+46S+8LtZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
