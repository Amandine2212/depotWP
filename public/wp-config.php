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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'sTVuk#/4]v<)oQ*lM/`M@f|9VvLW2tNbglJ@^me$RKCvB?vk$?TA#*/IOBx(p9!D' );
define( 'SECURE_AUTH_KEY',   'BZugG9kp 3AjSh{6Vc-*2hCGOvhG~:$T_z^DgJlN;0{aX~<%`oKkR-xz?E9P`*^q' );
define( 'LOGGED_IN_KEY',     '|&jPJRwhP}2j2ME[yKdhi6/}HYJZSq[wCFzOu>yy@Gy28$M&*! 73cJxJ<N20wve' );
define( 'NONCE_KEY',         'D;9<p2&Q|og%DTHJ9=ESTB9wW&]j:vUvs9ANiy}n4x0pT7SKwQ*mJ8H~~]8H[e?^' );
define( 'AUTH_SALT',         '/F|4s6X[_2FMkPH}T>/{<V%.JkK)A2UZc]Uf9R#@2mROmzqtaX/z^!X~]5vD3/YE' );
define( 'SECURE_AUTH_SALT',  '}v8B@Of2jMG5,*s@$OLl20-E,veWT!`j=7eU(/[8r!.-TR.*21qs?Bkh`RfYY@oO' );
define( 'LOGGED_IN_SALT',    '27xQM/[@bj}n~ b{$hZ~dKYEcj)p20zITF2czczf9XC|c.y{nP=2|ZD>P5OOQBPg' );
define( 'NONCE_SALT',        '_ss3_4A0Co#VPw.Z=v9AIa]4Qo,ZePJ[U?WOBKNXtf>D&lTO&~_),_4QKQ@IuCsK' );
define( 'WP_CACHE_KEY_SALT', 'Ea_uH*iu(n_[Nq|efZOkfM!k%(!fCI:kN3Zg#yZSSp|$]d.vPV=RXK@w(]):}?*=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
