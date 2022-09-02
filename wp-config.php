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
define( 'DB_NAME', 'siteloc' );

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
define( 'AUTH_KEY',         '@5l]=?kBm} o>Owtc|5[AvZ:(A288YGe$9%#F3W=4HUSEf*4w+y9Oqra%&t/`1DN' );
define( 'SECURE_AUTH_KEY',  'RyRcv!/2,bHYuv1v+L$3$k{U7-!^kwh<TQZJo?l9n3[TZsRZ,*zn&OU,@4Qg2Y:H' );
define( 'LOGGED_IN_KEY',    '^l_Yf}l@P9tTiZea/`w]#?T<X9Pc]]pgT+ZaXF8kq8mm)jDItxC@.4+nde9T%![O' );
define( 'NONCE_KEY',        'IlS1<{u1?@NEue ^)wCU<@Cs[%Gc96ry?x<oO&%bb^xKwJBd|Zqaxvb@-%D<L2)S' );
define( 'AUTH_SALT',        'QCtyJC07fyOlK8~RJdL2Vyf_]90FzbkN|)pioE8yq ppSWZVKH550djXqXgl-#$W' );
define( 'SECURE_AUTH_SALT', '$bh&6@.VDYz[E6,di%&}(a-{9rPdNO(]V$7l?m~:v&CY;+uTEi*Ma4Y@v[0(aE67' );
define( 'LOGGED_IN_SALT',   'T]RSHXvT^Qo0<V;W7n:IzzLBwv Qcz9QAvQvb:eUt4`H|F#fDz9AAM33[Q.h-p-t' );
define( 'NONCE_SALT',       'dMhV0A{oE;%`.qmvA0`5EZ_KJ~q4i EV<:]hR3sm`^|w<_=[tw]z-2zep:a.{b0d' );

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
