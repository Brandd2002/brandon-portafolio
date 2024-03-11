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
define( 'DB_NAME', 'wbrandon' );

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
define( 'AUTH_KEY',         'w`vP@{wFctdjxUWM$AvM^z(?K9FD5W<G?OFoFBj{l2n]9Syy7N-9;Uh[t;c^(S8=' );
define( 'SECURE_AUTH_KEY',  'g4w.zmpx1pX~phzn=w^MKp23s)2WGPz)oA}jI^>?~R?YHWTFc&$Fda^o/csz_9mO' );
define( 'LOGGED_IN_KEY',    'k^e :k7Y ?VT5?;Q*a1yQcE2cQy%O~.C|DDc++ehP6FWT(<5*khbvq~~<[zkok`+' );
define( 'NONCE_KEY',        'b_e<{#E.i$~&;$yBx>}e~G>.zKC0NJt*]?7PO5P5pRqnf^QS&pxhgQuaD.Y-ZaVw' );
define( 'AUTH_SALT',        '&P-De{U 88-9r62y0&ZEMGBns_DE2)^8k4KcQbfsG<^Z7q>N.}y.MdZ>qx$&a*@s' );
define( 'SECURE_AUTH_SALT', '?<op[+aB<_9?G|ZHiW;5onT@.qNDI9C=2Q0qDxZ!~a4wHOzk0v`v*L=P*7B4]t~9' );
define( 'LOGGED_IN_SALT',   'sR5U9VD_t~l.LmC>zHJwAp&<;,~YYy=r*wQOPJYK>PI;w~Jq/qtE$rMf-;u7oUsM' );
define( 'NONCE_SALT',       'w:UpNj_7zC$8G6{*T,]MEvtrb{7Z;[(&aZ#GX<=x?Jfao%%^D[8i!5/hZ9`vtq5d' );

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
