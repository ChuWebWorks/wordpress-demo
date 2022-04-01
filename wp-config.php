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
define( 'DB_NAME', 'WordPress_Demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'kv1K4bvtiec7KUU5' );

/** Database hostname */
define( 'DB_HOST', 'devkinsta_db' );

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
define( 'AUTH_KEY',          '=lL5iodD+^aU~8xpo0x8f9:hZ&Wx2LKU_gJ4]_$Sf6Z&3IS{SFz?A3PDRO/WA[pp' );
define( 'SECURE_AUTH_KEY',   'Lkp<2unSX@;3hiJxY{MyXJ7pa9r1Y?o8TX5S5_Z1_[P ,C_<y9.uh1DD.z4[;&)<' );
define( 'LOGGED_IN_KEY',     'zwhp[jjf$jA5]DjzW -H>2Dq}?/%w|x;Rj#LcP 8`Q0h}EkVCuDo2y|&FO~Q*N*a' );
define( 'NONCE_KEY',         '6O$(4{Y#=L.OnkB8|G,3G*sQt2D x;xfTCP&?/q59N]!N4C1[U.0HqPEWt$E9Fu&' );
define( 'AUTH_SALT',         'XLKjuk=dq;RC{=XgPkXu+nI8ou)WR!dpX~}3nef0@ywmWMs+z.CoDG%*V},[m?%v' );
define( 'SECURE_AUTH_SALT',  '0i3+3X fI&X>32 1J;6 UVfL9^,|${k#ac1y8+EeDF}#`d2 yn)tRxJQz@hnk!9/' );
define( 'LOGGED_IN_SALT',    '-]A+Q{Lk7Z20IpzZrS$}6JT7e/.Z|uq.iyd=%fBB.{!7V5l,aeU-v)]TK~:rQU`p' );
define( 'NONCE_SALT',        '9;|PT)(q+qb5>F1LIP3|Li{.n:[b@]?8~0;( 87]?vmQ)],U9/y2Q~#419`+KPWe' );
define( 'WP_CACHE_KEY_SALT', 'K!)N KUsa`Rl/ZY!s+>@T?o<^e0OKmbT:zo3e|ws0GMCX9*CY(|y|RA}(iK6k0HG' );


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
