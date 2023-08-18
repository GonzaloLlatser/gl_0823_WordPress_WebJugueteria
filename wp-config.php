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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jugueteria' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[6:q}~Yzv!(aU7F*&p@a)th@^<{sNuorY=;_P(_|USzKT8AEF$TFj_n=y,^ZtK+d' );
define( 'SECURE_AUTH_KEY',  '/*T?BnMS,uvHQCHE3TG2g,v)Bc=gv*WGuV8@Vv,4f2*m2hQZr;9Q^6I(DF`3Z5vn' );
define( 'LOGGED_IN_KEY',    ',LHx<n:/2[?P0e Be?F=!a.*hIz2mo7oercmSGMH5*I]-//B#j{tAUKD8>2XH~]V' );
define( 'NONCE_KEY',        '#,j[?Zjy(VOMO$~_|fj@X,It7;X%V8`f>ha0=E)4lza%!Sr7av;Ae!?uQI>_LjCs' );
define( 'AUTH_SALT',        '?;VLyOnl0wLI}%PX[ yIyKms&:*.{BU,5FR}x^2J|eR+vin@h.tmGm|y@:8Kj:y0' );
define( 'SECURE_AUTH_SALT', '5yXBP(55k._<Wef|LE1o2F3Y^Tn+N9w=F#_&}IVE-aj^v!G>VS$2T8)Q^.&!E2oh' );
define( 'LOGGED_IN_SALT',   'VPC.mwV*j1tcU*%Hgu?.?I/a,r[X.4uby0vuA@wAtOxHZie*NX1a%Ti2o`pMgZV3' );
define( 'NONCE_SALT',       '<SH7p}C1lVXl.1q%30_6ual+]nGw75*w4<# hEI52r&Y,Kkzl]XCX;f.41& V!+J' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
