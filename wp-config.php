<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lioncitytravel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ml&}l/,}%5uI@mGDv1&o }?[!Qpa{]6M78c1F<//t9~M$H`7lG950Cu~rqvJU+*7' );
define( 'SECURE_AUTH_KEY',  ':E3K6GXCgR]hxm:Cvw!Ex~%,w=ei$!s)o)rjcQN{(!%[HVa$k XupXIES<(5/R;q' );
define( 'LOGGED_IN_KEY',    'YPu~W6kr|x89Ut[2/<d*6~x6A#.cOEHh4g,<Uln~@^U^YjrYV:l}[b+%?jdBh^hq' );
define( 'NONCE_KEY',        'HAi/LwL!dRS.TZOlr=/:FIrgKe~u0oTy@, ,|R-1rhPP9_`DXQ3|Y^)3@V@&g]9A' );
define( 'AUTH_SALT',        'Ccsuo=GKc|mhi2n<vNDDv8BCpx iEe;*+w}Q%c_F-%HAPPP@Sc(RDUPuVFL)KO{ ' );
define( 'SECURE_AUTH_SALT', '?65n,)c?F-Qf^t:!_=@yv2G]$<aI>oK;!{mZNI{eM!.DMqEVkAB73>7[.#^s0R(M' );
define( 'LOGGED_IN_SALT',   'doV3DHT#)bGmZl]zwF[VV0VVY:#+hAeYo/7)_XsoO,$n<k+@[:I3S^EWb?_pOok=' );
define( 'NONCE_SALT',       'xi++d(^>/6QA!NPjIf_g>{dHXo|A1p%s,rL&[K*9VIyFVmG.P4&_umjSkcb-o6*T' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
