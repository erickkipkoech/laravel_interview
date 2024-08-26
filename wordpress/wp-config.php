<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'laravel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'gn+4*{v7Q/PrI5O`u;{6azo8 V[yqJv8,<R.g%L}`yF.F|&YCUxWs%F#[P9Plc/L' );
define( 'SECURE_AUTH_KEY',  'pe#W?rh@X:Nuv,6T=e/A>`G|444x#:zKE%C?tTB0An[jATA8Q{-rnR2^5}<Lf~rv' );
define( 'LOGGED_IN_KEY',    '[&A~k9(`x[8k=4uh]0tb>&p~i2M(w$I9`9pQ+T.ehX*Y$yX<[piqoIP_9(L+xYi|' );
define( 'NONCE_KEY',        '5A&vxMRwgD!*&w4&6X<iOcJnzZ72C.?.izAq{<>.!mSu1nKVHJ@y{3fVoc<3wTO$' );
define( 'AUTH_SALT',        'B_4SF>neRYf*XUF>>@kK1LE/>X$$5<#}gWCPP{Lgl0 0|$BRa:;XcH}AapC!aqAt' );
define( 'SECURE_AUTH_SALT', '_EDPE1-W#g^HY?nMTr9U%G0_>l@,@K{(g;5ad(.KVP+ebRmWNsy!YL]vNWRWak@d' );
define( 'LOGGED_IN_SALT',   'X>7X!Z>u)XRJ!=2kZu(SSU<]0>j=|Re#0b+UI19JU$l}e^[T!m,}77L8q{6&a7i<' );
define( 'NONCE_SALT',       'q9cFCl7r=Oj)~DjoFWDsV0lq=;fU5cor==o2TtJ=IK:s.lmUdFLZ7*c2C,HmD/r8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'failed_jobs';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
